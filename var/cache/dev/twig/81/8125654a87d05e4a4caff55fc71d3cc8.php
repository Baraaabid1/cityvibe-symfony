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

/* reclamation/test.html.twig */
class __TwigTemplate_5b03896b83eaf58ee6d05b1ed538839f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/test.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/test.html.twig", 1);
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

        echo "cityvive";
        
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<body>
<main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\"style=\"margin-bottom: 20px;\">
        <div class=\"container\">
          <ol>
            <li><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">Home</a></li>
            <li class=\"current\">Mes Reclamations</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Events Section -->
    <section id=\"events\" class=\"events section\">

  <div class=\"container\" data-aos=\"fade-up\">

    <div class=\"row g-4\">
      ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 36
            echo "      <div class=\"col-md-6\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titrer", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></h5>
            <p class=\"fst-italic text-center\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "typer", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
            <p class=\"fst-italic text-center\">";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "temp", [], "any", false, false, false, 41), "l, F jS Y \\a\\t g:ia"), "html", null, true);
            echo "</p>
            <p class=\"card-text\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "contenu", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
            <div class=\"text-center mt-3\">
       <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idr", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-primary mx-2\">Supprimer</a>
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idr", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\" class=\"btn btn-primary mx-2\">Modifier</a>
        <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajout_reponser", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idr", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\" class=\"btn btn-primary mx-2\">Repondre</a>
           </div>
          </div>
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>

  </div>

</section>
      </div>

    </section><!-- /Events Section -->

  </main>



<!-- Scroll Top -->
<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Preloader -->
<div id=\"preloader\"></div>

<!-- Vendor JS Files -->
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Main JS File -->
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/test.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  216 => 80,  210 => 77,  206 => 76,  202 => 75,  198 => 74,  194 => 73,  190 => 72,  168 => 52,  156 => 46,  152 => 45,  148 => 44,  143 => 42,  139 => 41,  135 => 40,  131 => 39,  126 => 36,  122 => 35,  106 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}cityvive{% endblock %}

{% block body %}
<!DOCTYPE html>
<html lang=\"en\">
<body>
<main class=\"main\">

    <!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\"style=\"margin-bottom: 20px;\">
        <div class=\"container\">
          <ol>
            <li><a href=\"{{ path('app_main') }}\">Home</a></li>
            <li class=\"current\">Mes Reclamations</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Events Section -->
    <section id=\"events\" class=\"events section\">

  <div class=\"container\" data-aos=\"fade-up\">

    <div class=\"row g-4\">
      {% for reclamation in reclamations %}
      <div class=\"col-md-6\">
        <div class=\"card\">
          <div class=\"card-body\">
            <h5 class=\"card-title\"><a href=\"\">{{ reclamation.titrer }}</a></h5>
            <p class=\"fst-italic text-center\">{{ reclamation.typer }}</p>
            <p class=\"fst-italic text-center\">{{ reclamation.temp|date('l, F jS Y \\\\a\\\\t g:ia') }}</p>
            <p class=\"card-text\">{{ reclamation.contenu }}</p>
            <div class=\"text-center mt-3\">
       <a href=\"{{ path('app_delete_reclamation', {'id': reclamation.idr}) }}\" class=\"btn btn-primary mx-2\">Supprimer</a>
        <a href=\"{{ path('app_edit_reclamation', {'id': reclamation.idr}) }}\" class=\"btn btn-primary mx-2\">Modifier</a>
        <a href=\"{{ path('app_ajout_reponser', {'id': reclamation.idr}) }}\" class=\"btn btn-primary mx-2\">Repondre</a>
           </div>
          </div>
        </div>
      </div>
      {% endfor %}
    </div>

  </div>

</section>
      </div>

    </section><!-- /Events Section -->

  </main>



<!-- Scroll Top -->
<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Preloader -->
<div id=\"preloader\"></div>

<!-- Vendor JS Files -->
<script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/php-email-form/validate.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>

<!-- Main JS File -->
<script src=\"{{ asset('assets/js/main.js') }}\"></script>
</body>
</html>
{% endblock %}", "reclamation/test.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\reclamation\\test.html.twig");
    }
}
