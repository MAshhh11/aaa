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

/* admin/security/base.html.twig */
class __TwigTemplate_6879642e78c41d8234724455e1bb65af6bc50cfb06bc60fe32a2008e95766f10 extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/security/base.html.twig"));

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
        $this->displayBlock('title', $context, $blocks);
        echo " - Espace sécurisé Soroptimist France</title>

  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-16x16.png"), "html", null, true);
        echo "\" sizes=\"16x16\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/favicon/favicon-32x32.png"), "html", null, true);
        echo "\" sizes=\"32x32\">
  
  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">
  <!-- Icons -->
  <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/nucleo/css/nucleo.css\" type=\"text/css\">
  <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
  <!-- Page plugins -->
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/argon.css\" type=\"text/css\">
  <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/config.css\" type=\"text/css\">
  <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "css/style_back.css\" type=\"text/css\">

  ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "</head>
<body class=\"bg-default\">

  <div class=\"main-content bg-image\">
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
        // line 47
        echo "    </div>    
    
    
        <div class=\"container mt--8 pb-5\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-5 col-md-7\">

              <div class=\"card bg-secondary border-0 mb-0\">

                  <div class=\"\">
                    ";
        // line 57
        $this->loadTemplate("admin/components/confirmation.html.twig", "admin/security/base.html.twig", 57)->display($context);
        // line 58
        echo "                  </div>

                <div class=\"card-body px-lg-5 pb-lg-5 pt-0\">

                  <div class=\"text-center mb-4 mt-3\">
                      <a href='";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "'><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "img/front/logo.png\" class=\"w-50 mt-3\" alt=\"AAA\"></a>
                  </div>
                    ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        echo "             
                </div>
              </div>
                ";
        // line 68
        $this->displayBlock('footer', $context, $blocks);
        echo "      

            </div>
          </div>
        </div>
        
  </div>
  
  <footer class=\"py-5\" id=\"footer-main\">
    <div class=\"container\">
      <div class=\"row align-items-center justify-content-xl-between\">
        <div class=\"col-xl-12\">
          <div class=\"copyright text-center\">
            &copy; ";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Réalisation par <a href=\"https://limeo.com\" class=\"font-weight-bold ml-1\" target=\"_blank\">Limeo.com</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
      
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/js-cookie/js.cookie.js\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "js/argon.js?v=1.1.0\"></script>

<script src=\"https://www.google.com/recaptcha/api.js?render=";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["recaptcha_public"]) || array_key_exists("recaptcha_public", $context) ? $context["recaptcha_public"] : (function () { throw new RuntimeError('Variable "recaptcha_public" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "\"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["recaptcha_public"]) || array_key_exists("recaptcha_public", $context) ? $context["recaptcha_public"] : (function () { throw new RuntimeError('Variable "recaptcha_public" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "', { action: 'login' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    
  ";
        // line 105
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "  
</body>

</html>
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
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

    // line 65
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

    // line 68
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 105
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 106
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/security/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 106,  307 => 105,  289 => 68,  271 => 65,  253 => 25,  235 => 10,  221 => 107,  219 => 105,  209 => 98,  203 => 95,  198 => 93,  194 => 92,  190 => 91,  186 => 90,  182 => 89,  178 => 88,  168 => 81,  152 => 68,  146 => 65,  139 => 63,  132 => 58,  130 => 57,  118 => 47,  100 => 26,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  80 => 19,  76 => 18,  68 => 13,  64 => 12,  59 => 10,  48 => 1,);
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

  <title>{% block title %}{% endblock %} - Espace sécurisé Soroptimist France</title>

  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/favicon/favicon-16x16.png') }}\" sizes=\"16x16\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assets/favicon/favicon-32x32.png') }}\" sizes=\"32x32\">
  
  <!-- Fonts -->
  <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\">
  <!-- Icons -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/nucleo/css/nucleo.css\" type=\"text/css\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}vendor/@fortawesome/fontawesome-free/css/all.min.css\" type=\"text/css\">
  <!-- Page plugins -->
  <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/argon.css\" type=\"text/css\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/config.css\" type=\"text/css\">
  <link rel=\"stylesheet\" href=\"{{ asset('assets/') }}css/style_back.css\" type=\"text/css\">

  {% block stylesheets %}{% endblock %}
</head>
<body class=\"bg-default\">

  <div class=\"main-content bg-image\">
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
{#      <div class=\"separator separator-bottom separator-skew zindex-100\">#}
{#        <svg x=\"0\" y=\"0\" viewBox=\"0 0 2560 100\" preserveAspectRatio=\"none\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">#}
{#          <polygon class=\"fill-default\" points=\"2560 0 2560 100 0 100\"></polygon>#}
{#        </svg>#}
{#      </div>#}
    </div>    
    
    
        <div class=\"container mt--8 pb-5\">
          <div class=\"row justify-content-center\">
            <div class=\"col-lg-5 col-md-7\">

              <div class=\"card bg-secondary border-0 mb-0\">

                  <div class=\"\">
                    {% include 'admin/components/confirmation.html.twig' %}
                  </div>

                <div class=\"card-body px-lg-5 pb-lg-5 pt-0\">

                  <div class=\"text-center mb-4 mt-3\">
                      <a href='{{path('app_login')}}'><img src=\"{{ asset('assets/') }}img/front/logo.png\" class=\"w-50 mt-3\" alt=\"AAA\"></a>
                  </div>
                    {% block body %}{% endblock %}             
                </div>
              </div>
                {% block footer %}{% endblock %}      

            </div>
          </div>
        </div>
        
  </div>
  
  <footer class=\"py-5\" id=\"footer-main\">
    <div class=\"container\">
      <div class=\"row align-items-center justify-content-xl-between\">
        <div class=\"col-xl-12\">
          <div class=\"copyright text-center\">
            &copy; {{\"now\"|date('Y')}} Réalisation par <a href=\"https://limeo.com\" class=\"font-weight-bold ml-1\" target=\"_blank\">Limeo.com</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
      
<script src=\"{{ asset('assets/') }}vendor/jquery/dist/jquery.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/js-cookie/js.cookie.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/jquery.scrollbar/jquery.scrollbar.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js\"></script>
<script src=\"{{ asset('assets/') }}js/argon.js?v=1.1.0\"></script>

<script src=\"https://www.google.com/recaptcha/api.js?render={{recaptcha_public}}\"></script>
    <script>
        grecaptcha.ready(function () {
            grecaptcha.execute('{{recaptcha_public}}', { action: 'login' }).then(function (token) {
                var recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
            });
        });
    </script>
    
  {% block javascripts %}
  {% endblock %}
  
</body>

</html>
", "admin/security/base.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/security/base.html.twig");
    }
}
