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

/* utilisateur/search.html.twig */
class __TwigTemplate_675fca77bba8bcb8bd735fdc707dfaee extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/search.html.twig", 1);
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
        <h1 class=\"search-title\">Recherche par domaine</h1>
        <form class=\"search-form\" action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_search");
        echo "\" method=\"get\">
            <input class=\"search-input\" type=\"text\" name=\"domain\" placeholder=\"Entrez le domaine\" required>
            <button class=\"search-button\" type=\"submit\">Rechercher</button>
        </form>

        ";
        // line 11
        if ((isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 11, $this->source); })())) {
            // line 12
            echo "            <div class=\"search-results\">
                <p class=\"search-results-title\">Résultats de la recherche pour le domaine : <strong>";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["domaine"]) || array_key_exists("domaine", $context) ? $context["domaine"] : (function () { throw new RuntimeError('Variable "domaine" does not exist.', 13, $this->source); })()), "html", null, true);
            echo "</strong></p>
                ";
            // line 14
            if ((array_key_exists("utilisateurs", $context) && (twig_length_filter($this->env, (isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 14, $this->source); })())) > 0))) {
                // line 15
                echo "                    <ul class=\"user-list\">
                        ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new RuntimeError('Variable "utilisateurs" does not exist.', 16, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
                    // line 17
                    echo "                            <li class=\"user-item\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "name", [], "any", false, false, false, 17), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "email", [], "any", false, false, false, 17), "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                    </ul>
                ";
            } else {
                // line 21
                echo "                    <p class=\"no-results\">Aucun utilisateur trouvé pour ce domaine.</p>
                ";
            }
            // line 23
            echo "            </div>
        ";
        }
        // line 25
        echo "    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .search-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            text-align: center;
        }

        .search-title {
            color: #333;
            margin-bottom: 1rem;
        }

        .search-form {
            margin-bottom: 2rem;
        }

        .search-input {
            padding: 0.5rem;
            margin-right: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            padding: 0.5rem 1rem;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .search-results {
            text-align: left;
            background-color: #f8f9fa;
            border-radius: 4px;
            padding: 1rem;
            border: 1px solid #ddd;
        }

        .search-results-title {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-item {
            background-color: white;
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
        return "utilisateur/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 29,  133 => 28,  122 => 25,  118 => 23,  114 => 21,  110 => 19,  99 => 17,  95 => 16,  92 => 15,  90 => 14,  86 => 13,  83 => 12,  81 => 11,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"search-container\">
        <h1 class=\"search-title\">Recherche par domaine</h1>
        <form class=\"search-form\" action=\"{{ path('app_utilisateur_search') }}\" method=\"get\">
            <input class=\"search-input\" type=\"text\" name=\"domain\" placeholder=\"Entrez le domaine\" required>
            <button class=\"search-button\" type=\"submit\">Rechercher</button>
        </form>

        {% if domaine %}
            <div class=\"search-results\">
                <p class=\"search-results-title\">Résultats de la recherche pour le domaine : <strong>{{ domaine }}</strong></p>
                {% if utilisateurs is defined and utilisateurs|length > 0 %}
                    <ul class=\"user-list\">
                        {% for utilisateur in utilisateurs %}
                            <li class=\"user-item\">{{ utilisateur.name }} - {{ utilisateur.email }}</li>
                        {% endfor %}
                    </ul>
                {% else %}
                    <p class=\"no-results\">Aucun utilisateur trouvé pour ce domaine.</p>
                {% endif %}
            </div>
        {% endif %}
    </div>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .search-container {
            max-width: 800px;
            margin: 2rem auto;
            padding: 1rem;
            text-align: center;
        }

        .search-title {
            color: #333;
            margin-bottom: 1rem;
        }

        .search-form {
            margin-bottom: 2rem;
        }

        .search-input {
            padding: 0.5rem;
            margin-right: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .search-button {
            padding: 0.5rem 1rem;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .search-results {
            text-align: left;
            background-color: #f8f9fa;
            border-radius: 4px;
            padding: 1rem;
            border: 1px solid #ddd;
        }

        .search-results-title {
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .user-list {
            list-style: none;
            padding: 0;
        }

        .user-item {
            background-color: white;
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .no-results {
            color: #999;
        }
    </style>
{% endblock %}
", "utilisateur/search.html.twig", "C:\\xampp\\htdocs\\syfmony user crud\\Symfony\\templates\\utilisateur\\search.html.twig");
    }
}
