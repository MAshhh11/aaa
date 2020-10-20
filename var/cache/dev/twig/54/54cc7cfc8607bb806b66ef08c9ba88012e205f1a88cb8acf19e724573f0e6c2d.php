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

/* admin/exercice/form.html.twig */
class __TwigTemplate_a77935d351a7663f5c0a4a06c43d591dd36ef20881e26a861e09eef28af60c60 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exercice/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exercice/form.html.twig"));

        // line 3
        $context["menu"] = "exercices";
        // line 4
        $context["submenu"] = "exercices_create";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6))) {
            // line 7
            $context["page_name"] = ("Modification de l'exercice " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7));
        } else {
            // line 9
            $context["page_name"] = "Création d' un exercice";
        }
        // line 12
        $context["breadcrumbs"] = [0 => ["title" => "Formations", "url" => ""], 1 => ["title" => "Liste des Exercices", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_index")], 2 => ["title" =>         // line 15
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 15, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/exercice/form.html.twig", 1);
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
    ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off", "enctype" => "multipart/form-data"]]);
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
                    ";
        // line 34
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34))) {
            // line 35
            echo "                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                           data-message=\"Souhaitez-vous supprimer définitivement cet Exercice ?<br/> Toutes les données rattachées à cet exercice seront automatiquement supprimées.\"
                           data-token=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))), "html", null, true);
            echo "\"
                           data-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\"><i
                                    class=\"fa fa-trash\"></i> Supprimer</a>
                    ";
        }
        // line 41
        echo "                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\"></h6>

            <div class=\"row\">
                <div class=\"col-lg-8\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "title", [], "any", false, false, false, 50), 'widget');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "difficulty", [], "any", false, false, false, 53), 'widget');
        echo "
                </div>

            </div>

            <h6 class=\"heading-small text-muted mb-4 mt-4\">Documents</h6>

            <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-neutral\" id=\"addAttachment\">Ajouter un document</a>

            <div id=\"listAttachments\"></div>

            ";
        // line 64
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new RuntimeError('Variable "attachments" does not exist.', 64, $this->source); })())), 0)) {
            // line 65
            echo "            <div class=\"mt-4\">

                <div class=\"table-responsive bg-white\">
                    <table class=\"table align-items-center table-flush table-striped table-hover table-actions\">
                        <thead class=\"thead-light\">
                        <tr>
                            <th>Fichiers</th>
                            <th>Type de document</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new RuntimeError('Variable "attachments" does not exist.', 77, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 78
                echo "                            <tr>
                                <td><a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_file_admin_exo", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vars", [], "any", false, false, false, 79), "value", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "filename" => twig_get_attribute($this->env, $this->source, $context["attachment"], "file", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "file", [], "any", false, false, false, 79), "html", null, true);
                echo "</a></td>
                                ";
                // line 80
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["attachment"], "isPresentation", [], "any", false, false, false, 80), false)) {
                    // line 81
                    echo "                                    <td>Exercice</td>
                                ";
                } else {
                    // line 83
                    echo "                                    <td>Présentation</td>
                                ";
                }
                // line 85
                echo "                                <td>
                                    <div class=\"custom-control custom-checkbox \">
                                        <input type=\"checkbox\" id=\"remove_attchments_";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 87), "html", null, true);
                echo "\" name=\"remove_attachments[]\" class=\"custom-control-input form-check-input\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 87), "html", null, true);
                echo "\">
                                        <label class=\"custom-control-label form-check-label\" for=\"remove_attchments_";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 88), "html", null, true);
                echo "\"></label>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        }
        // line 98
        echo "        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_index");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>

        <div id=\"attachmentModel\" class=\"d-none\">
            ";
        // line 113
        $context["i"] = 1;
        // line 114
        echo "            <div class=\"row mt-3\">
                <div class=\"col-sm-6\">
                    <input type=\"file\" name=\"files[]\" class=\"form-control\"/>
                </div>
                <div class=\"col-sm-3\">
                    <select name=\"select[]\" id=\"1\" class=\"form-control select-file-type\">
                        <option value=\"presentation\">Fichier de présentation</option>
                        <option value=\"exercice\">Fichier d'exercice</option>
                    </select>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"javascript:void(0);\" class=\"btn btn-icon btn-danger removeAttachment\"><i
                                class=\"fa fa-trash\"></i></a>
                </div>
            </div>
        </div>
    ";
        // line 130
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), 'form_end');
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
        return "admin/exercice/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 137,  277 => 136,  262 => 130,  244 => 114,  242 => 113,  231 => 105,  222 => 98,  215 => 93,  204 => 88,  198 => 87,  194 => 85,  190 => 83,  186 => 81,  184 => 80,  178 => 79,  175 => 78,  171 => 77,  157 => 65,  155 => 64,  141 => 53,  135 => 50,  124 => 41,  118 => 38,  114 => 37,  110 => 35,  108 => 34,  98 => 27,  88 => 20,  85 => 19,  75 => 18,  64 => 1,  62 => 15,  61 => 12,  58 => 9,  55 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'exercices' %}
{% set submenu = 'exercices_create' %}

    {% if form.vars.value.id is not null %}
        {% set page_name = 'Modification de l\\'exercice '~form.vars.value.title %}
    {% else %}
        {% set page_name = 'Création d\\' un exercice' %}
    {% endif %}
    
    {% set breadcrumbs = [
        {\"title\": \"Formations\", 'url' : \"\"},
        {\"title\": \"Liste des Exercices\", 'url' : path('exercice_index') },
        {\"title\": page_name, 'url' : \"\"},
    ] %}

{% block body %}

    {{ form_start(form, {'attr': {'novalidate': 'novalidate','class': 'needs-validation', 'autocomplete': 'off', 'enctype':'multipart/form-data'}}) }}

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
                    {% if form.vars.value.id is not null %}
                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                           data-message=\"Souhaitez-vous supprimer définitivement cet Exercice ?<br/> Toutes les données rattachées à cet exercice seront automatiquement supprimées.\"
                           data-token=\"{{ csrf_token('delete'~form.vars.value.id) }}\"
                           data-url=\"{{ path('exercice_delete', {'id': form.vars.value.id}) }}\"><i
                                    class=\"fa fa-trash\"></i> Supprimer</a>
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\"></h6>

            <div class=\"row\">
                <div class=\"col-lg-8\">
                    {{ form_widget(form.title) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.difficulty) }}
                </div>

            </div>

            <h6 class=\"heading-small text-muted mb-4 mt-4\">Documents</h6>

            <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-neutral\" id=\"addAttachment\">Ajouter un document</a>

            <div id=\"listAttachments\"></div>

            {% if attachments|length > 0 %}
            <div class=\"mt-4\">

                <div class=\"table-responsive bg-white\">
                    <table class=\"table align-items-center table-flush table-striped table-hover table-actions\">
                        <thead class=\"thead-light\">
                        <tr>
                            <th>Fichiers</th>
                            <th>Type de document</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for attachment in attachments %}
                            <tr>
                                <td><a href=\"{{ path('download_file_admin_exo', {id : form.vars.value.id,  filename : attachment.file})  }}\" >{{ attachment.file }}</a></td>
                                {% if attachment.isPresentation == false %}
                                    <td>Exercice</td>
                                {% else %}
                                    <td>Présentation</td>
                                {% endif %}
                                <td>
                                    <div class=\"custom-control custom-checkbox \">
                                        <input type=\"checkbox\" id=\"remove_attchments_{{ attachment.id }}\" name=\"remove_attachments[]\" class=\"custom-control-input form-check-input\" value=\"{{ attachment.id }}\">
                                        <label class=\"custom-control-label form-check-label\" for=\"remove_attchments_{{ attachment.id }}\"></label>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            {% endif%}
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

        <div id=\"attachmentModel\" class=\"d-none\">
            {% set  i = 1 %}
            <div class=\"row mt-3\">
                <div class=\"col-sm-6\">
                    <input type=\"file\" name=\"files[]\" class=\"form-control\"/>
                </div>
                <div class=\"col-sm-3\">
                    <select name=\"select[]\" id=\"1\" class=\"form-control select-file-type\">
                        <option value=\"presentation\">Fichier de présentation</option>
                        <option value=\"exercice\">Fichier d'exercice</option>
                    </select>
                </div>
                <div class=\"col-sm-3\">
                    <a href=\"javascript:void(0);\" class=\"btn btn-icon btn-danger removeAttachment\"><i
                                class=\"fa fa-trash\"></i></a>
                </div>
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
", "admin/exercice/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/exercice/form.html.twig");
    }
}
