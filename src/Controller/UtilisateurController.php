<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Form\UtilisateurEditType;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Entity\Historique;
use Symfony\Component\HttpFoundation\StreamedResponse;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Repository\HistoriqueRepository;


#[Route('/utilisateur')]
class UtilisateurController extends AbstractController
{    private $entityManager;
    private $historiqueRepository;

    public function __construct(EntityManagerInterface $entityManager, HistoriqueRepository $historiqueRepository)
    {
        $this->entityManager = $entityManager;
        $this->historiqueRepository = $historiqueRepository;
    }
    #[Route('/', name: 'app_utilisateur_index', methods: ['GET'])]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    { $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurRepository->findAll(),
        ]);
    }
    #[Route('/newAdmin', name: 'app_utilisateur_newAdmin', methods: ['GET', 'POST'])]
    public function newA(Request $request, UserPasswordHasherInterface $userPasswordHasher, HistoriqueRepository $historiqueRepository): Response
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setRole('Admin');
        $form = $this->createForm(UtilisateurType::class, $utilisateur, ['user_role' => "Admin"]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('ImagePath')->getData();
    
            if ($uploadedFile) {
                $newFileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
                $targetDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/images';
            
                $uploadedFile->move($targetDirectory, $newFileName);     
                $utilisateur->setImagePath('uploads/images/' . $newFileName);
            }
            
            $utilisateur->setPassword(
                $userPasswordHasher->hashPassword($utilisateur, $form->get('Password')->getData())
            );
            
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();
    
            // Enregistrer dans l'historique
            $historique = new Historique();
            $historique->setDescription("Nouvel admin créé : " . $utilisateur->getEmail());
            $historique->setCreatedAt(new \DateTime());
    
            // Utilisez la méthode save() de HistoriqueRepository si elle existe
            $historiqueRepository->save($historique, true);
    
            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('utilisateur/newAdmin.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }
    #[Route("/save-img", name : 'app_save_img', methods: ['GET', 'POST'])]
    public function saveImg(Request $request, VerifyEmailHelperInterface $verifyEmailHelper, UtilisateurRepository $userRepository, EntityManagerInterface $entityManager): Response
    {
            $dataURL = $request->request->get('image');
            $decodedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $dataURL));
            $filename = uniqid() . '.jpg';
            $uploadDir = $this->getParameter('kernel.project_dir') . '/public/uploads/images';
            $file_path = $uploadDir . '/' . $filename;

            if (file_put_contents($file_path, $decodedImage)) {
                $response = array(
                    'success' => true,
                    'filename' => $filename
                );
            } else {
                $response = array(
                    'success' => false,
                    'message' => 'Failed to upload file'
                );
            }

            return new JsonResponse($response);
    }

    
    #[Route('/newFreelancer', name: 'app_utilisateur_newFreelancer', methods: ['GET', 'POST'])]
    public function newF(Request $request, UtilisateurRepository $utilisateurRepository, UserPasswordHasherInterface $userPasswordHasher, HistoriqueRepository $historiqueRepository): Response
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setRole('Freelancer');
        $utilisateur->setRating(0);
        $utilisateur->setIsBanned(0);
        $utilisateur->setTotalJobs(0);
        $form = $this->createForm(UtilisateurType::class, $utilisateur, ['user_role' => "Freelancer"]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('ImagePath')->getData();
    
            if ($uploadedFile) {
                $newFileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
                $targetDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/images';
    
                $uploadedFile->move(
                    $targetDirectory,
                    $newFileName
                );
    
                $utilisateur->setImagePath('uploads/images/' . $newFileName);
            }
    
            $utilisateur->setPassword(
                $userPasswordHasher->hashPassword(
                    $utilisateur,
                    $form->get('Password')->getData()
                )
            );
    
            $utilisateurRepository->save($utilisateur, true);
    
            // Enregistrer dans l'historique
            $historique = new Historique();
            $historique->setDescription("Nouveau freelancer créé : " . $utilisateur->getEmail());
            $historique->setCreatedAt(new \DateTime());
            $historiqueRepository->save($historique, true);
    
            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }
    
    #[Route('/newEntreprise', name: 'app_utilisateur_newEntreprise', methods: ['GET', 'POST'])]
    public function newE(Request $request, UtilisateurRepository $utilisateurRepository, UserPasswordHasherInterface $userPasswordHasher, HistoriqueRepository $historiqueRepository): Response
    {
        $utilisateur = new Utilisateur();
        $utilisateur->setRole('Entreprise');
        $utilisateur->setIsBanned(0);
        $form = $this->createForm(UtilisateurType::class, $utilisateur, ['user_role' => "Entreprise"]);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('ImagePath')->getData();
    
            if ($uploadedFile) {
                $newFileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
                $targetDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/images';
    
                $uploadedFile->move($targetDirectory, $newFileName);
                $utilisateur->setImagePath('uploads/images/' . $newFileName);
            }
    
            $utilisateur->setPassword(
                $userPasswordHasher->hashPassword(
                    $utilisateur,
                    $form->get('Password')->getData()
                )
            );
    
            $utilisateurRepository->save($utilisateur, true);
    
            // Enregistrer dans l'historique
            $historique = new Historique();
            $historique->setDescription("Nouvelle entreprise créée : " . $utilisateur->getEmail());
            $historique->setCreatedAt(new \DateTime());
            $historiqueRepository->save($historique, true);
    
            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }
    
        return $this->renderForm('utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
            'user_role' => 'Entreprise',
        ]);
    }
    


    //recherche
    #[Route('/recherche', name: 'app_user_search')]
    public function searchByEmail(Request $request, UtilisateurRepository $utilisateurRepository, HistoriqueRepository $historiqueRepository): Response
    {
        $email = $request->query->get('email');
        $utilisateur = null;
    
        if ($email) {
            $utilisateur = $utilisateurRepository->findOneByEmail($email);
            
            // Enregistrer dans l'historique
            $description = $utilisateur ? "Recherche effectuée pour l'email : {$email}." : "Recherche effectuée pour l'email : {$email}, mais aucun utilisateur trouvé.";
            $historique = new Historique();
            $historique->setDescription($description);
            $historique->setCreatedAt(new \DateTime());
            $historiqueRepository->save($historique, true);
        }
    
        return $this->render('utilisateur/recherche.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
    
    #[Route('/tri', name: 'app_utilisateur_tri', methods: ['GET'])]
    public function tri(Request $request, UtilisateurRepository $utilisateurRepository, HistoriqueRepository $historiqueRepository): Response
    {
        $sortField = $request->query->get('sort', 'name'); // 'name' est le tri par défaut
        $sortDirection = $request->query->get('direction', 'ASC'); // 'ASC' est la direction par défaut
        
        // Assurez-vous que les paramètres de tri sont valides
        $validSortFields = ['name', 'email', 'role']; // Ajoutez tous les champs valides ici
        $validDirections = ['ASC', 'DESC'];
    
        if (!in_array($sortField, $validSortFields) || !in_array($sortDirection, $validDirections)) {
            throw new \InvalidArgumentException('Invalid sort field or direction');
        }
    
        $utilisateurs = $utilisateurRepository->findBySortedField($sortField, $sortDirection);
    
        // Enregistrer dans l'historique
        $historique = new Historique();
        $historique->setDescription("Tri effectué sur le champ '{$sortField}' dans l'ordre '{$sortDirection}'.");
        $historique->setCreatedAt(new \DateTime());
        $historiqueRepository->save($historique, true);
    
        return $this->render('utilisateur/index.html.twig', [
            'utilisateurs' => $utilisateurs,
        ]);
    }
    

    //sta
    #[Route('/statistiques', name: 'app_utilisateur_statistiques', methods: ['GET'])]
public function statistiques(UtilisateurRepository $utilisateurRepository): Response
{
    $stats = [
        'freelancerCount' => $utilisateurRepository->count(['role' => 'Freelancer']),
        'adminCount' => $utilisateurRepository->count(['role' => 'Admin']),
        'entrepriseCount' => $utilisateurRepository->count(['role' => 'Entreprise']),
    ];

    return $this->render('utilisateur/statistiques.html.twig', [
        'stats' => $stats,
    ]);
}
//sta
#[Route('/sta2', name: 'app_utilisateur_sta2', methods: ['GET'])]
    public function sta2(UtilisateurRepository $utilisateurRepository): Response
    {
        // Récupérer les nombres d'utilisateurs par rôle
        $stats = [
            'admin' => $utilisateurRepository->count(['role' => 'Admin']),
            'freelancer' => $utilisateurRepository->count(['role' => 'Freelancer']),
            'entreprise' => $utilisateurRepository->count(['role' => 'Entreprise']),
        ];

        // Calculer le total des utilisateurs
        $total = array_sum($stats);

        // Calculer les pourcentages pour chaque rôle
        $percentages = array_map(function($count) use ($total) {
            return $total > 0 ? round($count / $total * 100, 2) : 0; // Utilisation de 2 décimales pour les pourcentages
        }, $stats);

        // Rendre le template avec les pourcentages passés en paramètre
        return $this->render('utilisateur/statistiques2.html.twig', [
            'percentages' => $percentages,
        ]);
    }


    #[Route('/search', name: 'app_utilisateur_search', methods: ['GET'])]
// Contrôleur Symfony
public function searchByDomaine(Request $request, UtilisateurRepository $repo)
{
    $domaine = $request->query->get('domain', ''); // Obtenez le domaine de la requête

    // Utilisez la méthode findByDomaine pour récupérer les utilisateurs
    $utilisateurs = $repo->findByDomaine($domaine);

    // Rendu du template avec les utilisateurs et le domaine recherché
    return $this->render('utilisateur/search.html.twig', [
        'utilisateurs' => $utilisateurs,
        'domaine' => $domaine, // Passez le domaine au template
    ]);
}


    #[Route('/{id}', name: 'app_utilisateur_show', methods: ['GET'])]
    public function show(UtilisateurRepository $utilisateurRepository, $id): Response {
        $utilisateur = $utilisateurRepository->find($id);

        if (!$utilisateur) {
            throw $this->createNotFoundException('No user found for id ' . $id);
        }

        return $this->render('utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
    
    #[Route('/profile/{id}', name: 'app_utilisateur_showProfile', methods: ['GET'])]
    public function showFront(Utilisateur $utilisateur): Response
    {
        return $this->render('utilisateur/profile.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }
    #[Route('/{id}/edit', name: 'app_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository, HistoriqueRepository $historiqueRepository): Response
    {
        $form = $this->createForm(UtilisateurEditType::class, $utilisateur, ['user_role' => $utilisateur->getRole()]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('ImagePath')->getData();

            if ($uploadedFile) {
                // generate a unique file name
                $newFileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
                $targetDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/images';
            
                // move the uploaded file to the target directory
                $uploadedFile->move(
                    $targetDirectory, // specify the target directory where the file should be saved
                    $newFileName      // specify the new file name
                );
                    
                            // set the image path to the path of the uploaded file
                            $utilisateur->setImagePath('uploads/images/' . $newFileName);
                
            }
            $utilisateurRepository->save($utilisateur, true);
            $historique = new Historique();
            $historique->setDescription("Modification de l'utilisateur : " . $utilisateur->getEmail());
            $historique->setCreatedAt(new \DateTime());
            $historiqueRepository->save($historique, true);
            return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/editProfile', name: 'app_utilisateur_editProfile', methods: ['GET', 'POST'])]
    public function editProfile(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository, HistoriqueRepository $historiqueRepository): Response
    {
        $form = $this->createForm(UtilisateurEditType::class, $utilisateur, ['user_role' => $utilisateur->getRole()]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedFile = $form->get('ImagePath')->getData();

            if ($uploadedFile) {
                // generate a unique file name
                $newFileName = md5(uniqid()) . '.' . $uploadedFile->guessExtension();
                $targetDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/images';
            
                // move the uploaded file to the target directory
                $uploadedFile->move(
                    $targetDirectory, // specify the target directory where the file should be saved
                    $newFileName      // specify the new file name
                );
                    
                            // set the image path to the path of the uploaded file
                            $utilisateur->setImagePath('uploads/images/' . $newFileName);
                
            }
            $utilisateurRepository->save($utilisateur, true);
            $historique = new Historique();
            $historique->setDescription("Modification de l'utilisateur : " . $utilisateur->getEmail());
            $historique->setCreatedAt(new \DateTime());
            $historiqueRepository->save($historique, true);
            return $this->redirectToRoute('app_utilisateur_showProfile', ['id' => $utilisateur->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('utilisateur/editProfile.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur, UtilisateurRepository $utilisateurRepository, HistoriqueRepository $historiqueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            $emailUtilisateur = $utilisateur->getEmail(); // Capturez l'email avant la suppression
            $utilisateurRepository->remove($utilisateur, true);
    
            // Enregistrement dans l'historique
            $historique = new Historique();
            $historique->setDescription("Suppression de l'utilisateur : " . $emailUtilisateur);
            $historique->setCreatedAt(new \DateTime());
            $historiqueRepository->save($historique, true);
        }
    
        return $this->redirectToRoute('app_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }
    
    
    #[Route("/verify", name : 'app_verify_email')]
    public function verifyUserEmail(): Response
    {
        // TODO
        return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
    }


    #[Route("/export/excel", name : 'export_excel')]
    public function exportExcel(UtilisateurRepository $utilisateurRepository)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Définir les en-têtes des colonnes
        $sheet->setCellValue('A1', 'ID');
        $sheet->setCellValue('B1', 'Role');
        $sheet->setCellValue('C1', 'Email');
        $sheet->setCellValue('D1', 'Nom');
        $sheet->setCellValue('E1', 'Prénom');
        // ... Ajoutez plus de titres de colonnes si nécessaire
    
        // Récupérer les utilisateurs de la base de données
        $utilisateurs = $utilisateurRepository->findAll();
    
        // Remplir les données des utilisateurs
        $rowNumber = 2; // Commencer à partir de la ligne 2, puisque nous avons déjà les en-têtes
        foreach ($utilisateurs as $utilisateur) {
            $sheet->setCellValue('A' . $rowNumber, $utilisateur->getId());
            $sheet->setCellValue('B' . $rowNumber, $utilisateur->getRole());
            $sheet->setCellValue('C' . $rowNumber, $utilisateur->getEmail());
            $sheet->setCellValue('D' . $rowNumber, $utilisateur->getName());
            $sheet->setCellValue('E' . $rowNumber, $utilisateur->getLastName());
            // ... Continuez à remplir d'autres détails de l'utilisateur
            $rowNumber++;
        }
    
        // Création du writer
        $writer = new Xlsx($spreadsheet);
    
        // Création de la réponse StreamedResponse
        $response = new StreamedResponse(function () use ($writer) {
            $writer->save('php://output');
        });
    
        // Définition des en-têtes de la réponse pour le téléchargement du fichier
        $response->headers->set('Content-Type', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        $response->headers->set('Content-Disposition', 'attachment; filename="liste_utilisateurs.xlsx"');
        $response->headers->set('Cache-Control','max-age=0');
    
        return $response;
    }
    
    
    }
    
    
   

