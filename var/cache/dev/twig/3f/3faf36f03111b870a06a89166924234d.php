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
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </head>
    <body>
            ";
        // line 47
        $this->displayBlock('navbar', $context, $blocks);
        // line 116
        echo "
        ";
        // line 117
        $this->displayBlock('body', $context, $blocks);
        // line 118
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
              <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/css/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/demo/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
             <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" />
   <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("test.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\"/>
  <link rel=\"stylesheet\" href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\"/>
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css\"/>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "<!--   Core JS Files   -->
                <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/core/jquery.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/plugins/perfect-scrollbar.jquery.min.js"), "html", null, true);
        echo "\"></script>
                <!--  Google Maps Plugin    -->
                <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
                <!-- Chart JS -->
                <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>
                <!--  Notifications Plugin    -->
                <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/plugins/bootstrap-notify.js"), "html", null, true);
        echo "\"></script>
                <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
                <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/js/now-ui-dashboard.min.js?v=1.5.0\" type=\"text/javascript"), "html", null, true);
        echo "\"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
                <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets_admin/demo/demo.js"), "html", null, true);
        echo "\"></script>
                <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
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
        // line 68
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

    // line 117
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
        return array (  310 => 117,  252 => 68,  220 => 47,  206 => 41,  202 => 40,  197 => 38,  192 => 36,  185 => 32,  181 => 31,  177 => 30,  173 => 29,  170 => 28,  160 => 27,  143 => 19,  138 => 17,  133 => 15,  129 => 14,  125 => 13,  119 => 9,  109 => 8,  90 => 5,  78 => 118,  76 => 117,  73 => 116,  71 => 47,  67 => 45,  65 => 27,  62 => 26,  59 => 8,  54 => 5,  48 => 1,);
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
              <link href=\"{{ asset ('assets_admin/css/stylesheet.css')}}\" rel=\"stylesheet\" />
            <!-- CSS Just for demo purpose, don't include it in your project -->
            <link href=\"{{ asset ('assets_admin/demo/demo.css')}}\" rel=\"stylesheet\" />
             <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" />
   <link href=\"{{ asset ('test.css')}}\" rel=\"stylesheet\" />

  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css\"/>
  <link rel=\"stylesheet\" href=\"https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css\"/>
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css\"/>

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
                <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

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
