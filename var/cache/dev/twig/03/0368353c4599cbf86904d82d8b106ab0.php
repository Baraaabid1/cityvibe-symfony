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

/* test.html.twig */
class __TwigTemplate_a8077531ae966c848579438b4f53517a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $this->parent = $this->loadTemplate("baseA.html.twig", "test.html.twig", 1);
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
        echo "        <div class=\"container mt-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-12 card-stacked\">
              <div class=\"card shadow-line mb-3 chat\">
               
                <div class=\"chat-search pl-3 pr-3\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Search a conversation\">
                    <div class=\"input-group-append prepend-white\">
                      <span class=\"input-group-text pl-2 pr-2\">
                        <i class=\"fs-17 las la-search drop-shadow\"></i>
                      </span>
                    </div>
                  </div>
                </div>
         
                <div class=\"chat-user-panel\">
                  <div class=\"pb-3 d-flex flex-column navigation-mobile pagination-scrool chat-user-scroll\" id=\"reclamationsContainer\">
                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListReclamations"]) || array_key_exists("ListReclamations", $context) ? $context["ListReclamations"] : (function () { throw new RuntimeError('Variable "ListReclamations" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lr"]) {
            // line 22
            echo "                     ";
            if ((twig_get_attribute($this->env, $this->source, $context["lr"], "idr", [], "any", false, false, false, 22) == twig_get_attribute($this->env, $this->source, (isset($context["Rec"]) || array_key_exists("Rec", $context) ? $context["Rec"] : (function () { throw new RuntimeError('Variable "Rec" does not exist.', 22, $this->source); })()), "idr", [], "any", false, false, false, 22))) {
                // line 23
                echo "                     <div class=\"chat-item active d-flex pl-3 pr-0 pt-3 pb-3\">
                      <div class=\"w-100\">
                        <div class=\"d-flex pl-0\">
                          <img class=\"rounded-circle shadow avatar-sm mr-3\" src=\"https://user-images.githubusercontent.com/35243461/168796877-f6c8819a-5d6e-4b2a-bd56-04963639239b.jpg\">
                          <div>
                            <p class=\"margin-auto fw-400 text-dark-75\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lr"], "idu", [], "any", false, false, false, 28), "html", null, true);
                echo "</p>
                            <div class=\"d-flex flex-row mt-1\">
                              <span>
                                <div class=\"svg15 double-check\"></div>
                              </span>
                             <span class=\"message-shortcut margin-auto fw-400 fs-13 ml-1 mr-4\">
                            <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mainAdmin_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["lr"], "idR", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lr"], "titrer", [], "any", false, false, false, 34), "html", null, true);
                echo "</a>
                        </span>                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                                  ";
            } else {
                // line 41
                echo "



                    <div class=\"chat-item d-flex pl-3 pr-0 pt-3 pb-3\">
                      <div class=\"w-100\">
                        <div class=\"d-flex pl-0\">
                          <img class=\"rounded-circle shadow avatar-sm mr-3\" src=\"https://user-images.githubusercontent.com/35243461/168796872-7251e655-cdf0-4031-a253-bf0db09cdf0f.jpg\">
                          <div>
                            <p class=\"margin-auto fw-400 text-dark-75\">";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lr"], "idu", [], "any", false, false, false, 50), "html", null, true);
                echo "</p>
                            <div class=\"d-flex flex-row mt-1\">
                              <span>
                                <div class=\"svg15 double-check\"></div>
                              </span>
 <span class=\"message-shortcut margin-auto fw-400 fs-13 ml-1 mr-4\">
                            <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mainAdmin_reponse", ["id" => twig_get_attribute($this->env, $this->source, $context["lr"], "idR", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lr"], "titrer", [], "any", false, false, false, 56), "html", null, true);
                echo "</a>
                        </span>                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                           ";
            }
            // line 63
            echo "
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
                          <p class=\"fw-400 mb-0 text-dark-75\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Rec"]) || array_key_exists("Rec", $context) ? $context["Rec"] : (function () { throw new RuntimeError('Variable "Rec" does not exist.', 77, $this->source); })()), "titrer", [], "any", false, false, false, 77), "html", null, true);
        echo "</p>
                        </a>
                        <p class=\"sub-caption text-muted text-small mb-0\"><i class=\"la la-clock mr-1\"></i></p>
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
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamationResponses"]) || array_key_exists("reclamationResponses", $context) ? $context["reclamationResponses"] : (function () { throw new RuntimeError('Variable "reclamationResponses" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamationResponse"]) {
            // line 115
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "idu", [], "any", false, false, false, 115) == 1)) {
                // line 116
                echo "              <div class=\"d-flex flex-row-reverse mb-2\">
                    <div class=\"right-chat-message fs-13 mb-2\">
                        <div class=\"mb-0 mr-3 pr-4\">
                            <div class=\"d-flex flex-row\">
                                <div class=\"pr-2\">";
                // line 120
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "textr", [], "any", false, false, false, 120), "html", null, true);
                echo "</div>
                                <div class=\"pr-4\"></div>
                            </div>
                        </div>
                        <div class=\"message-options dark\">
                            <div class=\"message-time\">
                                <div class=\"d-flex flex-row\">
                                    <div class=\"mr-2\">";
                // line 127
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "dateRepr", [], "any", false, false, false, 127), "H:i"), "html", null, true);
                echo "</div>
                                    <div class=\"svg15 double-check\"></div>
                                </div>
                            </div>
                            <div class=\"message-arrow\">
                                      <a data-delete-link=\"";
                // line 132
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_reponseA", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "idrr", [], "any", false, false, false, 132)]), "html", null, true);
                echo "\"
                                         data-update-route=\"";
                // line 133
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pp_update_response", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "idrr", [], "any", false, false, false, 133)]), "html", null, true);
                echo "\"
                                       class=\"message-arrow\" data-toggle=\"modal\" data-target=\"#messageOptionsModal\">
                               <i class=\"text-muted la la-angle-down fs-17\"></i>
                                    </a> 
                            </div>
                        </div>
                    </div>
                                                                   <!-- Modal -->
