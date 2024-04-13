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

/* reclamation\ajoutReponseA.html.twig */
class __TwigTemplate_9698bbfc48e0cc58f87cb554495e08b3 extends Template
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
        // line 2
        return "baseA.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation\\ajoutReponseA.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation\\ajoutReponseA.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "reclamation\\ajoutReponseA.html.twig", 2);
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
        echo " <div class=\"panel-header panel-header-sm\">
      </div>
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h5 class=\"title\">Reclamation</h5>
              </div>
              <div class=\"card-body\">
                <div class=\"typography-line\">
                  <h4><span>Titre</span>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 15, $this->source); })()), "titrer", [], "any", false, false, false, 15), "html", null, true);
        echo " </h4>
                </div>
                <div class=\"typography-line\">
                  <h6><span>type</span>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 18, $this->source); })()), "typer", [], "any", false, false, false, 18), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"typography-line\">
                  <p class=\"text-muted\">
                  ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 22, $this->source); })()), "apropo", [], "any", false, false, false, 22), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 22, $this->source); })()), "temp", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true);
        echo "
                  </p>
                </div>
                <div class=\"typography-line\">
                  <p><span>Contenu</span>
                         ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 27, $this->source); })()), "contenu", [], "any", false, false, false, 27), "html", null, true);
        echo "                  </p>
                </div>   
        </div>
      </div>
    </div>
  <div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card card-plain\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Repondre</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                         <table class=\"table\">
                            <tbody style=\"height: 50px; overflow-y: auto;\">
                                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamationResponses"]) || array_key_exists("reclamationResponses", $context) ? $context["reclamationResponses"] : (function () { throw new RuntimeError('Variable "reclamationResponses" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamationResponse"]) {
            // line 44
            echo "                                    <tr>
                                        ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "idu", [], "any", false, false, false, 45) == 1)) {
                // line 46
                echo "                                            <td class=\"text-right\">
                                            ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "textr", [], "any", false, false, false, 47), "html", null, true);
                echo "
                                            </td>
                                        ";
            } else {
                // line 50
                echo "                                            <td class=\"text-left\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "textr", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 52
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamationResponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"2\">
                                      ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
        echo "
                                        <div class=\"form-group\">
                                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "textr", [], "any", false, false, false, 60), 'errors');
        echo "
                                            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "textr", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Reponde"]]);
        echo "       
                                        </div>
                                    </td>
                                    <td>
                                        <button type=\"submit\" class=\"btn btn-primary\">send</button>
                                    </td>
                                </tr>
                                ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
                            </tfoot>
                        </table>
                    </div>
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


    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation\\ajoutReponseA.html.twig";
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
        return array (  179 => 68,  169 => 61,  165 => 60,  160 => 58,  154 => 54,  147 => 52,  141 => 50,  135 => 47,  132 => 46,  130 => 45,  127 => 44,  123 => 43,  104 => 27,  94 => 22,  87 => 18,  81 => 15,  68 => 4,  58 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# your_template.html.twig #}
{% extends 'baseA.html.twig' %}
{% block body %}
 <div class=\"panel-header panel-header-sm\">
      </div>
      <div class=\"content\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"card\">
              <div class=\"card-header\">
                <h5 class=\"title\">Reclamation</h5>
              </div>
              <div class=\"card-body\">
                <div class=\"typography-line\">
                  <h4><span>Titre</span>{{ reclamation.titrer}} </h4>
                </div>
                <div class=\"typography-line\">
                  <h6><span>type</span>{{ reclamation.typer}}</h6>
                </div>
                <div class=\"typography-line\">
                  <p class=\"text-muted\">
                  {{ reclamation.apropo}} - {{ reclamation.temp|date('Y-m-d H:i:s') }}
                  </p>
                </div>
                <div class=\"typography-line\">
                  <p><span>Contenu</span>
                         {{ reclamation.contenu}}                  </p>
                </div>   
        </div>
      </div>
    </div>
  <div class=\"container\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card card-plain\">
                <div class=\"card-header\">
                    <h4 class=\"card-title\">Repondre</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                         <table class=\"table\">
                            <tbody style=\"height: 50px; overflow-y: auto;\">
                                {% for reclamationResponse in reclamationResponses %}
                                    <tr>
                                        {% if reclamationResponse.idu == 1 %}
                                            <td class=\"text-right\">
                                            {{ reclamationResponse.textr }}
                                            </td>
                                        {% else %}
                                            <td class=\"text-left\">{{ reclamationResponse.textr }}</td>
                                        {% endif %}
                                    </tr>
                                {% endfor %}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan=\"2\">
                                      {{ form_start(form, {'attr': {'novalidate':'novalidate', 'autocomplete': 'off'}}) }}
                                        <div class=\"form-group\">
                                            {{ form_errors(form.textr) }}
                                            {{ form_widget(form.textr, {'attr': {'class': 'form-control', 'placeholder': 'Reponde'}}) }}       
                                        </div>
                                    </td>
                                    <td>
                                        <button type=\"submit\" class=\"btn btn-primary\">send</button>
                                    </td>
                                </tr>
                                {{ form_end(form) }}
                            </tfoot>
                        </table>
                    </div>
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


    {% endblock %}", "reclamation\\ajoutReponseA.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\reclamation\\ajoutReponseA.html.twig");
    }
}
