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

/* admin/correction/form.html.twig */
class __TwigTemplate_ec46282915704f1a90b48740b9ffd18f5481c86cb81fc78dae9326d7d2dd3acf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/correction/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/correction/form.html.twig"));

        // line 3
        $context["menu"] = "correction";
        // line 4
        $context["submenu"] = "correction";
        // line 6
        $context["page_name"] = ((((("Exercice " . twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "firstname", [], "any", false, false, false, 6)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 6, $this->source); })()), "lastname", [], "any", false, false, false, 6));
        // line 8
        $context["breadcrumbs"] = [0 => ["title" => "Suivi Elèves", "url" => ""], 1 => ["title" => "Corrections", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("correction_index")], 2 => ["title" =>         // line 11
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 11, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/correction/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col-lg-6\">
                    <h3 class=\"mb-0\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
                <div class=\"col-lg-6 text-right\">
                    ";
        // line 24
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 24, $this->source); })()), "isCorrect", [], "any", false, false, false, 24))) {
            // line 25
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_form", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary\" id=\"profil\">Profil Eleve</a>
                        <span id=\"validated\" class=\"mt-3 d-none\"><i class=\"fas fa-check-circle\"></i> Exercice validé !</span>
                        <a href=\"\" type=\"submit\" class=\"btn btn-primary validate\" id=\"validate\">Valider</a>
                        <a href=\"\" type=\"submit\" class=\"btn btn-secondary validate\" id=\"sendAgain\">Renvoyer un rendu</a>
                    ";
        } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 29, $this->source); })()), "isCorrect", [], "any", false, false, false, 29), 0)) {
            // line 30
            echo "                        <span class=\"mr-3\"><i class=\"fas fa-hourglass-half\"></i> L'élève doit renvoyer un rendu</span>
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_form", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary text-white\" id=\"profil\">Profil Eleve</a>
                    ";
        } else {
            // line 33
            echo "                        <span class=\"mr-3\"><i class=\"fas fa-check-circle\"></i> Exercice validé !</span>
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_form", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" type=\"submit\" class=\"btn btn-primary text-white\" id=\"profil\">Profil Eleve</a>
                    ";
        }
        // line 36
        echo "                </div>
            </div>
        </div>
        <div class=\"container-fluid d-flex flex-row mt-5\">
            <div class=\"row d-flex flex-row w-100 h-100 justify-content-center\">
                ";
        // line 41
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 41, $this->source); })()), "file", [], "any", false, false, false, 41))) {
            // line 42
            echo "                <div class=\"card bg-secondary shadow h-100 col-12\" id=\"preview_file\">
                    <div class=\"row h-100 d-flex flex-wrap align-items-center justify-content-center \">
                        <div class=\"col-lg-8 col-md-12 m-auto d-flex\" style=\"height: auto !important;\">
                            <video controls width=\"100%\" height=\"100%\" class=\"m-auto\">
                                <source src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../uploads/student_exercice/"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 46, $this->source); })()), "file", [], "any", false, false, false, 46), "html", null, true);
            echo "\"
                                        type=\"video/mp4\">
                               Votre navigateur ne peut pas afficher la vidéo.
                            </video>
    ";
            // line 51
            echo "    ";
            // line 52
            echo "    ";
            // line 53
            echo "    ";
            // line 54
            echo "    ";
            // line 55
            echo "    ";
            // line 56
            echo "                        </div>
                        <div class=\"col-md-12 col-12 text-center w-100 mt-5\">
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../uploads/student_exercice/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 58, $this->source); })()), "file", [], "any", false, false, false, 58), "html", null, true);
            echo "\" download=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 58, $this->source); })()), "file", [], "any", false, false, false, 58), "html", null, true);
            echo "\"  class=\"btn btn-primary btn-main\">Télécharger la vidéo de l'élève</a>
                        </div>
                    </div>
                </div>
            
                ";
        }
        // line 64
        echo "                <div class=\"col-lg-6 mt-5 ";
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 64, $this->source); })()), "file", [], "any", false, false, false, 64))) {
            echo " m-auto";
        }
        echo "\">
                    ";
        // line 65
        if ((isset($context["technicalDocuments"]) || array_key_exists("technicalDocuments", $context) ? $context["technicalDocuments"] : (function () { throw new RuntimeError('Variable "technicalDocuments" does not exist.', 65, $this->source); })())) {
            // line 66
            echo "                    <div class=\"row\">
                        <div class=\"card w-100\">
                            <div class=\"card-header text-center\">
                                <h3>Documents Techniques</h3>
                            </div>
                            <div class=\"card-body\">
                                <ul>
                                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["technicalDocuments"]) || array_key_exists("technicalDocuments", $context) ? $context["technicalDocuments"] : (function () { throw new RuntimeError('Variable "technicalDocuments" does not exist.', 73, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
                // line 74
                echo "                                        <li><a href=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["document"], "file", [], "any", false, false, false, 74), "html", null, true);
                echo "</a></li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                                </ul>
                            </div>
                        </div>
                    </div>
                    ";
        }
        // line 81
        echo "
                        <div class=\"card w-100\">
                            <div class=\"card-header bg-darkBlue text-center text-white\">
                                <h3>Echanges avec l'élève</h3>
                            </div>
                            <div class=\"card-body\" id=\"commentContainer\" style=\"font-size: 0.5rem!important;\">
                                <input type=\"hidden\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 87, $this->source); })()), "firstname", [], "any", false, false, false, 87), "html", null, true);
        echo "\" id=\"userFirstname\">
                                <input type=\"hidden\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 88, $this->source); })()), "lastname", [], "any", false, false, false, 88), "html", null, true);
        echo "\" id=\"userLastname\">
                                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 90
            echo "                                    <div class=\"card text-sm\">
                                        <div class=\"card bg-white my-0 d-flex flex-column\">
                                            <div class=\"row col-12 my-1 border-bottom\">
                                                <div class=\"col-6\"><p class=\"text-left font-weight-bold my-0\" style=\"font-size: 0.8rem!important;\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 93), "firstname", [], "any", false, false, false, 93), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 93), "lastname", [], "any", false, false, false, 93), "html", null, true);
            echo "</p></div>
                                                <div class=\"col-6\"><p class=\"text-right my-0\" style=\"font-size: 0.7rem!important;\"> ";
            // line 94
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true);
            echo "</p></div>
                                            </div>
                                            <div class=\"row col-12\">
                                                <div class=\"col-md-12\"><p style=\"font-size: 0.9rem!important;\">";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "comment", [], "any", false, false, false, 97), "html", null, true);
            echo "</p></div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                <div class=\"card bg-white p-3\">
                                    <form method=\"\" action=\"\" id=\"commentForm\">
                                        <div class=\"form-group\">
                                            <textarea name=\"comment\" class=\"form-control\" id=\"comment\" placeholder=\"Ecrivez votre commentaire ici\"></textarea>
                                            <input type=\"hidden\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106), "html", null, true);
        echo "\" id=\"exerciceId\">
                                            <input type=\"hidden\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userExercice"]) || array_key_exists("userExercice", $context) ? $context["userExercice"] : (function () { throw new RuntimeError('Variable "userExercice" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "id", [], "any", false, false, false, 107), "html", null, true);
        echo "\" id=\"studentId\">
                                        </div>
                                        <div class=\"form-group text-center\">
                                            <button type=\"submit\" class=\"btn btn-primary form-control w-50 \">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


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

    // line 126
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 127
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
    //change preview file
    \$('.btn-toggle').click(function() {
        let value = \$(this).attr('value').split('/');
        let id = value[0];
        let filename = value[1];

        \$('#preview_file').empty();
        \$(\"<object type='application/pdf' width='100%' height='100%' id='preview_file' data='";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/exercices/"), "html", null, true);
        echo "exercice_\"+ id +\"/\"+ filename +\"#view=FitH'>\" +
            \"<param name='src' value='";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/exercices/"), "html", null, true);
        echo "exercice_\"+ id +\"/\"+ filename +\"'>\" +
            \"<p><a href='";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/exercices/"), "html", null, true);
        echo "exercice_\"+ id +\"/\" + filename + \"/>click here to download the PDF file.</a></p></object>\").appendTo(\$('#preview_file'));
    })

    // save comment
    \$('#commentForm').submit(function(e) {
        e.preventDefault();
        let exercice = \$('#exerciceId').val();
        let student = \$('#studentId').val();
        let message = \$('textarea#comment').val();
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

        \$.ajax({
            method: \"POST\",
            url: \"";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("save_comment");
        echo "\",
            data: { \"message\": message, 'exercice' : exercice, 'student':student},
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
                            
                    document.getElementById(\"commentForm\").reset(); 
                }
            });


    });

    //validate exercice
    \$('.validate').click(function(e) {
        e.preventDefault();
        let exercice = \$('#exerciceId').val();
        let student = \$('#studentId').val();
        let validation = (\$(this).attr('id') === 'validate' )? 1 : 0;

        \$.ajax({
            method: \"POST\",
            url: \"";
        // line 201
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validate_exercice");
        echo "\",
            data: {'exercice' : exercice, 'student':student, 'validation': validation},
        })
            .done(function( result ) {
                if(result == \"ok\") {
                    \$.notify({
                        message: \"L'exercice a bien été validé pour cet élève\"
                    },{
                        type: 'success',
                        delay: 2000,
                        placement: {
                            from: \"top\",
                            align: \"center\"
                        },
                    });

                    \$('#validate').remove();
                    \$('#sendAgain').remove();
                    \$('#validated').addClass('d-block');

                } else if(result == \"renvoyer\") {
                    \$.notify({
                        message: \"Vous avez bien indiqué à cet élève de renvoyer un rendu\"
                    },{
                        type: 'success',
                        delay: 2000,
                        placement: {
                            from: \"top\",
                            align: \"center\"
                        },
                    });
                    \$('#validate').addClass('d-none');
                    \$('#sendAgain').addClass('d-none');
                }
            });

    });



    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/correction/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 201,  361 => 166,  330 => 138,  326 => 137,  322 => 136,  309 => 127,  299 => 126,  271 => 107,  267 => 106,  261 => 102,  250 => 97,  244 => 94,  238 => 93,  233 => 90,  229 => 89,  225 => 88,  221 => 87,  213 => 81,  206 => 76,  197 => 74,  193 => 73,  184 => 66,  182 => 65,  175 => 64,  161 => 58,  157 => 56,  155 => 55,  153 => 54,  151 => 53,  149 => 52,  147 => 51,  136 => 46,  130 => 42,  128 => 41,  121 => 36,  116 => 34,  113 => 33,  108 => 31,  105 => 30,  103 => 29,  95 => 25,  93 => 24,  87 => 21,  79 => 15,  69 => 14,  58 => 1,  56 => 11,  55 => 8,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'correction' %}
{% set submenu = 'correction' %}

{% set page_name =  'Exercice '~exercice.title~ ' '~student.firstname~' '~student.lastname %}

{% set breadcrumbs = [
    {\"title\": \"Suivi Elèves\", 'url' : \"\"},
    {\"title\": \"Corrections\", 'url' : path('correction_index')},
    {\"title\": page_name, 'url' : \"\"},
] %}

{% block body %}

    <div class=\"card shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col-lg-6\">
                    <h3 class=\"mb-0\">{{page_name}}</h3>
                </div>
                <div class=\"col-lg-6 text-right\">
                    {% if userExercice.isCorrect is null %}
                        <a href=\"{{ path('user_form', {id: student.id}) }}\" type=\"submit\" class=\"btn btn-primary\" id=\"profil\">Profil Eleve</a>
                        <span id=\"validated\" class=\"mt-3 d-none\"><i class=\"fas fa-check-circle\"></i> Exercice validé !</span>
                        <a href=\"\" type=\"submit\" class=\"btn btn-primary validate\" id=\"validate\">Valider</a>
                        <a href=\"\" type=\"submit\" class=\"btn btn-secondary validate\" id=\"sendAgain\">Renvoyer un rendu</a>
                    {% elseif userExercice.isCorrect == 0 %}
                        <span class=\"mr-3\"><i class=\"fas fa-hourglass-half\"></i> L'élève doit renvoyer un rendu</span>
                        <a href=\"{{ path('user_form', {id: student.id}) }}\" type=\"submit\" class=\"btn btn-primary text-white\" id=\"profil\">Profil Eleve</a>
                    {% else %}
                        <span class=\"mr-3\"><i class=\"fas fa-check-circle\"></i> Exercice validé !</span>
                        <a href=\"{{ path('user_form', {id: student.id}) }}\" type=\"submit\" class=\"btn btn-primary text-white\" id=\"profil\">Profil Eleve</a>
                    {% endif %}
                </div>
            </div>
        </div>
        <div class=\"container-fluid d-flex flex-row mt-5\">
            <div class=\"row d-flex flex-row w-100 h-100 justify-content-center\">
                {% if userExercice.file  is not null %}
                <div class=\"card bg-secondary shadow h-100 col-12\" id=\"preview_file\">
                    <div class=\"row h-100 d-flex flex-wrap align-items-center justify-content-center \">
                        <div class=\"col-lg-8 col-md-12 m-auto d-flex\" style=\"height: auto !important;\">
                            <video controls width=\"100%\" height=\"100%\" class=\"m-auto\">
                                <source src=\"{{ asset('../uploads/student_exercice/')}}/{{userExercice.id}}/{{ userExercice.file }}\"
                                        type=\"video/mp4\">
                               Votre navigateur ne peut pas afficher la vidéo.
                            </video>
    {#                        <object type=\"application/pdf\" width=\"100%\" height=\"100%\" id=\"preview_file\" data=\"{{ asset('../uploads/student_exercice/')}}/{{userExercice.id}}/{{ userExercice.file }}\">#}
    {#                            <param name=\"src\" value=\"{{ asset('uploads/student_exercice/')}}/{{userExercice.id}}/{{ userExercice.file }}\">#}
    {#                            <p>#}
    {#                                <a href=\"{{ asset('../uploads/student_exercice/')}}/{{userExercice.id}}/{{ userExercice.file }}\" download=\"{{ asset('uploads/student_exercice/')}}/{{userExercice.id}}/{{ userExercice.file }}\" />click here to download the PDF file.</a>#}
    {#                            </p>#}
    {#                        </object>#}
                        </div>
                        <div class=\"col-md-12 col-12 text-center w-100 mt-5\">
                            <a href=\"{{ asset('../uploads/student_exercice/')}}{{userExercice.id}}/{{ userExercice.file }}\" download=\"{{ userExercice.file }}\"  class=\"btn btn-primary btn-main\">Télécharger la vidéo de l'élève</a>
                        </div>
                    </div>
                </div>
            
                {% endif %}
                <div class=\"col-lg-6 mt-5 {% if userExercice.file  is null %} m-auto{% endif %}\">
                    {% if technicalDocuments %}
                    <div class=\"row\">
                        <div class=\"card w-100\">
                            <div class=\"card-header text-center\">
                                <h3>Documents Techniques</h3>
                            </div>
                            <div class=\"card-body\">
                                <ul>
                                    {% for document in technicalDocuments %}
                                        <li><a href=\"\">{{ document.file }}</a></li>
                                    {% endfor %}
                                </ul>
                            </div>
                        </div>
                    </div>
                    {% endif %}

                        <div class=\"card w-100\">
                            <div class=\"card-header bg-darkBlue text-center text-white\">
                                <h3>Echanges avec l'élève</h3>
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
                                            <input type=\"hidden\" value=\"{{ userExercice.user.id }}\" id=\"studentId\">
                                        </div>
                                        <div class=\"form-group text-center\">
                                            <button type=\"submit\" class=\"btn btn-primary form-control w-50 \">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>


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
    //change preview file
    \$('.btn-toggle').click(function() {
        let value = \$(this).attr('value').split('/');
        let id = value[0];
        let filename = value[1];

        \$('#preview_file').empty();
        \$(\"<object type='application/pdf' width='100%' height='100%' id='preview_file' data='{{ asset('uploads/exercices/')}}exercice_\"+ id +\"/\"+ filename +\"#view=FitH'>\" +
            \"<param name='src' value='{{ asset('uploads/exercices/')}}exercice_\"+ id +\"/\"+ filename +\"'>\" +
            \"<p><a href='{{ asset('uploads/exercices/')}}exercice_\"+ id +\"/\" + filename + \"/>click here to download the PDF file.</a></p></object>\").appendTo(\$('#preview_file'));
    })

    // save comment
    \$('#commentForm').submit(function(e) {
        e.preventDefault();
        let exercice = \$('#exerciceId').val();
        let student = \$('#studentId').val();
        let message = \$('textarea#comment').val();
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

        \$.ajax({
            method: \"POST\",
            url: \"{{path(\"save_comment\")}}\",
            data: { \"message\": message, 'exercice' : exercice, 'student':student},
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
                            
                    document.getElementById(\"commentForm\").reset(); 
                }
            });


    });

    //validate exercice
    \$('.validate').click(function(e) {
        e.preventDefault();
        let exercice = \$('#exerciceId').val();
        let student = \$('#studentId').val();
        let validation = (\$(this).attr('id') === 'validate' )? 1 : 0;

        \$.ajax({
            method: \"POST\",
            url: \"{{path(\"validate_exercice\")}}\",
            data: {'exercice' : exercice, 'student':student, 'validation': validation},
        })
            .done(function( result ) {
                if(result == \"ok\") {
                    \$.notify({
                        message: \"L'exercice a bien été validé pour cet élève\"
                    },{
                        type: 'success',
                        delay: 2000,
                        placement: {
                            from: \"top\",
                            align: \"center\"
                        },
                    });

                    \$('#validate').remove();
                    \$('#sendAgain').remove();
                    \$('#validated').addClass('d-block');

                } else if(result == \"renvoyer\") {
                    \$.notify({
                        message: \"Vous avez bien indiqué à cet élève de renvoyer un rendu\"
                    },{
                        type: 'success',
                        delay: 2000,
                        placement: {
                            from: \"top\",
                            align: \"center\"
                        },
                    });
                    \$('#validate').addClass('d-none');
                    \$('#sendAgain').addClass('d-none');
                }
            });

    });



    </script>


{% endblock %}

", "admin/correction/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/correction/form.html.twig");
    }
}
