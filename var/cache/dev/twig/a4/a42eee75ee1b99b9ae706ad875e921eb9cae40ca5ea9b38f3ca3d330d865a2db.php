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

/* public/animation.html.twig */
class __TwigTemplate_e150a65ae161960ad64571419bfb51f727a9f8ece702ab46752fdb07495b9d9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "public/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/animation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/animation.html.twig"));

        // line 2
        $context["page"] = "animation";
        // line 1
        $this->parent = $this->loadTemplate("public/base.html.twig", "public/animation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Le secteur de l’animation - L’animateur autodidacte accompagné";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "<div class=\"container\">




  <div class=\"row animation\">
    <div class=\"col-12\">
      <p class=\"overTitle text-blue\">le secteur de l’animation</p>
      <h2>Les chiffres du cinéma d'animation en france<span class=\"text-yellow\"> •</span></h2>
      <p>chiffres en 2019 (source AUDIENS/CNC) :</p>
    </div>
  <div class=\"row\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["figures"]) || array_key_exists("figures", $context) ? $context["figures"] : (function () { throw new RuntimeError('Variable "figures" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["figure"]) {
            // line 19
            echo "
    <div class=\"col-6 col-md-4 col-lg-2 compteurContainer\">
      <div class=\"compteur\">
        <span class=\"odometer\" data-counter=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "amount", [], "any", false, false, false, 22), "html", null, true);
            echo "\">0</span>
      </div>
      <div class=\"text-center CompteurTitle\">
        <p class=\"font-bold\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>
        <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["figure"], "text", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
       
      </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['figure'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </div>

<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"container organigrammeContainer\">
      <div class=\"row\">
        <div class=\"col-12 orgaTitle\">
          <p class=\"overTitle text-blue\">quel professionnel ?</p>
          <h2>Organigrammes des métiers<span class=\"text-yellow\"> •</span></h2>
        </div>
        <div class=\"col-12\">
          <div class=\"orgaCarousel owl-carousel owl-theme\">
            <div class=\"item\">
              <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_fabrication.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_fabrication@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_fabrication@3x.png"), "html", null, true);
        echo " 3x\" id=\"orgafab\" data-orga=\"0\" alt=\"organigramme fabrication\">
            </div>
            <div class=\"item\">
              <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_jeu.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_jeu@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_jeu@3x.png"), "html", null, true);
        echo " 3x\" id=\"orgaJeu\" data-orga=\"1\" alt=\"organigramme jeu\">
            </div>
            <div class=\"item\">
              <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_animation.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_animation@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_animation@3x.png"), "html", null, true);
        echo " 3x\" id=\"orgaAnim\" data-orga=\"2\" alt=\"organigramme animation\">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container navOrgaContainer\">
      <div class=\"row\">
        <div class=\"navOrga\">
          <div class=\"orgaPrev\">
            <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_gauche.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_gauche@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_gauche@3x.png"), "html", null, true);
        echo " 3x\" alt=\"fleche gauche\">
          </div>
          <div class=\"orgaNext\">
            <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_droite.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_droite@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_droite@3x.png"), "html", null, true);
        echo " 3x\" alt=\"fleche droite\">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid \">
  <div class=\"row bg-darkGrey patternBlue list justify-content-center\">
    <div class=\"col-auto\">
      <div class=\"cstBtnBorderTrame text-yellow border-yellow btnList\" data-list=\"ecole\">
        recevoir la liste des écoles
      </div>
      <div class=\"cstBtnBorderTrame text-blue border-blue btnList\" data-list=\"studio\">
        recevoir la liste des studios
      </div>
    </div>
  </div>
</div>
<div class=\"container presse\">

  <div class=\"row \">
    <div class=\"col-12\">
      <p class=\"overTitle text-blue\">le metier</p>
      <h2>La presse en parle<span class=\"text-yellow\"> •</span></h2>
    </div>
  </div>
  ";
        // line 92
        echo "  <div class=\"row pressArticles\">
    <div class=\"col-4\">
 ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 94, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 95
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 95), 1)) {
                // line 96
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 98), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 100), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 101), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 104
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
     ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 106
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 106), 2)) {
                // line 107
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 109), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 111), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 112), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 115
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
    <div class=\"col-4\">
      ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 119
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 119), 3)) {
                // line 120
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 122), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 124
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 124), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 125), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 128
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 129, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 130
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 130), 4)) {
                // line 131
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 133), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 135), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 136), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 139
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
    <div class=\"col-4\">
      ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 142, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 143
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 143), 5)) {
                // line 144
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 146), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 148
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 148), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 149), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 152
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
     ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 153, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 154
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 154), 6)) {
                // line 155
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 157), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 159
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 159), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 160), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 163
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
  </div>
  ";
        // line 167
        echo "  <div class=\"row pressArticlesTab\">
    <div class=\"col-6\">
      ";
        // line 169
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 169, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 170
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 170), 1)) {
                // line 171
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 173), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 175), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 176
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 176), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 179
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
       ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 180, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 181
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 181), 2)) {
                // line 182
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 184), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 186), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 187), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 190
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
       ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 192
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 192), 3)) {
                // line 193
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 195
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 195), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 197
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 197), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 198), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 201
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
    </div>
    <div class=\"col-6\">
       ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 204, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 205
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 205), 4)) {
                // line 206
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 208), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 210
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 210), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 211
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 211), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 214
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
       ";
        // line 215
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 215, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 216
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 216), 5)) {
                // line 217
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 219
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 219), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 221
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 221), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 222
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 222), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 225
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 226, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 227
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 227), 6)) {
                // line 228
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 230), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 232
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 232), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 233), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 236
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
    </div>
  </div>
  ";
        // line 240
        echo "  <div class=\"row pressArticlesMobile\">
    <div class=\"col-12\">
       ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 242, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 243
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 243), 1)) {
                // line 244
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 246), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 248
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 248), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 249
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 249), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 252
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 253, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 254
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 254), 2)) {
                // line 255
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 257
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 257), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 259
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 259), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 260
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 260), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 263
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 264, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 265
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 265), 3)) {
                // line 266
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 268
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 268), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 270
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 270), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 271), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 274
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 275, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 276
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 276), 4)) {
                // line 277
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 279
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 279), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 281
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 281), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 282
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 282), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 285
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      ";
        // line 286
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 286, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 287
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 287), 5)) {
                // line 288
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 290
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 290), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 292
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 292), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 293
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 293), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 296
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 297
        echo "     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 297, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo " 
   ";
            // line 298
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "rank", [], "any", false, false, false, 298), 6)) {
                // line 299
                echo "      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"";
                // line 301
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "website_link", [], "any", false, false, false, 301), "html", null, true);
                echo "\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">";
                // line 303
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 303), "html", null, true);
                echo "</p>
        <p class=\"presseName\">";
                // line 304
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 304), "html", null, true);
                echo "</p>
      </div>
      ";
            }
            // line 307
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "  
    </div>
  </div>
