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

/* admin/technical_document/index.html.twig */
class __TwigTemplate_90168983cab49023d5c8b044fc49849133edcce2953ee69709df49dc8e2962cc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/technical_document/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/technical_document/index.html.twig"));

        // line 3
        $context["menu"] = "technical_documents";
        // line 4
        $context["submenu"] = "technical_documents";
        // line 6
        $context["page_name"] = "Liste des Documents Techniques";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 8
            $context["breadcrumbs"] = [0 => ["title" => "Administration", "url" => ""], 1 => ["title" =>             // line 10
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 10, $this->source); })()), "url" => ""]];
        } else {
            // line 13
            $context["breadcrumbs"] = [0 => ["title" =>             // line 15
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 15, $this->source); })()), "url" => ""]];
        }
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/technical_document/index.html.twig", 1);
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
    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "                <div class=\"col text-right\">
                    <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_form");
            echo "\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-plus\"></i> Ajouter un document</a>
                </div>
                ";
        }
        // line 32
        echo "            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table align-items-center table-flush dataTable\" id=\"dt_default\">
                <thead class=\"thead-light\">
                <tr role=\"row\" class=\"filter\">
                    <td>
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-merge\">
                                <input type=\"text\" class=\"form-control table-filter\" id=\"col0_filter\" data-filter=\"0\">
                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-merge\">
                                <input type=\"text\" class=\"form-control table-filter\" id=\"col1_filter\" data-filter=\"1\">
                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"sorting\">Titre</th>
                    <th class=\"sorting\">crée le</th>
                    <th style=\"width:150px;\">Actions</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var tableUrl = \"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_datas");
        echo "\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [2];
    </script>
    ";
        // line 76
        $this->loadTemplate("admin/components/js_datatable.html.twig", "admin/technical_document/index.html.twig", 76)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/technical_document/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 76,  171 => 72,  165 => 70,  155 => 69,  110 => 32,  104 => 29,  101 => 28,  99 => 27,  94 => 25,  86 => 19,  76 => 18,  65 => 1,  62 => 15,  61 => 13,  58 => 10,  57 => 8,  55 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'technical_documents' %}
{% set submenu = 'technical_documents' %}

{% set page_name = 'Liste des Documents Techniques' %}
{% if is_granted(\"ROLE_ADMIN\") %}
    {% set breadcrumbs = [
        {\"title\": \"Administration\", 'url' : \"\"},
        {\"title\": page_name, 'url' : \"\"},
    ] %}
{% else %}
    {% set breadcrumbs = [

        {\"title\": page_name, 'url' : \"\"},
    ] %}
{% endif %}
{% block body %}

    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{page_name}}</h3>
                </div>
                {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col text-right\">
                    <a href=\"{{path('technical_doc_form')}}\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-plus\"></i> Ajouter un document</a>
                </div>
                {% endif %}
            </div>
        </div>

        <div class=\"table-responsive\">
            <table class=\"table align-items-center table-flush dataTable\" id=\"dt_default\">
                <thead class=\"thead-light\">
                <tr role=\"row\" class=\"filter\">
                    <td>
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-merge\">
                                <input type=\"text\" class=\"form-control table-filter\" id=\"col0_filter\" data-filter=\"0\">
                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span></div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-merge\">
                                <input type=\"text\" class=\"form-control table-filter\" id=\"col1_filter\" data-filter=\"1\">
                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span></div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class=\"sorting\">Titre</th>
                    <th class=\"sorting\">crée le</th>
                    <th style=\"width:150px;\">Actions</th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent()}}
    <script>
        var tableUrl = \"{{ path('technical_doc_datas')}}\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [2];
    </script>
    {% include 'admin/components/js_datatable.html.twig' %}
{% endblock %}

", "admin/technical_document/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/technical_document/index.html.twig");
    }
}
