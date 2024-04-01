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
class __TwigTemplate_0679a7e320a55c4cabca169aca36bb87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 8
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "    </head>
    <body>
    ";
        // line 45
        $this->displayBlock('header', $context, $blocks);
        // line 121
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 122
        echo "         ";
        $this->displayBlock('footer', $context, $blocks);
        // line 194
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "
           
            <!-- Favicons -->
            <link href=\"assets/img/favicon.png\" rel=\"icon\">
            <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

            <!-- Fonts -->
            <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <!-- Main CSS File -->
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "              <!-- Vendor JS Files -->
                <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>

                <!-- Main JS File -->
                <script src=src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 45
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 46
        echo "    <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"assets/img/cityvibelogo.png\" alt=\"\"> 
        
                <!-- <h1 class=\"\">Mentor</h1> -->

      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"courses.html\">Courses</a></li>
          <li><a href=\"trainers.html\">Trainers</a></li>
          <li><a href=\"events.html\">Events</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li class=\"megamenu has-dropdown\"><a href=\"#\"><span>Mega Menu</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li>
                <a href=\"#\">Column 1 link 1</a>
                <a href=\"#\">Column 1 link 2</a>
                <a href=\"#\">Column 1 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 2 link 1</a>
                <a href=\"#\">Column 2 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 3 link 1</a>
                <a href=\"#\">Column 3 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 4 link 1</a>
                <a href=\"#\">Column 4 link 2</a>
                <a href=\"#\">Column 4 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 5 link 1</a>
                <a href=\"#\">Column 5 link 2</a>
                <a href=\"#\">Column 5 link 3</a>
              </li>
            </ul>
          </li>
          <li><a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajout_reclamation");
        echo "\">Reclamation</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <a class=\"btn-getstarted\" href=\"courses.html\">Get Started</a>

    </div>
  </header>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
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

    // line 122
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 123
        echo "         <footer id=\"footer\" class=\"footer position-relative\">

    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"\">Mentor</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
            <div class=\"newsletter-form\"><input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\"></div>
            <div class=\"loading\">Loading</div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1\">SiteName</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>
         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  348 => 123,  338 => 122,  320 => 121,  300 => 111,  245 => 59,  230 => 46,  220 => 45,  208 => 41,  202 => 38,  198 => 37,  194 => 36,  190 => 35,  186 => 34,  182 => 33,  179 => 32,  169 => 31,  157 => 28,  151 => 25,  147 => 24,  143 => 23,  139 => 22,  135 => 21,  121 => 9,  111 => 8,  92 => 5,  80 => 194,  77 => 122,  74 => 121,  72 => 45,  68 => 43,  66 => 31,  63 => 30,  60 => 8,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
        {% block stylesheets %}

           
            <!-- Favicons -->
            <link href=\"assets/img/favicon.png\" rel=\"icon\">
            <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

            <!-- Fonts -->
            <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
            <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

            <!-- Vendor CSS Files -->
            <link href=\"{{ asset ('assets/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{ asset ('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
            <link href=\"{{ asset ('assets/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
            <link href=\"{{ asset ('assets/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
            <link href=\"{{ asset ('assets/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

            <!-- Main CSS File -->
            <link href=\"{{ asset ('assets/css/main.css')}}\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
              <!-- Vendor JS Files -->
                <script src=\"{{ asset ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
                <script src=\"{{ asset ('assets/vendor/php-email-form/validate.js') }}\"></script>
                <script src=\"{{ asset ('assets/vendor/aos/aos.js')}}\"></script>
                <script src=\"{{ asset ('assets/vendor/glightbox/js/glightbox.min.js')}}\"></script>
                <script src=\"{{ asset ('assets/vendor/purecounter/purecounter_vanilla.js')}}\"></script>
                <script src=\"{{ asset ('assets/vendor/swiper/swiper-bundle.min.js')}}\"></script>

                <!-- Main JS File -->
                <script src=src=\"{{ asset ('assets/js/main.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
    {% block header %}
    <header id=\"header\" class=\"header d-flex align-items-center sticky-top\">
    <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src=\"assets/img/cityvibelogo.png\" alt=\"\"> 
        
                <!-- <h1 class=\"\">Mentor</h1> -->

      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ path('app_main') }}\">Home</a></li>
          <li><a href=\"about.html\">About</a></li>
          <li><a href=\"courses.html\">Courses</a></li>
          <li><a href=\"trainers.html\">Trainers</a></li>
          <li><a href=\"events.html\">Events</a></li>
          <li><a href=\"pricing.html\">Pricing</a></li>
          <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown has-dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li class=\"megamenu has-dropdown\"><a href=\"#\"><span>Mega Menu</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li>
                <a href=\"#\">Column 1 link 1</a>
                <a href=\"#\">Column 1 link 2</a>
                <a href=\"#\">Column 1 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 2 link 1</a>
                <a href=\"#\">Column 2 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 3 link 1</a>
                <a href=\"#\">Column 3 link 2</a>
                <a href=\"#\">Column 3 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 4 link 1</a>
                <a href=\"#\">Column 4 link 2</a>
                <a href=\"#\">Column 4 link 3</a>
              </li>
              <li>
                <a href=\"#\">Column 5 link 1</a>
                <a href=\"#\">Column 5 link 2</a>
                <a href=\"#\">Column 5 link 3</a>
              </li>
            </ul>
          </li>
          <li><a href=\"{{ path('app_ajout_reclamation') }}\">Reclamation</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <a class=\"btn-getstarted\" href=\"courses.html\">Get Started</a>

    </div>
  </header>
    {% endblock %}
        {% block body %}{% endblock %}
         {% block footer %}
         <footer id=\"footer\" class=\"footer position-relative\">

    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"\">Mentor</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-4 col-md-12 footer-newsletter\">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
            <div class=\"newsletter-form\"><input type=\"email\" name=\"email\"><input type=\"submit\" value=\"Subscribe\"></div>
            <div class=\"loading\">Loading</div>
            <div class=\"error-message\"></div>
            <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1\">SiteName</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>
         {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\base.html.twig");
    }
}
