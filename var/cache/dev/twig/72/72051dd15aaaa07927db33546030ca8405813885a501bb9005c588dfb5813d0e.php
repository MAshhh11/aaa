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

/* admin/switch/index.html.twig */
class __TwigTemplate_eebeb2e4b2dba450e84bae2aeb89f07cd2e2d246dfbaa26e2db2dc37439c69d4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/switch/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/switch/index.html.twig"));

        // line 3
        $context["menu"] = "switch";
        // line 4
        $context["page_name"] = "Switch mode";
        // line 6
        $context["breadcrumbs"] = [0 => ["title" =>         // line 7
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 7, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/switch/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    
    <div class=\"card shadow\">

      <div class=\"card-header border-0\">
          <div class='row align-items-center'>
              <div class=\"col-12\">
                  <h3 class=\"mb-0\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "</h3>
              </div>          
          </div>
      </div>
              

      <div class=\"table-responsive\">
        <table class=\"table align-items-center table-flush dataTable table-actions\" id=\"dt_default\">
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
                                <select class=\"form-control table-filter\" id=\"col2_filter\" data-filter=\"2\">
                                    <option value=\"\">Rôle</option>
                                    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 49
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "slug", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                  </select>
                            </div>
                        </div>
                    </td>
                    <td></td>
                </tr>
                  <tr>
                      <th class=\"sorting\">Nom</th>
                      <th>Prénom</th>
                      <th>Rôle</th>
                      <th>Actions</th>
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switch_datas");
        echo "\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [3];
    </script>
    
    ";
        // line 79
        $this->loadTemplate("admin/components/js_datatable.html.twig", "admin/switch/index.html.twig", 79)->display($context);
        echo "    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/switch/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 79,  177 => 74,  172 => 72,  162 => 71,  134 => 51,  123 => 49,  119 => 48,  85 => 17,  77 => 11,  67 => 10,  56 => 1,  54 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'switch' %}
{% set page_name = 'Switch mode' %}
    
    {% set breadcrumbs = [
            {\"title\": page_name, 'url' : \"\"},
    ] %}

{% block body %}
    
    <div class=\"card shadow\">

      <div class=\"card-header border-0\">
          <div class='row align-items-center'>
              <div class=\"col-12\">
                  <h3 class=\"mb-0\">{{page_name}}</h3>
              </div>          
          </div>
      </div>
              

      <div class=\"table-responsive\">
        <table class=\"table align-items-center table-flush dataTable table-actions\" id=\"dt_default\">
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
                                <select class=\"form-control table-filter\" id=\"col2_filter\" data-filter=\"2\">
                                    <option value=\"\">Rôle</option>
                                    {% for role in roles %}
                                        <option value=\"{{role.slug}}\">{{role.name}}</option>
                                    {% endfor %}
                                  </select>
                            </div>
                        </div>
                    </td>
                    <td></td>
                </tr>
                  <tr>
                      <th class=\"sorting\">Nom</th>
                      <th>Prénom</th>
                      <th>Rôle</th>
                      <th>Actions</th>
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
        var tableUrl = \"{{ path('switch_datas')}}\";
        var tableSortingDefault = [[0, \"asc\" ]];
        var tableNotOrderable = [3];
    </script>
    
    {% include 'admin/components/js_datatable.html.twig' %}    

{% endblock %}

", "admin/switch/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/switch/index.html.twig");
    }
}
