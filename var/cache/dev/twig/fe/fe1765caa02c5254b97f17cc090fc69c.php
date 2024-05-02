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

/* reclamation/index.html.twig */
class __TwigTemplate_224d598058e2b3e858dab49ea3ff9cef extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", ["succès"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "    <div class=\"alert alert-success\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "<!DOCTYPE html>
<html lang=\"en\">

<body>


<main class=\"main\">

<!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Reclamer</h1>
              <p class=\"mb-0\">Nous sommes prêts à vous aider !</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">Home</a></li>
            
            <li class=\"current\">Reclamation</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
          <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      </div><!-- End Google Maps -->
      <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      </div><!-- End Google Maps -->
    <section id=\"contact\" class=\"contact section\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4\">
                <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_user_reclamations");
        echo "\" class=\"btn-mesReclamations\" style=\"margin-bottom: 20px\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    Consulter réclamations
                </a>

                <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <i class=\"bi bi-telephone flex-shrink-0\"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div><!-- End Info Item -->

                <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                    <i class=\"bi bi-envelope flex-shrink-0\"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class=\"col-lg-8\">
                 ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
        echo "
                <div class=\"row gy-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "titrer", [], "any", false, false, false, 75), 'label', ["label" => "Titre"]);
        echo "
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "titrer", [], "any", false, false, false, 76), 'errors');
        echo "
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "titrer", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre"]]);
        echo "

                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "typer", [], "any", false, false, false, 83), 'label', ["label" => "Le type de la réclamation"]);
        echo "
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "typer", [], "any", false, false, false, 84), 'errors');
        echo "
                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "typer", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Le type de la réclamation"]]);
        echo "
                        </div>
                    </div>

                         <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "apropo", [], "any", false, false, false, 91), 'label', ["label" => "À propos"]);
        echo "
                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "apropo", [], "any", false, false, false, 92), 'errors');
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "apropo", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "À propos", "id" => "apropoField"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "contenu", [], "any", false, false, false, 99), 'label', ["label" => "Votre réclamation"]);
        echo "
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "contenu", [], "any", false, false, false, 100), 'errors');
        echo "
                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "contenu", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "form-control", "rows" => "6", "placeholder" => "Votre réclamation"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"col-md-12 text-center\">
                        <div class=\"error-message\"></div>
                        <button type=\"submit\" class=\"btn btn-primary\">Reclamer</button>
                    </div>
                </div>
                ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
</section>

 </main>

  
<!-- Scroll Top -->
<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Preloader -->
<div id=\"preloader\"></div>



</script>

<!-- Vendor JS Files -->
<script src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Main JS File -->
<script src=\"";
        // line 138
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
        return "reclamation/index.html.twig";
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
        return array (  299 => 138,  293 => 135,  289 => 134,  285 => 133,  281 => 132,  277 => 131,  273 => 130,  250 => 110,  238 => 101,  234 => 100,  230 => 99,  221 => 93,  217 => 92,  213 => 91,  204 => 85,  200 => 84,  196 => 83,  187 => 77,  183 => 76,  179 => 75,  172 => 71,  147 => 49,  129 => 34,  104 => 11,  95 => 8,  92 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}cityvive{% endblock %}

{% block body %}
{% for flashMessage in app.flashes('succès') %}
    <div class=\"alert alert-success\">
        {{ flashMessage }}
    </div>
{% endfor %}
<!DOCTYPE html>
<html lang=\"en\">

<body>


<main class=\"main\">

<!-- Page Title -->
    <div class=\"page-title\" data-aos=\"fade\">
      <div class=\"heading\">
        <div class=\"container\">
          <div class=\"row d-flex justify-content-center text-center\">
            <div class=\"col-lg-8\">
              <h1>Reclamer</h1>
              <p class=\"mb-0\">Nous sommes prêts à vous aider !</p>
            </div>
          </div>
        </div>
      </div>
      <nav class=\"breadcrumbs\">
        <div class=\"container\">
          <ol>
            <li><a href=\"{{ path('app_main') }}\">Home</a></li>
            
            <li class=\"current\">Reclamation</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->
          <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      </div><!-- End Google Maps -->
      <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
      </div><!-- End Google Maps -->
    <section id=\"contact\" class=\"contact section\">
        <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4\">
                <a href=\"{{ path('app_list_user_reclamations') }}\" class=\"btn-mesReclamations\" style=\"margin-bottom: 20px\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                    Consulter réclamations
                </a>

                <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    <i class=\"bi bi-telephone flex-shrink-0\"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div><!-- End Info Item -->

                <div class=\"info-item d-flex\" data-aos=\"fade-up\" data-aos-delay=\"500\">
                    <i class=\"bi bi-envelope flex-shrink-0\"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>info@example.com</p>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class=\"col-lg-8\">
                 {{ form_start(form, {'attr': {'novalidate':'novalidate', 'autocomplete': 'off'}}) }}
                <div class=\"row gy-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(form.titrer, \"Titre\") }}
                            {{ form_errors(form.titrer) }}
                            {{ form_widget(form.titrer, {'attr': {'class': 'form-control', 'placeholder': 'Titre'}}) }}

                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(form.typer, \"Le type de la réclamation\") }}
                            {{ form_errors(form.typer) }}
                            {{ form_widget(form.typer, {'attr': {'class': 'form-control', 'placeholder': 'Le type de la réclamation'}}) }}
                        </div>
                    </div>

                         <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            {{ form_label(form.apropo, \"À propos\") }}
                            {{ form_errors(form.apropo) }}
                            {{ form_widget(form.apropo, {'attr': {'class': 'form-control', 'placeholder': 'À propos', 'id': 'apropoField'}}) }}
                        </div>
                    </div>

                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            {{ form_label(form.contenu, \"Votre réclamation\") }}
                            {{ form_errors(form.contenu) }}
                            {{ form_widget(form.contenu, {'attr': {'class': 'form-control', 'rows': '6', 'placeholder': 'Votre réclamation'}}) }}
                        </div>
                    </div>

                    <div class=\"col-md-12 text-center\">
                        <div class=\"error-message\"></div>
                        <button type=\"submit\" class=\"btn btn-primary\">Reclamer</button>
                    </div>
                </div>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</section>

 </main>

  
<!-- Scroll Top -->
<a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

<!-- Preloader -->
<div id=\"preloader\"></div>



</script>

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
{% endblock %}", "reclamation/index.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\reclamation\\index.html.twig");
    }
}
