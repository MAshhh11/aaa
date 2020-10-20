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

/* admin/technical_document/form.html.twig */
class __TwigTemplate_a36e6af05806cbb1b5fa7869963b3a9d34dcfd38a23c0cd69ee3aac7c852ada5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/technical_document/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/technical_document/form.html.twig"));

        // line 3
        $context["menu"] = "technical_documents";
        // line 4
        $context["submenu"] = "technical_documents";
        // line 6
        if ( !(null === (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 6, $this->source); })()))) {
            // line 7
            $context["page_name"] = ("Modification du document " . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 7, $this->source); })()), "file", [], "any", false, false, false, 7));
        } else {
            // line 9
            $context["page_name"] = "Ajout de Documents Techniques";
        }
        // line 14
        $context["breadcrumbs"] = [0 => ["title" => "Administration", "url" => ""], 1 => ["title" => "Documents Techiques", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_index")], 2 => ["title" =>         // line 17
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 17, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/technical_document/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col text-right\">
                    <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\"
                            title=\"\" data-original-title=\"Enregistrer le formulaire\">
                        <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    </button>
                </div>
            </div>
        </div>
        ";
        // line 37
        if ( !(null === (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 37, $this->source); })()))) {
            // line 38
            echo "            ";
            $context["id"] = twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38);
            // line 39
            echo "        ";
        } else {
            // line 40
            echo "            ";
            $context["id"] = null;
            // line 41
            echo "        ";
        }
        // line 42
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_save", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 42, $this->source); })())]), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"card-body\">
                ";
        // line 44
        if ((null === (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 44, $this->source); })()))) {
            // line 45
            echo "                <h6 class=\"heading-small text-muted mb-4 mt-4\">Documents</h6>
                <div id=\"attachmentModel\" class=\"d-block\">
                    ";
            // line 47
            $context["i"] = 1;
            // line 48
            echo "                    <div class=\"row mt-3\">
                        <div class=\"col-sm-6\">
                            <input type=\"file\" name=\"files[]\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <a href=\"javascript:void(0);\" class=\"btn btn-icon btn-danger removeAttachment\"><i
                                        class=\"fa fa-trash\"></i></a>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 59
        echo "                <div class=\"col-lg-12\">
                    <h6 class=\"heading-small text-muted mb-4 mt-4\">Rattacher ce document aux exercices: </h6>
                    ";
        // line 61
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 61, $this->source); })())), 0)) {
            // line 62
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 62, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
                // line 63
                echo "                        <div class=\"mt-4 form-check\" id=\"listAllExercices\">
                            <input type=\"checkbox\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 64), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 64), "html", null, true);
                echo "\" class=\"select-exercice form-check-input\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 64), (isset($context["checkExercices"]) || array_key_exists("checkExercices", $context) ? $context["checkExercices"] : (function () { throw new RuntimeError('Variable "checkExercices" does not exist.', 64, $this->source); })()))) {
                    echo " checked ";
                }
                echo ">
                            <label class=\"form-check-label\" for=\"";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 65), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 65), "html", null, true);
                echo "</label>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    ";
        }
        // line 69
        echo "                </div>
            </div>
            <div class=\"card-footer\">

                <button type=\"submit\" class=\"btn btn-icon btn-success\">
                    <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    <span class=\"btn-inner--text\">Enregistrer</span>
                </button>
                <a class=\"btn btn-icon btn-sm\" href='";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_index");
        echo "'>
                    <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                    <span class=\"btn-inner--text\">Annuler</span>
                </a>
            </div>
        </form>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 89
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
        return "admin/technical_document/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 89,  217 => 88,  197 => 77,  187 => 69,  184 => 68,  173 => 65,  161 => 64,  158 => 63,  153 => 62,  151 => 61,  147 => 59,  134 => 48,  132 => 47,  128 => 45,  126 => 44,  120 => 42,  117 => 41,  114 => 40,  111 => 39,  108 => 38,  106 => 37,  93 => 27,  85 => 21,  75 => 20,  64 => 1,  62 => 17,  61 => 14,  58 => 9,  55 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'technical_documents' %}
{% set submenu = 'technical_documents' %}

  {% if item is not null %}
      {% set page_name = 'Modification du document '~item.file %}
  {% else %}
      {% set page_name = 'Ajout de Documents Techniques' %}
  {% endif %}



{% set breadcrumbs = [
    {\"title\": \"Administration\", 'url' : \"\"},
    {\"title\": \"Documents Techiques\", 'url' : path('technical_doc_index')},
    {\"title\": page_name, 'url' : \"\"},
] %}

{% block body %}

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{ page_name }}</h3>
                </div>
                <div class=\"col text-right\">
                    <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\"
                            title=\"\" data-original-title=\"Enregistrer le formulaire\">
                        <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    </button>
                </div>
            </div>
        </div>
        {% if item is not null %}
            {% set id = item.id %}
        {% else %}
            {% set id = null %}
        {% endif %}
        <form action=\"{{path(\"technical_doc_save\", {'id' : id}) }}\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"card-body\">
                {% if item is null %}
                <h6 class=\"heading-small text-muted mb-4 mt-4\">Documents</h6>
                <div id=\"attachmentModel\" class=\"d-block\">
                    {% set  i = 1 %}
                    <div class=\"row mt-3\">
                        <div class=\"col-sm-6\">
                            <input type=\"file\" name=\"files[]\" class=\"form-control\"/>
                        </div>
                        <div class=\"col-sm-3\">
                            <a href=\"javascript:void(0);\" class=\"btn btn-icon btn-danger removeAttachment\"><i
                                        class=\"fa fa-trash\"></i></a>
                        </div>
                    </div>
                </div>
                {% endif %}
                <div class=\"col-lg-12\">
                    <h6 class=\"heading-small text-muted mb-4 mt-4\">Rattacher ce document aux exercices: </h6>
                    {% if exercices|length > 0 %}
                        {% for exercice in exercices %}
                        <div class=\"mt-4 form-check\" id=\"listAllExercices\">
                            <input type=\"checkbox\" value=\"{{ exercice.id }}\" id=\"{{ exercice.title }}\" name=\"{{ exercice.title }}\" class=\"select-exercice form-check-input\" {% if  exercice.id in checkExercices%} checked {% endif %}>
                            <label class=\"form-check-label\" for=\"{{ exercice.title }}\">{{ exercice.title }}</label>
                        </div>
                        {% endfor %}
                    {% endif%}
                </div>
            </div>
            <div class=\"card-footer\">

                <button type=\"submit\" class=\"btn btn-icon btn-success\">
                    <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    <span class=\"btn-inner--text\">Enregistrer</span>
                </button>
                <a class=\"btn btn-icon btn-sm\" href='{{ path(\"technical_doc_index\") }}'>
                    <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                    <span class=\"btn-inner--text\">Annuler</span>
                </a>
            </div>
        </form>
    </div>


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
", "admin/technical_document/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/technical_document/form.html.twig");
    }
}
