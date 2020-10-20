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

/* admin/components/breadcrumb.html.twig */
class __TwigTemplate_c6f761dae870f906b7c8794bc4b958115a514006bc79e86dd9087c15a2413a1f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/breadcrumb.html.twig"));

        // line 1
        echo "<div class=\"header bg-gradient-primary pb-6\" id=\"mainHeader\">
  <div class=\"container-fluid\">
   <div class=\"header-body\">
          <div class=\"row align-items-center py-4\">
            <div class=\"col-lg-12 col-12\">
              <nav aria-label=\"breadcrumb\" class=\"d-none d-md-inline-block ml-md-4\">
                <ol class=\"breadcrumb breadcrumb-links breadcrumb-dark\">
                  <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                  ";
        // line 9
        if ((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context))) {
            // line 10
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) || array_key_exists("breadcrumbs", $context) ? $context["breadcrumbs"] : (function () { throw new RuntimeError('Variable "breadcrumbs" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 11
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                              <li class=\"breadcrumb-item active\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 12), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, false, 12), "html", null, true);
                    echo "</a></li>
                          ";
                } else {
                    // line 14
                    echo "                              <li class=\"breadcrumb-item active\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, false, 14), "html", null, true);
                    echo "</li>
                          ";
                }
                // line 16
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                ";
        }
        // line 18
        echo "                </ol>
              </nav>
            </div>
          </div>
        </div>
  </div>    
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/components/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  86 => 17,  80 => 16,  74 => 14,  66 => 12,  63 => 11,  58 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header bg-gradient-primary pb-6\" id=\"mainHeader\">
  <div class=\"container-fluid\">
   <div class=\"header-body\">
          <div class=\"row align-items-center py-4\">
            <div class=\"col-lg-12 col-12\">
              <nav aria-label=\"breadcrumb\" class=\"d-none d-md-inline-block ml-md-4\">
                <ol class=\"breadcrumb breadcrumb-links breadcrumb-dark\">
                  <li class=\"breadcrumb-item\"><a href=\"{{path('dashboard_home')}}\"><i class=\"fas fa-home\"></i></a></li>
                  {% if breadcrumbs is defined %}
                        {% for breadcrumb in breadcrumbs %}
                            {% if breadcrumb.url %}
                              <li class=\"breadcrumb-item active\"><a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }}</a></li>
                          {% else %}
                              <li class=\"breadcrumb-item active\">{{ breadcrumb.title }}</li>
                          {% endif %}
                        {% endfor %}
                {% endif %}
                </ol>
              </nav>
            </div>
          </div>
        </div>
  </div>    
</div>", "admin/components/breadcrumb.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/components/breadcrumb.html.twig");
    }
}
