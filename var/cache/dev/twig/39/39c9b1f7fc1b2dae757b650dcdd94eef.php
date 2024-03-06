<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* utilisateur/index.html.twig */
class __TwigTemplate_c2b741e723ea5cad415b584379234d16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'contentblock' => [$this, 'block_contentblock'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "utilisateur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des Utilisateurs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_contentblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentblock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentblock"));

        // line 6
        echo "<div class=\"container\">
    <h1 class=\"text-center mb-4\">Liste des Utilisateurs</h1>
<div class=\"row mb-4\">
        <div class=\"col text-center\">
            <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_newAdmin");
        echo "\" class=\"btn btn-success\">Créer Admin</a>
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-6 offset-md-3\">
            <form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        echo "\" method=\"get\" class=\"input-group\">
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Recherche par email\" required>
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-md-6 offset-md-3\">
            <form action=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_search");
        echo "\" method=\"get\" class=\"input-group\">
                <input type=\"text\" name=\"domain\" class=\"form-control\" placeholder=\"Recherche par domaine\" required>
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher Domaine</button>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"btn-group\" role=\"group\">
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_historique");
        echo "\" class=\"btn btn-primary\">Historique</a>
                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_statistiques");
        echo "\" class=\"btn btn-info\">Voir les Statistiques</a>
                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_sta2");
        echo "\" class=\"btn btn-info\">Statistiques avec %</a>
            </div>
        </div>
    </div>
<div class=\"row mb-4\">
    <div class=\"col text-center\">
        ";
        // line 47
        echo "
        ";
        // line 49
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_excel");
        echo "\" class=\"btn btn-secondary\">Exporter en Excel</a>
    </div>
</div>
<div class=\"row mb-4\">
    <div class=\"col text-center\">
        ";
        // line 55
        echo "
        ";
        // line 57
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_tri", ["sort" => "name", "direction" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
            Trier par Nom (Ascendant)
        </a>
        <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_tri", ["sort" => "name", "direction" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-outline-secondary\">
            Trier par Nom (Descendant)
        </a>
    </div>
</div>


    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Image</th>
                    <th>Bio</th>
                    <th>Expérience</th>
                    <th>Formation</th>
                    <th>Total des missions</th>
                    <th>Évaluation</th>
                    <th>Domaine</th>
                    <th>Info</th>
                    <th>Localisation</th>
                    <th>Nb Employés</th>
                    <th>Est banni</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 91, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 92
            echo "                <tr>
                    <td>
                        <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary\">Afficher</a>
                        <a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning\">Modifier</a>
                    </td>
                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "role", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                    <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                    <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "name", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                    <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "LastName", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "UserName", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "ImagePath", [], "any", false, false, false, 102)), "html", null, true);
            echo "\" alt=\"Image Utilisateur\" class=\"img-thumbnail\" style=\"width: 50px; height: auto;\"></td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "bio", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "experience", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "education", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "totalJobs", [], "any", false, false, false, 106), "html", null, true);
            echo " Missions</td>
                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "rating", [], "any", false, false, false, 107), "html", null, true);
            echo "/20</td>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "domaine", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "info", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "location", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                    <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nbe", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                    <td>";
            // line 112
            echo (((twig_get_attribute($this->env, $this->source, $context["utilisateur"], "isBanned", [], "any", false, false, false, 112) == 0)) ? ("Non") : ("Oui"));
            echo "</td>
                </tr>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 115
            echo "                <tr>
                    <td colspan=\"17\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "            </tbody>
        </table>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 119,  290 => 115,  282 => 112,  278 => 111,  274 => 110,  270 => 109,  266 => 108,  262 => 107,  258 => 106,  254 => 105,  250 => 104,  246 => 103,  242 => 102,  238 => 101,  234 => 100,  230 => 99,  226 => 98,  222 => 97,  217 => 95,  213 => 94,  209 => 92,  204 => 91,  170 => 60,  163 => 57,  160 => 55,  151 => 49,  148 => 47,  139 => 40,  135 => 39,  131 => 38,  116 => 26,  102 => 15,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Liste des Utilisateurs{% endblock %}

{% block contentblock %}
<div class=\"container\">
    <h1 class=\"text-center mb-4\">Liste des Utilisateurs</h1>
