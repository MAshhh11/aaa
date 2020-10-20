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

/* admin/user/form_avatar.html.twig */
class __TwigTemplate_925aad3a10db4a8459d8042143c8dce8eeddebf25d9e9ebf2133bd51da748838 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form_avatar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/user/form_avatar.html.twig"));

        // line 3
        $context["menu"] = "secretary";
        // line 4
        $context["submenu"] = "secretary_user";
        // line 6
        $context["page_name"] = "Modification de la photo";
        // line 8
        $context["breadcrumbs"] = [0 => ["title" => "Secrétariat", "url" => ""], 1 => ["title" => "Liste des membres", "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index")], 2 => ["title" => ((("Modification du membre " . twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "lastname", [], "any", false, false, false, 11)) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "firstname", [], "any", false, false, false, 11)), "url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_form", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)])], 3 => ["title" =>         // line 12
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 12, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/user/form_avatar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    
<link rel=\"stylesheet\" href=\"https://unpkg.com/cropperjs/dist/cropper.css\">
<style>
    .box {
        display:none;
    }
    .img-container, .img-preview {
    background-color: #f7f7f7;
    text-align: center;
    width: 100%;
}
.img-container {
    margin-bottom: 1rem;
    max-height: 497px;
    min-height: 200px;
}

@media (min-width: 768px) {
.img-container {
    min-height: 497px;
}
}
</style>
          
";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "class" => "needs-validation", "autocomplete" => "off", "id" => "form-avatar"]]);
        echo "

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>

      <div class=\"card-body\">

        <div class=\"row\">
            <div class=\"col-9\">                  
                  <div class=\"img-container\">
                      ";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 57, $this->source); })()), "avatarOriginal", [], "any", false, false, false, 57)) {
            // line 58
            echo "                            <img id=\"image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 58, $this->source); })()), "avatarOriginal", [], "any", false, false, false, 58))), "html", null, true);
            echo "\">
                      ";
        } else {
            // line 60
            echo "                            <img id=\"image\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar.jpg"), "html", null, true);
            echo "\">
                      ";
        }
        // line 62
        echo "                  </div>
            </div>
          
            <div class=\"col-3 text-center\">
              <div class=\"docs-preview\">
                <div class=\"img-preview img-preview-lg\"></div>
                <div class=\"img-preview img-preview-md\"></div>
                <div class=\"img-preview img-preview-sm\"></div>
              </div>
            </div>
        </div>
                  
        <div class=\"row mt-2\">
            <div class=\"col-md-12 docs-buttons\">

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"0.1\" title=\"Zoom sur la photo\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Zoom sur la photo\">
                    <span class=\"fa fa-search-plus\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"-0.1\" title=\"Dézoom sur la photo\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Dézoom sur la photo\">
                    <span class=\"fa fa-search-minus\"></span>
                  </span>
                </button>
              </div>

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"-10\" data-second-option=\"0\" title=\"Bouger vers la gauche\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers la gauche\">
                    <span class=\"fa fa-arrow-left\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"10\" data-second-option=\"0\" title=\"Bouger vers la droite\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers la droite\">
                    <span class=\"fa fa-arrow-right\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"-10\" title=\"Bouger vers le haut\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers le haut\">
                    <span class=\"fa fa-arrow-up\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"10\" title=\"Bouger vers le bas\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers le bas\">
                    <span class=\"fa fa-arrow-down\"></span>
                  </span>
                </button>
              </div>

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-45\" title=\"Rotation vers la gauche\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Rotation vers la gauche\">
                    <span class=\"fa fa-undo\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"45\" title=\"Rotation vers la droite\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Rotation vers la droite\">
                    <span class=\"fa fa-redo\"></span>
                  </span>
                </button>         
              </div>

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleX\" data-option=\"-1\" title=\"Inverser horizontalement\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Inverser horizontalement\">
                    <span class=\"fa fa-arrows-h\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleY\" data-option=\"-1\" title=\"Inverser verticalement\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Inverser verticalement\">
                    <span class=\"fa fa-arrows-v\"></span>
                  </span>
                </button>
              </div>

              <div class=\"btn-group\" id='actions'>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"reset\" title=\"Remettre la zone de sélection\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Remettre la zone de sélection\">
                    <span class=\"fa fa-sync\"></span>
                  </span>
                </button>                  
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"reset\" title=\"Remettre la photo par défaut\" id=\"resetPicture\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Remettre la photo par défaut\">
                   <i class=\"fas fa-backspace\"></i>
                  </span>
                </button>
                <label class=\"btn btn-primary btn-upload mb-0\" for=\"user_avatar_avatar\" title=\"Envoyer une photo de mon ordinateur\">
                  ";
        // line 152
        echo "                  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "avatar", [], "any", false, false, false, 152), 'widget');
        echo "
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Envoyer une photo de mon ordinateur\">
                    <span class=\"fa fa-upload\"></span>
                  </span>
                </label>
                <button type=\"button\" class=\"btn btn-success docs-buttons\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Enregistrer  la sélection\">
                    <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    <span class=\"btn-inner--text\">Enregistrer</span>
                  </span>
                </button>
              </div>

            </div>
        
        
      </div> 
    </div>
              
    
