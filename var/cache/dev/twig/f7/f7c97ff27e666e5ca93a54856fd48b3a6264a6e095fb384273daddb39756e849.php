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

/* student/subscription/form.html.twig */
class __TwigTemplate_0d5cb4eb5b1eacd4694831575358f4e3be0033f806779f26460396e1ed807564 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/subscription/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/subscription/form.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>";
        // line 10
        if (((isset($context["page_name"]) || array_key_exists("page_name", $context)) &&  !(null === (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 10, $this->source); })())))) {
            echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 10, $this->source); })()), "html", null, true);
        } else {
            echo "Bienvenue dans votre espace !";
        }
        echo "</title>

    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">

    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/nucleo/css/nucleo.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/select2/dist/css/select2.min.css\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/animate.css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/uploader/component.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/uploader/normalize.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/argon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/config.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/style_back.css\" type=\"text/css\">

    <!-- Page plugins -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css\">

    ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    <style>
        .hoverCard:hover{
            transform: scale(1.05);
        }
    </style>
</head>
<body class=\"bg-default\">

";
        // line 44
        echo "
";
        // line 46
        echo "
";
        // line 49
        echo "

                    <div class=\"main-content\" id=\"subscriptionContainer\">
                        <!-- Header -->
                        <div class=\"header py-4 py-lg-7 pt-lg-5\">
                            <div class=\"container\">
                                <div class=\"header-body text-center mb-7\">
                                    <div class=\"row justify-content-center\">
                                        <div class=\"col-xl-6 col-lg-8 col-md-8 px-5\">
                                            <h1 class=\"text-white\">L'animateur Autodidacte Accompagné</h1>
                                            <p class=\"text-lead text-white\">Bienvenue sur la plateforme de l'animateur Autodidacte Accompagné.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
";
        // line 69
        echo "                        </div>


                        <div class=\"container mt--8 pb-5\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-md-10 col-lg-12\">
                                    ";
        // line 75
        $this->loadTemplate("admin/components/confirmation.html.twig", "student/subscription/form.html.twig", 75)->display($context);
        // line 76
        echo "
                                    <div class=\"card border-0 mb-0\">
                                        <div class=\"card-header\">
                                            <h2 class=\"font-weight-bold text-center\">Je m'inscris !<span class=\"text-yellow\"> •</span></h2>
                                        </div>
                                        ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off", "enctype" => "multipart/form-data"]]);
        echo "
                                            <div class=\"card-body bg-secondary\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "firstname", [], "any", false, false, false, 85), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"col-lg-6\">
                                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "lastname", [], "any", false, false, false, 88), 'widget');
        echo "
                                                    </div>

                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-lg-7\">
                                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"col-lg-5\">
                                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "phone", [], "any", false, false, false, 97), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "password", [], "any", false, false, false, 102), "first", [], "any", false, false, false, 102), 'widget');
        echo "
                                                    </div>
                                                    <div class=\"col-lg-6\">
                                                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "password", [], "any", false, false, false, 105), "second", [], "any", false, false, false, 105), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <hr style=\"margin-bottom: 0px !important;\">
                                            </div>
                                        <div class=\"card-body bg-secondary\">
                                            <div class=\"row d-flex justify-content-center mb-4\">
                                                <h2 class=\"font-weight-bold text-center mb-3\">Je choisis ma formation !<span class=\"text-yellow\"> •</span></h2>
                                            </div>
                                            <div class=\"row d-flex justify-content-around\">
                                                ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 115, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 116
            echo "                                                    <div class=\"cardformation card col-lg-4 text-center\">
                                                        <div class=\"text-center py-4 \">
                                                            <div class=\"row d-flex justify-content-center align-items-center\">
                                                                <div class=\"col-12\">
                                                                    <h2>";
            // line 120
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 120), "html", null, true);
            echo "</h2>
                                                                </div>
                                                                <div class=\"col-12\">
                                                                    <h2>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "price", [], "any", false, false, false, 123), "html", null, true);
            echo " €</h2>
                                                                </div>
                                                                <div class=\"col-12 choseFormation\" id=\"choseFormation\">
                                                                    <input type=\"checkbox\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" name=\"formation\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 126), "html", null, true);
            echo "\" style=\"display: none;\">
                                                                    <a href=\"\" class=\"btn btn-secondary select-formation\">
                                                                        <span class=\"btn-inner--text\">Choisir</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                                            </div>
                                        </div>
                                            <div class=\"card-body bg-secondary\">
                                                <div class=\"col-lg-8\">
                                                    <div class=\"form-check form-check-inline\">
                                                        <label for=\"directory\">J'accepte de recevoir des emails de la plateforme l'animateur autodidacte accompagné</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"radio\" name=\"rgpd\" id=\"generalYes\" value=\"1\" required>
                                                        <label class=\"form-check-label\" for=\"generalYes\">Oui</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"radio\" name=\"rgpd\" id=\"generalNo\" value=\"0\" required>
                                                        <label class=\"form-check-label\" for=\"generalNo\">Non</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"card-footer d-flex justify-content-center align-items-center\">
                                                <button class=\"btn btn-primary btn-main mb-2\" type='submit'>
                                                    <span class=\"btn-inner--text\">Passer au paiement</span>
                                                </button>
                                            </div>
                                        </div>
                                        ";
        // line 158
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>



