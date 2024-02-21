<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Entity\Commande;
use App\Form\FactureType;
use App\Repository\FactureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
/**
 * @Route("/Facture")
 */
class FactureController extends AbstractController
{
    /**
     * @Route("/", name="Facture_index", methods={"GET"})
     */
    public function index(FactureRepository $FactureRepository): Response
    {

        return $this->render('Facture/index.html.twig', [
            'Factures' => $FactureRepository->findAll(),
        ]);

    }
      /**
     * @Route("/{id}/edit", name="Facture_edit", methods={"GET","POST"})
     */
    public function edit2(Request $request, Facture $Facture): Response
    {
        $form = $this->createForm(FactureType::class, $Facture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('Facture_index');
        }

        return $this->render('Facture/edit.html.twig', [
            'Facture' => $Facture,
            'form' => $form->createView(),
        ]);
    }
    
    /**
     * @Route("/new/{id}", name="Facture_new", methods={"GET","POST"})
     */
    public function new(Request $request,$id,FactureRepository $FactureRepository): Response
    {
        $Facture = new Facture();
        $entityManager = $this->getDoctrine()->getManager();
        $Commande = $entityManager->getRepository(Commande::class)->find($id);
       
        $form = $this->createForm(FactureType::class, $Facture);
        $form->handleRequest($request);

     
            $Facture->setCommande($Commande);
            
            $Facture->setNom($Commande->getNom());
            
            $Facture->setPrenom($Commande->getPrenom());
            
            $Facture->setEmail($Commande->getEmail());
            
            $Facture->setAdresse($Commande->getAdresse());
            $Facture->setTotalcost($Commande->getTotalcost()); 

            $Facture->setNumtelephone($Commande->getNumtelephone()); 

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Facture);
            $entityManager->flush();
            

            return $this->redirectToRoute('Facture_index');
      
     
        
    }

 /**
     * @Route("/{Factureid}", name="Facture_delete", methods={"POST"})
     */
    public function delete(Request $request, Facture $Facture): Response
    {
        if ($this->isCsrfTokenValid('delete'.$Facture->getFactureid(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($Facture);
            $entityManager->flush();
        }

        return $this->redirectToRoute('Facture_index');
    }



}
