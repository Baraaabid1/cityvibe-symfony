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

/* reclamation/list_reclamations.html.twig */
class __TwigTemplate_b16eb26b4b67b10ad16f8d3d74ac7a4e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list_reclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list_reclamations.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "reclamation/list_reclamations.html.twig", 1);
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
        echo "  <nav class=\"navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute\">
        <div class=\"container-fluid\">
          <div class=\"navbar-wrapper\">
            <div class=\"navbar-toggle\">
              <button type=\"button\" class=\"navbar-toggler\">
                <span class=\"navbar-toggler-bar bar1\"></span>
                <span class=\"navbar-toggler-bar bar2\"></span>
                <span class=\"navbar-toggler-bar bar3\"></span>
              </button>
            </div>
            <a class=\"navbar-brand\" href=\"#pablo\">List des Reclamations </a>
          </div>
          <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
            <form>
              <div class=\"input-group no-border\">
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search...\">
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\">
                    <i class=\"now-ui-icons ui-1_zoom-bold\"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class=\"panel-header panel-header-sm\">
      </div>
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h4 class=\"card-title\"> Liste des Reclamations </h4>
              </div>
              <div class=\"card-body\">
          <div style=\"display: flex; justify-content: space-between;\">
    <div style=\"display: inline-block;\">
        <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_reclamationsDESC");
        echo "\">
            <i class=\"now-ui-icons arrows-1_minimal-up\"></i>
        </a>
    </div>

    <div style=\"display: inline-block; margin-left: 10px;\">
        <a class=\"nav-link\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_list_reclamations");
        echo "\">
            <i class=\"now-ui-icons arrows-1_minimal-down\"></i>
        </a>
    </div>

    <div style=\"display: inline-block;\">
        <div style=\"display: inline-block; margin-right: 10px;\">
            <div class=\"dropdown\" style=\"position: relative;\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <p>
                        <span class=\"d-lg-none d-md-block\">Some Actions</span>
                    </p>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\" style=\"position: absolute;\">
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"ReclamationUrgente\">Réclamation Urgente</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"BugsOuPlantages\">Bugs ou plantages</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"ContenuInapproprie\">Contenu inapproprié</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"InformationsIncorrectes\">Informations incorrectes</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"ProblemesDeSecurite\">Problèmes de sécurité</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"SuggestionsDamelioration\">Suggestions d'amélioration</a>
                </div>
            </div>
        </div>
    </div>
</div>


                <div class=\"table-responsive\">
                  <style>
  .table td, .table th {
    white-space: normal !important;
    word-wrap: break-word;
    max-width: 120px; /* Adjust the width as needed */
  }
</style>

<table class=\"table\" >
  <thead class=\"text-primary\">
    <th>
      Titre
    </th>
    <th>
      Date
    </th>
    <th>
      Type 
    </th>
    <th>
      A propos
    </th>
    <th>
      Contenu
    </th>
    <th>
      Action
    </th>
  </thead>
 <tbody id=\"reclamationsTable\">
    ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 107
            echo "        <tr>
            <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titrer", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
            <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "temp", [], "any", false, false, false, 109), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "typer", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
            <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Apropo", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
            <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "contenu", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_reclamation_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idr", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\">Supprimer</a>
                <a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mainAdmin_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idr", [], "any", false, false, false, 115)]), "html", null, true);
            echo "\">Repondre</a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "</tbody>
