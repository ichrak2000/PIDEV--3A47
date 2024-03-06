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

/* utilisateur/statistiques2.html.twig */
class __TwigTemplate_9ad0b12943da5aa8d34113045d15c203 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/statistiques2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/statistiques2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/statistiques2.html.twig", 1);
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
        echo "    <h1 align='center'>Statistiques des Utilisateurs</h1>
    <div style=\"width:50%; margin:auto;\">
        <canvas id=\"usersChart\"></canvas>
    </div>

    ";
        // line 10
        echo "    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        var ctx = document.getElementById('usersChart').getContext('2d');
        var usersChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Admin', 'Freelancer', 'Entreprise'],
                datasets: [{
                    label: 'Pourcentage d\\'utilisateurs',
                    data: [";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["percentages"]) || array_key_exists("percentages", $context) ? $context["percentages"] : (function () { throw new RuntimeError('Variable "percentages" does not exist.', 19, $this->source); })()), "admin", [], "any", false, false, false, 19), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["percentages"]) || array_key_exists("percentages", $context) ? $context["percentages"] : (function () { throw new RuntimeError('Variable "percentages" does not exist.', 19, $this->source); })()), "freelancer", [], "any", false, false, false, 19), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["percentages"]) || array_key_exists("percentages", $context) ? $context["percentages"] : (function () { throw new RuntimeError('Variable "percentages" does not exist.', 19, $this->source); })()), "entreprise", [], "any", false, false, false, 19), "html", null, true);
        echo "],
                    backgroundColor: [
                        'blue', // Admin
                        'green', // Freelancer
                        'red'   // Entreprise
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                aspectRatio: 1, // Gardez une valeur de 1 pour un cercle parfait
                tooltips: {
                    enabled: true,
                    mode: 'index',
                    intersect: false,
                    bodyFontSize: 15,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var label = data.labels[tooltipItem.index] || '';
                            var value = data.datasets[0].data[tooltipItem.index];
                            var percentage = value.toFixed(2); // Fixer le nombre de décimales si nécessaire
                            return label + ': ' + percentage + '%';
                        }
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                legend: {
                    position: 'bottom',
                    labels: {
                        fontSize: 14,
                        usePointStyle: true
                    }
                },
            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 63
        echo "<style>
    #usersChart {
        max-width: 600px; // ou la taille que vous souhaitez
        max-height: 300px; // ou la taille que vous souhaitez
        margin: auto;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/statistiques2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  143 => 62,  87 => 19,  76 => 10,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1 align='center'>Statistiques des Utilisateurs</h1>
    <div style=\"width:50%; margin:auto;\">
        <canvas id=\"usersChart\"></canvas>
    </div>

    {# Ajoutez Chart.js à votre template #}
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        var ctx = document.getElementById('usersChart').getContext('2d');
        var usersChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Admin', 'Freelancer', 'Entreprise'],
                datasets: [{
                    label: 'Pourcentage d\\'utilisateurs',
                    data: [{{ percentages.admin }}, {{ percentages.freelancer }}, {{ percentages.entreprise }}],
                    backgroundColor: [
                        'blue', // Admin
                        'green', // Freelancer
                        'red'   // Entreprise
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                aspectRatio: 1, // Gardez une valeur de 1 pour un cercle parfait
                tooltips: {
                    enabled: true,
                    mode: 'index',
                    intersect: false,
                    bodyFontSize: 15,
                    callbacks: {
                        label: function(tooltipItem, data) {
                            var label = data.labels[tooltipItem.index] || '';
                            var value = data.datasets[0].data[tooltipItem.index];
                            var percentage = value.toFixed(2); // Fixer le nombre de décimales si nécessaire
                            return label + ': ' + percentage + '%';
                        }
                    }
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                legend: {
                    position: 'bottom',
                    labels: {
                        fontSize: 14,
                        usePointStyle: true
                    }
                },
            }
        });
    </script>
{% endblock %}

{% block stylesheets %}
<style>
    #usersChart {
        max-width: 600px; // ou la taille que vous souhaitez
        max-height: 300px; // ou la taille que vous souhaitez
        margin: auto;
    }
</style>
{% endblock %}
", "utilisateur/statistiques2.html.twig", "C:\\xampp\\htdocs\\syfmony user crud\\Symfony\\templates\\utilisateur\\statistiques2.html.twig");
    }
}