</div>

<div class=\"popUpList ";
        // line 312
        if ((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 312, $this->source); })())) {
            echo "shown";
        }
        echo "\">

  <div class=\"container\">
    <div class=\"popUpClose\">
      <span></span>
      <span></span>
    </div>
    ";
        // line 319
        if (0 === twig_compare((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 319, $this->source); })()), "valid")) {
            // line 320
            echo "      <p class=\"reponseList\">Votre demande a bien été pris en compte.</p>
    ";
        } else {
            // line 322
            echo "      <p class=\"text-white text-center text-\">Veuillez renseigner ce formulaire pour recevoir la liste</p>
      ";
            // line 323
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), 'form_start');
            echo "
        <div class=\"my-custom-class-for-errors\">
            ";
            // line 325
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), 'errors');
            echo "
        </div>

        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-center flex-column flex-md-row align-items-center\">
              ";
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 330, $this->source); })()), "firstname", [], "any", false, false, false, 330), 'widget');
            echo "
              ";
            // line 331
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "lastname", [], "any", false, false, false, 331), 'widget');
            echo "
            </div>
            <div class=\"col d-flex justify-content-center\">
                ";
            // line 334
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "email", [], "any", false, false, false, 334), 'widget');
            echo "

                <button type=\"submit\" name=\"button\" class=\"cstSubmit\"> <img src=\"";
            // line 336
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/submit.png"), "html", null, true);
            echo "\" srcset=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/submit@2x.png"), "html", null, true);
            echo " 2x, ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/submit@3x.png"), "html", null, true);
            echo " 3x\" alt=\"fleche\"> </button>
            </div>
        </div>
      ";
            // line 339
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 341
        echo "

  </div>
</div>

