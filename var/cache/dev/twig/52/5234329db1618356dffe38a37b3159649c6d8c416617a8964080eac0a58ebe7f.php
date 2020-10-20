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

/* student/course/index.html.twig */
class __TwigTemplate_e0a67e92843458e44fc330ef56c69b75103bba32d506c8c73a48be58619996ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/course/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/course/index.html.twig"));

        // line 3
        $context["menu"] = "student_course";
        // line 4
        if (((isset($context["formation"]) || array_key_exists("formation", $context)) &&  !(null === (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 4, $this->source); })())))) {
            // line 5
            $context["submenu"] = ("student_course_" . twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5));
            // line 6
            $context["page_name"] = twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6);
        } else {
            // line 8
            $context["page_name"] = "";
        }
        // line 11
        $context["breadcrumbs"] = [0 => ["title" => "Ma formation", "url" => ""], 1 => ["title" =>         // line 13
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 13, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "student/course/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"card shadow\">
        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col-md-6\">
                    <h1 class=\"mb-0 text-blue\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</h1>
                </div>
                ";
        // line 24
        if (((isset($context["formation"]) || array_key_exists("formation", $context)) &&  !(null === (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 24, $this->source); })())))) {
            // line 25
            echo "                <div class=\"col-md-6\">
                    <h3 class=\"mb-0 text-right\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 26, $this->source); })()), "duration", [], "any", false, false, false, 26), "html", null, true);
            echo "</h3>
                </div>
                ";
        }
        // line 29
        echo "            </div>
        </div>
        ";
        // line 31
        if (((isset($context["formation"]) || array_key_exists("formation", $context)) &&  !(null === (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 31, $this->source); })())))) {
            // line 32
            echo "        <div class=\"card-body justify-content-center d-flex flex-column align-items-center\">
            <div class=\"p-2 w-75\">
                <h2>Ma progression  <span class=\"text-yellow\"> •</span></h2>
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
            ";
            // line 39
            $context["k"] = 1;
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 41
                echo "            <div class=\"card shadow p-2 w-75\" id=\"courseContainer\">
                <div class=\"row px-4 py-2 border-bottom d-flex justify-content-center align-items-center\">
                    <div class=\"col-12 col-sm-1\">
                        <i class=\"far fa-edit fa-2x\"></i>
                    </div>
                    <div class=\"col-12 col-sm-6 text-left\">
                        <h4>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 47), "html", null, true);
                echo "</h4>
                    </div>
                    <div class=\"col-12 col-sm-5 text-right d-flex flex-row justify-content-end align-items-center\">
                        <div style=\"height: 2rem !important;\">
                            <img src=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/jours.png"), "html", null, true);
                echo "\" alt=\"icone_bulle\" class=\"w-auto h-100 bg-\">
                        </div>
                        <div class=\"courseDuration\">
                            <p class=\"ml-1 mb-0\">";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "duration", [], "any", false, false, false, 54), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                </div>
                ";
                // line 58
                $context["y"] = 1;
                // line 59
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 59, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
                    // line 60
                    echo "                    ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["exercice"], "course_id", [], "any", false, false, false, 60), twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 60))) {
                        // line 61
                        echo "                    <div class=\"row p-2 d-flex justify-content-center align-items-center\">
                        <div class=\"col-sm-1\">
                        </div>
                        <div class=\"col-12 col-sm-4 text-left\">
                            <h5>";
                        // line 65
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 65), "html", null, true);
                        echo "</h5>
                        </div>
                        <div class=\"col-12 col-sm-3 text-left\">
                            <h5>difficulté ";
                        // line 68
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "difficulty", [], "any", false, false, false, 68), "html", null, true);
                        echo "</h5>
                        </div>
                        <div class=\"col-12 col-sm-2 text-left\">
                            <h5>";
                        // line 71
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "duration", [], "any", false, false, false, 71), "html", null, true);
                        echo "</h5>
                        </div>
                        ";
                        // line 73
                        if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 73), (isset($context["lockedExercices"]) || array_key_exists("lockedExercices", $context) ? $context["lockedExercices"] : (function () { throw new RuntimeError('Variable "lockedExercices" does not exist.', 73, $this->source); })()))) {
                            // line 74
                            echo "                            <div class=\"col-12 col-sm-2 md-btn-group\">
                                <i class=\"fas fa-lock\"></i>
                            </div>
                            ";
                        } else {
                            // line 78
                            echo "                            <div class=\"col-12 col-sm-2 md-btn-group\">
                                <a href=\"";
                            // line 79
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_exercice", ["id" => twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                            echo "\" class=\"btn btn-icon-only ";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 79), (isset($context["exercicesDone"]) || array_key_exists("exercicesDone", $context) ? $context["exercicesDone"] : (function () { throw new RuntimeError('Variable "exercicesDone" does not exist.', 79, $this->source); })()))) {
                                echo "btn-secondary";
                            } else {
                                echo "btn-primary";
                            }
                            echo " btn-sm\" data-toggle=\"tooltip\" data-original-title=\"";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 79), (isset($context["exercicesDone"]) || array_key_exists("exercicesDone", $context) ? $context["exercicesDone"] : (function () { throw new RuntimeError('Variable "exercicesDone" does not exist.', 79, $this->source); })()))) {
                                echo "voir l'exercice ";
                            } else {
                                echo "faire l'exercice";
                            }
                            echo "\">";
                            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 79), (isset($context["exercicesDone"]) || array_key_exists("exercicesDone", $context) ? $context["exercicesDone"] : (function () { throw new RuntimeError('Variable "exercicesDone" does not exist.', 79, $this->source); })()))) {
                                echo "<i class=\"fas fa-eye\"></i> ";
                            } else {
                                echo "<i class=\"fas fa-pencil-alt\"></i></i>";
                            }
                            echo "</a>
                            </div>
                            ";
                        }
                        // line 82
                        echo "                        ";
                        $context["y"] = ((isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 82, $this->source); })()) + 1);
                        // line 83
                        echo "                    </div>
                    ";
                    }
                    // line 85
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "            </div>
            ";
                // line 87
                $context["k"] = ((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 87, $this->source); })()) + 1);
                // line 88
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "        </div>
        ";
        } else {
            // line 91
            echo "        <div class=\"card-body justify-content-center d-flex flex-column align-items-center w-100\">
            <div class=\"col-12 text-center py-5\">
                <h1>Vous ne suivez actuellement aucune formation </h1>
            </div>
            <div class=\"col-12 text-center pb-5\">
                <a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_choice");
            echo "\" class=\"btn btn-primary btn-main\">M'inscrire à une formation</a>
            </div>
        </div>
        ";
        }
        // line 100
        echo "



    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 109,  287 => 108,  271 => 100,  264 => 96,  257 => 91,  253 => 89,  247 => 88,  245 => 87,  242 => 86,  236 => 85,  232 => 83,  229 => 82,  205 => 79,  202 => 78,  196 => 74,  194 => 73,  189 => 71,  183 => 68,  177 => 65,  171 => 61,  168 => 60,  163 => 59,  161 => 58,  154 => 54,  148 => 51,  141 => 47,  133 => 41,  128 => 40,  126 => 39,  120 => 36,  114 => 32,  112 => 31,  108 => 29,  102 => 26,  99 => 25,  97 => 24,  92 => 22,  85 => 17,  75 => 16,  64 => 1,  62 => 13,  61 => 11,  58 => 8,  55 => 6,  53 => 5,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'student_course' %}
{% if formation is defined  and formation is not null %}
    {% set submenu = 'student_course_'~formation.id %}
    {% set page_name = formation.title %}
{% else %}
    {% set page_name = '' %}
{% endif %}

