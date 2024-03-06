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

/* type_reclamation/recherche.html.twig */
class __TwigTemplate_950b3f8aaecdda9e931558dfa2f8be3b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_reclamation/recherche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_reclamation/recherche.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "type_reclamation/recherche.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1 class=\"mt-5 mb-4\">Recherche de type de réclamation</h1>
        <form method=\"get\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_type_reclamation_search");
        echo "\" class=\"row justify-content-center mb-4\">
            <div class=\"col-md-6\">
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrez le nom à rechercher\">
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>
        </form>
        
        ";
        // line 15
        if ((isset($context["typeReclamation"]) || array_key_exists("typeReclamation", $context) ? $context["typeReclamation"] : (function () { throw new RuntimeError('Variable "typeReclamation" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "            <div class=\"search-results\">
                <h2>Résultats de la recherche:</h2>
                <div class=\"user-info\">
                    <p><strong>Nom:</strong> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["typeReclamation"]) || array_key_exists("typeReclamation", $context) ? $context["typeReclamation"] : (function () { throw new RuntimeError('Variable "typeReclamation" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                    <!-- Ajoutez d'autres informations que vous souhaitez afficher -->
                </div>
            </div>
        ";
        } else {
            // line 24
            echo "            <p class=\"no-results\">Aucun type de réclamation trouvé.</p>
        ";
        }
        // line 26
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "type_reclamation/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 26,  99 => 24,  91 => 19,  86 => 16,  84 => 15,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/layout.html.twig\" %}

{% block body %}
    <div class=\"container\">
        <h1 class=\"mt-5 mb-4\">Recherche de type de réclamation</h1>
        <form method=\"get\" action=\"{{ path('app_type_reclamation_search') }}\" class=\"row justify-content-center mb-4\">
            <div class=\"col-md-6\">
                <input type=\"text\" name=\"nom\" class=\"form-control\" placeholder=\"Entrez le nom à rechercher\">
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
            </div>
        </form>
        
        {% if typeReclamation %}
            <div class=\"search-results\">
                <h2>Résultats de la recherche:</h2>
                <div class=\"user-info\">
                    <p><strong>Nom:</strong> {{ typeReclamation.nom }}</p>
                    <!-- Ajoutez d'autres informations que vous souhaitez afficher -->
                </div>
            </div>
        {% else %}
            <p class=\"no-results\">Aucun type de réclamation trouvé.</p>
        {% endif %}
    </div>
{% endblock %}

", "type_reclamation/recherche.html.twig", "C:\\Users\\Asus\\Desktop\\reclll\\templates\\type_reclamation\\recherche.html.twig");
    }
}