<footer id=\"footerLimeo\">
    Plateforme AAA © 2020 Réalisation par <a href=\"https://limeo.com\" target=\"_blank\">Limeo.com</a>
</footer>



<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/js-cookie/js.cookie.js\"></script>
<script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/dropzone/dist/min/dropzone.min.js\"></script>
<script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "js/uploader/custom-file-input.js\"></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "js/uploader/jquery.custom-file-input.js\"></script>  <!-- Optional JS -->
<script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/chart.js/dist/Chart.min.js\"></script>
<script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/chart.js/dist/Chart.extension.js\"></script>
<script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/select2/dist/js/select2.min.js\"></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/nouislider/distribute/nouislider.min.js\"></script>
<script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/quill/dist/quill.min.js\"></script>
<script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-notify/bootstrap-notify.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/selectize.min.js\" integrity=\"sha256-zwkv+PhVN/CSaFNLrcQ/1vQd3vviSPiOEDvu2GxYxQc=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />

<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/moment.min.js\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-datetimepicker.js\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js\"></script>

<!-- Froala  -->
<link rel=\"stylesheet\" href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/froala_editor.css\">
<link rel=\"stylesheet\" href=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/froala_style.css\">
<link rel=\"stylesheet\" href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/code_view.css\">
<link rel=\"stylesheet\" href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/image_manager.css\">
<link rel=\"stylesheet\" href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/image.css\">
<link rel=\"stylesheet\" href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/table.css\">
<link rel=\"stylesheet\" href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/video.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/froala_editor.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/align.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/code_beautifier.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/code_view.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/draggable.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/image.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/image_manager.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/link.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/lists.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/paragraph_format.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/paragraph_style.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/table.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/video.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/url.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/entities.min.js\"></script>
<script type=\"text/javascript\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/languages/fr.js\"></script>

<script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js\"></script>


<script>
    (function () {
        const editorInstance = new FroalaEditor('.froala', {
            attribution: false,
            language: 'fr',
            key: \"AVB8B-21D4D4B3F1C2C2ua2BD1IMNBUMRWAd1AYMSTRBUZYA-9H3E2J2C5C6C3A1B5B1G1==\",
            enter: FroalaEditor.ENTER_P,
            placeholderText: null,
            imageUploadURL: '";
        // line 238
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("froala_upload_file");
        echo "',
            imageManagerLoadURL: '";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("froala_lib_files");
        echo "',
            imageManagerDeleteURL: '";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("froala_remove_file");
        echo "',
            imageManagerPageSize: 5,
            videoUploadURL: '";
        // line 242
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("froala_upload_video");
        echo "',
            events: {
                initialized: function () {
                    const editor = this
                }
            }
        })
    })()
</script>

<!-- Argon JS -->
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "js/argon.js?v=1.1.0\"></script>