{% set breadcrumbs = [
    {\"title\": \"Ma formation\", 'url' : \"\"},
    {\"title\": page_name, 'url' : \"\"},
] %}

{% block body %}

    <div class=\"card shadow\">
        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col-md-6\">
                    <h1 class=\"mb-0 text-blue\">{{page_name}}</h1>
                </div>
                {% if formation is defined  and formation is not null %}
                <div class=\"col-md-6\">
                    <h3 class=\"mb-0 text-right\">{{formation.duration}}</h3>
                </div>
                {% endif %}
            </div>
        </div>
        {% if formation is defined and formation is not null %}
        <div class=\"card-body justify-content-center d-flex flex-column align-items-center\">
            <div class=\"p-2 w-75\">
                <h2>Ma progression  <span class=\"text-yellow\"> •</span></h2>
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ progress }}%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
            {% set k = 1 %}
            {% for course in courses %}
            <div class=\"card shadow p-2 w-75\" id=\"courseContainer\">
                <div class=\"row px-4 py-2 border-bottom d-flex justify-content-center align-items-center\">
                    <div class=\"col-12 col-sm-1\">
                        <i class=\"far fa-edit fa-2x\"></i>
                    </div>
                    <div class=\"col-12 col-sm-6 text-left\">
                        <h4>{{  course.title }}</h4>
                    </div>
                    <div class=\"col-12 col-sm-5 text-right d-flex flex-row justify-content-end align-items-center\">
                        <div style=\"height: 2rem !important;\">
                            <img src=\"{{ asset('assets/img/front/jours.png') }}\" alt=\"icone_bulle\" class=\"w-auto h-100 bg-\">
                        </div>
                        <div class=\"courseDuration\">
                            <p class=\"ml-1 mb-0\">{{ course.duration }}</p>
                        </div>
                    </div>
                </div>
                {% set y = 1 %}
                {% for exercice in exercices %}
                    {% if exercice.course_id == course.id %}
                    <div class=\"row p-2 d-flex justify-content-center align-items-center\">
                        <div class=\"col-sm-1\">
                        </div>
                        <div class=\"col-12 col-sm-4 text-left\">
                            <h5>{{ exercice.title }}</h5>
                        </div>
                        <div class=\"col-12 col-sm-3 text-left\">
                            <h5>difficulté {{ exercice.difficulty }}</h5>
                        </div>
                        <div class=\"col-12 col-sm-2 text-left\">
                            <h5>{{ exercice.duration }}</h5>
                        </div>
                        {% if exercice.id in lockedExercices %}
                            <div class=\"col-12 col-sm-2 md-btn-group\">
                                <i class=\"fas fa-lock\"></i>
                            </div>
                            {% else %}
                            <div class=\"col-12 col-sm-2 md-btn-group\">
                                <a href=\"{{ path('student_exercice', {id: exercice.id}) }}\" class=\"btn btn-icon-only {% if exercice.id in exercicesDone %}btn-secondary{% else %}btn-primary{% endif %} btn-sm\" data-toggle=\"tooltip\" data-original-title=\"{% if exercice.id in exercicesDone %}voir l'exercice {% else %}faire l'exercice{% endif %}\">{% if exercice.id in exercicesDone %}<i class=\"fas fa-eye\"></i> {% else %}<i class=\"fas fa-pencil-alt\"></i></i>{% endif %}</a>
                            </div>
                            {% endif %}
                        {% set  y= y + 1 %}
                    </div>
                    {% endif %}
                {% endfor %}
            </div>
            {% set  k = k + 1 %}
            {% endfor %}
        </div>
        {% else %}
        <div class=\"card-body justify-content-center d-flex flex-column align-items-center w-100\">
            <div class=\"col-12 text-center py-5\">
                <h1>Vous ne suivez actuellement aucune formation </h1>
            </div>
            <div class=\"col-12 text-center pb-5\">
                <a href=\"{{ path('formation_choice') }}\" class=\"btn btn-primary btn-main\">M'inscrire à une formation</a>
            </div>
        </div>
        {% endif %}




    </div>

{% endblock %}

{% block javascripts %}
    {{ parent()}}
{% endblock %}

", "student/course/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/student/course/index.html.twig");
    }
}