<div class=\"modal fade\" id=\"messageOptionsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"messageOptionsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"messageOptionsModalLabel\">Votre message</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                    <p id=\"messageContent\"></p>

                <form id=\"updateForm\" action=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pp_update_response", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "idrr", [], "any", false, false, false, 153)]), "html", null, true);
                echo "\" method=\"POST\" novalidate=\"novalidate\" autocomplete=\"off\">
                    <input type=\"text\" name=\"newValue\" id=\"updateInput\" class=\"form-control\" placeholder=\"Modifier votre message \">
                    <div class=\"modal-footer\">
                        <a href=\"#\" id=\"deleteLink\" class=\"btn btn-danger\">Supprimer</a>
                        <button type=\"submit\" class=\"btn btn-danger\">Modifier</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                </div>

            ";
            } else {
                // line 168
                echo "             <div class=\"left-chat-message fs-13 mb-2\">
                    <p class=\"mb-0 mr-3 pr-4\">";
                // line 169
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "textr", [], "any", false, false, false, 169), "html", null, true);
                echo "</p>
                    <div class=\"message-options\">
                        <div class=\"message-time\">";
                // line 171
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamationResponse"], "dateRepr", [], "any", false, false, false, 171), "H:i"), "html", null, true);
                echo "</div>
                        <div class=\"message-arrow\"><i class=\"text-muted la la-angle-down fs-17\"></i></div>
                    </div>
                </div>
            ";
            }
            // line 176
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamationResponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "    </div>
</div>


                    
                <div class=\"chat-search pl-3 pr-3\">
                                 ";
        // line 183
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "autocomplete" => "off"]]);
        echo "
        <div class=\"input-group-append prepend-white\">
                ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "textr", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ecrire un message ..."]]);
        echo "
            <button type=\"submit\" class=\"btn btn-primary btn-sm\" id=\"sendMessageBtn\">
                <i class=\"fs-19 bi bi-cursor ml-2 mr-2\"></i>
            </button>
        </div>
                ";
        // line 190
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), 'form_end');
        echo "
    
    </div>
