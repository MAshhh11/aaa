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

/* admin/exercice/index.html.twig */
class __TwigTemplate_6ea226dac0a982e6321543dc13e62952104a6ca3a5affc31fb46c81becaf6cb5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exercice/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exercice/index.html.twig"));

        // line 3
        $context["menu"] = "formations";
        // line 4
        $context["submenu"] = "formations_exercice";
        // line 6
        $context["page_name"] = "Liste des Exercices";
        // line 8
        $context["breadcrumbs"] = [0 => ["title" => "Administration", "url" => ""], 1 => ["title" =>         // line 10
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 10, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/exercice/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "
    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col text-right\">
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_form");
        echo "\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-plus\"></i> Ajouter un Exercice</a>
                </div>
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
                    <td></td>
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

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var tableUrl = \"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_datas");
        echo "\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [2];
    </script>
    ";
        // line 70
        $this->loadTemplate("admin/components/js_datatable.html.twig", "admin/exercice/index.html.twig", 70)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/exercice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 70,  158 => 66,  152 => 64,  142 => 63,  93 => 23,  87 => 20,  79 => 14,  69 => 13,  58 => 1,  56 => 10,  55 => 8,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'formations' %}
{% set submenu = 'formations_exercice' %}

{% set page_name = 'Liste des Exercices' %}

{% set breadcrumbs = [
    {\"title\": \"Administration\", 'url' : \"\"},
    {\"title\": page_name, 'url' : \"\"},
] %}

{% block body %}

    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{page_name}}</h3>
                </div>
                <div class=\"col text-right\">
                    <a href=\"{{path('exercice_form')}}\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-plus\"></i> Ajouter un Exercice</a>
                </div>
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
                    <td></td>
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
        var tableUrl = \"{{ path('exercice_datas')}}\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [2];
    </script>
    {% include 'admin/components/js_datatable.html.twig' %}
{% endblock %}

", "admin/exercice/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/exercice/index.html.twig");
    }
}