<div class=\"card-footer\">
          
    <input type=\"hidden\" id=\"generateCanvas\" name=\"avatar\" />
    <input type=\"hidden\" id=\"resetCanvas\" name=\"reset\" value=\"0\" />
          
    <a class=\"btn btn-icon btn-sm\" href='";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_form", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 177, $this->source); })()), "id", [], "any", false, false, false, 177)]), "html", null, true);
        echo "'>
        <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
        <span class=\"btn-inner--text\">Annuler</span>
    </a>

</div>
              
    </div>

    ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), 'form_end');
        echo "
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 191
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 194
        echo " ";
        // line 196
        echo "<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\">
<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://fengyuanchen.github.io/cropperjs/js/cropper.js\"></script>
<script src=\"https://fengyuanchen.github.io/cropperjs/js/cropper.js\"></script>
<script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/cropper/plugins_image_cropper.js"), "html", null, true);
        echo "\"></script>     

    <script>
        \$('#resetPicture').click(function() {
            \$('#resetCanvas').val(1);
            \$('#image').cropper('replace', '";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avatar.jpg"), "html", null, true);
        echo "')
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/user/form_avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 206,  312 => 201,  305 => 196,  303 => 194,  298 => 191,  288 => 190,  275 => 186,  263 => 177,  234 => 152,  143 => 62,  137 => 60,  131 => 58,  129 => 57,  116 => 47,  106 => 40,  80 => 16,  70 => 15,  59 => 1,  57 => 12,  56 => 11,  55 => 8,  53 => 6,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% set menu = 'secretary' %}
{% set submenu = 'secretary_user' %}

    {% set page_name = \"Modification de la photo\"%}
    
    {% set breadcrumbs = [
            {\"title\": \"Secrétariat\", 'url' : \"\"},
            {\"title\": \"Liste des membres\", 'url' : path('user_index') },
            {\"title\": 'Modification du membre '~item.lastname~' '~item.firstname, 'url' : path('user_form', {'id':item.id}) },
            {\"title\": page_name, 'url' : \"\"},
    ] %}

{% block body %}
    
<link rel=\"stylesheet\" href=\"https://unpkg.com/cropperjs/dist/cropper.css\">
<style>
    .box {
        display:none;
    }
    .img-container, .img-preview {
    background-color: #f7f7f7;
    text-align: center;
    width: 100%;
}
.img-container {
    margin-bottom: 1rem;
    max-height: 497px;
    min-height: 200px;
}

@media (min-width: 768px) {
.img-container {
    min-height: 497px;
}
}
</style>
          
{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'class': 'needs-validation', 'autocomplete': 'off', 'id':'form-avatar'}}) }}

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{page_name}}</h3>
                </div>
            </div>
        </div>

      <div class=\"card-body\">

        <div class=\"row\">
            <div class=\"col-9\">                  
                  <div class=\"img-container\">
                      {% if item.avatarOriginal %}
                            <img id=\"image\" src=\"{{ asset(\"uploads/users/avatars/\"~item.avatarOriginal) }}\">
                      {% else %}
                            <img id=\"image\" src=\"{{ asset(\"assets/img/avatar.jpg\") }}\">
                      {% endif %}
                  </div>
            </div>
          
            <div class=\"col-3 text-center\">
              <div class=\"docs-preview\">
                <div class=\"img-preview img-preview-lg\"></div>
                <div class=\"img-preview img-preview-md\"></div>
                <div class=\"img-preview img-preview-sm\"></div>
              </div>
            </div>
        </div>
                  
        <div class=\"row mt-2\">
            <div class=\"col-md-12 docs-buttons\">

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"0.1\" title=\"Zoom sur la photo\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Zoom sur la photo\">
                    <span class=\"fa fa-search-plus\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"zoom\" data-option=\"-0.1\" title=\"Dézoom sur la photo\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Dézoom sur la photo\">
                    <span class=\"fa fa-search-minus\"></span>
                  </span>
                </button>
              </div>

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"-10\" data-second-option=\"0\" title=\"Bouger vers la gauche\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers la gauche\">
                    <span class=\"fa fa-arrow-left\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"10\" data-second-option=\"0\" title=\"Bouger vers la droite\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers la droite\">
                    <span class=\"fa fa-arrow-right\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"-10\" title=\"Bouger vers le haut\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers le haut\">
                    <span class=\"fa fa-arrow-up\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"move\" data-option=\"0\" data-second-option=\"10\" title=\"Bouger vers le bas\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Bouger vers le bas\">
                    <span class=\"fa fa-arrow-down\"></span>
                  </span>
                </button>
              </div>

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"-45\" title=\"Rotation vers la gauche\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Rotation vers la gauche\">
                    <span class=\"fa fa-undo\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"rotate\" data-option=\"45\" title=\"Rotation vers la droite\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Rotation vers la droite\">
                    <span class=\"fa fa-redo\"></span>
                  </span>
                </button>         
              </div>

              <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleX\" data-option=\"-1\" title=\"Inverser horizontalement\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Inverser horizontalement\">
                    <span class=\"fa fa-arrows-h\"></span>
                  </span>
                </button>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"scaleY\" data-option=\"-1\" title=\"Inverser verticalement\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Inverser verticalement\">
                    <span class=\"fa fa-arrows-v\"></span>
                  </span>
                </button>
              </div>

              <div class=\"btn-group\" id='actions'>
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"reset\" title=\"Remettre la zone de sélection\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Remettre la zone de sélection\">
                    <span class=\"fa fa-sync\"></span>
                  </span>
                </button>                  
                <button type=\"button\" class=\"btn btn-primary\" data-method=\"reset\" title=\"Remettre la photo par défaut\" id=\"resetPicture\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Remettre la photo par défaut\">
                   <i class=\"fas fa-backspace\"></i>
                  </span>
                </button>
                <label class=\"btn btn-primary btn-upload mb-0\" for=\"user_avatar_avatar\" title=\"Envoyer une photo de mon ordinateur\">
                  {#<input type=\"file\" class=\"sr-only\" id=\"inputImage\" name=\"file\" accept=\".jpg,.jpeg,.png,.gif,.bmp,.tiff\">#}
                  {{ form_widget(form.avatar) }}
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Envoyer une photo de mon ordinateur\">
                    <span class=\"fa fa-upload\"></span>
                  </span>
                </label>
                <button type=\"button\" class=\"btn btn-success docs-buttons\" data-method=\"getCroppedCanvas\" data-option=\"{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }\">
                  <span class=\"docs-tooltip\" data-toggle=\"tooltip\" data-animation=\"false\" title=\"\" data-original-title=\"Enregistrer  la sélection\">
                    <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                    <span class=\"btn-inner--text\">Enregistrer</span>
                  </span>
                </button>
              </div>

            </div>
        
        
      </div> 
    </div>
              
    
<div class=\"card-footer\">
          
    <input type=\"hidden\" id=\"generateCanvas\" name=\"avatar\" />
    <input type=\"hidden\" id=\"resetCanvas\" name=\"reset\" value=\"0\" />
          
    <a class=\"btn btn-icon btn-sm\" href='{{ path('user_form', {'id':item.id}) }}'>
        <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
        <span class=\"btn-inner--text\">Annuler</span>
    </a>

</div>
              
    </div>

    {{ form_end(form) }}
    
{% endblock %}

{% block javascripts %}
{{ parent()}}

  {#<script src=\"https://unpkg.com/cropperjs/dist/cropper.js\"></script>#}
 {#<script src=\"  https://unpkg.com/cropperjs@1.5.6/dist/cropper.js\"></script>#}
{#<script src=\"https://cdnjs.cloudflare.com/ajax/libs/cropper/4.0.0/cropper.min.js\"></script>#}
<script src=\"https://code.jquery.com/jquery-3.1.1.min.js\">
<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js\"></script>
<script src=\"https://fengyuanchen.github.io/cropperjs/js/cropper.js\"></script>
<script src=\"https://fengyuanchen.github.io/cropperjs/js/cropper.js\"></script>
<script src=\"{{ asset('assets/vendor/cropper/plugins_image_cropper.js') }}\"></script>     

    <script>
        \$('#resetPicture').click(function() {
            \$('#resetCanvas').val(1);
            \$('#image').cropper('replace', '{{ asset(\"assets/img/avatar.jpg\") }}')
        });
    </script>
{% endblock %}
", "admin/user/form_avatar.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/user/form_avatar.html.twig");
    }
}