<div class=\"row mb-4\">
        <div class=\"col text-center\">
            <a href=\"{{ path('app_utilisateur_newAdmin') }}\" class=\"btn btn-success\">Créer Admin</a>
        </div>
    </div>
    <div class=\"row mb-4\">
        <div class=\"col-md-6 offset-md-3\">
            <form action=\"{{ path('app_user_search') }}\" method=\"get\" class=\"input-group\">
                <input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Recherche par email\" required>
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-md-6 offset-md-3\">
            <form action=\"{{ path('app_utilisateur_search') }}\" method=\"get\" class=\"input-group\">
                <input type=\"text\" name=\"domain\" class=\"form-control\" placeholder=\"Recherche par domaine\" required>
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-primary\">Rechercher Domaine</button>
                </div>
            </form>
        </div>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-md-6 offset-md-3\">
            <div class=\"btn-group\" role=\"group\">
                <a href=\"{{ path('app_historique') }}\" class=\"btn btn-primary\">Historique</a>
                <a href=\"{{ path('app_utilisateur_statistiques') }}\" class=\"btn btn-info\">Voir les Statistiques</a>
                <a href=\"{{ path('app_utilisateur_sta2') }}\" class=\"btn btn-info\">Statistiques avec %</a>
            </div>
        </div>
    </div>
<div class=\"row mb-4\">
    <div class=\"col text-center\">
        {# ... autres boutons ... #}

        {# Bouton pour l'export Excel #}
        <a href=\"{{ path('export_excel') }}\" class=\"btn btn-secondary\">Exporter en Excel</a>
    </div>
</div>
<div class=\"row mb-4\">
    <div class=\"col text-center\">
        {# ... autres boutons ... #}

        {# Liens de tri pour le champ \"Nom\" #}
        <a href=\"{{ path('app_utilisateur_tri', {'sort': 'name', 'direction': 'ASC'}) }}\" class=\"btn btn-outline-secondary\">
            Trier par Nom (Ascendant)
        </a>
        <a href=\"{{ path('app_utilisateur_tri', {'sort': 'name', 'direction': 'DESC'}) }}\" class=\"btn btn-outline-secondary\">
            Trier par Nom (Descendant)
        </a>
    </div>
</div>


    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>Actions</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nom d'utilisateur</th>
                    <th>Image</th>
                    <th>Bio</th>
                    <th>Expérience</th>
                    <th>Formation</th>
                    <th>Total des missions</th>
                    <th>Évaluation</th>
                    <th>Domaine</th>
                    <th>Info</th>
                    <th>Localisation</th>
                    <th>Nb Employés</th>
                    <th>Est banni</th>
                </tr>
            </thead>
            <tbody>
                {% for utilisateur in utilisateurs %}
                <tr>
                    <td>
                        <a href=\"{{ path('app_utilisateur_show', {'id': utilisateur.id}) }}\" class=\"btn btn-sm btn-primary\">Afficher</a>
                        <a href=\"{{ path('app_utilisateur_edit', {'id': utilisateur.id}) }}\" class=\"btn btn-sm btn-warning\">Modifier</a>
                    </td>
                    <td>{{ utilisateur.role }}</td>
                    <td>{{ utilisateur.email }}</td>
                    <td>{{ utilisateur.name }}</td>
                    <td>{{ utilisateur.LastName }}</td>
                    <td>{{ utilisateur.UserName }}</td>
                    <td><img src=\"{{ asset(utilisateur.ImagePath) }}\" alt=\"Image Utilisateur\" class=\"img-thumbnail\" style=\"width: 50px; height: auto;\"></td>
                    <td>{{ utilisateur.bio }}</td>
                    <td>{{ utilisateur.experience }}</td>
                    <td>{{ utilisateur.education }}</td>
                    <td>{{ utilisateur.totalJobs }} Missions</td>
                    <td>{{ utilisateur.rating }}/20</td>
                    <td>{{ utilisateur.domaine }}</td>
                    <td>{{ utilisateur.info }}</td>
                    <td>{{ utilisateur.location }}</td>
                    <td>{{ utilisateur.nbe }}</td>
                    <td>{{ utilisateur.isBanned == 0 ? 'Non' : 'Oui' }}</td>
                </tr>
                {% else %}
                <tr>
                    <td colspan=\"17\" class=\"text-center\">Aucun enregistrement trouvé</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>
{% endblock %}
", "utilisateur/index.html.twig", "C:\\xampp\\htdocs\\syfmony user crud\\Symfony\\templates\\utilisateur\\index.html.twig");
    }
}