</table>

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
    // Add event listener to dropdown items
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', event => {
            // Get the selected type
            const type = event.target.getAttribute('data-type');
            // Construct the URL with the selected type
            const url = `/admin/reclamationpartype/\${type}`;
            // Redirect to the URL
            window.location.href = url;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('#reclamationsTable tr');

        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.trim().toLowerCase();

            tableRows.forEach(row => {
                const titleCell = row.querySelector('td:first-child');
                if (titleCell) {
                    const titleText = titleCell.textContent.trim().toLowerCase();
                    if (titleText.includes(searchTerm)) {
                        row.style.display = ''; // Show the row
                    } else {
                        row.style.display = 'none'; // Hide the row
                    }
                }
            });
        });
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
        return "reclamation/list_reclamations.html.twig";
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
        return array (  221 => 119,  211 => 115,  207 => 114,  202 => 112,  198 => 111,  194 => 110,  190 => 109,  186 => 108,  183 => 107,  179 => 106,  118 => 48,  109 => 42,  68 => 3,  58 => 2,  35 => 1,);
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
            <a class=\"navbar-brand\" href=\"#pablo\">List des Reclamations </a>
          </div>
          <div class=\"collapse navbar-collapse justify-content-end\" id=\"navigation\">
            <form>
              <div class=\"input-group no-border\">
                <input type=\"text\" id=\"searchInput\" class=\"form-control\" placeholder=\"Search...\">
                <div class=\"input-group-append\">
                  <div class=\"input-group-text\">
                    <i class=\"now-ui-icons ui-1_zoom-bold\"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class=\"panel-header panel-header-sm\">
      </div>
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h4 class=\"card-title\"> Liste des Reclamations </h4>
              </div>
              <div class=\"card-body\">
          <div style=\"display: flex; justify-content: space-between;\">
    <div style=\"display: inline-block;\">
        <a class=\"nav-link\" href=\"{{ path('app_list_reclamationsDESC') }}\">
            <i class=\"now-ui-icons arrows-1_minimal-up\"></i>
        </a>
    </div>

    <div style=\"display: inline-block; margin-left: 10px;\">
        <a class=\"nav-link\" href=\"{{ path('app_list_reclamations') }}\">
            <i class=\"now-ui-icons arrows-1_minimal-down\"></i>
        </a>
    </div>

    <div style=\"display: inline-block;\">
        <div style=\"display: inline-block; margin-right: 10px;\">
            <div class=\"dropdown\" style=\"position: relative;\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <p>
                        <span class=\"d-lg-none d-md-block\">Some Actions</span>
                    </p>
                </a>
                <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"navbarDropdownMenuLink\" style=\"position: absolute;\">
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"ReclamationUrgente\">Réclamation Urgente</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"BugsOuPlantages\">Bugs ou plantages</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"ContenuInapproprie\">Contenu inapproprié</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"InformationsIncorrectes\">Informations incorrectes</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"ProblemesDeSecurite\">Problèmes de sécurité</a>
                    <a class=\"dropdown-item\" href=\"#\" data-type=\"SuggestionsDamelioration\">Suggestions d'amélioration</a>
                </div>
            </div>
        </div>
    </div>
</div>


                <div class=\"table-responsive\">
                  <style>
  .table td, .table th {
    white-space: normal !important;
    word-wrap: break-word;
    max-width: 120px; /* Adjust the width as needed */
  }
</style>

<table class=\"table\" >
  <thead class=\"text-primary\">
    <th>
      Titre
    </th>
    <th>
      Date
    </th>
    <th>
      Type 
    </th>
    <th>
      A propos
    </th>
    <th>
      Contenu
    </th>
    <th>
      Action
    </th>
  </thead>
 <tbody id=\"reclamationsTable\">
    {% for reclamation in reclamations %}
        <tr>
            <td>{{ reclamation.titrer }}</td>
            <td>{{ reclamation.temp|date('Y-m-d H:i:s') }}</td>
            <td>{{ reclamation.typer }}</td>
            <td>{{ reclamation.Apropo }}</td>
            <td>{{ reclamation.contenu }}</td>
            <td>
                <a href=\"{{ path('app_delete_reclamation_admin', {'id': reclamation.idr}) }}\">Supprimer</a>
                <a href=\"{{ path('app_mainAdmin_reponse', {'id': reclamation.idr}) }}\">Repondre</a>
            </td>
        </tr>
    {% endfor %}
</tbody>
</table>

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
    // Add event listener to dropdown items
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', event => {
            // Get the selected type
            const type = event.target.getAttribute('data-type');
            // Construct the URL with the selected type
            const url = `/admin/reclamationpartype/\${type}`;
            // Redirect to the URL
            window.location.href = url;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const tableRows = document.querySelectorAll('#reclamationsTable tr');

        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.trim().toLowerCase();

            tableRows.forEach(row => {
                const titleCell = row.querySelector('td:first-child');
                if (titleCell) {
                    const titleText = titleCell.textContent.trim().toLowerCase();
                    if (titleText.includes(searchTerm)) {
                        row.style.display = ''; // Show the row
                    } else {
                        row.style.display = 'none'; // Hide the row
                    }
                }
            });
        });
    });
</script>
{% endblock %}", "reclamation/list_reclamations.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\reclamation\\list_reclamations.html.twig");
    }
}
