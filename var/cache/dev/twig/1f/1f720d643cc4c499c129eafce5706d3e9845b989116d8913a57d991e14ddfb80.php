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

/* student/profile/index.html.twig */
class __TwigTemplate_892c5f863764d9d8afa3f3c8b2b15a084402665a1cacd8703c4cd3866edd3ae9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profile/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/profile/index.html.twig"));

        // line 3
        $context["menu"] = "profile";
        // line 6
        $context["page_name"] = "Mon Profil";
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "student/profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off"]]);
        echo "

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col text-right\">
                    <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Enregistrer le formulaire\">
                        <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    </button>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\">Informations personnelles</h6>

            <div class=\"row\">
                <div class=\"col-lg-6\">
                    ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lastname", [], "any", false, false, false, 32), 'widget');
        echo "
                </div>
                <div class=\"col-lg-6\">
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "firstname", [], "any", false, false, false, 35), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget');
        echo "
                </div>
                <div class=\"col-lg-6\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "phone", [], "any", false, false, false, 43), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'widget');
        echo "
                </div>
                <div class=\"col-lg-6\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), "second", [], "any", false, false, false, 51), 'widget');
        echo "
                </div>
            </div>
            <hr/>
        </div>
        <div class=\"card-body\">

            <div class=\"card border-0 py-3\">
                <div class=\"row px-5\">
                    <div class=\"col-6\">
                        <h6 class=\"heading-small text-muted\">Formations</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush table-striped table-hover table-actions\">
                            <thead class=\"thead-light\">
                            <tr>
                                <td> Formation </td>
                                <td> Formation Actuelle </td>
                                <td> Date début formation </td>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 74
            echo "                                <tr>
                                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                    <td>";
            // line 76
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["formation"], "is_current", [], "any", false, false, false, 76), 1)) {
                echo "oui ";
            } else {
                echo "non";
            }
            echo "</td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "created_at", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit' >
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>

        </div>
    </div>


    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/profile/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 106,  231 => 105,  218 => 101,  206 => 92,  192 => 80,  183 => 77,  175 => 76,  171 => 75,  168 => 74,  164 => 73,  139 => 51,  133 => 48,  125 => 43,  119 => 40,  111 => 35,  105 => 32,  87 => 17,  77 => 10,  74 => 9,  64 => 8,  53 => 1,  51 => 6,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'profile' %}


{% set page_name = 'Mon Profil' %}

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
            <hr/>
        </div>
        <div class=\"card-body\">

            <div class=\"card border-0 py-3\">
                <div class=\"row px-5\">
                    <div class=\"col-6\">
                        <h6 class=\"heading-small text-muted\">Formations</h6>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table align-items-center table-flush table-striped table-hover table-actions\">
                            <thead class=\"thead-light\">
                            <tr>
                                <td> Formation </td>
                                <td> Formation Actuelle </td>
                                <td> Date début formation </td>
                            </tr>
                            </thead>
                            <tbody>
                            {% for formation in formations %}
                                <tr>
                                    <td>{{ formation.title }}</td>
                                    <td>{% if formation.is_current == 1 %}oui {% else %}non{% endif %}</td>
                                    <td>{{ formation.created_at|date('d/m/Y')}}</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
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
", "student/profile/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/student/profile/index.html.twig");
    }
}
