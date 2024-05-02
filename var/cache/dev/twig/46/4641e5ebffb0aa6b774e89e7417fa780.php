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

/* reclamation/recstat.html.twig */
class __TwigTemplate_79896354a76741821df00af81ab8a132 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseA.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/recstat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/recstat.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "reclamation/recstat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<nav class=\"navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute\">
        <div class=\"container-fluid\">
          <div class=\"navbar-wrapper\">
            <div class=\"navbar-toggle\">
              <button type=\"button\" class=\"navbar-toggler\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
              </button>
            </div>
            <a class=\"navbar-brand\" href=\"#pablo\">Statistiques des Reclamations</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class=\"panel-header panel-header-lg\">
        <canvas id=\"bigDashboardChart\"></canvas>
      </div>
      <div class=\"content\">
        <div class=\"row justify-content-center\">      
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"card card-chart\">
              <div class=\"card-header\">
                <h5 class=\"card-category\">A propo </h5>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret\" data-toggle=\"dropdown\">
                    <i class=\"now-ui-icons loader_gear\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-right\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <a class=\"dropdown-item text-danger\" href=\"#\">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class=\"card-body\">
                <div class=\"chart-area\">
                  <canvas id=\"lineChartExampleWithNumbersAndGrid\"></canvas>
                </div>
              </div>
              <div class=\"card-footer\">
                <div class=\"stats\">
                  <i class=\"now-ui-icons arrows-1_refresh-69\"></i> 
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"card card-chart\">
              <div class=\"card-header\">
                <h5 class=\"card-category\">Reclamations par Type</h5>
              </div>
              <div class=\"card-body\">
                <div class=\"chart-area\">
                  <canvas id=\"barChartSimpleGradientsNumbers\"></canvas>
                </div>
              </div>
              <div class=\"card-footer\">
                <div class=\"stats\">
                  <i class=\"now-ui-icons ui-2_time-alarm\"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src=\"../assets/js/core/jquery.min.js\"></script>
  <script src=\"../assets/js/core/popper.min.js\"></script>
  <script src=\"../assets/js/core/bootstrap.min.js\"></script>
  <script src=\"../assets/js/plugins/perfect-scrollbar.jquery.min.js\"></script>
  <!--  Google Maps Plugin    -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
  <!-- Chart JS -->
  <script src=\"../assets/js/plugins/chartjs.min.js\"></script>
  <!--  Notifications Plugin    -->
  <script src=\"../assets/js/plugins/bootstrap-notify.js\"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=\"../assets/js/now-ui-dashboard.min.js?v=1.5.0\" type=\"text/javascript\"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src=\"../assets/demo/demo.js\"></script>
  <script>
    \$(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/recstat.html.twig";
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
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block body %}
<nav class=\"navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute\">
        <div class=\"container-fluid\">
          <div class=\"navbar-wrapper\">
            <div class=\"navbar-toggle\">
              <button type=\"button\" class=\"navbar-toggler\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
              </button>
            </div>
            <a class=\"navbar-brand\" href=\"#pablo\">Statistiques des Reclamations</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class=\"panel-header panel-header-lg\">
        <canvas id=\"bigDashboardChart\"></canvas>
      </div>
      <div class=\"content\">
        <div class=\"row justify-content-center\">      
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"card card-chart\">
              <div class=\"card-header\">
                <h5 class=\"card-category\">A propo </h5>
                <div class=\"dropdown\">
                  <button type=\"button\" class=\"btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret\" data-toggle=\"dropdown\">
                    <i class=\"now-ui-icons loader_gear\"></i>
                  </button>
                  <div class=\"dropdown-menu dropdown-menu-right\">
                    <a class=\"dropdown-item\" href=\"#\">Action</a>
                    <a class=\"dropdown-item\" href=\"#\">Another action</a>
                    <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    <a class=\"dropdown-item text-danger\" href=\"#\">Remove Data</a>
                  </div>
                </div>
              </div>
              <div class=\"card-body\">
                <div class=\"chart-area\">
                  <canvas id=\"lineChartExampleWithNumbersAndGrid\"></canvas>
                </div>
              </div>
              <div class=\"card-footer\">
                <div class=\"stats\">
                  <i class=\"now-ui-icons arrows-1_refresh-69\"></i> 
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"card card-chart\">
              <div class=\"card-header\">
                <h5 class=\"card-category\">Reclamations par Type</h5>
              </div>
              <div class=\"card-body\">
                <div class=\"chart-area\">
                  <canvas id=\"barChartSimpleGradientsNumbers\"></canvas>
                </div>
              </div>
              <div class=\"card-footer\">
                <div class=\"stats\">
                  <i class=\"now-ui-icons ui-2_time-alarm\"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src=\"../assets/js/core/jquery.min.js\"></script>
  <script src=\"../assets/js/core/popper.min.js\"></script>
  <script src=\"../assets/js/core/bootstrap.min.js\"></script>
  <script src=\"../assets/js/plugins/perfect-scrollbar.jquery.min.js\"></script>
  <!--  Google Maps Plugin    -->
  <script src=\"https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE\"></script>
  <!-- Chart JS -->
  <script src=\"../assets/js/plugins/chartjs.min.js\"></script>
  <!--  Notifications Plugin    -->
  <script src=\"../assets/js/plugins/bootstrap-notify.js\"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=\"../assets/js/now-ui-dashboard.min.js?v=1.5.0\" type=\"text/javascript\"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src=\"../assets/demo/demo.js\"></script>
  <script>
    \$(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
    {% endblock %}", "reclamation/recstat.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\reclamation\\recstat.html.twig");
    }
}
