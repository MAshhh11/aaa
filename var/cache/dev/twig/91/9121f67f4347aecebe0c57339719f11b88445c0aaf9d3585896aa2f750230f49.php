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

/* admin/components/header.html.twig */
class __TwigTemplate_ef9d3066a99432da95c0e42ee1e9381f0d01c3d806f26120b6afbb6a5cf7e831 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-top navbar-expand navbar-dark bg-gradient-primary border-bottom\">
  <div class=\"container-fluid\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <!-- Brand -->
      <span class=\"h4 mb-0 text-white d-none d-lg-inline-block\">
      L'Animateur Autodidacte Accompagné
      </span>
      <ul class=\"navbar-nav align-items-center  ml-md-auto \">
            <li class=\"nav-item d-xl-none\">
              <!-- Sidenav toggler -->
              <div class=\"pr-3 sidenav-toggler sidenav-toggler-dark active\" data-action=\"sidenav-pin\" data-target=\"#sidenav-main\">
                <div class=\"sidenav-toggler-inner\">
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                </div>
              </div>
            </li>
            
            ";
        // line 20
        echo "        
            ";
        // line 21
        echo "    
    </ul>
      
      <ul class=\"navbar-nav align-items-center d-none d-md-flex\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <div class=\"media align-items-center\">
              <span class=\"avatar avatar-sm rounded-circle\">
                      ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "avatar", [], "any", false, false, false, 29)) {
            // line 30
            echo "                            <img alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "firstname", [], "any", false, false, false, 30), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "lastname", [], "any", false, false, false, 30), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "avatar", [], "any", false, false, false, 30))), "html", null, true);
            echo "\">
                      ";
        } else {
            // line 32
            echo "                            <img alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "firstname", [], "any", false, false, false, 32), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "lastname", [], "any", false, false, false, 32), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-icon.png"), "html", null, true);
            echo "\">
                      ";
        }
        // line 34
        echo "              </span>
              <div class=\"media-body ml-2 d-none d-lg-block\">
                <span class=\"mb-0 text-sm  font-weight-bold\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "firstname", [], "any", false, false, false, 36), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "lastname", [], "any", false, false, false, 36), "html", null, true);
        echo "</span>
              </div>
            </div>
          </a>
          <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
            <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" class=\"dropdown-item\">
              <i class=\"far fa-user\"></i>
              <span>Profil</span>
            </a>
            <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
        echo "\" class=\"dropdown-item\">
              <i class=\"ni ni-user-run\"></i>
              <span>Déconnexion</span>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/components/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  113 => 41,  103 => 36,  99 => 34,  89 => 32,  79 => 30,  77 => 29,  67 => 21,  64 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-top navbar-expand navbar-dark bg-gradient-primary border-bottom\">
  <div class=\"container-fluid\">
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
      <!-- Brand -->
      <span class=\"h4 mb-0 text-white d-none d-lg-inline-block\">
      L'Animateur Autodidacte Accompagné
      </span>
      <ul class=\"navbar-nav align-items-center  ml-md-auto \">
            <li class=\"nav-item d-xl-none\">
              <!-- Sidenav toggler -->
              <div class=\"pr-3 sidenav-toggler sidenav-toggler-dark active\" data-action=\"sidenav-pin\" data-target=\"#sidenav-main\">
                <div class=\"sidenav-toggler-inner\">
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                  <i class=\"sidenav-toggler-line\"></i>
                </div>
              </div>
            </li>
            
            {#% include 'components/notifications.html.twig' %#}        
            {#% include 'components/shortcuts.html.twig' %#}    
    </ul>
      
      <ul class=\"navbar-nav align-items-center d-none d-md-flex\">
        <li class=\"nav-item dropdown\">
          <a class=\"nav-link pr-0\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <div class=\"media align-items-center\">
              <span class=\"avatar avatar-sm rounded-circle\">
                      {% if app.user.avatar %}
                            <img alt=\"{{app.user.firstname}} {{app.user.lastname}}\" src=\"{{ asset(\"uploads/users/avatars/\"~app.user.avatar) }}\">
                      {% else %}
                            <img alt=\"{{app.user.firstname}} {{app.user.lastname}}\" src=\"{{ asset('assets/img/user-icon.png') }}\">
                      {% endif %}
              </span>
              <div class=\"media-body ml-2 d-none d-lg-block\">
                <span class=\"mb-0 text-sm  font-weight-bold\">{{app.user.firstname}} {{app.user.lastname}}</span>
              </div>
            </div>
          </a>
          <div class=\"dropdown-menu dropdown-menu-arrow dropdown-menu-right\">
            <a href=\"{{ path('profile')}}\" class=\"dropdown-item\">
              <i class=\"far fa-user\"></i>
              <span>Profil</span>
            </a>
            <a href=\"{{ url('app_logout')}}\" class=\"dropdown-item\">
              <i class=\"ni ni-user-run\"></i>
              <span>Déconnexion</span>
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
", "admin/components/header.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/components/header.html.twig");
    }
}
