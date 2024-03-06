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

/* type_reclamation/statistics.html.twig */
class __TwigTemplate_98e46a1017568af71937ecf554084072 extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_reclamation/statistics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "type_reclamation/statistics.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "type_reclamation/statistics.html.twig", 1);
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

        echo "Statistiques des Types de Réclamation";
        
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
        echo "<div class=\"container my-5\">
    <h1 class=\"text-center mb-5 display-4\" style=\"font-family: 'Poppins', sans-serif; font-weight: 700; color: #4A00E0; text-shadow: 2px 2px 8px rgba(0,0,0,0.2);\">Statistiques des Types de Réclamation</h1>
    <div class=\"row\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["percentages"]) || array_key_exists("percentages", $context) ? $context["percentages"] : (function () { throw new RuntimeError('Variable "percentages" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["nom"] => $context["pourcentage"]) {
            // line 10
            echo "        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card-flip\">
                <div class=\"card front\" style=\"background: linear-gradient(130deg, #6b72ff 0%, #8e43e7 100%);\">
                    <div class=\"card-body text-white d-flex flex-column justify-content-center align-items-center\">
                        <h5 class=\"card-title\">";
            // line 14
            echo twig_escape_filter($this->env, $context["nom"], "html", null, true);
            echo "</h5>
                        <p class=\"display-4\">";
            // line 15
            echo twig_escape_filter($this->env, $context["pourcentage"], "html", null, true);
            echo "%</p>
                    </div>
                </div>
                <div class=\"card back\" style=\"background: linear-gradient(130deg, #ff6bb2 0%, #ff7c87 100%);\">
                    <div class=\"card-body text-white d-flex flex-column justify-content-center align-items-center\">
                        <p class=\"card-text\">Détails sur les réclamations de type \"";
            // line 20
            echo twig_escape_filter($this->env, $context["nom"], "html", null, true);
            echo "\" avec un total de ";
            echo twig_escape_filter($this->env, $context["pourcentage"], "html", null, true);
            echo "% des cas.</p>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['nom'], $context['pourcentage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>

<style>
.card-flip {
  perspective: 1000px;
}
.card {
  height: 300px;
  position: relative;
  width: 100%;
  transform-style: preserve-3d;
  transition: transform 0.8s;
  cursor: pointer;
}
.card-flip .card:hover {
  transform: rotateY(180deg);
}
.front, .back {
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
}
.back {
  transform: rotateY(180deg);
}
</style>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "type_reclamation/statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 26,  115 => 20,  107 => 15,  103 => 14,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block title %}Statistiques des Types de Réclamation{% endblock %}

{% block contentblock %}
<div class=\"container my-5\">
    <h1 class=\"text-center mb-5 display-4\" style=\"font-family: 'Poppins', sans-serif; font-weight: 700; color: #4A00E0; text-shadow: 2px 2px 8px rgba(0,0,0,0.2);\">Statistiques des Types de Réclamation</h1>
    <div class=\"row\">
        {% for nom, pourcentage in percentages %}
        <div class=\"col-md-6 col-lg-4 mb-4\">
            <div class=\"card-flip\">
                <div class=\"card front\" style=\"background: linear-gradient(130deg, #6b72ff 0%, #8e43e7 100%);\">
                    <div class=\"card-body text-white d-flex flex-column justify-content-center align-items-center\">
                        <h5 class=\"card-title\">{{ nom }}</h5>
                        <p class=\"display-4\">{{ pourcentage }}%</p>
                    </div>
                </div>
                <div class=\"card back\" style=\"background: linear-gradient(130deg, #ff6bb2 0%, #ff7c87 100%);\">
                    <div class=\"card-body text-white d-flex flex-column justify-content-center align-items-center\">
                        <p class=\"card-text\">Détails sur les réclamations de type \"{{ nom }}\" avec un total de {{ pourcentage }}% des cas.</p>
                    </div>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>

<style>
.card-flip {
  perspective: 1000px;
}
.card {
  height: 300px;
  position: relative;
  width: 100%;
  transform-style: preserve-3d;
  transition: transform 0.8s;
  cursor: pointer;
}
.card-flip .card:hover {
  transform: rotateY(180deg);
}
.front, .back {
  backface-visibility: hidden;
  position: absolute;
  top: 0;
  left: 0;
}
.back {
  transform: rotateY(180deg);
}
</style>

{% endblock %}
", "type_reclamation/statistics.html.twig", "C:\\xampp\\htdocs\\recll\\templates\\type_reclamation\\statistics.html.twig");
    }
}
