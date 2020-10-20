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

/* admin/user/form.html.twig */
class __TwigTemplate_16b8ad629d1ee323ea2efe8c0f26a09211650d48180ac25d75d4bec4bca14f51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form.html.twig"));

        // line 3
        $context["menu"] = "administration";
        // line 4
        $context["submenu"] = "administration_user";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6))) {
            // line 7
            $context["page_name"] = ((("Modification de l'étudiant " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "lastname", [], "any", false, false, false, 7)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "firstname", [], "any", false, false, false, 7));
        } else {
            // line 9
            $context["page_name"] = "Nouvel Etudiant";
        }
        // line 12
        $context["breadcrumbs"] = [0 => ["title" => "Administration", "url" => ""], 1 => ["title" => "Liste des Etudiants", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index")], 2 => ["title" =>         // line 15
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 15, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/user/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "
";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off"]]);
        echo "

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                    <div class=\"col text-right\">
                              <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Enregistrer le formulaire\">
                                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                            </button>
                        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 33), "value", [], "any", false, true, false, 33), "id", [], "any", true, true, false, 33) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33))) {
            // line 35
            echo "                              <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                                data-message=\"Souhaitez-vous supprimer définitivement cet utilisateur ?<br/> Toutes les données rattachées à cet utilisateur seront automatiquement supprimées.\"
                                 data-token=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))), "html", null, true);
            echo "\"
                                 data-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\"></i> Supprimer</a>
                        ";
        }
        // line 40
        echo "                    </div>
            </div>
        </div>

      <div class=\"card-body\">
        <h6 class=\"heading-small text-muted mb-4\">Informations personnelles</h6>

          <div class=\"row\">
              <div class=\"col-lg-6\">
                  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "lastname", [], "any", false, false, false, 49), 'widget');
        echo "
              </div>
              <div class=\"col-lg-6\">
                  ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "firstname", [], "any", false, false, false, 52), 'widget');
        echo "
              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-lg-6\">
                  ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'widget');
        echo "
              </div>
              <div class=\"col-lg-6\">
                  ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "phone", [], "any", false, false, false, 60), 'widget');
        echo "
              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-lg-6\">
                  ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "password", [], "any", false, false, false, 65), "first", [], "any", false, false, false, 65), 'widget');
        echo "
              </div>
              <div class=\"col-lg-6\">
                  ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "password", [], "any", false, false, false, 68), "second", [], "any", false, false, false, 68), 'widget');
        echo "
              </div>
          </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "isActive", [], "any", false, false, false, 73), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "sendEmail", [], "any", false, false, false, 78), 'widget');
        echo "
                </div>
            </div>
        </div>
        ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "id", [], "any", false, false, false, 82)) {
            // line 83
            echo "            <hr/>
        <div class=\"card-body\">

            <div class=\"card border-0 py-3\">
                <div class=\"row px-5\">

                    <div class=\"col-6 mb-3\">
                        <h6 class=\"heading-small text-muted\">Formations</h6>
                    </div>
                    <div class=\"col-6 text-right\">
                        <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_formation", ["user" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "value", [], "any", false, false, false, 93), "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success btn-round btn-icon\" data-toggle=\"tooltip\" data-original-title=\"Ajouter une formation\">
                            <span class=\"btn-inner--icon\"><i class=\"fas fa-plus\"></i></span>
                            <span class=\"btn-inner--text\">Ajouter</span>
                        </a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush table-striped table-hover table-actions\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <td> Formation </td>
                                    <td> Formation Actuelle </td>
                                    <td> Date début formation </td>
                                    <td> Actions </td>
                                </tr>
                            </thead>
                            <tbody>
                            ";
            // line 109
            if ( !(null === (isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 109, $this->source); })()))) {
                // line 110
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 110, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
                    // line 111
                    echo "                            
                                <tr>
                                    <td>";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 113), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 114
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["formation"], "is_current", [], "any", false, false, false, 114), 1)) {
                        echo "oui ";
                    } else {
                        echo "non";
                    }
                    echo "</td>
                                    <td>";
                    // line 115
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "created_at", [], "any", false, false, false, 115), "d/m/Y"), "html", null, true);
                    echo "</td>
                                    <td><a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                           data-message=\"Souhaitez-vous supprimer définitivement la formation de cet utilisateur ?<br/> Toutes les données rattachées à cette formation seront automatiquement supprimées.\"
                           data-token=\"";
                    // line 118
                    echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 118))), "html", null, true);
                    echo "\"
                           data-url=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userformation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 119)]), "html", null, true);
                    echo "\"><i
                                    class=\"fa fa-trash\"></i> Supprimer</a></td>
                                </tr>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "                            ";
            }
            // line 124
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        ";
        }
        // line 131
        echo "      <div class=\"card-footer\">
          <button class=\"btn btn-icon btn-success\" type='submit' >
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

          <a class=\"btn btn-icon btn-sm\" href='";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>

      </div>
    </div>


    ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 151
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 151,  311 => 150,  298 => 146,  286 => 137,  278 => 131,  269 => 124,  266 => 123,  256 => 119,  252 => 118,  246 => 115,  238 => 114,  234 => 113,  230 => 111,  225 => 110,  223 => 109,  204 => 93,  192 => 83,  190 => 82,  183 => 78,  175 => 73,  167 => 68,  161 => 65,  153 => 60,  147 => 57,  139 => 52,  133 => 49,  122 => 40,  117 => 38,  113 => 37,  109 => 35,  107 => 33,  98 => 27,  88 => 20,  85 => 19,  75 => 18,  64 => 1,  62 => 15,  61 => 12,  58 => 9,  55 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'administration' %}
{% set submenu = 'administration_user' %}

    {% if form.vars.value.id is not null %}
        {% set page_name = 'Modification de l\\'étudiant '~form.vars.value.lastname~' '~form.vars.value.firstname %}
    {% else %}
        {% set page_name = 'Nouvel Etudiant' %}
    {% endif %}
    
    {% set breadcrumbs = [
            {\"title\": \"Administration\", 'url' : \"\"},
            {\"title\": \"Liste des Etudiants\", 'url' : path('user_index') },
            {\"title\": page_name, 'url' : \"\"},
    ] %}

{% block body %}

{{ form_start(form, {'attr': {'novalidate': 'novalidate','class': 'needs-validation', 'autocomplete': 'off'}}) }}

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{page_name}}</h3>
                </div>
                    <div class=\"col text-right\">
                              <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Enregistrer le formulaire\">
                                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                            </button>
                        {% if form.vars.value.id is defined and form.vars.value.id %}
{#                              <a href=\"{{ path('user_form_avatar', {'userid' : form.vars.value.id}) }}\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-portrait\"></i> Modifier la photo</a>#}
                              <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                                data-message=\"Souhaitez-vous supprimer définitivement cet utilisateur ?<br/> Toutes les données rattachées à cet utilisateur seront automatiquement supprimées.\"
                                 data-token=\"{{ csrf_token('delete'~form.vars.value.id) }}\"
                                 data-url=\"{{ path('user_delete', {'id': form.vars.value.id}) }}\" ><i class=\"fa fa-trash\"></i> Supprimer</a>
                        {% endif %}
                    </div>
            </div>
        </div>

      <div class=\"card-body\">
        <h6 class=\"heading-small text-muted mb-4\">Informations personnelles</h6>

          <div class=\"row\">
              <div class=\"col-lg-6\">
                  {{ form_widget(form.lastname) }}
              </div>
              <div class=\"col-lg-6\">
                  {{ form_widget(form.firstname) }}
              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-lg-6\">
                  {{ form_widget(form.email) }}
              </div>
              <div class=\"col-lg-6\">
                  {{ form_widget(form.phone) }}
              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-lg-6\">
                  {{ form_widget(form.password.first) }}
              </div>
              <div class=\"col-lg-6\">
                  {{ form_widget(form.password.second) }}
              </div>
          </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    {{ form_widget(form.isActive) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    {{ form_widget(form.sendEmail) }}
                </div>
            </div>
        </div>
        {% if form.vars.value.id %}
            <hr/>
        <div class=\"card-body\">

            <div class=\"card border-0 py-3\">
                <div class=\"row px-5\">

                    <div class=\"col-6 mb-3\">
                        <h6 class=\"heading-small text-muted\">Formations</h6>
                    </div>
                    <div class=\"col-6 text-right\">
                        <a href=\"{{ path('user_formation' , { user : form.vars.value.id }) }}\" class=\"btn btn-sm btn-success btn-round btn-icon\" data-toggle=\"tooltip\" data-original-title=\"Ajouter une formation\">
                            <span class=\"btn-inner--icon\"><i class=\"fas fa-plus\"></i></span>
                            <span class=\"btn-inner--text\">Ajouter</span>
                        </a>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush table-striped table-hover table-actions\">
                            <thead class=\"thead-light\">
                                <tr>
                                    <td> Formation </td>
                                    <td> Formation Actuelle </td>
                                    <td> Date début formation </td>
                                    <td> Actions </td>
                                </tr>
                            </thead>
                            <tbody>
                            {% if formations is not null %}
                            {% for formation in formations %}
                            
                                <tr>
                                    <td>{{ formation.title }}</td>
                                    <td>{% if formation.is_current == 1 %}oui {% else %}non{% endif %}</td>
                                    <td>{{ formation.created_at|date('d/m/Y')}}</td>
                                    <td><a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                           data-message=\"Souhaitez-vous supprimer définitivement la formation de cet utilisateur ?<br/> Toutes les données rattachées à cette formation seront automatiquement supprimées.\"
                           data-token=\"{{ csrf_token('delete'~formation.id) }}\"
                           data-url=\"{{ path('userformation_delete', {'id': formation.id}) }}\"><i
                                    class=\"fa fa-trash\"></i> Supprimer</a></td>
                                </tr>
                            {% endfor %}
                            {% endif %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {% endif %}
      <div class=\"card-footer\">
          <button class=\"btn btn-icon btn-success\" type='submit' >
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

          <a class=\"btn btn-icon btn-sm\" href='{{path(\"user_index\")}}'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>

      </div>
    </div>


    {{ form_end(form) }}

{% endblock %}

{% block javascripts %}
{{ parent()}}
{% endblock %}
", "admin/user/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/user/form.html.twig");
    }
}