<script>

    \$('.select-formation').click(function(e) {
        e.preventDefault();
        let parents = \$('.select-formation').parent();


        let parentNode = \$(this).parent();
        console.log( parentNode.parent().children().children(\"h2\").addClass('text-white'));
        if(parentNode.children('input').prop(\"checked\") === true) {
            parentNode.children('input').prop(\"checked\", false );
            parentNode.parent().parent().parent().removeClass('bg-light-orange');
            parentNode.parent().children().children(\"h2\").removeClass('text-white')

        } else {
            parents.children('input').prop(\"checked\", false );
            parents.parent().parent().parent().removeClass('bg-light-orange');
            parents.parent().children().children(\"h2\").removeClass('text-white')
            parentNode.children('input').prop(\"checked\", true );
            parentNode.parent().parent().parent().addClass('bg-light-orange');
            parentNode.parent().children().children(\"h2\").addClass('text-white')
            \$(this).css(\"border\", \"none\");
            \$(this).addClass(\"shadow\");

        }
    });

    \$('.datepickerFr').datepicker({
        format: 'dd/mm/yyyy',
        language: 'fr',
        forceParse: false
    });

    \$('.datetimepicker').datetimepicker({
        locale: 'fr',
        format: 'DD/MM/YYYY HH:mm',
        icons: {
            time: \"fa fa-clock\",
            date: \"fa fa-calendar\",
            up: \"fa fa-chevron-up\",
            down: \"fa fa-chevron-down\",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
    });

    \$('.selectMultiple').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    \$( \"body\" ).delegate( \".confirmForm\", \"click\", function() {
        var form = \$(this).data('form');
        var message = \$(this).data('message');
        UIkit.modal.labels = {
            'ok': '";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.cta.ok"), "html", null, true);
        echo "',
            'cancel': '";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.cta.cancel"), "html", null, true);
        echo "'
        };

        UIkit.modal.confirm(message).then(function() {
            \$('#'+form).submit();
        });
    });

    \$( \"body\" ).delegate( \".confirmDeleteBox\", \"click\", function() {
        var message = \$(this).data('message');
        var token = \$(this).data('token');
        var url = \$(this).data('url');

        \$('#confirmDeleteBox').find('.modal-body').html(message);
        \$('#confirmDeleteBox').find('#confirmBoxToken').val(token);
        \$('#confirmDeleteBox').find('#form-delete').attr('action', url);
        \$('#confirmDeleteBox').modal('show');
    });

    \$('#confirmDeleteBox').on('hidden.bs.modal', function (e) {
        \$('#confirmDeleteBox').find('.modal-body').html('');
        \$('#confirmDeleteBox').find('#confirmBoxToken').val('');
        \$('#confirmDeleteBox').find('#form-delete').attr('action', \"#\");
    });

    \$( \"body\" ).delegate( \".confirmBox\", \"click\", function() {
        var url = \$(this).data('url');
        var message = \$(this).data('message');
        \$('#confirmBox').find('.modal-body').html(message);
        \$('#confirmBox').find('#confirmBoxUrl').attr(\"href\", url);
        \$('#confirmBox').modal('show');
    });

    \$('#confirmBox').on('hidden.bs.modal', function (e) {
        \$('#confirmBox').find('.modal-body').html('');
        \$('#confirmBox').find('#confirmBoxUrl').attr(\"href\", '#!');
    });


    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>

";
        // line 378
        $this->displayBlock('javascripts', $context, $blocks);
        // line 380
        echo "
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109287999-14\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109287999-14');
</script>


</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 378
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/subscription/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  724 => 378,  706 => 34,  681 => 380,  679 => 378,  619 => 321,  615 => 320,  545 => 253,  531 => 242,  526 => 240,  522 => 239,  518 => 238,  504 => 227,  500 => 226,  496 => 225,  492 => 224,  487 => 222,  483 => 221,  479 => 220,  475 => 219,  471 => 218,  467 => 217,  463 => 216,  459 => 215,  455 => 214,  451 => 213,  447 => 212,  443 => 211,  439 => 210,  435 => 209,  431 => 208,  427 => 207,  420 => 203,  416 => 202,  412 => 201,  408 => 200,  404 => 199,  400 => 198,  396 => 197,  390 => 194,  386 => 193,  382 => 192,  378 => 191,  369 => 185,  365 => 184,  361 => 183,  357 => 182,  353 => 181,  349 => 180,  345 => 179,  341 => 178,  337 => 177,  333 => 176,  329 => 175,  325 => 174,  321 => 173,  316 => 171,  300 => 158,  275 => 135,  258 => 126,  252 => 123,  246 => 120,  240 => 116,  236 => 115,  223 => 105,  217 => 102,  209 => 97,  203 => 94,  194 => 88,  188 => 85,  181 => 81,  174 => 76,  172 => 75,  164 => 69,  147 => 49,  144 => 46,  141 => 44,  131 => 35,  129 => 34,  124 => 32,  120 => 31,  116 => 30,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  84 => 19,  80 => 18,  76 => 17,  69 => 13,  65 => 12,  56 => 10,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>{% if page_name is defined and page_name is not null %}{{page_name}}{% else %}Bienvenue dans votre espace !{% endif %}</title>

    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/favicon/favicon-16x16.png') }}\" sizes=\"16x16\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/favicon/favicon-32x32.png') }}\" sizes=\"32x32\">

    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">

    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/nucleo/css/nucleo.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/select2/dist/css/select2.min.css\" type=\"text/css\">

    <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/animate.css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/uploader/component.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/uploader/normalize.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/argon.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/config.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/style_back.css\" type=\"text/css\">

    <!-- Page plugins -->
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css\">

    {% block stylesheets %}{% endblock %}
    <style>
        .hoverCard:hover{
            transform: scale(1.05);
        }
    </style>
</head>
<body class=\"bg-default\">

{#{% include 'admin/components/sidebar.html.twig' %}#}

{#<div class=\"main-content\" id=\"panel\">#}

{#    {% include 'admin/components/header.html.twig' %}#}
{#    {% include 'admin/components/breadcrumb.html.twig' %}#}


                    <div class=\"main-content\" id=\"subscriptionContainer\">
                        <!-- Header -->
                        <div class=\"header py-4 py-lg-7 pt-lg-5\">
                            <div class=\"container\">
                                <div class=\"header-body text-center mb-7\">
                                    <div class=\"row justify-content-center\">
                                        <div class=\"col-xl-6 col-lg-8 col-md-8 px-5\">
                                            <h1 class=\"text-white\">L'animateur Autodidacte Accompagné</h1>
                                            <p class=\"text-lead text-white\">Bienvenue sur la plateforme de l'animateur Autodidacte Accompagné.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
{#                            <div class=\"separator separator-bottom separator-skew zindex-100\">#}
{#                                <svg x=\"0\" y=\"0\" viewBox=\"0 0 2560 100\" preserveAspectRatio=\"none\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">#}
{#                                    <polygon class=\"fill-default\" points=\"2560 0 2560 100 0 100\"></polygon>#}
{#                                </svg>#}
{#                            </div>#}
                        </div>


                        <div class=\"container mt--8 pb-5\">
                            <div class=\"row justify-content-center\">
                                <div class=\"col-md-10 col-lg-12\">
                                    {% include 'admin/components/confirmation.html.twig' %}

                                    <div class=\"card border-0 mb-0\">
                                        <div class=\"card-header\">
                                            <h2 class=\"font-weight-bold text-center\">Je m'inscris !<span class=\"text-yellow\"> •</span></h2>
                                        </div>
                                        {{ form_start(form, {'attr': {'novalidate': 'novalidate','class': 'needs-validation', 'autocomplete': 'off', 'enctype':'multipart/form-data'}}) }}
                                            <div class=\"card-body bg-secondary\">
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        {{ form_widget(form.firstname) }}
                                                    </div>
                                                    <div class=\"col-lg-6\">
                                                        {{ form_widget(form.lastname) }}
                                                    </div>

                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-lg-7\">
                                                        {{ form_widget(form.email) }}
                                                    </div>
                                                    <div class=\"col-lg-5\">
                                                        {{ form_widget(form.phone) }}
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col-lg-6\">
                                                        {{ form_widget(form.password.first) }}
                                                    </div>
                                                    <div class=\"col-lg-6\">
                                                        {{ form_widget(form.password.second) }}
                                                    </div>
                                                </div>
                                                <hr style=\"margin-bottom: 0px !important;\">
                                            </div>
                                        <div class=\"card-body bg-secondary\">
                                            <div class=\"row d-flex justify-content-center mb-4\">
                                                <h2 class=\"font-weight-bold text-center mb-3\">Je choisis ma formation !<span class=\"text-yellow\"> •</span></h2>
                                            </div>
                                            <div class=\"row d-flex justify-content-around\">
                                                {% for formation in formations %}
                                                    <div class=\"cardformation card col-lg-4 text-center\">
                                                        <div class=\"text-center py-4 \">
                                                            <div class=\"row d-flex justify-content-center align-items-center\">
                                                                <div class=\"col-12\">
                                                                    <h2>{{ formation.title }}</h2>
                                                                </div>
                                                                <div class=\"col-12\">
                                                                    <h2>{{ formation.price }} €</h2>
                                                                </div>
                                                                <div class=\"col-12 choseFormation\" id=\"choseFormation\">
                                                                    <input type=\"checkbox\" value=\"{{ formation.id }}\" name=\"formation\" id=\"{{ formation.title }}\" style=\"display: none;\">
                                                                    <a href=\"\" class=\"btn btn-secondary select-formation\">
                                                                        <span class=\"btn-inner--text\">Choisir</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                {% endfor %}
                                            </div>
                                        </div>
                                            <div class=\"card-body bg-secondary\">
                                                <div class=\"col-lg-8\">
                                                    <div class=\"form-check form-check-inline\">
                                                        <label for=\"directory\">J'accepte de recevoir des emails de la plateforme l'animateur autodidacte accompagné</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"radio\" name=\"rgpd\" id=\"generalYes\" value=\"1\" required>
                                                        <label class=\"form-check-label\" for=\"generalYes\">Oui</label>
                                                    </div>
                                                    <div class=\"form-check form-check-inline\">
                                                        <input class=\"form-check-input\" type=\"radio\" name=\"rgpd\" id=\"generalNo\" value=\"0\" required>
                                                        <label class=\"form-check-label\" for=\"generalNo\">Non</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"card-footer d-flex justify-content-center align-items-center\">
                                                <button class=\"btn btn-primary btn-main mb-2\" type='submit'>
                                                    <span class=\"btn-inner--text\">Passer au paiement</span>
                                                </button>
                                            </div>
                                        </div>
                                        {{ form_end(form) }}
                                    </div>
                                </div>
                            </div>



<footer id=\"footerLimeo\">
    Plateforme AAA © 2020 Réalisation par <a href=\"https://limeo.com\" target=\"_blank\">Limeo.com</a>
</footer>



<script src=\"{{ asset('assets/') }}vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/js-cookie/js.cookie.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/dropzone/dist/min/dropzone.min.js\"></script>
<script src=\"{{ asset('assets/') }}js/uploader/custom-file-input.js\"></script>
<script src=\"{{ asset('assets/') }}js/uploader/jquery.custom-file-input.js\"></script>  <!-- Optional JS -->
<script src=\"{{ asset('assets/') }}vendor/chart.js/dist/Chart.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/chart.js/dist/Chart.extension.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/select2/dist/js/select2.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/nouislider/distribute/nouislider.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/quill/dist/quill.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/bootstrap-notify/bootstrap-notify.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/selectize.min.js\" integrity=\"sha256-zwkv+PhVN/CSaFNLrcQ/1vQd3vviSPiOEDvu2GxYxQc=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />

<script src=\"{{ asset('assets/') }}vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/moment.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/bootstrap-datetimepicker.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js\"></script>

<!-- Froala  -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/froala_editor/css/froala_editor.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/froala_editor/css/froala_style.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/froala_editor/css/plugins/code_view.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/froala_editor/css/plugins/image_manager.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/froala_editor/css/plugins/image.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/froala_editor/css/plugins/table.css\">
<link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/froala_editor/css/plugins/video.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js\"></script>
<script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/froala_editor.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/align.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/code_beautifier.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/code_view.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/draggable.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/image.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/image_manager.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/link.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/lists.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/paragraph_format.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/paragraph_style.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/table.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/video.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/url.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/plugins/entities.min.js\"></script>
<script type=\"text/javascript\" src=\"{{ asset('assets/') }}vendor/froala_editor/js/languages/fr.js\"></script>

<script src=\"{{ asset('assets/') }}vendor/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js\"></script>


<script>
    (function () {
        const editorInstance = new FroalaEditor('.froala', {
            attribution: false,
            language: 'fr',
            key: \"AVB8B-21D4D4B3F1C2C2ua2BD1IMNBUMRWAd1AYMSTRBUZYA-9H3E2J2C5C6C3A1B5B1G1==\",
            enter: FroalaEditor.ENTER_P,
            placeholderText: null,
            imageUploadURL: '{{path(\"froala_upload_file\")}}',
            imageManagerLoadURL: '{{path(\"froala_lib_files\")}}',
            imageManagerDeleteURL: '{{path(\"froala_remove_file\")}}',
            imageManagerPageSize: 5,
            videoUploadURL: '{{path(\"froala_upload_video\")}}',
            events: {
                initialized: function () {
                    const editor = this
                }
            }
        })
    })()
</script>

<!-- Argon JS -->
<script src=\"{{ asset('assets/') }}js/argon.js?v=1.1.0\"></script>

<script>

    \$('.select-formation').click(function(e) {
        e.preventDefault();
        let parents = \$('.select-formation').parent();


        let parentNode = \$(this).parent();
        console.log( parentNode.parent().children().children(\"h2\").addClass('text-white'));
        if(parentNode.children('input').prop(\"checked\") === true) {
            parentNode.children('input').prop(\"checked\", false );
            parentNode.parent().parent().parent().removeClass('bg-light-orange');
            parentNode.parent().children().children(\"h2\").removeClass('text-white')

        } else {
            parents.children('input').prop(\"checked\", false );
            parents.parent().parent().parent().removeClass('bg-light-orange');
            parents.parent().children().children(\"h2\").removeClass('text-white')
            parentNode.children('input').prop(\"checked\", true );
            parentNode.parent().parent().parent().addClass('bg-light-orange');
            parentNode.parent().children().children(\"h2\").addClass('text-white')
            \$(this).css(\"border\", \"none\");
            \$(this).addClass(\"shadow\");

        }
    });

    \$('.datepickerFr').datepicker({
        format: 'dd/mm/yyyy',
        language: 'fr',
        forceParse: false
    });

    \$('.datetimepicker').datetimepicker({
        locale: 'fr',
        format: 'DD/MM/YYYY HH:mm',
        icons: {
            time: \"fa fa-clock\",
            date: \"fa fa-calendar\",
            up: \"fa fa-chevron-up\",
            down: \"fa fa-chevron-down\",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
    });

    \$('.selectMultiple').selectize({
        plugins: ['remove_button'],
        delimiter: ',',
        persist: false,
        create: function(input) {
            return {
                value: input,
                text: input
            }
        }
    });

    \$( \"body\" ).delegate( \".confirmForm\", \"click\", function() {
        var form = \$(this).data('form');
        var message = \$(this).data('message');
        UIkit.modal.labels = {
            'ok': '{{ 'confirm.cta.ok'|trans }}',
            'cancel': '{{ 'confirm.cta.cancel'|trans }}'
        };

        UIkit.modal.confirm(message).then(function() {
            \$('#'+form).submit();
        });
    });

    \$( \"body\" ).delegate( \".confirmDeleteBox\", \"click\", function() {
        var message = \$(this).data('message');
        var token = \$(this).data('token');
        var url = \$(this).data('url');

        \$('#confirmDeleteBox').find('.modal-body').html(message);
        \$('#confirmDeleteBox').find('#confirmBoxToken').val(token);
        \$('#confirmDeleteBox').find('#form-delete').attr('action', url);
        \$('#confirmDeleteBox').modal('show');
    });

    \$('#confirmDeleteBox').on('hidden.bs.modal', function (e) {
        \$('#confirmDeleteBox').find('.modal-body').html('');
        \$('#confirmDeleteBox').find('#confirmBoxToken').val('');
        \$('#confirmDeleteBox').find('#form-delete').attr('action', \"#\");
    });

    \$( \"body\" ).delegate( \".confirmBox\", \"click\", function() {
        var url = \$(this).data('url');
        var message = \$(this).data('message');
        \$('#confirmBox').find('.modal-body').html(message);
        \$('#confirmBox').find('#confirmBoxUrl').attr(\"href\", url);
        \$('#confirmBox').modal('show');
    });

    \$('#confirmBox').on('hidden.bs.modal', function (e) {
        \$('#confirmBox').find('.modal-body').html('');
        \$('#confirmBox').find('#confirmBoxUrl').attr(\"href\", '#!');
    });


    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

</script>

{% block javascripts %}
{% endblock %}

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109287999-14\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109287999-14');
</script>


</body>

</html>
", "student/subscription/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/student/subscription/form.html.twig");
    }
}
