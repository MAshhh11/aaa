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

/* admin/components/confirmation.html.twig */
class __TwigTemplate_af570d6ea88ce5bafa482fc3c0b88e7e024e5baf2fefb10f6b132493c6beb1fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/confirmation.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "session", [], "any", false, false, false, 1), "flashbag", [], "any", false, false, false, 1), "get", [0 => "success"], "method", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 2
            echo "     <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
    <span class=\"alert-icon\"><i class=\"ni ni-like-2\"></i></span>
    <span class=\"alert-text\">";
            // line 4
            echo $context["flashMessage"];
            echo "</span>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>     
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo " 
 
 ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "flashbag", [], "any", false, false, false, 11), "get", [0 => "warning"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "     <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
    <span class=\"alert-icon\"><i class=\"fas fa-exclamation-triangle\"></i></span>
    <span class=\"alert-text\">";
            // line 14
            echo $context["flashMessage"];
            echo "</span>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>     
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo " 

 ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "flashbag", [], "any", false, false, false, 21), "get", [0 => "error"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <span class=\"alert-icon\"><i class=\"ni ni-bell-55\"></i></span>
        <span class=\"alert-text\">";
            // line 24
            echo $context["flashMessage"];
            echo "</span>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>     
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " 
 ";
        // line 31
        if (((isset($context["form"]) || array_key_exists("form", $context)) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "valid", [], "any", false, false, false, 31))) {
            // line 32
            echo "    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "errors", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 34
                echo "            ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 34), "")) {
                    echo "Une erreur s'est produite";
                } else {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 34), "html", null, true);
                }
                echo "<br/>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        
        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "children", [], "any", false, false, false, 37));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 38
                echo "            ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 38), "errors", [], "any", true, true, false, 38) && 0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 38), "errors", [], "any", false, false, false, 38), ""))) {
                    // line 39
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 40
                        echo "                    \"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 40), "label", [], "any", false, false, false, 40), "html", null, true);
                        echo "\" : ";
                        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 40), "This value is not valid.")) {
                            echo "Le format est incorrect";
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 40), "html", null, true);
                        }
                        echo "<br/>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "            ";
                }
                // line 43
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/components/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 44,  169 => 43,  166 => 42,  151 => 40,  146 => 39,  143 => 38,  139 => 37,  136 => 36,  123 => 34,  119 => 33,  116 => 32,  114 => 31,  111 => 30,  99 => 24,  95 => 22,  91 => 21,  87 => 19,  75 => 14,  71 => 12,  67 => 11,  63 => 9,  51 => 4,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for flashMessage in app.session.flashbag.get('success') %}
     <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
    <span class=\"alert-icon\"><i class=\"ni ni-like-2\"></i></span>
    <span class=\"alert-text\">{{ flashMessage|raw }}</span>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>     
 {% endfor %} 
 
 {% for flashMessage in app.session.flashbag.get('warning') %}
     <div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
    <span class=\"alert-icon\"><i class=\"fas fa-exclamation-triangle\"></i></span>
    <span class=\"alert-text\">{{ flashMessage|raw }}</span>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
    </button>
</div>     
 {% endfor %} 

 {% for flashMessage in app.session.flashbag.get('error') %}
    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        <span class=\"alert-icon\"><i class=\"ni ni-bell-55\"></i></span>
        <span class=\"alert-text\">{{ flashMessage|raw }}</span>
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>     
 {% endfor %}
 
 {% if form is defined and not form.vars.valid %}
    <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
        {% for error in form.vars.errors %}
            {% if error.message == \"\" %}Une erreur s'est produite{% else %}{{error.message}}{% endif %}<br/>
        {% endfor %}
        
        {% for child in form.children %}
            {% if child.vars.errors is defined and child.vars.errors != \"\" %}
                {% for error in child.vars.errors %}
                    \"{{child.vars.label}}\" : {% if error.message == \"This value is not valid.\" %}Le format est incorrect{% else %}{{error.message}}{% endif %}<br/>
                {% endfor %}
            {% endif %}
        {% endfor %}
        
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
    </div>
{% endif %}", "admin/components/confirmation.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/components/confirmation.html.twig");
    }
}