</div>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  


  
  <script>
  \$('#messageOptionsModal').on('show.bs.modal', function (event) {
    var button = \$(event.relatedTarget); // Button that triggered the modal
    var message = button.closest('.right-chat-message').find('.pr-2').text(); // Get the message content
    var modal = \$(this);
    modal.find('.modal-body #messageContent').text(message); // Populate the message content in the modal

    // Pass the delete link dynamically
    var deleteLink = button.attr('data-delete-link');
    modal.find('.modal-footer #deleteLink').attr('href', deleteLink);

    // Pass the update route dynamically
    var updateRoute = button.attr('data-update-route');
    modal.find('#updateForm').attr('action', updateRoute);
  });
 
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const reclamationsContainer = document.getElementById('reclamationsContainer');

        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.trim();

            if (searchTerm !== '') {
                // Send an AJAX request to the Symfony search endpoint
                fetch(`/search/reclamations?title=\${encodeURIComponent(searchTerm)}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear previous reclamations
                        reclamationsContainer.innerHTML = '';

                        // Display search results
                        data.forEach(reclamation => {
                            const reclamationItem = document.createElement('div');
                            reclamationItem.classList.add('chat-item', 'd-flex', 'pl-3', 'pr-0', 'pt-3', 'pb-3');
                            reclamationItem.innerHTML = `
                                <div class=\"w-100\">
                                    <div class=\"d-flex pl-0\">
                                        <img class=\"rounded-circle shadow avatar-sm mr-3\" src=\"https://user-images.githubusercontent.com/35243461/168796872-7251e655-cdf0-4031-a253-bf0db09cdf0f.jpg\">
                                        <div>
                                            <p class=\"margin-auto fw-400 text-dark-75\">\${reclamation.idu}</p>
                                            <div class=\"d-flex flex-row mt-1\">
                                                <span>
                                                    <div class=\"svg15 double-check\"></div>
                                                </span>
                                                <span class=\"message-shortcut margin-auto text-muted fs-13 ml-1 mr-4\">\${reclamation.titrer}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            reclamationsContainer.appendChild(reclamationItem);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                    });
            } else {
                reclamationsContainer.innerHTML = '';
            }
        });
    });
