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

/* utilisateur/recherche.html.twig */
class __TwigTemplate_383242f05bf728fdce0e7a4b6f67fcd1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/recherche.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/recherche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/recherche.html.twig", 1);
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
        echo "    <div class=\"search-container\">
        <h1 class=\"search-title\">Recherche d'utilisateur</h1>
        <form class=\"search-form\" method=\"get\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_search");
        echo "\">
            <input class=\"search-input\" type=\"text\" name=\"email\" placeholder=\"Entrez l'email à rechercher\" />
            <button class=\"search-button\" type=\"submit\">Rechercher</button>
        </form>
        
        ";
        // line 11
        if ((isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            <div class=\"search-results\">
                <h2>Résultats de la recherche:</h2>
                <div class=\"user-info\">
                    <p><strong>Nom:</strong> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 15, $this->source); })()), "name", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                    <p><strong>Email:</strong> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
            echo "</p>
                    <!-- Ajoutez d'autres informations que vous souhaitez afficher -->
                </div>
            </div>
        ";
        } else {
            // line 21
            echo "            <p class=\"no-results\">Aucun utilisateur trouvé.</p>
        ";
        }
        // line 23
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 27
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .search-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }

        .search-title {
            margin-bottom: 1rem;
            color: #333;
        }

        .search-form {
            margin-bottom: 2rem;
        }

        .search-input {
            padding: 0.5rem;
            margin-right: 0.5rem;
            width: calc(100% - 120px);
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            padding: 0.5rem 1rem;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #4cae4c;
        }

        .search-results {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 4px;
        }

        .user-info {
            text-align: left;
        }

        .no-results {
            color: #999;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 27,  115 => 26,  104 => 23,  100 => 21,  92 => 16,  88 => 15,  83 => 12,  81 => 11,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"search-container\">
        <h1 class=\"search-title\">Recherche d'utilisateur</h1>
        <form class=\"search-form\" method=\"get\" action=\"{{ path('app_user_search') }}\">
            <input class=\"search-input\" type=\"text\" name=\"email\" placeholder=\"Entrez l'email à rechercher\" />
            <button class=\"search-button\" type=\"submit\">Rechercher</button>
        </form>
        
        {% if utilisateur %}
            <div class=\"search-results\">
                <h2>Résultats de la recherche:</h2>
                <div class=\"user-info\">
                    <p><strong>Nom:</strong> {{ utilisateur.name }}</p>
                    <p><strong>Email:</strong> {{ utilisateur.email }}</p>
                    <!-- Ajoutez d'autres informations que vous souhaitez afficher -->
                </div>
            </div>
        {% else %}
            <p class=\"no-results\">Aucun utilisateur trouvé.</p>
        {% endif %}
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .search-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
            text-align: center;
        }

        .search-title {
            margin-bottom: 1rem;
            color: #333;
        }

        .search-form {
            margin-bottom: 2rem;
        }

        .search-input {
            padding: 0.5rem;
            margin-right: 0.5rem;
            width: calc(100% - 120px);
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            padding: 0.5rem 1rem;
            background-color: #5cb85c;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #4cae4c;
        }

        .search-results {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 1rem;
            border-radius: 4px;
        }

        .user-info {
            text-align: left;
        }

        .no-results {
            color: #999;
        }
    </style>
{% endblock %}
", "utilisateur/recherche.html.twig", "C:\\xampp\\htdocs\\syfmony user crud\\Symfony\\templates\\utilisateur\\recherche.html.twig");
    }
}
