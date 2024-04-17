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

/* reclamation/AjoutReponse.html.twig */
class __TwigTemplate_c389c5ba96efb27e19dc9c6983e19eb3 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/AjoutReponse.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/AjoutReponse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/AjoutReponse.html.twig", 1);
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
        echo "  <div class=\"main-wrapper\">
    <div class=\"container\">
      <div class=\"page-content\">
        <div class=\"container mt-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-12 card-stacked\">
              <div class=\"card shadow-line mb-3 chat\">
               
                <div class=\"chat-search pl-3 pr-3\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search a conversation\">
                    <div class=\"input-group-append prepend-white\">
                      <span class=\"input-group-text pl-2 pr-2\">
                        <i class=\"fs-17 las la-search drop-shadow\"></i>
                      </span>
                    </div>
                  </div>
                </div>
         
                <div class=\"chat-user-panel\">
                  <div class=\"pb-3 d-flex flex-column navigation-mobile pagination-scrool chat-user-scroll\">
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListReclamations"]) || array_key_exists("ListReclamations", $context) ? $context["ListReclamations"] : (function () { throw new RuntimeError('Variable "ListReclamations" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lr"]) {
            // line 25
            echo "                    <div class=\"chat-item d-flex pl-3 pr-0 pt-3 pb-3\">
                      <div class=\"w-100\">
                        <div class=\"d-flex pl-0\">
                          <img class=\"rounded-circle shadow avatar-sm mr-3\" src=\"https://user-images.githubusercontent.com/35243461/168796872-7251e655-cdf0-4031-a253-bf0db09cdf0f.jpg\">
                          <div>
                            <p class=\"margin-auto fw-400 text-dark-75\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lr"], "idu", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                            <div class=\"d-flex flex-row mt-1\">
                              <span>
                                <div class=\"svg15 double-check\"></div>
                              </span>
                              <span class=\"message-shortcut margin-auto text-muted fs-13 ml-1 mr-4\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lr"], "titrer", [], "any", false, false, false, 35), "html", null, true);
            echo "</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                 </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-8 col-12 card-stacked\">
              <div class=\"card shadow-line mb-3 chat chat-panel\">
                <div class=\"p-3 chat-header\">
                  <div class=\"d-flex\">
                    <div class=\"w-100 d-flex pl-0\">
                      <img class=\"rounded-circle shadow avatar-sm mr-3 chat-profile-picture\" src=\"https://user-images.githubusercontent.com/35243461/168796877-f6c8819a-5d6e-4b2a-bd56-04963639239b.jpg\">
                      <div class=\"mr-3\">
                        <a href=\"!#\">
                          <p class=\"fw-400 mb-0 text-dark-75\">Beate Lemoine</p>
                        </a>
                        <p class=\"sub-caption text-muted text-small mb-0\"><i class=\"la la-clock mr-1\"></i>last seen today at 09:15 PM</p>
                      </div>
                    </div>
                    <div class=\"flex-shrink-0 margin-auto\">
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                          <line x1=\"12\" y1=\"16\" x2=\"12\" y2=\"12\"></line>
                          <line x1=\"12\" y1=\"8\" x2=\"12.01\" y2=\"8\"></line>
                        </svg>
                      </a>
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <polygon points=\"23 7 16 12 23 17 23 7\"></polygon>
                          <rect x=\"1\" y=\"5\" width=\"15\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                        </svg>
                      </a>
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                          <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                        </svg>
                      </a>
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <circle cx=\"12\" cy=\"12\" r=\"1\"></circle>
                          <circle cx=\"12\" cy=\"5\" r=\"1\"></circle>
                          <circle cx=\"12\" cy=\"19\" r=\"1\"></circle>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class=\"d-flex flex-row mb-3 navigation-mobile scrollable-chat-panel chat-panel-scroll\">
                  <div class=\"w-100 p-3\">
                                ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamationResponses"]) || array_key_exists("reclamationResponses", $context) ? $context["reclamationResponses"] : (function () { throw new RuntimeError('Variable "reclamationResponses" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamationResponse"]) {
            // line 92
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "idu", [], "any", false, false, false, 92) == 1)) {
                // line 93
                echo "              <div class=\"d-flex flex-row-reverse mb-2\">
                    <div class=\"right-chat-message fs-13 mb-2\">
                        <div class=\"mb-0 mr-3 pr-4\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"pr-2\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "textr", [], "any", false, false, false, 97), "html", null, true);
                echo "</div>
                                <div class=\"pr-4\"></div>
                            </div>
                        </div>
                        <div class=\"message-options dark\">
                            <div class=\"message-time\">
                                <div class=\"d-flex flex-row\">
                                    <div class=\"mr-2\">";
                // line 104
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "dateRepr", [], "any", false, false, false, 104), "H:i"), "html", null, true);
                echo "</div>
                                    <div class=\"svg15 double-check\"></div>
                                </div>
                            </div>
                            <div class=\"message-arrow\">
 <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_rep", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "idrr", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\" class=\"message-arrow\">
                        <i class=\"text-muted la la-angle-down fs-17\"></i>
                    </a>
                            </div>
                        </div>
                    </div>
                </div>
               
            ";
            } else {
                // line 118
                echo "             <div class=\"left-chat-message fs-13 mb-2\">
                    <p class=\"mb-0 mr-3 pr-4\">";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "textr", [], "any", false, false, false, 119), "html", null, true);
                echo "</p>
                    <div class=\"message-options\">
                        <div class=\"message-time\">";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "dateRepr", [], "any", false, false, false, 121), "H:i"), "html", null, true);
                echo "</div>
                        <div class=\"message-arrow\"><i class=\"text-muted la la-angle-down fs-17\"></i></div>
                    </div>
                </div>
            ";
            }
            // line 126
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamationResponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    </div>
</div>


                    
                <div class=\"chat-search pl-3 pr-3\">
                                 ";
        // line 133
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
        echo "
        <div class=\"input-group-append prepend-white\">
                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "textr", [], "any", false, false, false, 135), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Write a message"]]);
        echo "
            <button type=\"submit\" class=\"btn btn-primary btn-sm\" id=\"sendMessageBtn\">
                <i class=\"fs-19 bi bi-cursor ml-2 mr-2\"></i>
            </button>
        </div>
                ";
        // line 140
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), 'form_end');
        echo "
    
    </div>
