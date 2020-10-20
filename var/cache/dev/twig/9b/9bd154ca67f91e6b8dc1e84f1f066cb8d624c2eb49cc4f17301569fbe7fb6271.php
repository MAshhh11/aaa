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

/* admin/website_admin/figure/form.html.twig */
class __TwigTemplate_ba110623898a0c9b7fc932c30bdc979002054306647624f5767bb752dd2044ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/website_admin/figure/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/website_admin/figure/form.html.twig"));

        // line 3
        $context["menu"] = "website_admin";
        // line 4
        $context["submenu"] = "website_admin_figure";
        // line 7
        $context["page_name"] = "Chiffres clés";
        // line 10
        $context["breadcrumbs"] = [0 => ["title" => "Gestion du site", "url" => ""], 1 => ["title" =>         // line 12
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 12, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/website_admin/figure/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "
    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"table-responsive bg-white\">
                        <table class=\"table align-items-center table-flush table-hover\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>Valeur</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Ordre d'apparition</th>
                                <th style=\"width:150px;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["figures"]) || array_key_exists("figures", $context) ? $context["figures"] : (function () { throw new RuntimeError('Variable "figures" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["figure"]) {
            // line 43
            echo "                                <tr>
                                    <td >
                                        ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "amount", [], "any", false, false, false, 45), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "title", [], "any", false, false, false, 48), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "text", [], "any", false, false, false, 51), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "rank", [], "any", false, false, false, 54), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website_admin_figure", ["id" => twig_get_attribute($this->env, $this->source, $context["figure"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"btn btn-icon-only btn-primary btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                                           data-message=\"Souhaitez-vous supprimer définitivement ce chiffre clé ?\"
                                           data-token=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["figure"], "id", [], "any", false, false, false, 60))), "html", null, true);
            echo "\"
                                           data-url=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("figure_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["figure"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\"><i data-original-title=\"Suprimer\"class=\"fa fa-trash\"></i></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['figure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off", "enctype" => "multipart/form-data"]]);
        echo "
    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">Rajouter un chiffre clé</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\"></h6>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "amount", [], "any", false, false, false, 89), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "title", [], "any", false, false, false, 94), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-12\">
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "text", [], "any", false, false, false, 99), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-12\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "rank", [], "any", false, false, false, 104), 'widget');
        echo "
                </div>
            </div>


        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>
    ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(\"body\").on(\"click\", \".removeAttachment\", function () {
            \$(this).parent().parent().remove();
        });

        let i = 2;
        \$('#addAttachment').click(function () {
            var html = \$(\"#attachmentModel\").html();
            \$(\"#listAttachments\").prepend(html);

            \$('.select-file-type').last().attr('id', i);
            i++;
        });



    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/website_admin/figure/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 128,  253 => 127,  239 => 122,  230 => 116,  215 => 104,  207 => 99,  199 => 94,  191 => 89,  173 => 74,  162 => 65,  152 => 61,  148 => 60,  142 => 57,  136 => 54,  130 => 51,  124 => 48,  118 => 45,  114 => 43,  110 => 42,  87 => 22,  79 => 16,  69 => 15,  58 => 1,  56 => 12,  55 => 10,  53 => 7,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'website_admin' %}
{% set submenu = 'website_admin_figure' %}


    {% set page_name = 'Chiffres clés' %}

    
    {% set breadcrumbs = [
        {\"title\": \"Gestion du site\", 'url' : \"\"},
        {\"title\": page_name, 'url' : \"\"},
    ] %}

{% block body %}

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{ page_name }}</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"table-responsive bg-white\">
                        <table class=\"table align-items-center table-flush table-hover\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>Valeur</th>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Ordre d'apparition</th>
                                <th style=\"width:150px;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for figure in figures %}
                                <tr>
                                    <td >
                                        {{ figure.amount }}
                                    </td>
                                    <td>
                                        {{ figure.title }}
                                    </td>
                                    <td>
                                        {{ figure.text }}
                                    </td>
                                    <td>
                                        {{ figure.rank }}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('website_admin_figure', {'id': figure.id}) }}\" class=\"btn btn-icon-only btn-primary btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                                           data-message=\"Souhaitez-vous supprimer définitivement ce chiffre clé ?\"
                                           data-token=\"{{ csrf_token('delete'~figure.id ) }}\"
                                           data-url=\"{{ path('figure_delete', {'id': figure.id}) }}\"><i data-original-title=\"Suprimer\"class=\"fa fa-trash\"></i></a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate','class': 'needs-validation', 'autocomplete': 'off', 'enctype':'multipart/form-data'}}) }}
    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">Rajouter un chiffre clé</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\"></h6>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.amount) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.title) }}
                </div>
            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.text) }}
                </div>
            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.rank) }}
                </div>
            </div>


        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='{{ path(\"dashboard_home\") }}'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>
    {{ form_end(form) }}


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(\"body\").on(\"click\", \".removeAttachment\", function () {
            \$(this).parent().parent().remove();
        });

        let i = 2;
        \$('#addAttachment').click(function () {
            var html = \$(\"#attachmentModel\").html();
            \$(\"#listAttachments\").prepend(html);

            \$('.select-file-type').last().attr('id', i);
            i++;
        });



    </script>
{% endblock %}
", "admin/website_admin/figure/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/website_admin/figure/form.html.twig");
    }
}