<div class=\"popUpOrga\">
  <div class=\"popUpClose\">
    <span></span>
    <span></span>
  </div>
  <div class=\"popUpOrgaCaroussel owl-carousel owl-theme\">
    <div class=\"item\">
      <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_fabrication@2x.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_fabrication@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_fabrication@3x.png"), "html", null, true);
        echo " 3x\" id=\"popUpOrgafab\" alt=\"organigramme fabrication\">
    </div>
    <div class=\"item\">
      <img src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_jeu@2x.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_jeu@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_jeu@3x.png"), "html", null, true);
        echo " 3x\" id=\"popUpOrgaJeu\" alt=\"organigramme jeu\">
    </div>
    <div class=\"item\">
      <img src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_animation@2x.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_animation@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/organigramme_animation@3x.png"), "html", null, true);
        echo " 3x\" id=\"popUpOrgaAnim\" alt=\"organigramme animation\">
    </div>
  </div>
  <div class=\"navPopUpOrga\">
    <div class=\"orgaPrev\">
      <img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_gauche.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_gauche@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_gauche@3x.png"), "html", null, true);
        echo " 3x\" alt=\"fleche gauche\">
    </div>
    <div class=\"orgaNext\">
      <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_droite.png"), "html", null, true);
        echo "\" srcset=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_droite@2x.png"), "html", null, true);
        echo " 2x, ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/fleche_droite@3x.png"), "html", null, true);
        echo " 3x\" alt=\"fleche droite\">
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "public/animation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1006 => 367,  996 => 364,  984 => 359,  974 => 356,  964 => 353,  950 => 341,  945 => 339,  935 => 336,  930 => 334,  924 => 331,  920 => 330,  912 => 325,  907 => 323,  904 => 322,  900 => 320,  898 => 319,  886 => 312,  874 => 307,  868 => 304,  864 => 303,  859 => 301,  855 => 299,  853 => 298,  846 => 297,  840 => 296,  834 => 293,  830 => 292,  825 => 290,  821 => 288,  819 => 287,  813 => 286,  805 => 285,  799 => 282,  795 => 281,  790 => 279,  786 => 277,  784 => 276,  778 => 275,  770 => 274,  764 => 271,  760 => 270,  755 => 268,  751 => 266,  749 => 265,  743 => 264,  735 => 263,  729 => 260,  725 => 259,  720 => 257,  716 => 255,  714 => 254,  708 => 253,  700 => 252,  694 => 249,  690 => 248,  685 => 246,  681 => 244,  679 => 243,  673 => 242,  669 => 240,  659 => 236,  653 => 233,  649 => 232,  644 => 230,  640 => 228,  638 => 227,  631 => 226,  625 => 225,  619 => 222,  615 => 221,  610 => 219,  606 => 217,  604 => 216,  598 => 215,  590 => 214,  584 => 211,  580 => 210,  575 => 208,  571 => 206,  569 => 205,  563 => 204,  553 => 201,  547 => 198,  543 => 197,  538 => 195,  534 => 193,  532 => 192,  526 => 191,  518 => 190,  512 => 187,  508 => 186,  503 => 184,  499 => 182,  497 => 181,  491 => 180,  483 => 179,  477 => 176,  473 => 175,  468 => 173,  464 => 171,  462 => 170,  456 => 169,  452 => 167,  442 => 163,  436 => 160,  432 => 159,  427 => 157,  423 => 155,  421 => 154,  415 => 153,  407 => 152,  401 => 149,  397 => 148,  392 => 146,  388 => 144,  386 => 143,  380 => 142,  370 => 139,  364 => 136,  360 => 135,  355 => 133,  351 => 131,  349 => 130,  343 => 129,  335 => 128,  329 => 125,  325 => 124,  320 => 122,  316 => 120,  314 => 119,  308 => 118,  298 => 115,  292 => 112,  288 => 111,  283 => 109,  279 => 107,  277 => 106,  271 => 105,  263 => 104,  257 => 101,  253 => 100,  248 => 98,  244 => 96,  242 => 95,  236 => 94,  232 => 92,  198 => 64,  188 => 61,  171 => 51,  161 => 48,  151 => 45,  136 => 32,  124 => 26,  120 => 25,  114 => 22,  109 => 19,  105 => 18,  91 => 6,  81 => 5,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'public/base.html.twig' %}
{% set page = \"animation\" %}

{% block title %}Le secteur de l’animation - L’animateur autodidacte accompagné{% endblock %}
{% block main %}
<div class=\"container\">




  <div class=\"row animation\">
    <div class=\"col-12\">
      <p class=\"overTitle text-blue\">le secteur de l’animation</p>
      <h2>Les chiffres du cinéma d'animation en france<span class=\"text-yellow\"> •</span></h2>
      <p>chiffres en 2019 (source AUDIENS/CNC) :</p>
    </div>
  <div class=\"row\">
    {%for figure in figures %}

    <div class=\"col-6 col-md-4 col-lg-2 compteurContainer\">
      <div class=\"compteur\">
        <span class=\"odometer\" data-counter=\"{{figure.amount}}\">0</span>
      </div>
      <div class=\"text-center CompteurTitle\">
        <p class=\"font-bold\">{{figure.title}}</p>
        <p>{{figure.text}}</p>
       
      </div>
    </div>

{% endfor %}
  </div>

<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"container organigrammeContainer\">
      <div class=\"row\">
        <div class=\"col-12 orgaTitle\">
          <p class=\"overTitle text-blue\">quel professionnel ?</p>
          <h2>Organigrammes des métiers<span class=\"text-yellow\"> •</span></h2>
        </div>
        <div class=\"col-12\">
          <div class=\"orgaCarousel owl-carousel owl-theme\">
            <div class=\"item\">
              <img src=\"{{ asset('assets/img/front/organigramme_fabrication.png')}}\" srcset=\"{{ asset('assets/img/front/organigramme_fabrication@2x.png')}} 2x, {{ asset('assets/img/front/organigramme_fabrication@3x.png')}} 3x\" id=\"orgafab\" data-orga=\"0\" alt=\"organigramme fabrication\">
            </div>
            <div class=\"item\">
              <img src=\"{{ asset('assets/img/front/organigramme_jeu.png')}}\" srcset=\"{{ asset('assets/img/front/organigramme_jeu@2x.png')}} 2x, {{ asset('assets/img/front/organigramme_jeu@3x.png')}} 3x\" id=\"orgaJeu\" data-orga=\"1\" alt=\"organigramme jeu\">
            </div>
            <div class=\"item\">
              <img src=\"{{ asset('assets/img/front/organigramme_animation.png')}}\" srcset=\"{{ asset('assets/img/front/organigramme_animation@2x.png')}} 2x, {{ asset('assets/img/front/organigramme_animation@3x.png')}} 3x\" id=\"orgaAnim\" data-orga=\"2\" alt=\"organigramme animation\">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"container navOrgaContainer\">
      <div class=\"row\">
        <div class=\"navOrga\">
          <div class=\"orgaPrev\">
            <img src=\"{{ asset('assets/img/front/fleche_gauche.png')}}\" srcset=\"{{ asset('assets/img/front/fleche_gauche@2x.png')}} 2x, {{ asset('assets/img/front/fleche_gauche@3x.png')}} 3x\" alt=\"fleche gauche\">
          </div>
          <div class=\"orgaNext\">
            <img src=\"{{ asset('assets/img/front/fleche_droite.png')}}\" srcset=\"{{ asset('assets/img/front/fleche_droite@2x.png')}} 2x, {{ asset('assets/img/front/fleche_droite@3x.png')}} 3x\" alt=\"fleche droite\">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class=\"container-fluid \">
  <div class=\"row bg-darkGrey patternBlue list justify-content-center\">
    <div class=\"col-auto\">
      <div class=\"cstBtnBorderTrame text-yellow border-yellow btnList\" data-list=\"ecole\">
        recevoir la liste des écoles
      </div>
      <div class=\"cstBtnBorderTrame text-blue border-blue btnList\" data-list=\"studio\">
        recevoir la liste des studios
      </div>
    </div>
  </div>
</div>
<div class=\"container presse\">

  <div class=\"row \">
    <div class=\"col-12\">
      <p class=\"overTitle text-blue\">le metier</p>
      <h2>La presse en parle<span class=\"text-yellow\"> •</span></h2>
    </div>
  </div>
  {# article desktop #}
  <div class=\"row pressArticles\">
    <div class=\"col-4\">
 {% for article in articles %} 
   {% if article.rank == 1 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
     {% for article in articles %} 
   {% if article.rank == 2 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
    </div>
    <div class=\"col-4\">
      {% for article in articles %} 
   {% if article.rank == 3 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
      {% for article in articles %} 
   {% if article.rank == 4 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
    </div>
    <div class=\"col-4\">
      {% for article in articles %} 
   {% if article.rank == 5 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
     {% for article in articles %} 
   {% if article.rank == 6 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
    </div>
  </div>
  {# article tab #}
  <div class=\"row pressArticlesTab\">
    <div class=\"col-6\">
      {% for article in articles %} 
   {% if article.rank == 1 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
       {% for article in articles %} 
   {% if article.rank == 2 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
       {% for article in articles %} 
   {% if article.rank == 3 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
    </div>
    <div class=\"col-6\">
       {% for article in articles %} 
   {% if article.rank == 4 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
       {% for article in articles %} 
   {% if article.rank == 5 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %}
     {% for article in articles %} 
   {% if article.rank == 6 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %}  
    </div>
  </div>
  {# article mobile #}
  <div class=\"row pressArticlesMobile\">
    <div class=\"col-12\">
       {% for article in articles %} 
   {% if article.rank == 1 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
      {% for article in articles %} 
   {% if article.rank == 2 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
      {% for article in articles %} 
   {% if article.rank == 3 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
      {% for article in articles %} 
   {% if article.rank == 4 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %} 
      {% for article in articles %} 
   {% if article.rank == 5 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %}
     {% for article in articles %} 
   {% if article.rank == 6 %}
      <div class=\"pressContainer\">
        <div class=\"pressAContainer\">
          <a href=\"{{ article.website_link }}\" target=\"_blank\" class=\"cstBtnBorderTrame text-yellow border-yellow\">consulter l'article</a>
        </div>
        <p class=\"presseTitle\">{{ article.title }}</p>
        <p class=\"presseName\">{{ article.author }}</p>
      </div>
      {% endif %}
     {% endfor %}  
    </div>
  </div>
</div>

<div class=\"popUpList {% if list %}shown{% endif %}\">

  <div class=\"container\">
    <div class=\"popUpClose\">
      <span></span>
      <span></span>
    </div>
    {% if list == 'valid' %}
      <p class=\"reponseList\">Votre demande a bien été pris en compte.</p>
    {% else %}
      <p class=\"text-white text-center text-\">Veuillez renseigner ce formulaire pour recevoir la liste</p>
      {{ form_start(form) }}
        <div class=\"my-custom-class-for-errors\">
            {{ form_errors(form) }}
        </div>

        <div class=\"row\">
            <div class=\"col-12 d-flex justify-content-center flex-column flex-md-row align-items-center\">
              {{ form_widget(form.firstname) }}
              {{ form_widget(form.lastname) }}
            </div>
            <div class=\"col d-flex justify-content-center\">
                {{ form_widget(form.email) }}

                <button type=\"submit\" name=\"button\" class=\"cstSubmit\"> <img src=\"{{ asset('assets/img/front/submit.png') }}\" srcset=\"{{ asset('assets/img/front/submit@2x.png')}} 2x, {{ asset('assets/img/front/submit@3x.png')}} 3x\" alt=\"fleche\"> </button>
            </div>
        </div>
      {{ form_end(form) }}
    {% endif %}


  </div>
</div>

<div class=\"popUpOrga\">
  <div class=\"popUpClose\">
    <span></span>
    <span></span>
  </div>
  <div class=\"popUpOrgaCaroussel owl-carousel owl-theme\">
    <div class=\"item\">
      <img src=\"{{ asset('assets/img/front/organigramme_fabrication@2x.png')}}\" srcset=\"{{ asset('assets/img/front/organigramme_fabrication@2x.png')}} 2x, {{ asset('assets/img/front/organigramme_fabrication@3x.png')}} 3x\" id=\"popUpOrgafab\" alt=\"organigramme fabrication\">
    </div>
    <div class=\"item\">
      <img src=\"{{ asset('assets/img/front/organigramme_jeu@2x.png')}}\" srcset=\"{{ asset('assets/img/front/organigramme_jeu@2x.png')}} 2x, {{ asset('assets/img/front/organigramme_jeu@3x.png')}} 3x\" id=\"popUpOrgaJeu\" alt=\"organigramme jeu\">
    </div>
    <div class=\"item\">
      <img src=\"{{ asset('assets/img/front/organigramme_animation@2x.png')}}\" srcset=\"{{ asset('assets/img/front/organigramme_animation@2x.png')}} 2x, {{ asset('assets/img/front/organigramme_animation@3x.png')}} 3x\" id=\"popUpOrgaAnim\" alt=\"organigramme animation\">
    </div>
  </div>
  <div class=\"navPopUpOrga\">
    <div class=\"orgaPrev\">
      <img src=\"{{ asset('assets/img/front/fleche_gauche.png')}}\" srcset=\"{{ asset('assets/img/front/fleche_gauche@2x.png')}} 2x, {{ asset('assets/img/front/fleche_gauche@3x.png')}} 3x\" alt=\"fleche gauche\">
    </div>
    <div class=\"orgaNext\">
      <img src=\"{{ asset('assets/img/front/fleche_droite.png')}}\" srcset=\"{{ asset('assets/img/front/fleche_droite@2x.png')}} 2x, {{ asset('assets/img/front/fleche_droite@3x.png')}} 3x\" alt=\"fleche droite\">
    </div>
  </div>
</div>
{% endblock %}
", "public/animation.html.twig", "/Applications/MAMP/htdocs/aaa/templates/public/animation.html.twig");
    }
}
