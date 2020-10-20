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

/* admin/correction/index_messages.html.twig */
class __TwigTemplate_82ea2c1cafaf489434125c3ebde79bfd39eaa8bedcaea0b15c9055184700ba2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/correction/index_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/correction/index_messages.html.twig"));

        // line 3
        $context["menu"] = "correction";
        // line 4
        $context["submenu"] = "correction_message";
        // line 6
        $context["page_name"] = "Messages en attente";
        // line 8
        $context["breadcrumbs"] = [0 => ["title" => "Suivi Elèves", "url" => ""], 1 => ["title" =>         // line 10
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 10, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/correction/index_messages.html.twig", 1);
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
                    <td>
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-merge\">
                                <input type=\"text\" class=\"form-control table-filter\" id=\"col2_filter\" data-filter=\"2\">
                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span></div>
                            </div>
                        </div>
                    </td>
                    <td></td>
                </tr>
                  <tr>
                      <th class=\"sorting\">Nom</th>
                      <th class=\"sorting\">Prénom</th>
                      <th class=\"sorting\">Exercice</th>
                      <th class=\"sorting\">Message</th>
                      <th class=\"sorting\">Date dépôt</th>
                      <th style=\"width:150px;\"></th>
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

    // line 71
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>    
        var tableUrl = \"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_datas");
        echo "\";
        var tableSortingDefault = [[4, \"desc\" ]];
        var tableNotOrderable = [5];
    </script>
    ";
        // line 78
        $this->loadTemplate("admin/components/js_datatable.html.twig", "admin/correction/index_messages.html.twig", 78)->display($context);
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/correction/index_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 78,  162 => 74,  157 => 72,  147 => 71,  87 => 20,  79 => 14,  69 => 13,  58 => 1,  56 => 10,  55 => 8,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'correction' %}
{% set submenu = 'correction_message' %}

{% set page_name = 'Messages en attente' %}
    
{% set breadcrumbs = [
        {\"title\": \"Suivi Elèves\", 'url' : \"\"},
        {\"title\": page_name, 'url' : \"\"},
] %}

{% block body %}
    
    <div class=\"card shadow\">

      <div class=\"card-header border-0\">
          <div class='row align-items-center'>
              <div class=\"col\">
                  <h3 class=\"mb-0\">{{page_name}}</h3>
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
                    <td>
                        <div class=\"form-group mb-0\">
                            <div class=\"input-group input-group-merge\">
                                <input type=\"text\" class=\"form-control table-filter\" id=\"col2_filter\" data-filter=\"2\">
                                <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fas fa-search\"></i></span></div>
                            </div>
                        </div>
                    </td>
                    <td></td>
                </tr>
                  <tr>
                      <th class=\"sorting\">Nom</th>
                      <th class=\"sorting\">Prénom</th>
                      <th class=\"sorting\">Exercice</th>
                      <th class=\"sorting\">Message</th>
                      <th class=\"sorting\">Date dépôt</th>
                      <th style=\"width:150px;\"></th>
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
        var tableUrl = \"{{ path('message_datas')}}\";
        var tableSortingDefault = [[4, \"desc\" ]];
        var tableNotOrderable = [5];
    </script>
    {% include 'admin/components/js_datatable.html.twig' %}    
{% endblock %}

", "admin/correction/index_messages.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/correction/index_messages.html.twig");
    }
}
