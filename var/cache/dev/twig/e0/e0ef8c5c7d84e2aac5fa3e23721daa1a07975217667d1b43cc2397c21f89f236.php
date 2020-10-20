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

/* admin/formation/form.html.twig */
class __TwigTemplate_0adaa8a3efa845524de61913064b5f899b0cc947a2877bbe1561289444d3bf47 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/form.html.twig"));

        // line 3
        $context["menu"] = "formations";
        // line 4
        $context["submenu"] = "formations_formation";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "value", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6))) {
            // line 7
            $context["page_name"] = ("Modification de la formation " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "value", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7));
        } else {
            // line 9
            $context["page_name"] = "Création d' une formation";
        }
        // line 11
        $context["breadcrumbs"] = [0 => ["title" => "Formations", "url" => ""], 1 => ["title" =>         // line 13
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 13, $this->source); })()), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index")]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/formation/form.html.twig", 1);
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
    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off", "enctype" => "multipart/form-data"]]);
        echo "

    <div class=\"card bg-secondary shadow\">
        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col text-right\">
                    <button class=\"btn btn-icon btn-success\" type='submit' data-toggle=\"tooltip\" data-animation=\"false\"
                            title=\"\" data-original-title=\"Enregistrer le formulaire\">
                        <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    </button>
                    ";
        // line 31
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "value", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31))) {
            // line 32
            echo "                        <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\" id=\"formationId\">
                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                           data-message=\"Souhaitez-vous supprimer définitivement cet Exercice ?<br/> Toutes les données rattachées à cet exercice seront automatiquement supprimées.\"
                           data-token=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "vars", [], "any", false, false, false, 35), "value", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35))), "html", null, true);
            echo "\"
                           data-url=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "value", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\"><i
                                    class=\"fa fa-trash\"></i> Supprimer</a>
                    ";
        }
        // line 39
        echo "                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <h6 class=\"heading-small text-muted mb-4\"></h6>

            <div class=\"row\">
                <div class=\"col-lg-4\">
                    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "title", [], "any", false, false, false, 48), 'widget');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "duration", [], "any", false, false, false, 51), 'widget');
        echo "
                </div>
                <div class=\"col-lg-4\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54), 'widget');
        echo "
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "isActive", [], "any", false, false, false, 59), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>
    ";
        // line 75
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        echo "


    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">Cours rattachés à la formation</h3>
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
                <div class=\"col-lg-6\">
                    <h6 class=\"heading-small text-muted mb-4 mt-4\">Cours</h6>
                    ";
        // line 98
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 98, $this->source); })())), 0)) {
            // line 99
            echo "                    <div class=\"mt-4\" id=\"listAllCourses\">
                        ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 100, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 101
                echo "                        <div class=\"form-group col-lg-6\">
                        <label for=\"";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 102), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 102), "html", null, true);
                echo "</label>
                        <input type=\"checkbox\" value=\"";
                // line 103
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 103), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 103), "html", null, true);
                echo "\" class=\"select-course\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 103), (isset($context["checkCourses"]) || array_key_exists("checkCourses", $context) ? $context["checkCourses"] : (function () { throw new RuntimeError('Variable "checkCourses" does not exist.', 103, $this->source); })()))) {
                    echo " checked ";
                }
                echo ">
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                    </div>
               </div>
                <div class=\"col-lg-6\">
                    <ul id=\"listCourses\">
                        ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 111
                echo "                            ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 111), (isset($context["checkCourses"]) || array_key_exists("checkCourses", $context) ? $context["checkCourses"] : (function () { throw new RuntimeError('Variable "checkCourses" does not exist.', 111, $this->source); })()))) {
                    // line 112
                    echo "                                <li class=\"list-group-item\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 112), "html", null, true);
                    echo "\">
                                    <span class=\"fa fa-arrows-alt my-handle\" aria-hidden=\"true\"></span> <span class=\"ml-3\">";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 113), "html", null, true);
                    echo "
                               </span></li>
                            ";
                }
                // line 116
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                    </ul>
                </div>
            </div>
            ";
        }
        // line 121
        echo "        </div>

        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit' id=\"save\">
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
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

    // line 159
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 160
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://raw.githack.com/SortableJS/Sortable/master/Sortable.js\"></script>
    <script>

        \$('#listCourses').sortable({
            handle: '.my-handle',
            animation: 150,
        });

        let allIds = [];

        \$('.select-course').change(function() {
            if(\$(this).is(':checked')) {

                allIds.push(\$(this).attr('value'));

                if(!allIds.includes(\$(this).data('id')) ) {
                    \$('#listCourses').append(' <li class=\"list-group-item\" data-id=\"' + \$(this).attr('value') +
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

            let formation = \$('#formationId').attr('value');

            \$.ajax({
                method: \"POST\",
                url: \"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_formation_rank");
        echo "\",
                data: { \"order\": order, \"formation\": formation},
            })
                .done(function( result ) {

                    if(result === \"ok\") {
                        \$.notify({
                            message: \"L'ordre des cours a bien été sauvegardé\"
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
        return "admin/formation/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 210,  333 => 160,  323 => 159,  284 => 129,  274 => 121,  268 => 117,  262 => 116,  256 => 113,  251 => 112,  248 => 111,  244 => 110,  238 => 106,  223 => 103,  217 => 102,  214 => 101,  210 => 100,  207 => 99,  205 => 98,  179 => 75,  170 => 69,  157 => 59,  149 => 54,  143 => 51,  137 => 48,  126 => 39,  120 => 36,  116 => 35,  109 => 32,  107 => 31,  97 => 24,  88 => 18,  85 => 17,  75 => 16,  64 => 1,  62 => 13,  61 => 11,  58 => 9,  55 => 7,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'formations' %}
{% set submenu = 'formations_formation' %}

    {% if form.vars.value.id is not null %}
        {% set page_name = 'Modification de la formation '~form.vars.value.title %}
    {% else %}
        {% set page_name = 'Création d\\' une formation' %}
    {% endif %}
{% set breadcrumbs = [
    {\"title\": \"Formations\", 'url' : \"\"},
    {\"title\": page_name, 'url' : path('formation_index') },
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
                        <input type=\"hidden\" value=\"{{ form.vars.value.id }}\" id=\"formationId\">
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
                <div class=\"col-lg-4\">
                    {{ form_widget(form.title) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.duration) }}
                </div>
                <div class=\"col-lg-4\">
                    {{ form_widget(form.price) }}
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {{ form_widget(form.isActive) }}
                </div>
            </div>
        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='{{ path(\"formation_index\") }}'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>
    {{ form_end(form) }}


    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">Cours rattachés à la formation</h3>
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
                <div class=\"col-lg-6\">
                    <h6 class=\"heading-small text-muted mb-4 mt-4\">Cours</h6>
                    {% if courses|length > 0 %}
                    <div class=\"mt-4\" id=\"listAllCourses\">
                        {% for course in courses %}
                        <div class=\"form-group col-lg-6\">
                        <label for=\"{{ course.title }}\">{{ course.title }}</label>
                        <input type=\"checkbox\" value=\"{{ course.id }}\" name=\"{{ course.title }}\" class=\"select-course\" {% if  course.id in checkCourses %} checked {% endif %}>
                        </div>
                        {% endfor %}
                    </div>
               </div>
                <div class=\"col-lg-6\">
                    <ul id=\"listCourses\">
                        {% for course in courses %}
                            {% if course.id in checkCourses %}
                                <li class=\"list-group-item\" data-id=\"{{ course.id }}\">
                                    <span class=\"fa fa-arrows-alt my-handle\" aria-hidden=\"true\"></span> <span class=\"ml-3\">{{ course.title }}
                               </span></li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
            {% endif%}
        </div>

        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit' id=\"save\">
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='{{ path(\"formation_index\") }}'>
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

        \$('#listCourses').sortable({
            handle: '.my-handle',
            animation: 150,
        });

        let allIds = [];

        \$('.select-course').change(function() {
            if(\$(this).is(':checked')) {

                allIds.push(\$(this).attr('value'));

                if(!allIds.includes(\$(this).data('id')) ) {
                    \$('#listCourses').append(' <li class=\"list-group-item\" data-id=\"' + \$(this).attr('value') +
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

            let formation = \$('#formationId').attr('value');

            \$.ajax({
                method: \"POST\",
                url: \"{{path(\"course_formation_rank\")}}\",
                data: { \"order\": order, \"formation\": formation},
            })
                .done(function( result ) {

                    if(result === \"ok\") {
                        \$.notify({
                            message: \"L'ordre des cours a bien été sauvegardé\"
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
", "admin/formation/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/formation/form.html.twig");
    }
}
