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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list_reclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/list_reclamations.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>List of Reclamations</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>List of Reclamations</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Type</th>
            <th>Date</th>
            <th>Action</th>

        </tr>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 33
            echo "        <tr>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "idu", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "titrer", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "contenu", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "typer", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "temp", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
            <td>
                 <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_edit_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idr", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">Edit</a> |

                 <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_delete_reclamation", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "idr", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\" >Delete</a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </table>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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
        return array (  119 => 46,  109 => 42,  104 => 40,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  80 => 33,  76 => 32,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>List of Reclamations</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>List of Reclamations</h2>
    <table>
        <tr>
            <th>User ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Type</th>
            <th>Date</th>
            <th>Action</th>

        </tr>
        {% for reclamation in reclamations %}
        <tr>
            <td>{{ reclamation.idu }}</td>
            <td>{{ reclamation.titrer }}</td>
            <td>{{ reclamation.contenu }}</td>
            <td>{{ reclamation.typer }}</td>
            <td>{{ reclamation.temp|date('Y-m-d H:i:s') }}</td>
            <td>
                 <a href=\"{{ path('app_edit_reclamation', {'id': reclamation.idr}) }}\">Edit</a> |

                 <a href=\"{{ path('app_delete_reclamation', {'id': reclamation.idr}) }}\" >Delete</a>
            </td>
        </tr>
        {% endfor %}
    </table>
</body>
</html>", "reclamation/list_reclamations.html.twig", "C:\\Users\\baraa\\OneDrive\\Desktop\\Workshops Symfony\\CRUD\\SymfonyPIDEV\\templates\\reclamation\\list_reclamations.html.twig");
    }
}
