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

/* student/exercice/index.html.twig */
class __TwigTemplate_9a797f327e65b8635291fb722812f1e5df0c99c62a491397356b8546adc2f367 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/exercice/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/exercice/index.html.twig"));

        // line 3
        $context["menu"] = "student_exercice";
        // line 4
        $context["submenu"] = "student_exercice";
        // line 6
        $context["page_name"] = ("Exercice " . twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6));
        // line 8
        $context["breadcrumbs"] = [0 => ["title" => "Ma formation", "url" => ""], 1 => ["title" =>         // line 10
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 10, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "student/exercice/index.html.twig", 1);
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
        echo "    <div class=\"card shadow\" id=\"exerciceBg\">
        <div class=\"card-header border-0 mb-3\">
            <div class='row align-items-center'>
                <div class=\"col-md-6\">
                    <h3 class=\"mb-0 text-blue\" style=\"font-size: 1.8rem\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " <span class=\"text-yellow\"> •</span></h3>
                </div>
                <div class=\"col-md-2 text-right\">
                    <h3 class=\"mb-0\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 21, $this->source); })()), "duration", [], "any", false, false, false, 21), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col-md-4 text-center d-flex justify-content-end align-items-center\">
                    ";
        // line 24
        if ((twig_in_filter((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 24, $this->source); })()), (isset($context["locked"]) || array_key_exists("locked", $context) ? $context["locked"] : (function () { throw new RuntimeError('Variable "locked" does not exist.', 24, $this->source); })())) || 0 === twig_compare((isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 24, $this->source); })()), 0))) {
            // line 25
            echo "                        <p>Vous n'avez pas encore  <br/> débloqué le prochain exercice !</p>
                    ";
        } elseif (0 !== twig_compare(        // line 26
(isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 26, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26))) {
            // line 27
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_exercice", ["id" => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 27, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-main\"><i class=\"fas fa-caret-left\"></i> Exercice précédent</a>
                    ";
        }
        // line 29
        echo "                    ";
        if ((twig_in_filter((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 29, $this->source); })()), (isset($context["locked"]) || array_key_exists("locked", $context) ? $context["locked"] : (function () { throw new RuntimeError('Variable "locked" does not exist.', 29, $this->source); })())) || 0 === twig_compare((isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 29, $this->source); })()), 0))) {
            // line 30
            echo "                        <p>Vous n'avez pas encore  <br/> débloqué le prochain exercice !</p>
                    ";
        } elseif (0 !== twig_compare(        // line 31
(isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 31, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31))) {
            // line 32
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_exercice", ["id" => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 32, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-main\">Exercice suivant <i class=\"fas fa-caret-right\"></i></a>
                    ";
        }
        // line 34
        echo "                </div>
            </div>
        </div>
        <div class=\"container-fluid d-flex flex-row my-4 mx-2\">
            <div class=\"btn-toolbar mb-2\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\" id=\"presentation_files\">
                    ";
        // line 40
        if ( !twig_test_empty((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 42
                echo "                    ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["file"], "isPresentation", [], "any", false, false, false, 42), true)) {
                    // line 43
                    echo "                    <button type=\"button\" class=\"btn btn-primary btn-main btn-toggle\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 43), "html", null, true);
                    echo "</button>
                    ";
                }
                // line 45
                echo "                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\" id=\"exercice_files\">
                    ";
                // line 47
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["file"], "isPresentation", [], "any", false, false, false, 47), false)) {
                    // line 48
                    echo "                    <button type=\"button\" class=\"btn btn-secondary btn-toggle btn-main-orange\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
                    echo "/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file", [], "any", false, false, false, 48), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "filename", [], "any", false, false, false, 48), "html", null, true);
                    echo "</button>
                    ";
                }
                // line 50
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                    ";
        }
        // line 52
        echo "                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row d-flex flex-row w-100 h-100\">
                ";
        // line 57
        if ((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 57, $this->source); })())) {
            // line 58
            echo "                <div class=\"col-12 col-lg-8 mb-2 h-100 pr-0\" id=\"preview_file\" style=\"height: 55vh !important;\">
                    <object type=\"application/pdf\" width=\"100%\" height=\"100%\" id=\"preview_file\" data=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../uploads/exercices/exercice_"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 59, $this->source); })()), 0, [], "array", false, false, false, 59), "file", [], "any", false, false, false, 59), "html", null, true);
            echo "#view=FitH\">
                        <param name=\"src\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../uploads/exercices/exercice_"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 60, $this->source); })()), 0, [], "array", false, false, false, 60), "file", [], "any", false, false, false, 60), "html", null, true);
            echo "\">
                        <p>
                            <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_file", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62), "filename" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 62, $this->source); })()), 0, [], "array", false, false, false, 62), "filename", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" />Cliquez ici pour télécharger le document.</a>
                        </p>
                    </object>
                </div>
                <div class=\"col-12 col-lg-1 d-flex flex-column justify-content-start mb-5 pl-0 h-25\" id=\"containerExerciceDifficulty\">
                    <div class=\"col-lg-12 col-6 px-0 exoDifficulty\" style=\"max-width: 70%\">
                        <div class=\"py-2 d-flex flex-column text-center\" style=\"background-color: #1b148c !important;\">
                            <div style=\"height: 2rem;\">
                                <img src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/jours.png"), "html", null, true);
            echo "\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                            </div>
                            <div style=\"height: 2rem;\">
                                <h2 class=\"text-white\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 73, $this->source); })()), "duration", [], "any", false, false, false, 73), "html", null, true);
            echo "</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-12 col-6 px-0 exoDifficulty\" style=\"max-width: 70%\">
                        <div class=\"py-2 d-flex flex-column text-center\" style =\"background-color: #1179eb !important;\">
                            <div style=\"height: 2rem;\">
                                <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/difficulte.png"), "html", null, true);
            echo "\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                            </div>
                            <div style=\"height: 2rem;\">
                                <h2 class=\"text-white\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 83, $this->source); })()), "difficulty", [], "any", false, false, false, 83), "html", null, true);
            echo "</h2>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 89
        echo "                <div class=\"col-12 col-lg-3\" id=\"exerciceRighContainer\">
                 ";
        // line 91
        echo "                <div class=\"row\">
                    <div class=\"card w-100\" style=\"box-shadow: 2px 5px 5px lightgrey;\">
                            <div class=\"card-header text-center\">
                                <a href=\"#echangesavecprof\"><div style=\"height: 2rem !important;\">
                        <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_debrief.png"), "html", null, true);
        echo "\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                        </div><h3 class=\"mb-0\">Echanges avec mon professeur</h3></a>
                            </div>
                    </div>
                </div>
                ";
        // line 101
        echo "                    ";
        if ((isset($context["technicalDocuments"]) || array_key_exists("technicalDocuments", $context) ? $context["technicalDocuments"] : (function () { throw new RuntimeError('Variable "technicalDocuments" does not exist.', 101, $this->source); })())) {
            // line 102
            echo "                    <div class=\"row mt-1\">
                        <div class=\"card w-100\" style=\"box-shadow: 2px 5px 5px lightgrey;\">
                            <div class=\"card-header text-center\">
                                <h3>Documents Techniques</h3>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"d-flex align-items-center\">
                                    ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["technicalDocuments"]) || array_key_exists("technicalDocuments", $context) ? $context["technicalDocuments"] : (function () { throw new RuntimeError('Variable "technicalDocuments" does not exist.', 109, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 110
                echo "                                        <li class=\"text-yellow\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_view", ["id" => twig_get_attribute($this->env, $this->source, $context["document"], "id", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "file", [], "any", false, false, false, 110), "html", null, true);
                echo "</a></li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 117
        echo "                    <div class=\"row mt-5\">
                        <div class=\"card w-100\" style=\"box-shadow: 2px 5px 5px lightgrey;\">
                            <div class=\"card-header text-center d-flex flex-col justify-content-center align-items-center\">
                                <div style=\"height: 2rem !important;\">
                                    <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_corrige.png"), "html", null, true);
        echo "\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                                </div>
                                <div class=\"ml-3\">
                                    <h3 class=\"mb-0\">J'ai terminé mon exercice </h3>
                                    <p class=\"p-1\">C'est ici pour envoyer votre fichier !</p>
                                </div>
                            </div>
                            ";
        // line 128
        if (( !(null === (isset($context["alreadySent"]) || array_key_exists("alreadySent", $context) ? $context["alreadySent"] : (function () { throw new RuntimeError('Variable "alreadySent" does not exist.', 128, $this->source); })())) && (null === twig_get_attribute($this->env, $this->source, (isset($context["alreadySent"]) || array_key_exists("alreadySent", $context) ? $context["alreadySent"] : (function () { throw new RuntimeError('Variable "alreadySent" does not exist.', 128, $this->source); })()), "isCorrect", [], "any", false, false, false, 128)))) {
            // line 129
            echo "                            <div class=\"card-body text-center\">
                             <p class=\"font-weight-bold\">Votre exercice va bientôt être corrigé !</p>
                            </div>
                            ";
        } elseif ((( !(null ===         // line 132
(isset($context["alreadySent"]) || array_key_exists("alreadySent", $context) ? $context["alreadySent"] : (function () { throw new RuntimeError('Variable "alreadySent" does not exist.', 132, $this->source); })())) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["alreadySent"]) || array_key_exists("alreadySent", $context) ? $context["alreadySent"] : (function () { throw new RuntimeError('Variable "alreadySent" does not exist.', 132, $this->source); })()), "isCorrect", [], "any", false, false, false, 132), false)) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["alreadySent"]) || array_key_exists("alreadySent", $context) ? $context["alreadySent"] : (function () { throw new RuntimeError('Variable "alreadySent" does not exist.', 132, $this->source); })()), "isSent", [], "any", false, false, false, 132), true))) {
            // line 133
            echo "                            <div class=\"card-body text-center\">
                                <p class=\"font-weight-bold\">Votre exercice a été corrigé mais n'a pas été valdié!</p>
                                <form action=\"";
            // line 135
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_exercice");
            echo "\" enctype=\"multipart/form-data\" class=\"w-100\" method=\"post\">
                                    <div class=\"custom-file\">
                                        <input type=\"file\" class=\"custom-file-input sr-only\" id=\"validatedCustomFile\" required name=\"video_file\">
                                        <label class=\"custom-file-label \" for=\"validatedCustomFile\">Choisir un fichier...</label>
                                        <div class=\"invalid-feedback\">Fichier non valide</div>
                                    </div>
                                    <input type=\"hidden\" id=\"";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 141, $this->source); })()), "id", [], "any", false, false, false, 141), "html", null, true);
            echo "\" name=\"exercice\">
                                    <div class=\"form-group text-center mt-2\">
                                        <button type=\"submit\" class=\"btn btn-primary form-control w-50\">
                                            Envoyer </button>
                                    </div>
                                </form>
                            </div>
                            ";
        } elseif (( !(null ===         // line 148
(isset($context["alreadySent"]) || array_key_exists("alreadySent", $context) ? $context["alreadySent"] : (function () { throw new RuntimeError('Variable "alreadySent" does not exist.', 148, $this->source); })())) && 0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["alreadySent"]) || array_key_exists("alreadySent", $context) ? $context["alreadySent"] : (function () { throw new RuntimeError('Variable "alreadySent" does not exist.', 148, $this->source); })()), "isCorrect", [], "any", false, false, false, 148), true))) {
            // line 149
            echo "                                <div class=\"card-body text-center\">
                                    <p class=\"font-weight-bold\"><i class=\"fas fa-check-circle\"></i> Votre exercice a été corrigé et validé! <br>Rendez-vous à l'exercice suivant !</p>
                                </div>
                            ";
        } else {
            // line 153
            echo "                            <div class=\"card-body\">
                                <form action=\"";
            // line 154
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submit_exercice");
            echo "\" enctype=\"multipart/form-data\" class=\"w-100\" method=\"post\">
                                    <div class=\"custom-file\">
                                        <input type=\"file\" class=\"custom-file-input sr-only col-12\" id=\"validatedCustomFile\" required name=\"video_file\">
                                        <label class=\"custom-file-label col-12\" for=\"validatedCustomFile\"></label>
                                        <div class=\"invalid-feedback\">Fichier non valide</div>
                                    </div>
                                    <input type=\"hidden\" id=\"";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160), "html", null, true);
            echo "\" name=\"exercice\">
                                    <div class=\"form-group text-center mt-2\">
                                        <button type=\"submit\" class=\"btn btn-primary form-control w-75\">
                                            Envoyer</button>
                                    </div>
                                </form>
                            </div>
                            ";
        }
        // line 168
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"\">
        <div class=\"container-fluid\">
            <div class=\"row mt-5\">
            <div id=\"echangebox\" class=\"card w-75 m-auto\">
                <div id=\"echangesavecprof\" class=\"card-header bg-darkBlue text-center d-flex flex-col justify-content-center align-items-center\">
                    <div style=\"height: 2rem !important;\">
                        <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_debrief.png"), "html", null, true);
        echo "\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                    </div>
                    <div class=\"ml-3\">
                        <h3 class=\"mb-0\">Echanges avec mon professeur</h3>
                    </div>
                </div>
                <div class=\"card-body\" id=\"commentContainer\" style=\"font-size: 0.5rem!important;\">
                    <input type=\"hidden\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 188, $this->source); })()), "firstname", [], "any", false, false, false, 188), "html", null, true);
        echo "\" id=\"userFirstname\">
                    <input type=\"hidden\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 189, $this->source); })()), "lastname", [], "any", false, false, false, 189), "html", null, true);
        echo "\" id=\"userLastname\">
                    ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 191
            echo "                        <div class=\"card text-sm\">
                            <div class=\"card bg-white my-0 d-flex flex-column\">
                                <div class=\"row col-12 my-1 border-bottom\">
                                    <div class=\"col-6\"><p class=\"text-left font-weight-bold my-0\" style=\"font-size: 0.8rem!important;\">";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 194), "firstname", [], "any", false, false, false, 194), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 194), "lastname", [], "any", false, false, false, 194), "html", null, true);
            echo "</p></div>
                                    <div class=\"col-6\"><p class=\"text-right my-0\" style=\"font-size: 0.7rem!important;\"> ";
            // line 195
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 195), "d/m/Y"), "html", null, true);
            echo "</p></div>
                                </div>
                                <div class=\"row col-12\">
                                    <div class=\"col-md-12\"><p style=\"font-size: 0.9rem!important;\">";
            // line 198
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 198), "html", null, true);
            echo "</p></div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        echo "                    <div class=\"card bg-white p-3\">
                        <form method=\"\" action=\"\" id=\"commentForm\">
                            <div class=\"form-group\">
                                <textarea name=\"comment\" class=\"form-control\" id=\"comment\" placeholder=\"Ecrivez votre commentaire ici\"></textarea>
                                <input type=\"hidden\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 207, $this->source); })()), "id", [], "any", false, false, false, 207), "html", null, true);
        echo "\" id=\"exerciceId\">
                            </div>
                            <div class=\"form-group text-center\">
                                <button id=\"buttonmobile\" type=\"submit\" class=\"btn btn-primary form-control w-50 \">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 222
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 223
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    if(document.querySelector('.custom-file-input')  ){
        document.querySelector('.custom-file-input').addEventListener('change',function(e){
            var fileName = document.getElementById(\"validatedCustomFile\").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    }

    //change preview file
    \$('.btn-toggle').click(function() {
        let value = \$(this).attr('value').split('/');
        let id = value[0];
        let filename = value[1];

        \$('#preview_file').empty();
        \$(\"<object type='application/pdf' width='100%' height='100%' id='preview_file' data='";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../uploads/exercices/"), "html", null, true);
        echo "exercice_\"+ id +\"/\"+ filename +\"#view=FitH'>\" +
            \"<param name='src' value='";
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../uploads/exercices/"), "html", null, true);
        echo "exercice_\"+ id +\"/\"+ filename +\"'>\" +
            \"<p><a href='";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../uploads/exercices/"), "html", null, true);
        echo "exercice_\"+ id +\"/\" + filename + \"/>click here to download the PDF file.</a></p></object>\").appendTo(\$('#preview_file'));
    })

    // save comment
    \$('#commentForm').submit(function(e) {
        e.preventDefault();
        let message = \$('#comment').val();
        let exercice = \$('#exerciceId').val();
        let firstname = \$('#userFirstname').val();
        let lastname = \$('#userLastname').val();
        let d  = new Date();
        let day,month
        if( d.getDate().toString().length < 2) {
            day = '0' + d.getDate()
        } else {
            day = d.getDate()
        }
        if( d.getMonth().toString().length < 2) {
            month =  d.getMonth() + 1
            month = '0' + month
        } else {
            month = d.getMonth() + 1
        }



        let date = day+ \"/\" + month + \"/\"+  d.getFullYear();
        if(message.length > 3) {
            \$.ajax({
                method: \"POST\",
                url: \"";
        // line 272
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_comment");
        echo "\",
                data: { \"message\": message, 'exercice' : exercice},
            })
                .done(function( result ) {
                    if(result === \"ok\") {
                        \$.notify({
                            message: \"Le commentaire a bien été enregistré\"
                        },{
                            type: 'success',
                            delay: 2000,
                            placement: {
                                from: \"top\",
                                align: \"center\"
                            },
                        });

                        \$(\"#commentContainer .card:last\").before(\"<div class='card text-sm'><div class='Card-body bg-white my-0 d-flex flex-column'><div class='row col-12 my-1 border-bottom'><div class='col-6'><p class='text-left font-weight-bold my-0' style='font-size: 0.8rem!important;'>\" + firstname + ' '+ lastname +
                            \"</p></div><div class='col-6'><p class='text-right my-0' style='font-size: 0.7rem!important;'>\" + date +\"</p></div></div><div class='row p-3'><div class='col-md-12'><p>\"+
                            message +\"</p></div></div></div></div>\");
                    }
                });
        }
    });


    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/exercice/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  547 => 272,  514 => 242,  510 => 241,  506 => 240,  485 => 223,  475 => 222,  451 => 207,  445 => 203,  434 => 198,  428 => 195,  422 => 194,  417 => 191,  413 => 190,  409 => 189,  405 => 188,  395 => 181,  380 => 168,  367 => 160,  358 => 154,  355 => 153,  349 => 149,  347 => 148,  335 => 141,  326 => 135,  322 => 133,  320 => 132,  315 => 129,  313 => 128,  303 => 121,  297 => 117,  290 => 112,  279 => 110,  275 => 109,  266 => 102,  263 => 101,  255 => 95,  249 => 91,  246 => 89,  237 => 83,  231 => 80,  221 => 73,  215 => 70,  204 => 62,  196 => 60,  189 => 59,  186 => 58,  184 => 57,  177 => 52,  174 => 51,  168 => 50,  158 => 48,  156 => 47,  152 => 45,  142 => 43,  139 => 42,  134 => 41,  132 => 40,  124 => 34,  118 => 32,  116 => 31,  113 => 30,  110 => 29,  104 => 27,  102 => 26,  99 => 25,  97 => 24,  91 => 21,  85 => 18,  79 => 14,  69 => 13,  58 => 1,  56 => 10,  55 => 8,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'student_exercice' %}
{% set submenu = 'student_exercice' %}

{% set page_name = 'Exercice '~exercice.title %}

{% set breadcrumbs = [
    {\"title\": \"Ma formation\", 'url' : \"\"},
    {\"title\": page_name, 'url' : \"\"},
] %}

{% block body %}
    <div class=\"card shadow\" id=\"exerciceBg\">
        <div class=\"card-header border-0 mb-3\">
            <div class='row align-items-center'>
                <div class=\"col-md-6\">
                    <h3 class=\"mb-0 text-blue\" style=\"font-size: 1.8rem\">{{page_name}} <span class=\"text-yellow\"> •</span></h3>
                </div>
                <div class=\"col-md-2 text-right\">
                    <h3 class=\"mb-0\">{{exercice.duration}}</h3>
                </div>
                <div class=\"col-md-4 text-center d-flex justify-content-end align-items-center\">
                    {% if previous in locked or previous == 0 %}
                        <p>Vous n'avez pas encore  <br/> débloqué le prochain exercice !</p>
                    {% elseif previous != exercice.id %}
                        <a href=\"{{ path(\"student_exercice\", {id : previous} ) }}\" class=\"btn btn-primary btn-main\"><i class=\"fas fa-caret-left\"></i> Exercice précédent</a>
                    {% endif %}
                    {% if next in locked or next == 0 %}
                        <p>Vous n'avez pas encore  <br/> débloqué le prochain exercice !</p>
                    {% elseif next != exercice.id %}
                    <a href=\"{{ path(\"student_exercice\", {id : next} ) }}\" class=\"btn btn-primary btn-main\">Exercice suivant <i class=\"fas fa-caret-right\"></i></a>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"container-fluid d-flex flex-row my-4 mx-2\">
            <div class=\"btn-toolbar mb-2\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"First group\" id=\"presentation_files\">
                    {% if files is not empty %}
                    {% for file in files %}
                    {% if file.isPresentation == true %}
                    <button type=\"button\" class=\"btn btn-primary btn-main btn-toggle\" value=\"{{ exercice.id }}/{{ file.file }}\">{{ file.filename }}</button>
                    {% endif %}
                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\" id=\"exercice_files\">
                    {% if file.isPresentation == false %}
                    <button type=\"button\" class=\"btn btn-secondary btn-toggle btn-main-orange\" value=\"{{ exercice.id }}/{{ file.file }}\">{{ file.filename }}</button>
                    {% endif %}
                    {% endfor %}
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row d-flex flex-row w-100 h-100\">
                {% if files %}
                <div class=\"col-12 col-lg-8 mb-2 h-100 pr-0\" id=\"preview_file\" style=\"height: 55vh !important;\">
                    <object type=\"application/pdf\" width=\"100%\" height=\"100%\" id=\"preview_file\" data=\"{{ asset('../uploads/exercices/exercice_') }}{{ exercice.id }}/{{ files[0].file }}#view=FitH\">
                        <param name=\"src\" value=\"{{asset('../uploads/exercices/exercice_') }}{{ exercice.id }}/{{ files[0].file }}\">
                        <p>
                            <a href=\"{{ path('download_file', {id : exercice.id, filename : files[0].filename})  }}\" />Cliquez ici pour télécharger le document.</a>
                        </p>
                    </object>
                </div>
                <div class=\"col-12 col-lg-1 d-flex flex-column justify-content-start mb-5 pl-0 h-25\" id=\"containerExerciceDifficulty\">
                    <div class=\"col-lg-12 col-6 px-0 exoDifficulty\" style=\"max-width: 70%\">
                        <div class=\"py-2 d-flex flex-column text-center\" style=\"background-color: #1b148c !important;\">
                            <div style=\"height: 2rem;\">
                                <img src=\"{{ asset('assets/img/front/jours.png') }}\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                            </div>
                            <div style=\"height: 2rem;\">
                                <h2 class=\"text-white\">{{ exercice.duration }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-12 col-6 px-0 exoDifficulty\" style=\"max-width: 70%\">
                        <div class=\"py-2 d-flex flex-column text-center\" style =\"background-color: #1179eb !important;\">
                            <div style=\"height: 2rem;\">
                                <img src=\"{{ asset('assets/img/front/difficulte.png') }}\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                            </div>
                            <div style=\"height: 2rem;\">
                                <h2 class=\"text-white\">{{ exercice.difficulty }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                {% endif %}
                <div class=\"col-12 col-lg-3\" id=\"exerciceRighContainer\">
                 {# echange av professeur ancre #}
                <div class=\"row\">
                    <div class=\"card w-100\" style=\"box-shadow: 2px 5px 5px lightgrey;\">
                            <div class=\"card-header text-center\">
                                <a href=\"#echangesavecprof\"><div style=\"height: 2rem !important;\">
                        <img src=\"{{ asset('assets/img/front/icone_debrief.png') }}\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                        </div><h3 class=\"mb-0\">Echanges avec mon professeur</h3></a>
                            </div>
                    </div>
                </div>
                {# echange fin #}
                    {% if technicalDocuments %}
                    <div class=\"row mt-1\">
                        <div class=\"card w-100\" style=\"box-shadow: 2px 5px 5px lightgrey;\">
                            <div class=\"card-header text-center\">
                                <h3>Documents Techniques</h3>
                            </div>
                            <div class=\"card-body\">
                                <ul class=\"d-flex align-items-center\">
                                    {% for document in technicalDocuments %}
                                        <li class=\"text-yellow\"><a href=\"{{ path('technical_doc_view', {id:document.id}) }}\" target=\"_blank\">{{ document.file }}</a></li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    {% endif %}
                    <div class=\"row mt-5\">
                        <div class=\"card w-100\" style=\"box-shadow: 2px 5px 5px lightgrey;\">
                            <div class=\"card-header text-center d-flex flex-col justify-content-center align-items-center\">
                                <div style=\"height: 2rem !important;\">
                                    <img src=\"{{ asset('assets/img/front/icone_corrige.png') }}\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                                </div>
                                <div class=\"ml-3\">
                                    <h3 class=\"mb-0\">J'ai terminé mon exercice </h3>
                                    <p class=\"p-1\">C'est ici pour envoyer votre fichier !</p>
                                </div>
                            </div>
                            {% if alreadySent is not null and alreadySent.isCorrect is null %}
                            <div class=\"card-body text-center\">
                             <p class=\"font-weight-bold\">Votre exercice va bientôt être corrigé !</p>
                            </div>
                            {% elseif alreadySent is not null and alreadySent.isCorrect == false and alreadySent.isSent == true %}
                            <div class=\"card-body text-center\">
                                <p class=\"font-weight-bold\">Votre exercice a été corrigé mais n'a pas été valdié!</p>
                                <form action=\"{{ path('submit_exercice') }}\" enctype=\"multipart/form-data\" class=\"w-100\" method=\"post\">
                                    <div class=\"custom-file\">
                                        <input type=\"file\" class=\"custom-file-input sr-only\" id=\"validatedCustomFile\" required name=\"video_file\">
                                        <label class=\"custom-file-label \" for=\"validatedCustomFile\">Choisir un fichier...</label>
                                        <div class=\"invalid-feedback\">Fichier non valide</div>
                                    </div>
                                    <input type=\"hidden\" id=\"{{ exercice.id }}\" value=\"{{ exercice.id }}\" name=\"exercice\">
                                    <div class=\"form-group text-center mt-2\">
                                        <button type=\"submit\" class=\"btn btn-primary form-control w-50\">
                                            Envoyer </button>
                                    </div>
                                </form>
                            </div>
                            {% elseif alreadySent is not null and alreadySent.isCorrect == true %}
                                <div class=\"card-body text-center\">
                                    <p class=\"font-weight-bold\"><i class=\"fas fa-check-circle\"></i> Votre exercice a été corrigé et validé! <br>Rendez-vous à l'exercice suivant !</p>
                                </div>
                            {% else %}
                            <div class=\"card-body\">
                                <form action=\"{{ path('submit_exercice') }}\" enctype=\"multipart/form-data\" class=\"w-100\" method=\"post\">
                                    <div class=\"custom-file\">
                                        <input type=\"file\" class=\"custom-file-input sr-only col-12\" id=\"validatedCustomFile\" required name=\"video_file\">
                                        <label class=\"custom-file-label col-12\" for=\"validatedCustomFile\"></label>
                                        <div class=\"invalid-feedback\">Fichier non valide</div>
                                    </div>
                                    <input type=\"hidden\" id=\"{{ exercice.id }}\" value=\"{{ exercice.id }}\" name=\"exercice\">
                                    <div class=\"form-group text-center mt-2\">
                                        <button type=\"submit\" class=\"btn btn-primary form-control w-75\">
                                            Envoyer</button>
                                    </div>
                                </form>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"\">
        <div class=\"container-fluid\">
            <div class=\"row mt-5\">
            <div id=\"echangebox\" class=\"card w-75 m-auto\">
                <div id=\"echangesavecprof\" class=\"card-header bg-darkBlue text-center d-flex flex-col justify-content-center align-items-center\">
                    <div style=\"height: 2rem !important;\">
                        <img src=\"{{ asset('assets/img/front/icone_debrief.png') }}\" alt=\"icone_bulle\" class=\"w-auto h-100\">
                    </div>
                    <div class=\"ml-3\">
                        <h3 class=\"mb-0\">Echanges avec mon professeur</h3>
                    </div>
                </div>
                <div class=\"card-body\" id=\"commentContainer\" style=\"font-size: 0.5rem!important;\">
                    <input type=\"hidden\" value=\"{{ currentUser.firstname }}\" id=\"userFirstname\">
                    <input type=\"hidden\" value=\"{{ currentUser.lastname }}\" id=\"userLastname\">
                    {% for comment in comments %}
                        <div class=\"card text-sm\">
                            <div class=\"card bg-white my-0 d-flex flex-column\">
                                <div class=\"row col-12 my-1 border-bottom\">
                                    <div class=\"col-6\"><p class=\"text-left font-weight-bold my-0\" style=\"font-size: 0.8rem!important;\">{{ comment.user.firstname }} {{ comment.user.lastname }}</p></div>
                                    <div class=\"col-6\"><p class=\"text-right my-0\" style=\"font-size: 0.7rem!important;\"> {{ comment.createdAt|date('d/m/Y') }}</p></div>
                                </div>
                                <div class=\"row col-12\">
                                    <div class=\"col-md-12\"><p style=\"font-size: 0.9rem!important;\">{{ comment.comment }}</p></div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"card bg-white p-3\">
                        <form method=\"\" action=\"\" id=\"commentForm\">
                            <div class=\"form-group\">
                                <textarea name=\"comment\" class=\"form-control\" id=\"comment\" placeholder=\"Ecrivez votre commentaire ici\"></textarea>
                                <input type=\"hidden\" value=\"{{ exercice.id }}\" id=\"exerciceId\">
                            </div>
                            <div class=\"form-group text-center\">
                                <button id=\"buttonmobile\" type=\"submit\" class=\"btn btn-primary form-control w-50 \">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent()}}
    <script>
    if(document.querySelector('.custom-file-input')  ){
        document.querySelector('.custom-file-input').addEventListener('change',function(e){
            var fileName = document.getElementById(\"validatedCustomFile\").files[0].name;
            var nextSibling = e.target.nextElementSibling
            nextSibling.innerText = fileName
        })
    }

    //change preview file
    \$('.btn-toggle').click(function() {
        let value = \$(this).attr('value').split('/');
        let id = value[0];
        let filename = value[1];

        \$('#preview_file').empty();
        \$(\"<object type='application/pdf' width='100%' height='100%' id='preview_file' data='{{ asset('../uploads/exercices/')}}exercice_\"+ id +\"/\"+ filename +\"#view=FitH'>\" +
            \"<param name='src' value='{{ asset('../uploads/exercices/')}}exercice_\"+ id +\"/\"+ filename +\"'>\" +
            \"<p><a href='{{ asset('../uploads/exercices/')}}exercice_\"+ id +\"/\" + filename + \"/>click here to download the PDF file.</a></p></object>\").appendTo(\$('#preview_file'));
    })

    // save comment
    \$('#commentForm').submit(function(e) {
        e.preventDefault();
        let message = \$('#comment').val();
        let exercice = \$('#exerciceId').val();
        let firstname = \$('#userFirstname').val();
        let lastname = \$('#userLastname').val();
        let d  = new Date();
        let day,month
        if( d.getDate().toString().length < 2) {
            day = '0' + d.getDate()
        } else {
            day = d.getDate()
        }
        if( d.getMonth().toString().length < 2) {
            month =  d.getMonth() + 1
            month = '0' + month
        } else {
            month = d.getMonth() + 1
        }



        let date = day+ \"/\" + month + \"/\"+  d.getFullYear();
        if(message.length > 3) {
            \$.ajax({
                method: \"POST\",
                url: \"{{path(\"save_comment\")}}\",
                data: { \"message\": message, 'exercice' : exercice},
            })
                .done(function( result ) {
                    if(result === \"ok\") {
                        \$.notify({
                            message: \"Le commentaire a bien été enregistré\"
                        },{
                            type: 'success',
                            delay: 2000,
                            placement: {
                                from: \"top\",
                                align: \"center\"
                            },
                        });

                        \$(\"#commentContainer .card:last\").before(\"<div class='card text-sm'><div class='Card-body bg-white my-0 d-flex flex-column'><div class='row col-12 my-1 border-bottom'><div class='col-6'><p class='text-left font-weight-bold my-0' style='font-size: 0.8rem!important;'>\" + firstname + ' '+ lastname +
                            \"</p></div><div class='col-6'><p class='text-right my-0' style='font-size: 0.7rem!important;'>\" + date +\"</p></div></div><div class='row p-3'><div class='col-md-12'><p>\"+
                            message +\"</p></div></div></div></div>\");
                    }
                });
        }
    });


    </script>


{% endblock %}

", "student/exercice/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/student/exercice/index.html.twig");
    }
}
