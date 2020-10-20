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

/* admin/course/form.html.twig */
class __TwigTemplate_3c7c43d23749a2c9c29c2b1ca219365687fc6ae67dca7c23e633b991eca2ea44 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/course/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/course/form.html.twig"));

        // line 3
        $context["menu"] = "formations";
        // line 4
        $context["submenu"] = "formations_course";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6))) {
            // line 7
            $context["page_name"] = ("Modification du cours " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7));
        } else {
            // line 9
            $context["page_name"] = "Création d' un cours";
        }
        // line 12
        $context["breadcrumbs"] = [0 => ["title" => "Modules", "url" => ""], 1 => ["title" => "Liste des cours", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_index")], 2 => ["title" =>         // line 15
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 15, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/course/form.html.twig", 1);
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
        // line 26
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col text-right\">
                    <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\"
                            title=\"\" data-original-title=\"Enregistrer le formulaire\">
                        <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    </button>
                    ";
        // line 33
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "value", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33))) {
            // line 34
            echo "                        <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" id=\"coursId\">
                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                           data-message=\"Souhaitez-vous supprimer définitivement cet Exercice ?<br/> Toutes les données rattachées à ce cours seront automatiquement supprimées.\"
                           data-token=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37))), "html", null, true);
            echo "\"
                           data-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "duration", [], "any", false, false, false, 53), 'widget');
        echo "
                </div>
            </div>
            <h6 class=\"heading-small text-muted mb-4 mt-4\">Documents</h6>

            <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-neutral\" id=\"addAttachment\">Ajouter un document</a>

            <div id=\"listAttachments\"></div>

            ";
        // line 62
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new RuntimeError('Variable "attachments" does not exist.', 62, $this->source); })())), 0)) {
            // line 63
            echo "            <div class=\"mt-4\">

                <div class=\"table-responsive bg-white\">
                    <table class=\"table align-items-center table-flush table-striped table-hover table-actions\">
                        <thead class=\"thead-light\">
                        <tr>
                            <th>Fichiers</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) || array_key_exists("attachments", $context) ? $context["attachments"] : (function () { throw new RuntimeError('Variable "attachments" does not exist.', 74, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 75
                echo "                            <tr>

                                <td><a href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_file_admin_course", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "value", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), "filename" => twig_get_attribute($this->env, $this->source, $context["attachment"], "file", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "file", [], "any", false, false, false, 77), "html", null, true);
                echo "</a></td>
                                <td>
                                    <div class=\"custom-control custom-checkbox \">
                                        <input type=\"checkbox\" id=\"remove_attchments_";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "\" name=\"remove_attachments[]\" class=\"custom-control-input form-check-input\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "\">
                                        <label class=\"custom-control-label form-check-label\" for=\"remove_attchments_";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attachment"], "id", [], "any", false, false, false, 81), "html", null, true);
                echo "\"></label>
                                    </div>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                        </tbody>
                    </table>
                </div>
            </div>
            ";
        }
        // line 91
        echo "        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_index");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>

        <div id=\"attachmentModel\" class=\"d-none\">
            ";
        // line 106
        $context["i"] = 1;
        // line 107
        echo "            <div class=\"row mt-3\">
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
        // line 117
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        echo "


    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">Rattacher des exercices au cours</h3>
                </div>
                <div class=\"col text-right\">
                    <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\"
                            title=\"\" data-original-title=\"Enregistrer le formulaire\">
                        <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    </button>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"row\">
                ";
        // line 138
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 138, $this->source); })())), 0)) {
            // line 139
            echo "                <div class=\"col-lg-6\">
                    <div class=\"mt-4 row\" id=\"listAllExercices\">
                        ";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 141, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
                // line 142
                echo "                            <div class=\"form-group col-lg-6\">
                            <input type=\"checkbox\" value=\"";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 143), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 143), "html", null, true);
                echo "\" class=\"select-exercice\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 143), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 143), (isset($context["checkExercices"]) || array_key_exists("checkExercices", $context) ? $context["checkExercices"] : (function () { throw new RuntimeError('Variable "checkExercices" does not exist.', 143, $this->source); })()))) {
                    echo " checked ";
                }
                echo ">
                            <label for=\"";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 144), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 144), "html", null, true);
                echo "</label>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <ul id=\"listExercices\">
                        ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 151, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
                // line 152
                echo "                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 152), (isset($context["checkExercices"]) || array_key_exists("checkExercices", $context) ? $context["checkExercices"] : (function () { throw new RuntimeError('Variable "checkExercices" does not exist.', 152, $this->source); })()))) {
                    // line 153
                    echo "                                <li class=\"list-group-item\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 153), "html", null, true);
                    echo "\">
                                    <span class=\"fa fa-arrows-alt my-handle\" aria-hidden=\"true\"></span> <span class=\"ml-3\">";
                    // line 154
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exercice"], "title", [], "any", false, false, false, 154), "html", null, true);
                    echo "
                       </span></li>
                            ";
                }
                // line 157
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exercice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "                    </ul>
                </div>
                ";
        }
        // line 161
        echo "            </div>
        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit' id=\"save\">
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_index");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>

    <div id=\"addAttachment\" class=\"d-none\">
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




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 199
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 200
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://raw.githack.com/SortableJS/Sortable/master/Sortable.js\"></script>
    <script>

        \$('#listExercices').sortable({
            handle: '.my-handle',
            animation: 150,
        });

        let allIds = [];

        \$('.select-exercice').change(function() {
            if(\$(this).is(':checked')) {

                allIds.push(\$(this).attr('value'));

                if(!allIds.includes(\$(this).data('id')) ) {
                    \$('#listExercices').append(' <li class=\"list-group-item\" data-id=\"' + \$(this).attr('value') +
                        '\"> <span class=\"fa fa-arrows-alt my-handle\" aria-hidden=\"true\"></span> <span class=\"ml-3\">'
                        + \$(this).attr('name') + '</span></li>');
                }

            }
            if(!\$(this).is(':checked')) {

                let remove_item = \$(this).attr('value');
                allIds = \$.grep( allIds, function (value) {
                    return value != remove_item;
                })
                \$('.list-group-item').each(function () {
                    if(\$(this).data('id') == remove_item) {
                        \$(this).remove();
                    }
                });
            }
        });



        \$('#save').click(function() {
            var order = null;
            \$('.list-group-item').each(function() {
                var id = \$(this).data('id');
                order = order+id+'|';
            });

            let cours = \$('#coursId').attr('value');

            \$.ajax({
                method: \"POST\",
                url: \"";
        // line 250
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_exercice_rank");
        echo "\",
                data: { \"order\": order, \"cours\": cours},
            })
                .done(function( result ) {

                    if(result === \"ok\") {
                        \$.notify({
                            message: \"Le classement est article a bien été sauvegardé\"
                        },{
                            type: 'success',
                            delay: 2000,
                            placement: {
                                from: \"top\",
                                align: \"center\"
                            },
                        });
                    }
                    console.log(result);
                    console.log('ok');
                });

        });


    </script>
    <script>
        \$(\"body\").on(\"click\", \".removeAttachment\", function () {
            \$(this).parent().parent().remove();
        });
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


        \$('#addExercice').click(function () {
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
        return "admin/course/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 250,  398 => 200,  388 => 199,  349 => 169,  339 => 161,  334 => 158,  328 => 157,  322 => 154,  317 => 153,  314 => 152,  310 => 151,  304 => 147,  293 => 144,  281 => 143,  278 => 142,  274 => 141,  270 => 139,  268 => 138,  244 => 117,  232 => 107,  230 => 106,  219 => 98,  210 => 91,  203 => 86,  192 => 81,  186 => 80,  178 => 77,  174 => 75,  170 => 74,  157 => 63,  155 => 62,  143 => 53,  137 => 50,  126 => 41,  120 => 38,  116 => 37,  109 => 34,  107 => 33,  97 => 26,  88 => 20,  85 => 19,  75 => 18,  64 => 1,  62 => 15,  61 => 12,  58 => 9,  55 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'formations' %}
{% set submenu = 'formations_course' %}

    {% if form.vars.value.id is not null %}
        {% set page_name = 'Modification du cours '~form.vars.value.title %}
    {% else %}
        {% set page_name = 'Création d\\' un cours' %}
    {% endif %}
    
    {% set breadcrumbs = [
        {\"title\": \"Modules\", 'url' : \"\"},
        {\"title\": \"Liste des cours\", 'url' : path('course_index') },
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
                        <input type=\"hidden\" value=\"{{ form.vars.value.id }}\" id=\"coursId\">
                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                           data-message=\"Souhaitez-vous supprimer définitivement cet Exercice ?<br/> Toutes les données rattachées à ce cours seront automatiquement supprimées.\"
                           data-token=\"{{ csrf_token('delete'~form.vars.value.id) }}\"
                           data-url=\"{{ path('course_delete', {'id': form.vars.value.id}) }}\"><i
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
                    {{ form_widget(form.duration) }}
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
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for attachment in attachments %}
                            <tr>

                                <td><a href=\"{{ path('download_file_admin_course', {id : form.vars.value.id,  filename : attachment.file})  }}\" >{{ attachment.file }}</a></td>
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
                    <a href=\"javascript:void(0);\" class=\"btn btn-icon btn-danger removeAttachment\"><i
                                class=\"fa fa-trash\"></i></a>
                </div>
            </div>
        </div>
    {{ form_end(form) }}


    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">Rattacher des exercices au cours</h3>
                </div>
                <div class=\"col text-right\">
                    <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\"
                            title=\"\" data-original-title=\"Enregistrer le formulaire\">
                        <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    </button>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\"row\">
                {% if exercices|length > 0 %}
                <div class=\"col-lg-6\">
                    <div class=\"mt-4 row\" id=\"listAllExercices\">
                        {% for exercice in exercices %}
                            <div class=\"form-group col-lg-6\">
                            <input type=\"checkbox\" value=\"{{ exercice.id }}\" name=\"{{ exercice.title }}\" class=\"select-exercice\" id=\"{{ exercice.title }}\" {% if  exercice.id in checkExercices %} checked {% endif %}>
                            <label for=\"{{ exercice.title }}\">{{ exercice.title }}</label>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"col-lg-6\">
                    <ul id=\"listExercices\">
                        {% for exercice in exercices %}
                            {% if exercice.id in checkExercices %}
                                <li class=\"list-group-item\" data-id=\"{{ exercice.id }}\">
                                    <span class=\"fa fa-arrows-alt my-handle\" aria-hidden=\"true\"></span> <span class=\"ml-3\">{{ exercice.title }}
                       </span></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
                {% endif%}
            </div>
        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit' id=\"save\">
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='{{ path(\"exercice_index\") }}'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>

    <div id=\"addAttachment\" class=\"d-none\">
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




{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://raw.githack.com/SortableJS/Sortable/master/Sortable.js\"></script>
    <script>

        \$('#listExercices').sortable({
            handle: '.my-handle',
            animation: 150,
        });

        let allIds = [];

        \$('.select-exercice').change(function() {
            if(\$(this).is(':checked')) {

                allIds.push(\$(this).attr('value'));

                if(!allIds.includes(\$(this).data('id')) ) {
                    \$('#listExercices').append(' <li class=\"list-group-item\" data-id=\"' + \$(this).attr('value') +
                        '\"> <span class=\"fa fa-arrows-alt my-handle\" aria-hidden=\"true\"></span> <span class=\"ml-3\">'
                        + \$(this).attr('name') + '</span></li>');
                }

            }
            if(!\$(this).is(':checked')) {

                let remove_item = \$(this).attr('value');
                allIds = \$.grep( allIds, function (value) {
                    return value != remove_item;
                })
                \$('.list-group-item').each(function () {
                    if(\$(this).data('id') == remove_item) {
                        \$(this).remove();
                    }
                });
            }
        });



        \$('#save').click(function() {
            var order = null;
            \$('.list-group-item').each(function() {
                var id = \$(this).data('id');
                order = order+id+'|';
            });

            let cours = \$('#coursId').attr('value');

            \$.ajax({
                method: \"POST\",
                url: \"{{path(\"course_exercice_rank\")}}\",
                data: { \"order\": order, \"cours\": cours},
            })
                .done(function( result ) {

                    if(result === \"ok\") {
                        \$.notify({
                            message: \"Le classement est article a bien été sauvegardé\"
                        },{
                            type: 'success',
                            delay: 2000,
                            placement: {
                                from: \"top\",
                                align: \"center\"
                            },
                        });
                    }
                    console.log(result);
                    console.log('ok');
                });

        });


    </script>
    <script>
        \$(\"body\").on(\"click\", \".removeAttachment\", function () {
            \$(this).parent().parent().remove();
        });
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


        \$('#addExercice').click(function () {
            var html = \$(\"#attachmentModel\").html();
            \$(\"#listAttachments\").prepend(html);

            \$('.select-file-type').last().attr('id', i);
            i++;
        });



    </script>
{% endblock %}
", "admin/course/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/course/form.html.twig");
    }
}
