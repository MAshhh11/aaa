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

/* admin/formation/index.html.twig */
class __TwigTemplate_4844b06505acbfb50fc50f7a99951547de179d2643f7c871c371bc154217fd2b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        // line 3
        $context["menu"] = "formations";
        // line 4
        $context["submenu"] = "formations_formation";
        // line 5
        $context["page_name"] = "Liste des Formations";
        // line 6
        $context["breadcrumbs"] = [0 => ["title" => "Formations", "url" => ""], 1 => ["title" =>         // line 8
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 8, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index")]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/formation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col text-right\">
                    <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_form");
        echo "\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-plus\"></i> Créer une formation</a>
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
                    <th class=\"sorting\">Active</th>
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

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        var tableUrl = \"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_datas");
        echo "\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [2];
    </script>
    ";
        // line 69
        $this->loadTemplate("admin/components/js_datatable.html.twig", "admin/formation/index.html.twig", 69)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/formation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 69,  159 => 65,  153 => 63,  143 => 62,  93 => 21,  87 => 18,  79 => 12,  69 => 11,  58 => 1,  56 => 8,  55 => 6,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'formations' %}
{% set submenu = 'formations_formation' %}
{% set page_name = 'Liste des Formations' %}
{% set breadcrumbs = [
    {\"title\": \"Formations\", 'url' : \"\"},
    {\"title\": page_name, 'url' : path('formation_index') },
] %}

{% block body %}

    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{page_name}}</h3>
                </div>
                <div class=\"col text-right\">
                    <a href=\"{{path('formation_form')}}\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-plus\"></i> Créer une formation</a>
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
                    <th class=\"sorting\">Active</th>
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
        var tableUrl = \"{{ path('formation_datas')}}\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [2];
    </script>
    {% include 'admin/components/js_datatable.html.twig' %}
{% endblock %}

", "admin/formation/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/formation/index.html.twig");
    }
}
