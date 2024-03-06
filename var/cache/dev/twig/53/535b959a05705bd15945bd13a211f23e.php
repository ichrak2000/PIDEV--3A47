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

/* type_reclamation/index.html.twig */
class __TwigTemplate_e580b0621275869495c3104c84d7c55b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "type_reclamation/index.html.twig", 1);
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

        echo "TypeReclamation index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>TypeReclamation index</h1>
    <!-- Bouton de tri -->
    <div align='center' style=\"margin-top: 20px;\">
        <div class=\"row mb-4\">
            <div class=\"col-md-6 offset-md-3\">
                <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_search");
        echo "\" method=\"get\" class=\"input-group\">
                    <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Recherche par nom\" required>
                    <div class=\"input-group-append\">
                        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>

        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_tri", ["sort" => "nom", "direction" => "ASC"]), "html", null, true);
        echo "\" class=\"btn btn-info\">Tri par nom (ASC)</a>
        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_tri", ["sort" => "nom", "direction" => "DESC"]), "html", null, true);
        echo "\" class=\"btn btn-info\">Tri par nom (DESC)</a>
        <!-- Ajoutez d'autres boutons de tri au besoin -->
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["type_reclamations"]) || array_key_exists("type_reclamations", $context) ? $context["type_reclamations"] : (function () { throw new RuntimeError('Variable "type_reclamations" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["type_reclamation"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type_reclamation"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type_reclamation"], "nom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["type_reclamation"], "description", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_statistics", ["nom" => twig_get_attribute($this->env, $this->source, $context["type_reclamation"], "nom", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"btn btn-secondary\">Statistiques</a>
                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["type_reclamation"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Voir</a>
                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["type_reclamation"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 46
            echo "            <tr>
                <td colspan=\"4\">Aucun enregistrement trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type_reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

   <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_new");
        echo "\" class=\"btn btn-custom\">Créer un nouveau</a>

<style>
.btn-custom {
    background-color: #4CAF50; /* Green background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 15px 32px; /* Some padding */
    text-align: center; /* Centered text */
    text-decoration: none; /* No underline */
    display: inline-block; /* Use inline-block */
    font-size: 16px; /* Increased text size */
    margin: 4px 2px; /* Some margin */
    cursor: pointer; /* Pointer/hand icon */
    border-radius: 25px; /* Rounded corners */
    transition: background-color 0.3s, box-shadow 0.3s; /* Smooth transition */
}

.btn-custom:hover {
    background-color: #45a049; /* Darker green background */
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); /* Add shadow on hover */
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "type_reclamation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 53,  174 => 50,  165 => 46,  156 => 42,  152 => 41,  148 => 40,  143 => 38,  139 => 37,  135 => 36,  132 => 35,  127 => 34,  111 => 21,  107 => 20,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block title %}TypeReclamation index{% endblock %}

{% block body %}
    <h1>TypeReclamation index</h1>
    <!-- Bouton de tri -->
    <div align='center' style=\"margin-top: 20px;\">
        <div class=\"row mb-4\">
            <div class=\"col-md-6 offset-md-3\">
                <form action=\"{{ path('app_type_reclamation_search') }}\" method=\"get\" class=\"input-group\">
                    <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Recherche par nom\" required>
                    <div class=\"input-group-append\">
                        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>

        <a href=\"{{ path('app_type_reclamation_tri', {'sort': 'nom', 'direction': 'ASC'}) }}\" class=\"btn btn-info\">Tri par nom (ASC)</a>
        <a href=\"{{ path('app_type_reclamation_tri', {'sort': 'nom', 'direction': 'DESC'}) }}\" class=\"btn btn-info\">Tri par nom (DESC)</a>
        <!-- Ajoutez d'autres boutons de tri au besoin -->
    </div>
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for type_reclamation in type_reclamations %}
            <tr>
                <td>{{ type_reclamation.id }}</td>
                <td>{{ type_reclamation.nom }}</td>
                <td>{{ type_reclamation.description }}</td>
                <td>
                    <a href=\"{{ path('app_type_reclamation_statistics', {'nom': type_reclamation.nom}) }}\" class=\"btn btn-secondary\">Statistiques</a>
                    <a href=\"{{ path('app_type_reclamation_show', {'id': type_reclamation.id}) }}\" class=\"btn btn-primary\">Voir</a>
                    <a href=\"{{ path('app_type_reclamation_edit', {'id': type_reclamation.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">Aucun enregistrement trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

   <a href=\"{{ path('app_type_reclamation_new') }}\" class=\"btn btn-custom\">Créer un nouveau</a>

<style>
.btn-custom {
    background-color: #4CAF50; /* Green background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 15px 32px; /* Some padding */
    text-align: center; /* Centered text */
    text-decoration: none; /* No underline */
    display: inline-block; /* Use inline-block */
    font-size: 16px; /* Increased text size */
    margin: 4px 2px; /* Some margin */
    cursor: pointer; /* Pointer/hand icon */
    border-radius: 25px; /* Rounded corners */
    transition: background-color 0.3s, box-shadow 0.3s; /* Smooth transition */
}

.btn-custom:hover {
    background-color: #45a049; /* Darker green background */
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19); /* Add shadow on hover */
}
</style>
{% endblock %}
", "type_reclamation/index.html.twig", "C:\\Users\\Asus\\Desktop\\reclll\\templates\\type_reclamation\\index.html.twig");
    }
}
