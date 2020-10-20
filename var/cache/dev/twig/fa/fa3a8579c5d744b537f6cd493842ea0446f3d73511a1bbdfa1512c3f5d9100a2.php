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

/* admin/base.html.twig */
class __TwigTemplate_cc1547e03b40f57928f6d53dcccf8747dc269638a325c9a0513b4ed0a6d1adb1 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

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
        echo "</head>
<body>

  ";
        // line 38
        $this->loadTemplate("admin/components/sidebar.html.twig", "admin/base.html.twig", 38)->display($context);
        // line 39
        echo "
  <div class=\"main-content\" id=\"panel\">

        ";
        // line 42
        $this->loadTemplate("admin/components/header.html.twig", "admin/base.html.twig", 42)->display($context);
        // line 43
        echo "        ";
        $this->loadTemplate("admin/components/breadcrumb.html.twig", "admin/base.html.twig", 43)->display($context);
        // line 44
        echo "
        <div class=\"container-fluid mt--6\">
            <div class=\"row\">
                <div class=\"col\">
                        ";
        // line 48
        $this->loadTemplate("admin/components/confirmation.html.twig", "admin/base.html.twig", 48)->display($context);
        // line 49
        echo "                        ";
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "                  </div>
            </div>
        </div>
  </div>

<footer id=\"footerLimeo\">
    Plateforme AAA © 2020 Réalisation par <a href=\"https://limeo.com\" target=\"_blank\">Limeo.com</a>
</footer>

<div class=\"modal fade\" id=\"confirmBox\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmBox\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-danger modal-dialog-centered modal-\" role=\"document\">
    <div class=\"modal-content bg-gradient-danger\">
      <div class=\"modal-header\">
        <h6 class=\"modal-title\" id=\"modal-title-notification\">Confirmation</h6>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
        <div class=\"modal-body\">
        </div>
      <div class=\"modal-footer\">
        <a href=\"#\" class=\"btn btn-white\" id=\"confirmBoxUrl\">Je confirme</a>
        <button type=\"button\" class=\"btn btn-link text-white ml-auto\" data-dismiss=\"modal\">Annuler</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"confirmDeleteBox\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmDeleteBox\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-danger modal-dialog-centered modal-\" role=\"document\">
    <div class=\"modal-content bg-gradient-danger\">

        <form method=\"post\" action=\"#\"  id=\"form-delete\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
            <input type=\"hidden\" id=\"confirmBoxToken\" name=\"_token\" value=\"\">
            <div class=\"modal-header\">
              <h6 class=\"modal-title\" id=\"modal-title-notification\">Suppression définitive</h6>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
              </button>
            </div>
              <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-white\">Je confirme</button>
              <button type=\"button\" class=\"btn btn-link text-white ml-auto\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </form>

    </div>
  </div>
</div>

<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"//code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/js-cookie/js.cookie.js\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/dropzone/dist/min/dropzone.min.js\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "js/uploader/custom-file-input.js\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "js/uploader/jquery.custom-file-input.js\"></script>  <!-- Optional JS -->
<script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/chart.js/dist/Chart.min.js\"></script>
<script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/chart.js/dist/Chart.extension.js\"></script>
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/select2/dist/js/select2.min.js\"></script>
<script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/nouislider/distribute/nouislider.min.js\"></script>
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/quill/dist/quill.min.js\"></script>
<script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-notify/bootstrap-notify.min.js\"></script>

<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js\" integrity=\"sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/selectize.min.js\" integrity=\"sha256-zwkv+PhVN/CSaFNLrcQ/1vQd3vviSPiOEDvu2GxYxQc=\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css\" integrity=\"sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=\" crossorigin=\"anonymous\" />

<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js\"></script>
<script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/moment.min.js\"></script>
<script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-datetimepicker.js\"></script>
<script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js\"></script>

 <!-- Froala  -->
  <link rel=\"stylesheet\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/froala_editor.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/froala_style.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/code_view.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/image_manager.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/image.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/table.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/css/plugins/video.css\">
  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css\">
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/froala_editor.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/align.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/code_beautifier.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/code_view.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/draggable.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/image.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/image_manager.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/link.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/lists.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/paragraph_format.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/paragraph_style.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/table.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/video.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/url.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/plugins/entities.min.js\"></script>
  <script type=\"text/javascript\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/froala_editor/js/languages/fr.js\"></script>

    <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net/js/jquery.dataTables.min.js\"></script>
    <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
    <script src=\"";
        // line 158
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
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("froala_upload_file");
        echo "',
        imageManagerLoadURL: '";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("froala_lib_files");
        echo "',
        imageManagerDeleteURL: '";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("froala_remove_file");
        echo "',
        imageManagerPageSize: 5,
        videoUploadURL: '";
        // line 173
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
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "js/argon.js?v=1.1.0\"></script>

