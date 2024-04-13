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

/* baseA.html.twig */
class __TwigTemplate_2a9a498dabd06ab54f1d3f6f6e94e8cb extends Template
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
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseA.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseA.html.twig"));

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
        // line 18
        echo "
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    </head>
    <body>
            ";
        // line 37
        $this->displayBlock('navbar', $context, $blocks);
        // line 106
        echo "
        ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 108
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
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
            <!-- CSS Files -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/css/now-ui-dashboard.css?v=1.5.0"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/demo/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "<!--   Core JS Files   -->
                <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/core/jquery.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/plugins/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
                <!--  Google Maps Plugin    -->
                <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
                <!-- Chart JS -->
                <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>
                <!--  Notifications Plugin    -->
                <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/plugins/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
                <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
                <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/now-ui-dashboard.min.js?v=1.5.0\" type=\"text/javascript"), "html", null, true);
        echo "\"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
                <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/demo/demo.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 37
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        echo "<div class=\"sidebar\" data-color=\"orange\">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color=\"blue | green | orange | red | yellow\"
    -->
      <div class=\"logo\">
        <a href=\"http://www.creative-tim.com\" class=\"simple-text logo-mini\">
          CT
        </a>
        <a href=\"http://www.creative-tim.com\" class=\"simple-text logo-normal\">
          Creative Tim
        </a>
      </div>
      <div class=\"sidebar-wrapper\" id=\"sidebar-wrapper\">
        <ul class=\"nav\">
          <li class=\"active \">
            <a href=\"./dashboard.html\">
              <i class=\"now-ui-icons design_app\"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a  href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_reclamations");
        echo "\">
           
              <i class=\"now-ui-icons education_atom\"></i>
              <p>Reclamations</p>
            </a>
          </li>
          <li>
            <a href=\"./map.html\">
              <i class=\"now-ui-icons location_map-big\"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href=\"./notifications.html\">
              <i class=\"now-ui-icons ui-1_bell-53\"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href=\"./user.html\">
              <i class=\"now-ui-icons users_single-02\"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href=\"./tables.html\">
              <i class=\"now-ui-icons design_bullet-list-67\"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href=\"./typography.html\">
              <i class=\"now-ui-icons text_caps-small\"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class=\"active-pro\">
            <a href=\"./upgrade.html\">
              <i class=\"now-ui-icons arrows-1_cloud-download-93\"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class=\"main-panel\" id=\"main-panel\">
      <!-- Navbar -->
     ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "baseA.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  294 => 107,  236 => 58,  204 => 37,  192 => 33,  188 => 32,  183 => 30,  178 => 28,  171 => 24,  167 => 23,  163 => 22,  159 => 21,  156 => 20,  146 => 19,  134 => 16,  129 => 14,  125 => 13,  119 => 9,  109 => 8,  90 => 5,  78 => 108,  76 => 107,  73 => 106,  71 => 37,  67 => 35,  65 => 19,  62 => 18,  59 => 8,  54 => 5,  48 => 1,);
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

            <link href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700,200\" rel=\"stylesheet\" />
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.1/css/all.css\" integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\" crossorigin=\"anonymous\">
            <!-- CSS Files -->
            <link href=\"{{ asset ('assets_admin/css/bootstrap.min.css')}}\" rel=\"stylesheet\" />
            <link href=\"{{ asset ('assets_admin/css/now-ui-dashboard.css?v=1.5.0')}}\" rel=\"stylesheet\" />
            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link href=\"{{ asset ('assets_admin/demo/demo.css')}}\" rel=\"stylesheet\" />
        {% endblock %}

        {% block javascripts %}
<!--   Core JS Files   -->
                <script src=\"{{ asset ('assets_admin/js/core/jquery.min.js')}}\"></script>
                <script src=\"{{ asset ('assets_admin/js/core/popper.min.js')}}\"></script>
                <script src=\"{{ asset ('assets_admin/js/core/bootstrap.min.js')}}\"></script>
                <script src=\"{{ asset ('assets_admin/js/plugins/perfect-scrollbar.jquery.min.js')}}\"></script>
                <!--  Google Maps Plugin    -->
                <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
                <!-- Chart JS -->
                <script src=\"{{ asset ('assets_admin/js/plugins/chartjs.min.js')}}\"></script>
                <!--  Notifications Plugin    -->
                <script src=\"{{ asset ('assets_admin/js/plugins/bootstrap-notify.js')}}\"></script>
                <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
                <script src=\"{{ asset ('assets_admin/js/now-ui-dashboard.min.js?v=1.5.0\" type=\"text/javascript')}}\"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
                <script src=\"{{ asset ('assets_admin/demo/demo.js')}}\"></script>
        {% endblock %}
    </head>
    <body>
            {% block navbar %}<div class=\"sidebar\" data-color=\"orange\">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color=\"blue | green | orange | red | yellow\"
    -->
      <div class=\"logo\">
        <a href=\"http://www.creative-tim.com\" class=\"simple-text logo-mini\">
          CT
        </a>
        <a href=\"http://www.creative-tim.com\" class=\"simple-text logo-normal\">
          Creative Tim
        </a>
      </div>
      <div class=\"sidebar-wrapper\" id=\"sidebar-wrapper\">
        <ul class=\"nav\">
          <li class=\"active \">
            <a href=\"./dashboard.html\">
              <i class=\"now-ui-icons design_app\"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a  href=\"{{ path('app_list_reclamations') }}\">
           
              <i class=\"now-ui-icons education_atom\"></i>
              <p>Reclamations</p>
            </a>
          </li>
          <li>
            <a href=\"./map.html\">
              <i class=\"now-ui-icons location_map-big\"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href=\"./notifications.html\">
              <i class=\"now-ui-icons ui-1_bell-53\"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href=\"./user.html\">
              <i class=\"now-ui-icons users_single-02\"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href=\"./tables.html\">
              <i class=\"now-ui-icons design_bullet-list-67\"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href=\"./typography.html\">
              <i class=\"now-ui-icons text_caps-small\"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class=\"active-pro\">
            <a href=\"./upgrade.html\">
              <i class=\"now-ui-icons arrows-1_cloud-download-93\"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class=\"main-panel\" id=\"main-panel\">
      <!-- Navbar -->
     {% endblock %}

        {% block body %}{% endblock %}
    </body>
</html>
", "baseA.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\baseA.html.twig");
    }
}
