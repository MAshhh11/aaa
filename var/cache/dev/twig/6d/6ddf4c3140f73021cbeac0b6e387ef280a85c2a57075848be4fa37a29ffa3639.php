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

/* admin/website_admin/article/form.html.twig */
class __TwigTemplate_72cf5f9f6d8e1af397360192b791f9592672233819aa50abb2cfc271b60e46be extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/website_admin/article/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/website_admin/article/form.html.twig"));

        // line 3
        $context["menu"] = "website_admin";
        // line 4
        $context["submenu"] = "website_admin_article";
        // line 7
        $context["page_name"] = "Articles";
        // line 10
        $context["breadcrumbs"] = [0 => ["title" => "Gestion du site", "url" => ""], 1 => ["title" =>         // line 12
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 12, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/website_admin/article/form.html.twig", 1);
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
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Site Internet</th>
                                <th>Lien</th>
                                <th>Ordre d'apparition</th>
                                <th style=\"width:150px;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 44
            echo "                                <tr>
                                    <td >
                                        ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 46)), "truncate", [0 => 25], "method", false, false, false, 46), "html", null, true);
            echo "
                                    </td>
                                    <td >
                                        ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 49), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["article"], "website", [], "any", false, false, false, 52)), "truncate", [0 => 25], "method", false, false, false, 52), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["article"], "websiteLink", [], "any", false, false, false, 55)), "truncate", [0 => 25], "method", false, false, false, 55), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 58), "html", null, true);
            echo "
                                    </td>
                                    <td>
                                        <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website_admin_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" class=\"btn btn-icon-only btn-primary btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\" data-original-title=\"Supprimer\" data-message=\"Souhaitez-vous supprimer définitivement ce chiffre clé ?\"
                                           data-token=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 63))), "html", null, true);
            echo "\"
                                           data-url=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\"><i
                                                    class=\"fa fa-trash\"></i></a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off", "enctype" => "multipart/form-data"]]);
        echo "
    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">Rajouter un Article</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\"></h6>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "title", [], "any", false, false, false, 93), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "website_link", [], "any", false, false, false, 98), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "website", [], "any", false, false, false, 103), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-12\">
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "author", [], "any", false, false, false, 108), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-12\">
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "rank", [], "any", false, false, false, 113), 'widget');
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
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_index");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>
    ";
        // line 131
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
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
        return "admin/website_admin/article/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 137,  268 => 136,  254 => 131,  245 => 125,  230 => 113,  222 => 108,  214 => 103,  206 => 98,  198 => 93,  180 => 78,  169 => 69,  158 => 64,  154 => 63,  149 => 61,  143 => 58,  137 => 55,  131 => 52,  125 => 49,  119 => 46,  115 => 44,  111 => 43,  87 => 22,  79 => 16,  69 => 15,  58 => 1,  56 => 12,  55 => 10,  53 => 7,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'website_admin' %}
{% set submenu = 'website_admin_article' %}


    {% set page_name = 'Articles' %}

    
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
                                <th>Titre</th>
                                <th>Auteur</th>
                                <th>Site Internet</th>
                                <th>Lien</th>
                                <th>Ordre d'apparition</th>
                                <th style=\"width:150px;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for article in articles %}
                                <tr>
                                    <td >
                                        {{ article.title |u.truncate(25) }}
                                    </td>
                                    <td >
                                        {{ article.author }}
                                    </td>
                                    <td>
                                        {{ article.website |u.truncate(25) }}
                                    </td>
                                    <td>
                                        {{ article.websiteLink |u.truncate(25) }}
                                    </td>
                                    <td>
                                        {{ article.rank }}
                                    </td>
                                    <td>
                                        <a href=\"{{ path('website_admin_article', {'id': article.id}) }}\" class=\"btn btn-icon-only btn-primary btn-sm\" data-toggle=\"tooltip\" data-original-title=\"Modifier\"><i class=\"fas fa-edit\"></i></a>
                                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\" data-original-title=\"Supprimer\" data-message=\"Souhaitez-vous supprimer définitivement ce chiffre clé ?\"
                                           data-token=\"{{ csrf_token('delete'~article.id ) }}\"
                                           data-url=\"{{ path('article_delete', {'id': article.id}) }}\"><i
                                                    class=\"fa fa-trash\"></i></a>
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
                    <h3 class=\"mb-0\">Rajouter un Article</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\"></h6>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.title) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.website_link) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.website) }}
                </div>
            </div>
            <div class=\"row mb-3\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.author) }}
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

            <a class=\"btn btn-icon btn-sm\" href='{{ path(\"exercice_index\") }}'>
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
", "admin/website_admin/article/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/website_admin/article/form.html.twig");
    }
}
