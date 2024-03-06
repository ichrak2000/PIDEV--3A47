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

/* base.html.twig */
class __TwigTemplate_937ae17118193e7165942e38d50b6bfe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'contentblock' => [$this, 'block_contentblock'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
\t\t<link
\t\thref=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- =======================================================
\t  * Template Name: Day - v4.7.0
\t  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
\t  * Author: BootstrapMade.com
\t  * License: https://bootstrapmade.com/license/
\t  ======================================================== -->
\t</head>

\t<body>
\t\t<!-- ======= Header ======= -->

\t\t<header id=\"header\" class=\"d-flex align-items-center\">
\t\t\t<div class=\"container d-flex align-items-center justify-content-between\">

\t\t\t\t<h1 class=\"logo\">
\t\t\t\t\tFreelancy
\t\t\t\t</h1>
\t\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t\t<!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">New Reclamation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\"> liste de reclamation </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        echo "\"> liste de reponse </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Support</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        // line 70
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70)) {
            // line 71
            echo "\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
            echo "\">
\t\t\t\t\t\t\t\t\t\tNew Reclamation
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Log out
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t";
        }
        // line 85
        echo "
\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
\t\t<section id=\"hero\" class=\"d-flex align-items-center\">
            <div class=\"container position-relative\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                <h1>Welcome to Freelancy website </h1>
                <a href=\"#about\" class=\"btn-get-started scrollto\">Get Started</a>
            </div>
        </section>

\t\t";
        // line 100
        $this->displayBlock('contentblock', $context, $blocks);
        // line 101
        echo "\t\t ";
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "
\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<div class=\"footer-info\">
\t\t\t\t\t\t\t\t<h3>Freelancy</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tAriana soghra
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tTunisia<br><br>
\t\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t\t+216 12345678<br>
\t\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\t\tFreelancy.team@support.com<br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</footer>
\t\t<!-- End Footer -->

\t\t<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>
\t\t<div id=\"preloader\"></div>

\t\t<!-- Vendor JS Files -->
\t\t<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

\t\t<!-- Template Main JS File -->
\t\t<script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>

\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 100
    public function block_contentblock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentblock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contentblock"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 101,  276 => 100,  260 => 147,  254 => 144,  250 => 143,  246 => 142,  242 => 141,  238 => 140,  234 => 139,  195 => 102,  192 => 101,  190 => 100,  173 => 85,  159 => 74,  154 => 71,  152 => 70,  144 => 65,  138 => 62,  132 => 59,  102 => 32,  95 => 28,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  64 => 15,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

\t\t<meta content=\"\" name=\"description\">
\t\t<meta
\t\tcontent=\"\" name=\"keywords\">

\t\t<!-- Favicons -->
\t\t<link href=\"{{asset('assets/img/favicon.png')}}\" rel=\"icon\">
\t\t<link
\t\thref=\"{{asset('assets/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t<!-- Vendor CSS Files -->
\t\t<link href=\"{{asset('assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
\t\t<link href=\"{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
\t\t<link
\t\thref=\"{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

\t\t<!-- Template Main CSS File -->
\t\t<link
\t\thref=\"{{asset('assets/css/style.css')}}\" rel=\"stylesheet\">
\t<!-- =======================================================
\t  * Template Name: Day - v4.7.0
\t  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
\t  * Author: BootstrapMade.com
\t  * License: https://bootstrapmade.com/license/
\t  ======================================================== -->
\t</head>

\t<body>
\t\t<!-- ======= Header ======= -->

\t\t<header id=\"header\" class=\"d-flex align-items-center\">
\t\t\t<div class=\"container d-flex align-items-center justify-content-between\">

\t\t\t\t<h1 class=\"logo\">
\t\t\t\t\tFreelancy
\t\t\t\t</h1>
\t\t\t\t<!-- Uncomment below if you prefer to use an image logo -->
\t\t\t\t<!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->

\t\t\t\t<nav id=\"navbar\" class=\"navbar\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Home</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_reclamation_new') }}\">New Reclamation</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{ path('app_reclamation_index') }}\"> liste de reclamation </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{ path('app_reponse_index') }}\"> liste de reponse </a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"\">Support</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<ul>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_reclamation_new') }}\">
\t\t\t\t\t\t\t\t\t\tNew Reclamation
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\">Log out
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<i class=\"bi bi-list mobile-nav-toggle\"></i>
\t\t\t\t</nav>
\t\t\t\t<!-- .navbar -->

\t\t\t</div>
\t\t</header>
\t\t<!-- End Header -->
\t\t<section id=\"hero\" class=\"d-flex align-items-center\">
            <div class=\"container position-relative\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                <h1>Welcome to Freelancy website </h1>
                <a href=\"#about\" class=\"btn-get-started scrollto\">Get Started</a>
            </div>
        </section>

\t\t{% block contentblock %}{% endblock %}
\t\t {% block body %}{% endblock %}

\t\t<!-- ======= Footer ======= -->
\t\t<footer id=\"footer\">
\t\t\t<div class=\"footer-top\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<div class=\"footer-info\">
\t\t\t\t\t\t\t\t<h3>Freelancy</h3>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tAriana soghra
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tTunisia<br><br>
\t\t\t\t\t\t\t\t\t<strong>Phone:</strong>
\t\t\t\t\t\t\t\t\t+216 12345678<br>
\t\t\t\t\t\t\t\t\t<strong>Email:</strong>
\t\t\t\t\t\t\t\t\tFreelancy.team@support.com<br>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>


\t\t</footer>
\t\t<!-- End Footer -->

\t\t<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\">
\t\t\t<i class=\"bi bi-arrow-up-short\"></i>
\t\t</a>
\t\t<div id=\"preloader\"></div>

\t\t<!-- Vendor JS Files -->
\t\t<script src=\"{{asset('assets/vendor/aos/aos.js')}}\"></script>
\t\t<script src=\"{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>
\t\t<script src=\"{{asset('assets/vendor/php-email-form/validate.js')}}\"></script>

\t\t<!-- Template Main JS File -->
\t\t<script src=\"{{asset('assets/js/main.js')}}\"></script>

\t</body>

</html>
", "base.html.twig", "C:\\Users\\Asus\\Desktop\\reclll\\templates\\base.html.twig");
    }
}
