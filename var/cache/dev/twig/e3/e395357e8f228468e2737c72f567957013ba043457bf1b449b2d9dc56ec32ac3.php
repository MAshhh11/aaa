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

/* admin/components/notifications.html.twig */
class __TwigTemplate_0f621b37abf1b1e132e8bcc6a277f9de9044a0286bc70c4f97b7dd03d787b4fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/notifications.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
  <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <i class=\"ni ni-bell-55\"></i>
  </a>      
<div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden\">
<!-- Dropdown header -->
<div class=\"px-3 py-3\">
  <h6 class=\"text-sm text-muted m-0\">Vous avez <strong class=\"text-primary\">13</strong> notifications.</h6>
</div>
<!-- List group -->
<div class=\"list-group list-group-flush\">
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-icon.png"), "html", null, true);
        echo "\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-icon.png"), "html", null, true);
        echo "\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle communication</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-icon.png"), "html", null, true);
        echo "\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-icon.png"), "html", null, true);
        echo "\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/user-icon.png"), "html", null, true);
        echo "\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
</div>

<!-- View all -->
<a href=\"#!\" class=\"dropdown-item text-center text-primary font-weight-bold py-3\">Consulter toutes les notifications</a>
</div>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/components/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 92,  126 => 73,  104 => 54,  82 => 35,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item dropdown\">
  <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    <i class=\"ni ni-bell-55\"></i>
  </a>      
<div class=\"dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden\">
<!-- Dropdown header -->
<div class=\"px-3 py-3\">
  <h6 class=\"text-sm text-muted m-0\">Vous avez <strong class=\"text-primary\">13</strong> notifications.</h6>
</div>
<!-- List group -->
<div class=\"list-group list-group-flush\">
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"{{ asset('assets/img/user-icon.png') }}\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"{{ asset('assets/img/user-icon.png') }}\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle communication</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"{{ asset('assets/img/user-icon.png') }}\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"{{ asset('assets/img/user-icon.png') }}\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
  <a href=\"#!\" class=\"list-group-item list-group-item-action\">
    <div class=\"row align-items-center\">
      <div class=\"col-auto\">
        <!-- Avatar -->
        <img alt=\"Image placeholder\" src=\"{{ asset('assets/img/user-icon.png') }}\" class=\"avatar rounded-circle\">
      </div>
      <div class=\"col ml--2\">
        <div class=\"d-flex justify-content-between align-items-center\">
          <div>
            <h4 class=\"mb-0 text-sm\">Nina Dupat</h4>
          </div>
          <div class=\"text-right text-muted\">
            <small>12/04/2020 10:30</small>
          </div>
        </div>
        <p class=\"text-sm mb-0\">Nouvelle commande sur la boutique</p>
      </div>
    </div>
  </a>
</div>

<!-- View all -->
<a href=\"#!\" class=\"dropdown-item text-center text-primary font-weight-bold py-3\">Consulter toutes les notifications</a>
</div>
</li>", "admin/components/notifications.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/components/notifications.html.twig");
    }
}