</script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js\"></script>
  <script src=\"";
        // line 274
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
        return "test.html.twig";
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
        return array (  422 => 274,  335 => 190,  327 => 185,  322 => 183,  314 => 177,  308 => 176,  300 => 171,  295 => 169,  292 => 168,  274 => 153,  251 => 133,  247 => 132,  239 => 127,  229 => 120,  223 => 116,  220 => 115,  216 => 114,  176 => 77,  162 => 65,  155 => 63,  143 => 56,  134 => 50,  123 => 41,  111 => 34,  102 => 28,  95 => 23,  92 => 22,  88 => 21,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseA.html.twig' %}
{% block body %}
        <div class=\"container mt-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-12 card-stacked\">
              <div class=\"card shadow-line mb-3 chat\">
               
                <div class=\"chat-search pl-3 pr-3\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control\" id=\"searchInput\" placeholder=\"Search a conversation\">
                    <div class=\"input-group-append prepend-white\">
                      <span class=\"input-group-text pl-2 pr-2\">
                        <i class=\"fs-17 las la-search drop-shadow\"></i>
                      </span>
                    </div>
                  </div>
                </div>
         
                <div class=\"chat-user-panel\">
                  <div class=\"pb-3 d-flex flex-column navigation-mobile pagination-scrool chat-user-scroll\" id=\"reclamationsContainer\">
                    {% for lr in ListReclamations %}
                     {% if lr.idr == Rec.idr %}
                     <div class=\"chat-item active d-flex pl-3 pr-0 pt-3 pb-3\">
                      <div class=\"w-100\">
                        <div class=\"d-flex pl-0\">
                          <img class=\"rounded-circle shadow avatar-sm mr-3\" src=\"https://user-images.githubusercontent.com/35243461/168796877-f6c8819a-5d6e-4b2a-bd56-04963639239b.jpg\">
                          <div>
                            <p class=\"margin-auto fw-400 text-dark-75\">{{ lr.idu }}</p>
                            <div class=\"d-flex flex-row mt-1\">
                              <span>
                                <div class=\"svg15 double-check\"></div>
                              </span>
                             <span class=\"message-shortcut margin-auto fw-400 fs-13 ml-1 mr-4\">
                            <a href=\"{{ path('app_mainAdmin_reponse', {'id': lr.idR}) }}\">{{ lr.titrer }}</a>
                        </span>                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                                  {% else %}




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
 <span class=\"message-shortcut margin-auto fw-400 fs-13 ml-1 mr-4\">
                            <a href=\"{{ path('app_mainAdmin_reponse', {'id': lr.idR}) }}\">{{ lr.titrer }}</a>
                        </span>                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                           {% endif %}

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
                          <p class=\"fw-400 mb-0 text-dark-75\">{{ Rec.titrer }}</p>
                        </a>
                        <p class=\"sub-caption text-muted text-small mb-0\"><i class=\"la la-clock mr-1\"></i></p>
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
                                      <a data-delete-link=\"{{ path('app_delete_reponseA', {'id': reclamationResponse.idrr}) }}\"
                                         data-update-route=\"{{ path('pp_update_response', {'id': reclamationResponse.idrr}) }}\"
                                       class=\"message-arrow\" data-toggle=\"modal\" data-target=\"#messageOptionsModal\">
                               <i class=\"text-muted la la-angle-down fs-17\"></i>
                                    </a> 
                            </div>
                        </div>
                    </div>
                                                                   <!-- Modal -->
<div class=\"modal fade\" id=\"messageOptionsModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"messageOptionsModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"messageOptionsModalLabel\">Votre message</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                    <p id=\"messageContent\"></p>

                <form id=\"updateForm\" action=\"{{ path('pp_update_response', {'id': reclamationResponse.idrr}) }}\" method=\"POST\" novalidate=\"novalidate\" autocomplete=\"off\">
                    <input type=\"text\" name=\"newValue\" id=\"updateInput\" class=\"form-control\" placeholder=\"Modifier votre message \">
                    <div class=\"modal-footer\">
                        <a href=\"#\" id=\"deleteLink\" class=\"btn btn-danger\">Supprimer</a>
                        <button type=\"submit\" class=\"btn btn-danger\">Modifier</button>
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">fermer</button>
                    </div>
                </form>
            </div>
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
                {{ form_widget(form.textr, {'attr': {'class': 'form-control', 'placeholder': 'Ecrire un message ...'}}) }}
            <button type=\"submit\" class=\"btn btn-primary btn-sm\" id=\"sendMessageBtn\">
                <i class=\"fs-19 bi bi-cursor ml-2 mr-2\"></i>
            </button>
        </div>
                {{ form_end(form) }}
    
    </div>
</div>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  


  
  <script>
  \$('#messageOptionsModal').on('show.bs.modal', function (event) {
    var button = \$(event.relatedTarget); // Button that triggered the modal
    var message = button.closest('.right-chat-message').find('.pr-2').text(); // Get the message content
    var modal = \$(this);
    modal.find('.modal-body #messageContent').text(message); // Populate the message content in the modal

    // Pass the delete link dynamically
    var deleteLink = button.attr('data-delete-link');
    modal.find('.modal-footer #deleteLink').attr('href', deleteLink);

    // Pass the update route dynamically
    var updateRoute = button.attr('data-update-route');
    modal.find('#updateForm').attr('action', updateRoute);
  });
 
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const reclamationsContainer = document.getElementById('reclamationsContainer');

        searchInput.addEventListener('input', function () {
            const searchTerm = this.value.trim();

            if (searchTerm !== '') {
                // Send an AJAX request to the Symfony search endpoint
                fetch(`/search/reclamations?title=\${encodeURIComponent(searchTerm)}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear previous reclamations
                        reclamationsContainer.innerHTML = '';

                        // Display search results
                        data.forEach(reclamation => {
                            const reclamationItem = document.createElement('div');
                            reclamationItem.classList.add('chat-item', 'd-flex', 'pl-3', 'pr-0', 'pt-3', 'pb-3');
                            reclamationItem.innerHTML = `
                                <div class=\"w-100\">
                                    <div class=\"d-flex pl-0\">
                                        <img class=\"rounded-circle shadow avatar-sm mr-3\" src=\"https://user-images.githubusercontent.com/35243461/168796872-7251e655-cdf0-4031-a253-bf0db09cdf0f.jpg\">
                                        <div>
                                            <p class=\"margin-auto fw-400 text-dark-75\">\${reclamation.idu}</p>
                                            <div class=\"d-flex flex-row mt-1\">
                                                <span>
                                                    <div class=\"svg15 double-check\"></div>
                                                </span>
                                                <span class=\"message-shortcut margin-auto text-muted fs-13 ml-1 mr-4\">\${reclamation.titrer}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            `;
                            reclamationsContainer.appendChild(reclamationItem);
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                    });
            } else {
                reclamationsContainer.innerHTML = '';
            }
        });
    });
</script>

  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.6.7/js/min/perfect-scrollbar.jquery.min.js\"></script>
  <script src=\"{{ asset ('js/test.js') }}\"></script>

    {% endblock %}", "test.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\test.html.twig");
    }
}