<script>
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
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("confirm.cta.ok"), "html", null, true);
        echo "',
                'cancel': '";
        // line 226
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
        // line 283
        $this->displayBlock('javascripts', $context, $blocks);
        // line 285
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

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 283
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 284
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  624 => 284,  614 => 283,  596 => 49,  578 => 34,  553 => 285,  551 => 283,  491 => 226,  487 => 225,  443 => 184,  429 => 173,  424 => 171,  420 => 170,  416 => 169,  402 => 158,  398 => 157,  394 => 156,  390 => 155,  385 => 153,  381 => 152,  377 => 151,  373 => 150,  369 => 149,  365 => 148,  361 => 147,  357 => 146,  353 => 145,  349 => 144,  345 => 143,  341 => 142,  337 => 141,  333 => 140,  329 => 139,  325 => 138,  318 => 134,  314 => 133,  310 => 132,  306 => 131,  302 => 130,  298 => 129,  294 => 128,  288 => 125,  284 => 124,  280 => 123,  276 => 122,  267 => 116,  263 => 115,  259 => 114,  255 => 113,  251 => 112,  247 => 111,  243 => 110,  239 => 109,  235 => 108,  231 => 107,  227 => 106,  223 => 105,  219 => 104,  214 => 102,  160 => 50,  157 => 49,  155 => 48,  149 => 44,  146 => 43,  144 => 42,  139 => 39,  137 => 38,  132 => 35,  130 => 34,  125 => 32,  121 => 31,  117 => 30,  111 => 27,  107 => 26,  103 => 25,  99 => 24,  95 => 23,  91 => 22,  85 => 19,  81 => 18,  77 => 17,  70 => 13,  66 => 12,  57 => 10,  46 => 1,);
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
</head>
<body>

  {% include 'admin/components/sidebar.html.twig' %}

  <div class=\"main-content\" id=\"panel\">

        {% include 'admin/components/header.html.twig' %}
        {% include 'admin/components/breadcrumb.html.twig' %}

        <div class=\"container-fluid mt--6\">
            <div class=\"row\">
                <div class=\"col\">
                        {% include 'admin/components/confirmation.html.twig' %}
                        {% block body %}{% endblock %}
                  </div>
            </div>
        </div>
  </div>

<footer id=\"footerLimeo\">
    Plateforme AAA © 2020 Réalisation par <a href=\"https://limeo.com\" target=\"_blank\">Limeo.com</a>
</footer>

<div class=\"modal fade\" id=\"confirmBox\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmBox\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-danger modal-dialog-centered modal-\" role=\"document\">
    <div class=\"modal-content bg-gradient-danger\">
      <div class=\"modal-header\">
        <h6 class=\"modal-title\" id=\"modal-title-notification\">Confirmation</h6>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">×</span>
        </button>
      </div>
        <div class=\"modal-body\">
        </div>
      <div class=\"modal-footer\">
        <a href=\"#\" class=\"btn btn-white\" id=\"confirmBoxUrl\">Je confirme</a>
        <button type=\"button\" class=\"btn btn-link text-white ml-auto\" data-dismiss=\"modal\">Annuler</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal fade\" id=\"confirmDeleteBox\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirmDeleteBox\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-danger modal-dialog-centered modal-\" role=\"document\">
    <div class=\"modal-content bg-gradient-danger\">

        <form method=\"post\" action=\"#\"  id=\"form-delete\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
            <input type=\"hidden\" id=\"confirmBoxToken\" name=\"_token\" value=\"\">
            <div class=\"modal-header\">
              <h6 class=\"modal-title\" id=\"modal-title-notification\">Suppression définitive</h6>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
              </button>
            </div>
              <div class=\"modal-body\"></div>
            <div class=\"modal-footer\">
              <button type=\"submit\" class=\"btn btn-white\">Je confirme</button>
              <button type=\"button\" class=\"btn btn-link text-white ml-auto\" data-dismiss=\"modal\">Annuler</button>
            </div>
        </form>

    </div>
  </div>
</div>

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
", "admin/base.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/base.html.twig");
    }
}
