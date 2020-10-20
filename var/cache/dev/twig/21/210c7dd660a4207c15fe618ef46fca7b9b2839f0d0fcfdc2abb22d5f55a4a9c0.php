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

/* admin/components/shortcuts.html.twig */
class __TwigTemplate_c37f8bac689e9e66cba10e96d54fdc5e3ba0249447a4837bcc3255fc8d0bb403 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/shortcuts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/shortcuts.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"ni ni-ungroup\"></i>
      </a>
      <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right\">
        <div class=\"row shortcuts px-4\">
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-red\">
              <i class=\"ni ni-calendar-grid-58\"></i>
            </span>
            <small>Calendrier</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-orange\">
              <i class=\"ni ni-email-83\"></i>
            </span>
            <small>Communication</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-info\">
              <i class=\"ni ni-credit-card\"></i>
            </span>
            <small>Tableau de bord</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-green\">
              <i class=\"ni ni-books\"></i>
            </span>
            <small>Cotisation</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-purple\">
              <i class=\"ni ni-pin-3\"></i>
            </span>
            <small>Documents</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-yellow\">
              <i class=\"ni ni-basket\"></i>
            </span>
            <small>Boutique</small>
          </a>
        </div>
      </div>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/components/shortcuts.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <i class=\"ni ni-ungroup\"></i>
      </a>
      <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right\">
        <div class=\"row shortcuts px-4\">
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-red\">
              <i class=\"ni ni-calendar-grid-58\"></i>
            </span>
            <small>Calendrier</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-orange\">
              <i class=\"ni ni-email-83\"></i>
            </span>
            <small>Communication</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-info\">
              <i class=\"ni ni-credit-card\"></i>
            </span>
            <small>Tableau de bord</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-green\">
              <i class=\"ni ni-books\"></i>
            </span>
            <small>Cotisation</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-purple\">
              <i class=\"ni ni-pin-3\"></i>
            </span>
            <small>Documents</small>
          </a>
          <a href=\"#!\" class=\"col-4 shortcut-item\">
            <span class=\"shortcut-media avatar rounded-circle bg-gradient-yellow\">
              <i class=\"ni ni-basket\"></i>
            </span>
            <small>Boutique</small>
          </a>
        </div>
      </div>
</li>", "admin/components/shortcuts.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/components/shortcuts.html.twig");
    }
}
