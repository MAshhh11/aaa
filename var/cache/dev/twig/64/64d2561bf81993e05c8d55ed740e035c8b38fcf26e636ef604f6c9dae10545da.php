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

/* public/base.html.twig */
class __TwigTemplate_1e0da7b42b0dba8c3876e5e388065969f861dd45b01c2216e553e58cfad3a636 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "public/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <meta property=\"og:locale\" content=\"fr_FR\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:title\" content=\"L’animateur autodidacte accompagné\">
  <meta property=\"og:description\" content=\"\">
  <meta property=\"og:url\" content=\"https://www.aaanim.fr/\">
  <meta property=\"og:site_name\" content=\"L’animateur autodidacte accompagné\">
  <meta property=\"og:image\" content=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/aaa.jpg"), "html", null, true);
        echo "\">
  <meta name=\"twitter:card\" content=\"summary_large_image\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/all.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl.carousel.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/odometer-theme-default.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/font.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" />
  ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/apple-touch-icon.png"), "html", null, true);
        echo "\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
  <link rel=\"manifest\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/site.webmanifest"), "html", null, true);
        echo "\">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109287999-16\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109287999-16');
  </script>

  <script type=\"text/javascript\">
    var startTime = (new Date()).getTime();
  </script>
</head>
<body>
  <div class=\"loader\">
    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/Marche_a_Caractere.gif"), "html", null, true);
        echo "\" alt=\"animation 2d de marche\">
  </div>
  <div class=\"menuMobile\">
    <div class=\"closeMobile\">
      <span></span>
      <span></span>
    </div>
    <div class=\"menuMobileContainer\">
      <nav class=\"nav-mobile\">
        <ul>
          <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 59, $this->source); })()), "home"))) {
            echo "current";
        }
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_formation");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 60, $this->source); })()), "formation"))) {
            echo "current";
        }
        echo "\">Nos formations</a></li>
          <li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_animation");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 61, $this->source); })()), "animation"))) {
            echo "current";
        }
        echo "\">Le secteur de l'animation</a></li>
          <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 62, $this->source); })()), "animation"))) {
            echo "current";
        }
        echo "\">Espace Etudiant</a></li>
          <li class=\"mobileContact\"><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "#contact\">Contact</a></li>
        </ul>
        <ul class=\"nav-sociaux\">
          <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
          <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></i></a></li>
          <li><a href=\"https://www.linkedin.com/in/aaanim-l-animateur-autodidacte-accompagn%C3%A9-8668b41b1/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
        </ul>
      </nav>
    </div>
    <div class=\"bandLeft bg-darkBlue\"></div>
  </div>
  <div class=\"menuFix\" id=\"menuFix\">
    <div class=\"bg-darkBlue\">

    </div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"logoFix\">
          <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/logoAnim.gif"), "html", null, true);
        echo "\" alt=\"animateur autodidacte accompagné\"></a>
        </div>
        <div class=\"btnMenuFix\">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class=\"fix-nav\">
          <ul>
            <li ><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 90, $this->source); })()), "home"))) {
            echo "current";
        }
        echo "\">Accueil</a></li>
            <li ><a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_formation");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 91, $this->source); })()), "formation"))) {
            echo "current";
        }
        echo "\">Nos formations</a></li>
            <li ><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_animation");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 92, $this->source); })()), "animation"))) {
            echo "current";
        }
        echo "\">Le secteur de l'animation</a></li>
            <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "#contact\">Contact</a></li>
          </ul>
        </nav>
        <nav class=\"fix-nav\">
          <ul>
            <li class=\"align-self-right\"><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"";
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 98, $this->source); })()), ""))) {
            echo "current";
        }
        echo "\">Espace Etudiant</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class=\"page\">
    <header id=\"header\">
      <div class=\"btnMenu bg-darkBlue\">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class=\"container-fluid\">
        <div class=\"row bg-darkBlue headerBand\">
          <div class=\"col-12\">
            <h1 class=\"m-0\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/logoAnim.gif"), "html", null, true);
        echo "\" alt=\"animateur autodidacte accompagné\"></h1>
            <div class=\"w-100 h-100 d-flex justify-content-end align-items-center\" id=\"connexionNavContainer\">
              <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/icone_compte.png"), "html", null, true);
        echo "\" class=\"mr-2\">
              <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"text-white mr-5\">Espace Etudiant <br> > Je me connecte</a>
            </div>
          </div>
        </div>
        <div class=\"row bg-darkGrey headerBot\">
          <div class=\"col-3 headerLeft\">
            <nav class=\"main-nav\">
              <ul>
                <li class=\"";
        // line 125
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 125, $this->source); })()), "home"))) {
            echo "current";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "\" >Accueil</a></li>
                <li class=\"";
        // line 126
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 126, $this->source); })()), "formation"))) {
            echo "current";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_formation");
        echo "\">Nos formations</a></li>
                <li class=\"";
        // line 127
        if (((isset($context["page"]) || array_key_exists("page", $context)) && 0 === twig_compare((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 127, $this->source); })()), "animation"))) {
            echo "current";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_animation");
        echo "\">Le secteur de l'animation</a></li>
                <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_home");
        echo "#contact\">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class=\"col-12 col-lg-6 headerCenter\">
            <p class=\"text-yellow text-center\">Vous voulez être animateur 2D ou storyboarder ?</p>
            <div>c'est ICI !</div>
          </div>
          <div class=\"col-3 headerRight\">
            <ul class=\"nav-sociaux\">
              <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
              <li><a href=\"https://www.instagram.com/animateurautodidacteaccompagne/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a></li>
              <li><a href=\"https://www.linkedin.com/in/aaanim-l-animateur-autodidacte-accompagn%C3%A9-8668b41b1/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main>
      ";
        // line 147
        $this->displayBlock('main', $context, $blocks);
        // line 148
        echo "    </main>
    <footer>
      <div class=\"container-fluid\">
        <div class=\"row bg-darkGrey patternBlue\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-12 col-md-4 d-flex\">
                <ul class=\"navFooter\">
                  <li>L’Animateur Autodidacte Accompagné</li>
                  <li><a href=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_mentions_legales");
        echo "\">Mentions légales</a></li>
                  <li><a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("public_cgv");
        echo "\">cgv</a></li>
                </ul>
              </div>
              <div class=\"col-12 col-md-3 offset-md-5 footerContact\">
                <ul class=\"navContact\">
                  <li class=\"text-center\">Contact</li>
                  <li class=\"text-center\">
                    <a href=\"mailto:3aanim@gmail.com\"><i class=\"fas fa-envelope\"></i></a>
                  </li>
                  <li class=\"text-center\">
                    <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"https://www.instagram.com/animateurautodidacteaccompagne/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    <a href=\"https://www.linkedin.com/in/aaanim-l-animateur-autodidacte-accompagn%C3%A9-8668b41b1/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row bg-yellow footerBand\">
          <div class=\"col-12\">
            <div class=\"logoFooter\">
              <img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/logoAnim.gif"), "html", null, true);
        echo "\" alt=\"\">
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/all.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollSpy.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/odometer.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
";
        // line 196
        $this->displayBlock('javascripts', $context, $blocks);
        // line 197
        echo "</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "L’animateur autodidacte accompagné";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
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

    // line 147
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 196
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
        return "public/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  484 => 196,  466 => 147,  448 => 26,  429 => 10,  418 => 197,  416 => 196,  412 => 195,  408 => 194,  404 => 193,  400 => 192,  396 => 191,  392 => 190,  379 => 180,  354 => 158,  350 => 157,  339 => 148,  337 => 147,  315 => 128,  307 => 127,  299 => 126,  291 => 125,  280 => 117,  276 => 116,  271 => 114,  248 => 98,  240 => 93,  232 => 92,  224 => 91,  216 => 90,  202 => 81,  181 => 63,  173 => 62,  165 => 61,  157 => 60,  149 => 59,  136 => 49,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  100 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  69 => 18,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, user-scalable=0\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <title>{% block title %}L’animateur autodidacte accompagné{% endblock %}</title>

  <meta property=\"og:locale\" content=\"fr_FR\">
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:title\" content=\"L’animateur autodidacte accompagné\">
  <meta property=\"og:description\" content=\"\">
  <meta property=\"og:url\" content=\"https://www.aaanim.fr/\">
  <meta property=\"og:site_name\" content=\"L’animateur autodidacte accompagné\">
  <meta property=\"og:image\" content=\"{{asset('assets/img/front/aaa.jpg')}}\">
  <meta name=\"twitter:card\" content=\"summary_large_image\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/all.min.css')}}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/bootstrap/bootstrap.min.css')}}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/owl.carousel.min.css')}}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/odometer-theme-default.css')}}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/font.css')}}\" />
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/style.css')}}\" />
  {% block stylesheets %}{% endblock %}

  <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"{{ asset('assets/favicon/apple-touch-icon.png') }}\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/favicon/favicon-16x16.png') }}\" sizes=\"16x16\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/favicon/favicon-32x32.png') }}\" sizes=\"32x32\">
  <link rel=\"manifest\" href=\"{{ asset('assets/favicon/site.webmanifest') }}\">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-109287999-16\"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-109287999-16');
  </script>

  <script type=\"text/javascript\">
    var startTime = (new Date()).getTime();
  </script>
</head>
<body>
  <div class=\"loader\">
    <img src=\"{{ asset('assets/img/front/Marche_a_Caractere.gif')}}\" alt=\"animation 2d de marche\">
  </div>
  <div class=\"menuMobile\">
    <div class=\"closeMobile\">
      <span></span>
      <span></span>
    </div>
    <div class=\"menuMobileContainer\">
      <nav class=\"nav-mobile\">
        <ul>
          <li><a href=\"{{ path('public_home') }}\" class=\"{% if page is defined and page == \"home\" %}current{% endif %}\">Accueil</a></li>
          <li><a href=\"{{ path('public_formation') }}\" class=\"{% if page is defined and page == \"formation\" %}current{% endif %}\">Nos formations</a></li>
          <li><a href=\"{{ path('public_animation') }}\" class=\"{% if page is defined and page == \"animation\" %}current{% endif %}\">Le secteur de l'animation</a></li>
          <li><a href=\"{{ path('app_login') }}\" class=\"{% if page is defined and page == \"animation\" %}current{% endif %}\">Espace Etudiant</a></li>
          <li class=\"mobileContact\"><a href=\"{{ path('public_home') }}#contact\">Contact</a></li>
        </ul>
        <ul class=\"nav-sociaux\">
          <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a></li>
          <li><a href=\"#\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></i></a></li>
          <li><a href=\"https://www.linkedin.com/in/aaanim-l-animateur-autodidacte-accompagn%C3%A9-8668b41b1/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
        </ul>
      </nav>
    </div>
    <div class=\"bandLeft bg-darkBlue\"></div>
  </div>
  <div class=\"menuFix\" id=\"menuFix\">
    <div class=\"bg-darkBlue\">

    </div>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"logoFix\">
          <a href=\"{{ path('public_home') }}\"><img src=\"{{ asset('assets/img/front/logoAnim.gif')}}\" alt=\"animateur autodidacte accompagné\"></a>
        </div>
        <div class=\"btnMenuFix\">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class=\"fix-nav\">
          <ul>
            <li ><a href=\"{{ path('public_home') }}\" class=\"{% if page is defined and page == \"home\" %}current{% endif %}\">Accueil</a></li>
            <li ><a href=\"{{ path('public_formation') }}\" class=\"{% if page is defined and page == \"formation\" %}current{% endif %}\">Nos formations</a></li>
            <li ><a href=\"{{ path('public_animation') }}\" class=\"{% if page is defined and page == \"animation\" %}current{% endif %}\">Le secteur de l'animation</a></li>
            <li><a href=\"{{ path('public_home') }}#contact\">Contact</a></li>
          </ul>
        </nav>
        <nav class=\"fix-nav\">
          <ul>
            <li class=\"align-self-right\"><a href=\"{{ path('app_login') }}\" class=\"{% if page is defined and page == \"\" %}current{% endif %}\">Espace Etudiant</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class=\"page\">
    <header id=\"header\">
      <div class=\"btnMenu bg-darkBlue\">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class=\"container-fluid\">
        <div class=\"row bg-darkBlue headerBand\">
          <div class=\"col-12\">
            <h1 class=\"m-0\"><img src=\"{{ asset('assets/img/front/logoAnim.gif')}}\" alt=\"animateur autodidacte accompagné\"></h1>
            <div class=\"w-100 h-100 d-flex justify-content-end align-items-center\" id=\"connexionNavContainer\">
              <img src=\"{{ asset('assets/img/front/icone_compte.png') }}\" class=\"mr-2\">
              <a href=\"{{ path('app_login') }}\" class=\"text-white mr-5\">Espace Etudiant <br> > Je me connecte</a>
            </div>
          </div>
        </div>
        <div class=\"row bg-darkGrey headerBot\">
          <div class=\"col-3 headerLeft\">
            <nav class=\"main-nav\">
              <ul>
                <li class=\"{% if page is defined and page == \"home\" %}current{% endif %}\"><a href=\"{{ path('public_home') }}\" >Accueil</a></li>
                <li class=\"{% if page is defined and page == \"formation\" %}current{% endif %}\"><a href=\"{{ path('public_formation') }}\">Nos formations</a></li>
                <li class=\"{% if page is defined and page == \"animation\" %}current{% endif %}\"><a href=\"{{ path('public_animation') }}\">Le secteur de l'animation</a></li>
                <li><a href=\"{{ path('public_home') }}#contact\">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class=\"col-12 col-lg-6 headerCenter\">
            <p class=\"text-yellow text-center\">Vous voulez être animateur 2D ou storyboarder ?</p>
            <div>c'est ICI !</div>
          </div>
          <div class=\"col-3 headerRight\">
            <ul class=\"nav-sociaux\">
              <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
              <li><a href=\"https://www.instagram.com/animateurautodidacteaccompagne/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a></li>
              <li><a href=\"https://www.linkedin.com/in/aaanim-l-animateur-autodidacte-accompagn%C3%A9-8668b41b1/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <main>
      {% block main %}{% endblock %}
    </main>
    <footer>
      <div class=\"container-fluid\">
        <div class=\"row bg-darkGrey patternBlue\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-12 col-md-4 d-flex\">
                <ul class=\"navFooter\">
                  <li>L’Animateur Autodidacte Accompagné</li>
                  <li><a href=\"{{ path('public_mentions_legales') }}\">Mentions légales</a></li>
                  <li><a href=\"{{ path('public_cgv') }}\">cgv</a></li>
                </ul>
              </div>
              <div class=\"col-12 col-md-3 offset-md-5 footerContact\">
                <ul class=\"navContact\">
                  <li class=\"text-center\">Contact</li>
                  <li class=\"text-center\">
                    <a href=\"mailto:3aanim@gmail.com\"><i class=\"fas fa-envelope\"></i></a>
                  </li>
                  <li class=\"text-center\">
                    <a href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                    <a href=\"https://www.instagram.com/animateurautodidacteaccompagne/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                    <a href=\"https://www.linkedin.com/in/aaanim-l-animateur-autodidacte-accompagn%C3%A9-8668b41b1/\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row bg-yellow footerBand\">
          <div class=\"col-12\">
            <div class=\"logoFooter\">
              <img src=\"{{ asset('assets/img/front/logoAnim.gif')}}\" alt=\"\">
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('assets/js/bootstrap.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/owl.carousel.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/all.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/scrollSpy.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/odometer.min.js')}}\"></script>
<script src=\"{{ asset('assets/js/main.js')}}\"></script>
{% block javascripts %}{% endblock %}
</html>
", "public/base.html.twig", "/Applications/MAMP/htdocs/aaa/templates/public/base.html.twig");
    }
}