</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script>
    document.getElementById('reponserForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        
        var formData = new FormData(this);
          document.getElementById('reponserForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Handle success (e.g., display a success message)
                console.log('Form submitted successfully');
            } else {
                // Handle validation errors (e.g., display error messages)
                console.error('Form submission failed:', data.errors);
            }
        })
        .catch(error => {
            console.error('There was an error with the fetch operation:', error);
        });
    });
        
       
    });
</script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js\"></script>
  <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/test.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/AjoutReponse.html.twig";
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
        return array (  318 => 195,  260 => 140,  252 => 135,  247 => 133,  239 => 127,  233 => 126,  225 => 121,  220 => 119,  217 => 118,  205 => 109,  197 => 104,  187 => 97,  181 => 93,  178 => 92,  174 => 91,  123 => 42,  110 => 35,  102 => 30,  95 => 25,  91 => 24,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
  <div class=\"main-wrapper\">
    <div class=\"container\">
      <div class=\"page-content\">
        <div class=\"container mt-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-12 card-stacked\">
              <div class=\"card shadow-line mb-3 chat\">
               
                <div class=\"chat-search pl-3 pr-3\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search a conversation\">
                    <div class=\"input-group-append prepend-white\">
                      <span class=\"input-group-text pl-2 pr-2\">
                        <i class=\"fs-17 las la-search drop-shadow\"></i>
                      </span>
                    </div>
                  </div>
                </div>
         
                <div class=\"chat-user-panel\">
                  <div class=\"pb-3 d-flex flex-column navigation-mobile pagination-scrool chat-user-scroll\">
                    {% for lr in ListReclamations %}
                    <div class=\"chat-item d-flex pl-3 pr-0 pt-3 pb-3\">
                      <div class=\"w-100\">
                        <div class=\"d-flex pl-0\">
                          <img class=\"rounded-circle shadow avatar-sm mr-3\" src=\"https://user-images.githubusercontent.com/35243461/168796872-7251e655-cdf0-4031-a253-bf0db09cdf0f.jpg\">
                          <div>
                            <p class=\"margin-auto fw-400 text-dark-75\">{{ lr.idu }}</p>
                            <div class=\"d-flex flex-row mt-1\">
                              <span>
                                <div class=\"svg15 double-check\"></div>
                              </span>
                              <span class=\"message-shortcut margin-auto text-muted fs-13 ml-1 mr-4\">{{ lr.titrer }}</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    {% endfor %}
                 </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-8 col-12 card-stacked\">
              <div class=\"card shadow-line mb-3 chat chat-panel\">
                <div class=\"p-3 chat-header\">
                  <div class=\"d-flex\">
                    <div class=\"w-100 d-flex pl-0\">
                      <img class=\"rounded-circle shadow avatar-sm mr-3 chat-profile-picture\" src=\"https://user-images.githubusercontent.com/35243461/168796877-f6c8819a-5d6e-4b2a-bd56-04963639239b.jpg\">
                      <div class=\"mr-3\">
                        <a href=\"!#\">
                          <p class=\"fw-400 mb-0 text-dark-75\">Beate Lemoine</p>
                        </a>
                        <p class=\"sub-caption text-muted text-small mb-0\"><i class=\"la la-clock mr-1\"></i>last seen today at 09:15 PM</p>
                      </div>
                    </div>
                    <div class=\"flex-shrink-0 margin-auto\">
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <circle cx=\"12\" cy=\"12\" r=\"10\"></circle>
                          <line x1=\"12\" y1=\"16\" x2=\"12\" y2=\"12\"></line>
                          <line x1=\"12\" y1=\"8\" x2=\"12.01\" y2=\"8\"></line>
                        </svg>
                      </a>
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <polygon points=\"23 7 16 12 23 17 23 7\"></polygon>
                          <rect x=\"1\" y=\"5\" width=\"15\" height=\"14\" rx=\"2\" ry=\"2\"></rect>
                        </svg>
                      </a>
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <circle cx=\"11\" cy=\"11\" r=\"8\"></circle>
                          <line x1=\"21\" y1=\"21\" x2=\"16.65\" y2=\"16.65\"></line>
                        </svg>
                      </a>
                      <a href=\"#\" class=\"btn btn-sm btn-icon btn-light active text-dark ml-2\">
                        <svg viewBox=\"0 0 24 24\" width=\"15\" height=\"15\" stroke=\"currentColor\" stroke-width=\"2\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather\">
                          <circle cx=\"12\" cy=\"12\" r=\"1\"></circle>
                          <circle cx=\"12\" cy=\"5\" r=\"1\"></circle>
                          <circle cx=\"12\" cy=\"19\" r=\"1\"></circle>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <div class=\"d-flex flex-row mb-3 navigation-mobile scrollable-chat-panel chat-panel-scroll\">
                  <div class=\"w-100 p-3\">
                                {% for reclamationResponse in reclamationResponses %}
            {% if reclamationResponse.idu == 1 %}
              <div class=\"d-flex flex-row-reverse mb-2\">
                    <div class=\"right-chat-message fs-13 mb-2\">
                        <div class=\"mb-0 mr-3 pr-4\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"pr-2\">{{ reclamationResponse.textr }}</div>
                                <div class=\"pr-4\"></div>
                            </div>
                        </div>
                        <div class=\"message-options dark\">
                            <div class=\"message-time\">
                                <div class=\"d-flex flex-row\">
                                    <div class=\"mr-2\">{{ reclamationResponse.dateRepr|date('H:i') }}</div>
                                    <div class=\"svg15 double-check\"></div>
                                </div>
                            </div>
                            <div class=\"message-arrow\">
 <a href=\"{{ path('edit_rep', {'id': reclamationResponse.idrr}) }}\" class=\"message-arrow\">
                        <i class=\"text-muted la la-angle-down fs-17\"></i>
                    </a>
                            </div>
                        </div>
                    </div>
                </div>
               
            {% else %}
             <div class=\"left-chat-message fs-13 mb-2\">
                    <p class=\"mb-0 mr-3 pr-4\">{{ reclamationResponse.textr }}</p>
                    <div class=\"message-options\">
                        <div class=\"message-time\">{{ reclamationResponse.dateRepr|date('H:i') }}</div>
                        <div class=\"message-arrow\"><i class=\"text-muted la la-angle-down fs-17\"></i></div>
                    </div>
                </div>
            {% endif %}
        {% endfor %}
    </div>
</div>


                    
                <div class=\"chat-search pl-3 pr-3\">
                                 {{ form_start(form, {'attr': {'novalidate':'novalidate', 'autocomplete': 'off'}}) }}
        <div class=\"input-group-append prepend-white\">
                {{ form_widget(form.textr, {'attr': {'class': 'form-control', 'placeholder': 'Write a message'}}) }}
            <button type=\"submit\" class=\"btn btn-primary btn-sm\" id=\"sendMessageBtn\">
                <i class=\"fs-19 bi bi-cursor ml-2 mr-2\"></i>
            </button>
        </div>
                {{ form_end(form) }}
    
    </div>
</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script>
    document.getElementById('reponserForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        
        var formData = new FormData(this);
          document.getElementById('reponserForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        var formData = new FormData(this);
        
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Handle success (e.g., display a success message)
                console.log('Form submitted successfully');
            } else {
                // Handle validation errors (e.g., display error messages)
                console.error('Form submission failed:', data.errors);
            }
        })
        .catch(error => {
            console.error('There was an error with the fetch operation:', error);
        });
    });
        
       
    });
</script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js\"></script>
  <script src=\"{{ asset ('js/test.js') }}\"></script>

    {% endblock %}", "reclamation/AjoutReponse.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\reclamation\\AjoutReponse.html.twig");
    }
}
