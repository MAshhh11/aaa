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

/* admin/components/sidebar.html.twig */
class __TwigTemplate_924a3b71d4b8e50d50c0a553bbf37f5109ae41eb382a3734ac939a1440509328 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/sidebar.html.twig"));

        // line 1
        echo "<nav class=\"sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white\" id=\"sidenav-main\">
  <div class=\"scrollbar-inner\">
    <div class=\"sidenav-header d-flex align-items-top\">
      <a class=\"navbar-brand\" href=\"#\">
        <img style=\"max-height: 100% !important;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "img/front/logo.png\" class=\"navbar-brand-img\" alt=\"AAA\">
      </a>
      <div class=\"ml-auto\">
        <div class=\"sidenav-toggler d-none d-xl-block\" data-action=\"sidenav-unpin\" data-target=\"#sidenav-main\">
          <div class=\"sidenav-toggler-inner\">
            <i class=\"sidenav-toggler-line\"></i>
            <i class=\"sidenav-toggler-line\"></i>
            <i class=\"sidenav-toggler-line\"></i>
          </div>
        </div>
      </div>
    </div>
    <div class=\"navbar-inner\">

      <div class=\"collapse navbar-collapse\" id=\"sidenav-collapse-main\">

          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link ";
        // line 23
        if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 23, $this->source); })()), "dashboard"))) {
            echo "active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home");
        echo "\">
                <i class=\"fas fa-home text-blue\"></i>
                <span class=\"nav-link-text\">Tableau de bord</span>
              </a>
            </li>
              ";
        // line 28
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && 0 === twig_compare($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"), false))) {
            // line 29
            echo "                  <li class=\"nav-item\">
                  ";
            // line 30
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 30), "formationUsers", [], "any", true, true, false, 30) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "formationUsers", [], "any", false, false, false, 30))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "formationUsers", [], "any", false, false, false, 30)))) {
                // line 31
                echo "                          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "formationUsers", [], "any", false, false, false, 31));
                foreach ($context['_seq'] as $context["_key"] => $context["formationUser"]) {
                    // line 32
                    echo "                          <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_course_index", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formationUser"], "formation", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32)]), "html", null, true);
                    echo "\" class=\"nav-link  ";
                    if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 32, $this->source); })()), ("student_course_" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formationUser"], "formation", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32))))) {
                        echo "active";
                    }
                    echo "\" role=\"button\" aria-expanded=\"";
                    if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 32, $this->source); })()), "exercices"))) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                    echo "\" aria-controls=\"navbar-forms\">
                              <i class=\"fas fa-graduation-cap text-blue\"></i>
                              <span class=\"nav-link-text\">";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["formationUser"], "formation", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
                    echo "</span>
                          </a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formationUser'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                  ";
            } else {
                // line 38
                echo "                      <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_choice");
                echo "\" class=\"nav-link ";
                if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 38, $this->source); })()), "formation_choice"))) {
                    echo "active";
                }
                echo "\" role=\"button\" aria-expanded=\"";
                if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 38, $this->source); })()), "exercices"))) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-graduation-cap text-blue\"></i>
                          <span class=\"nav-link-text\">Formations</span>
                      </a>
                  ";
            }
            // line 43
            echo "                  </li>
              ";
        }
        // line 45
        echo "
              ";
        // line 46
        if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 46), "formationUsers", [], "any", true, true, false, 46)) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "formationUsers", [], "any", false, false, false, 46))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "formationUsers", [], "any", false, false, false, 46)))) {
            // line 47
            echo "                  <li class=\"nav-item\">
                      <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 48, $this->source); })()), "technical_documents"))) {
                echo "active";
            }
            echo "\" role=\"button\" aria-expanded=\"";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 48, $this->source); })()), "exercices"))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-drafting-compass text-blue\"></i>
                          <span class=\"nav-link-text\">Documents Techniques</span>
                      </a>
                  </li>
              ";
        }
        // line 54
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 55
            echo "                  <li class=\"nav-item\">
                      <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 56, $this->source); })()), "technical_documents"))) {
                echo "active";
            }
            echo "\" role=\"button\" aria-expanded=\"";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 56, $this->source); })()), "exercices"))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-drafting-compass text-blue\"></i>
                          <span class=\"nav-link-text\">Documents Techniques</span>
                      </a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link ";
            // line 62
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 62, $this->source); })()), "correction"))) {
                echo "active";
            }
            echo "\" href=\"#menu-correction\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 62, $this->source); })()), "correction"))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-users-cog text-blue\"></i>
                          <span class=\"nav-link-text\">Suivi Etudiants</span>
                      </a>
                      <div class=\"collapse ";
            // line 66
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 66, $this->source); })()), "correction"))) {
                echo "show";
            }
            echo "\" id=\"menu-correction\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 69
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("correction_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 69, $this->source); })()), "correction_user"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> E </span>
                                      <span class=\"sidenav-normal\"> Exercices à corriger </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse ";
            // line 76
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 76, $this->source); })()), "correction"))) {
                echo "show";
            }
            echo "\" id=\"menu-correction\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 79, $this->source); })()), "correction_message"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> M </span>
                                      <span class=\"sidenav-normal\"> Messages en attente </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
";
            // line 96
            echo "                  </li>
              ";
        }
        // line 98
        echo "            
            ";
        // line 99
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 100
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link ";
            // line 101
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 101, $this->source); })()), "administration"))) {
                echo "active";
            }
            echo "\" href=\"#menu-secretariat\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 101, $this->source); })()), "secretary"))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"navbar-forms\">
                <i class=\"fas fa-users-cog text-blue\"></i>
                <span class=\"nav-link-text\">Administration</span>
              </a>
              <div class=\"collapse ";
            // line 105
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 105, $this->source); })()), "administration"))) {
                echo "show";
            }
            echo "\" id=\"menu-secretariat\">
                <ul class=\"nav nav-sm flex-column\">
                  <li class=\"nav-item\">
                    <a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 108, $this->source); })()), "administration_user"))) {
                echo "active";
            }
            echo "\">
                      <span class=\"sidenav-mini-icon\"> E </span>
                      <span class=\"sidenav-normal\"> Etudiants </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            ";
        }
        // line 117
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 118
            echo "                  <li class=\"nav-item\">
                      <a class=\"nav-link ";
            // line 119
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 119, $this->source); })()), "formations"))) {
                echo "active";
            }
            echo "\" href=\"#menu-formations\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 119, $this->source); })()), "formations"))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-graduation-cap text-blue\"></i>
                          <span class=\"nav-link-text\">Gestion des formations</span>
                      </a>
                      <div class=\"collapse ";
            // line 123
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 123, $this->source); })()), "formations"))) {
                echo "show";
            }
            echo "\" id=\"menu-formations\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 126, $this->source); })()), "formations_formation"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> F </span>
                                      <span class=\"sidenav-normal\"> Formations </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse ";
            // line 133
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 133, $this->source); })()), "formations"))) {
                echo "show";
            }
            echo "\" id=\"menu-formations\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 136
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("course_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 136, $this->source); })()), "formations_course"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> C </span>
                                      <span class=\"sidenav-normal\"> Cours </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse ";
            // line 143
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 143, $this->source); })()), "formations"))) {
                echo "show";
            }
            echo "\" id=\"menu-formations\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 146
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exercice_index");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 146, $this->source); })()), "formations_exercice"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> E </span>
                                      <span class=\"sidenav-normal\"> Exercices </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </li>
              ";
        }
        // line 155
        echo "              ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 156
            echo "                  <li class=\"nav-item\">
                      <a class=\"nav-link ";
            // line 157
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 157, $this->source); })()), "website_admin"))) {
                echo "active";
            }
            echo "\" href=\"#menu-website_admin\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"";
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 157, $this->source); })()), "website_admin"))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-drafting-compass text-blue\"></i>
                          <span class=\"nav-link-text\">Gestion du site</span>
                      </a>
                      <div class=\"collapse ";
            // line 161
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 161, $this->source); })()), "website_admin"))) {
                echo "show";
            }
            echo "\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 164
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website_admin_figure");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 164, $this->source); })()), "website_admin_figure"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> C </span>
                                      <span class=\"sidenav-normal\">Chiffres Clés</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse ";
            // line 171
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 171, $this->source); })()), "website_admin"))) {
                echo "show";
            }
            echo "\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 174
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website_admin_article");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 174, $this->source); })()), "website_admin_article"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> A </span>
                                      <span class=\"sidenav-normal\">Articles</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse ";
            // line 181
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 181, $this->source); })()), "website_admin"))) {
                echo "show";
            }
            echo "\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 184
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website_admin_video");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 184, $this->source); })()), "website_admin_video"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> V </span>
                                      <span class=\"sidenav-normal\">Vidéo de présentation</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse ";
            // line 191
            if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 191, $this->source); })()), "website_admin"))) {
                echo "show";
            }
            echo "\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"";
            // line 194
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website_admin_storage");
            echo "\" class=\"nav-link ";
            if (((isset($context["submenu"]) || array_key_exists("submenu", $context)) && 0 === twig_compare((isset($context["submenu"]) || array_key_exists("submenu", $context) ? $context["submenu"] : (function () { throw new RuntimeError('Variable "submenu" does not exist.', 194, $this->source); })()), "website_admin_storage"))) {
                echo "active";
            }
            echo "\">
                                      <span class=\"sidenav-mini-icon\"> E </span>
                                      <span class=\"sidenav-normal\">Espace de stockage</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </li>
              ";
        }
        // line 203
        echo "          </ul>

        ";
        // line 205
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ALLOWED_TO_SWITCH") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN"))) {
            // line 206
            echo "        <hr class=\"my-1\">
        <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    ";
            // line 209
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 210
                echo "                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_home", ["_switch_user" => "_exit"]);
                echo "\"  class=\"nav-link\">
                            <i class=\"fas fa-sign-out-alt  text-blue\"></i> Quitter Switch mode
                        </a>
                    ";
            } else {
                // line 214
                echo "                        <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("switch_home");
                echo "\" class=\"nav-link ";
                if (((isset($context["menu"]) || array_key_exists("menu", $context)) && 0 === twig_compare((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 214, $this->source); })()), "switch"))) {
                    echo "active";
                }
                echo "\">
                            <i class=\"fas fa-user-friends  text-blue\"></i> <span class=\"nav-link-text\">Switch mode</span>
                        </a>
                    ";
            }
            // line 218
            echo "                </li>
            </ul>
            ";
        }
        // line 221
        echo "
      </div>
    </div>
  </div>
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/components/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 221,  540 => 218,  528 => 214,  520 => 210,  518 => 209,  513 => 206,  511 => 205,  507 => 203,  491 => 194,  483 => 191,  469 => 184,  461 => 181,  447 => 174,  439 => 171,  425 => 164,  417 => 161,  402 => 157,  399 => 156,  396 => 155,  380 => 146,  372 => 143,  358 => 136,  350 => 133,  336 => 126,  328 => 123,  313 => 119,  310 => 118,  307 => 117,  291 => 108,  283 => 105,  268 => 101,  265 => 100,  263 => 99,  260 => 98,  256 => 96,  242 => 79,  234 => 76,  220 => 69,  212 => 66,  197 => 62,  178 => 56,  175 => 55,  172 => 54,  153 => 48,  150 => 47,  148 => 46,  145 => 45,  141 => 43,  122 => 38,  119 => 37,  110 => 34,  94 => 32,  89 => 31,  87 => 30,  84 => 29,  82 => 28,  70 => 23,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white\" id=\"sidenav-main\">
  <div class=\"scrollbar-inner\">
    <div class=\"sidenav-header d-flex align-items-top\">
      <a class=\"navbar-brand\" href=\"#\">
        <img style=\"max-height: 100% !important;\" src=\"{{ asset('assets/') }}img/front/logo.png\" class=\"navbar-brand-img\" alt=\"AAA\">
      </a>
      <div class=\"ml-auto\">
        <div class=\"sidenav-toggler d-none d-xl-block\" data-action=\"sidenav-unpin\" data-target=\"#sidenav-main\">
          <div class=\"sidenav-toggler-inner\">
            <i class=\"sidenav-toggler-line\"></i>
            <i class=\"sidenav-toggler-line\"></i>
            <i class=\"sidenav-toggler-line\"></i>
          </div>
        </div>
      </div>
    </div>
    <div class=\"navbar-inner\">

      <div class=\"collapse navbar-collapse\" id=\"sidenav-collapse-main\">

          <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
              <a class=\"nav-link {% if menu is defined and menu == \"dashboard\" %}active{% endif %}\" href=\"{{path('dashboard_home')}}\">
                <i class=\"fas fa-home text-blue\"></i>
                <span class=\"nav-link-text\">Tableau de bord</span>
              </a>
            </li>
              {% if is_granted('ROLE_USER') and is_granted('ROLE_ADMIN') == false %}
                  <li class=\"nav-item\">
                  {% if app.user.formationUsers is defined and app.user.formationUsers is not null  and app.user.formationUsers is not empty %}
                          {% for formationUser in app.user.formationUsers %}
                          <a href=\"{{ path('student_course_index' ,{id: formationUser.formation.id}) }}\" class=\"nav-link  {% if submenu is defined and submenu == \"student_course_\"~formationUser.formation.id %}active{% endif %}\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"exercices\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                              <i class=\"fas fa-graduation-cap text-blue\"></i>
                              <span class=\"nav-link-text\">{{ formationUser.formation.title }}</span>
                          </a>
                        {% endfor %}
                  {% else %}
                      <a href=\"{{ path('formation_choice') }}\" class=\"nav-link {% if menu is defined and menu == \"formation_choice\" %}active{% endif %}\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"exercices\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-graduation-cap text-blue\"></i>
                          <span class=\"nav-link-text\">Formations</span>
                      </a>
                  {% endif %}
                  </li>
              {% endif %}

              {% if is_granted('ROLE_USER') and app.user.formationUsers is defined and app.user.formationUsers is not null and app.user.formationUsers is not empty %}
                  <li class=\"nav-item\">
                      <a href=\"{{ path('technical_doc_index') }}\" class=\"nav-link {% if menu is defined and menu == \"technical_documents\" %}active{% endif %}\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"exercices\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-drafting-compass text-blue\"></i>
                          <span class=\"nav-link-text\">Documents Techniques</span>
                      </a>
                  </li>
              {% endif %}
              {% if is_granted('ROLE_ADMIN')  %}
                  <li class=\"nav-item\">
                      <a href=\"{{ path('technical_doc_index') }}\" class=\"nav-link {% if menu is defined and menu == \"technical_documents\" %}active{% endif %}\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"exercices\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-drafting-compass text-blue\"></i>
                          <span class=\"nav-link-text\">Documents Techniques</span>
                      </a>
                  </li>
                  <li class=\"nav-item\">
                      <a class=\"nav-link {% if menu is defined and menu == \"correction\" %}active{% endif %}\" href=\"#menu-correction\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"correction\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-users-cog text-blue\"></i>
                          <span class=\"nav-link-text\">Suivi Etudiants</span>
                      </a>
                      <div class=\"collapse {% if menu is defined and menu == \"correction\" %}show{% endif %}\" id=\"menu-correction\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('correction_index') }}\" class=\"nav-link {% if submenu is defined and submenu == \"correction_user\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> E </span>
                                      <span class=\"sidenav-normal\"> Exercices à corriger </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse {% if menu is defined and menu == \"correction\" %}show{% endif %}\" id=\"menu-correction\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('message_index') }}\" class=\"nav-link {% if submenu is defined and submenu == \"correction_message\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> M </span>
                                      <span class=\"sidenav-normal\"> Messages en attente </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
{#                      <div class=\"collapse {% if menu is defined and menu == \"correction\" %}show{% endif %}\" id=\"menu-correction\">#}
{#                          <ul class=\"nav nav-sm flex-column\">#}
{#                              <li class=\"nav-item\">#}
{#                                  <a href=\"{{ path('correction_index') }}\" class=\"nav-link {% if submenu is defined and submenu == \"correction_user\" %}active{% endif %}\">#}
{#                                      <span class=\"sidenav-mini-icon\"> E </span>#}
{#                                      <span class=\"sidenav-normal\"> Tous les exercices </span>#}
{#                                  </a>#}
{#                              </li>#}
{#                          </ul>#}
{#                      </div>#}
                  </li>
              {% endif %}
            
            {% if is_granted('ROLE_ADMIN')  %}
            <li class=\"nav-item\">
              <a class=\"nav-link {% if menu is defined and menu == \"administration\" %}active{% endif %}\" href=\"#menu-secretariat\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"secretary\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                <i class=\"fas fa-users-cog text-blue\"></i>
                <span class=\"nav-link-text\">Administration</span>
              </a>
              <div class=\"collapse {% if menu is defined and menu == \"administration\" %}show{% endif %}\" id=\"menu-secretariat\">
                <ul class=\"nav nav-sm flex-column\">
                  <li class=\"nav-item\">
                    <a href=\"{{ path('user_index') }}\" class=\"nav-link {% if submenu is defined and submenu == \"administration_user\" %}active{% endif %}\">
                      <span class=\"sidenav-mini-icon\"> E </span>
                      <span class=\"sidenav-normal\"> Etudiants </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            {% endif %}
              {% if is_granted('ROLE_ADMIN')  %}
                  <li class=\"nav-item\">
                      <a class=\"nav-link {% if menu is defined and menu == \"formations\" %}active{% endif %}\" href=\"#menu-formations\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"formations\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-graduation-cap text-blue\"></i>
                          <span class=\"nav-link-text\">Gestion des formations</span>
                      </a>
                      <div class=\"collapse {% if menu is defined and menu == \"formations\" %}show{% endif %}\" id=\"menu-formations\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('formation_index') }}\" class=\"nav-link {% if submenu is defined and submenu == \"formations_formation\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> F </span>
                                      <span class=\"sidenav-normal\"> Formations </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse {% if menu is defined and menu == \"formations\" %}show{% endif %}\" id=\"menu-formations\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('course_index') }}\" class=\"nav-link {% if submenu is defined and submenu == \"formations_course\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> C </span>
                                      <span class=\"sidenav-normal\"> Cours </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse {% if menu is defined and menu == \"formations\" %}show{% endif %}\" id=\"menu-formations\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('exercice_index') }}\" class=\"nav-link {% if submenu is defined and submenu == \"formations_exercice\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> E </span>
                                      <span class=\"sidenav-normal\"> Exercices </span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </li>
              {% endif %}
              {% if is_granted('ROLE_ADMIN')  %}
                  <li class=\"nav-item\">
                      <a class=\"nav-link {% if menu is defined and menu == \"website_admin\" %}active{% endif %}\" href=\"#menu-website_admin\" data-toggle=\"collapse\" role=\"button\" aria-expanded=\"{% if menu is defined and menu == \"website_admin\" %}true{% else %}false{% endif %}\" aria-controls=\"navbar-forms\">
                          <i class=\"fas fa-drafting-compass text-blue\"></i>
                          <span class=\"nav-link-text\">Gestion du site</span>
                      </a>
                      <div class=\"collapse {% if menu is defined and menu == \"website_admin\" %}show{% endif %}\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('website_admin_figure') }}\" class=\"nav-link {% if submenu is defined and submenu == \"website_admin_figure\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> C </span>
                                      <span class=\"sidenav-normal\">Chiffres Clés</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse {% if menu is defined and menu == \"website_admin\" %}show{% endif %}\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('website_admin_article') }}\" class=\"nav-link {% if submenu is defined and submenu == \"website_admin_article\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> A </span>
                                      <span class=\"sidenav-normal\">Articles</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse {% if menu is defined and menu == \"website_admin\" %}show{% endif %}\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('website_admin_video') }}\" class=\"nav-link {% if submenu is defined and submenu == \"website_admin_video\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> V </span>
                                      <span class=\"sidenav-normal\">Vidéo de présentation</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class=\"collapse {% if menu is defined and menu == \"website_admin\" %}show{% endif %}\" id=\"menu-website_admin\">
                          <ul class=\"nav nav-sm flex-column\">
                              <li class=\"nav-item\">
                                  <a href=\"{{ path('website_admin_storage') }}\" class=\"nav-link {% if submenu is defined and submenu == \"website_admin_storage\" %}active{% endif %}\">
                                      <span class=\"sidenav-mini-icon\"> E </span>
                                      <span class=\"sidenav-normal\">Espace de stockage</span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </li>
              {% endif %}
          </ul>

        {% if is_granted('ROLE_ALLOWED_TO_SWITCH') or is_granted('ROLE_PREVIOUS_ADMIN')  %}
        <hr class=\"my-1\">
        <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    {% if is_granted('ROLE_PREVIOUS_ADMIN') %}
                        <a href=\"{{ path('dashboard_home', {'_switch_user': '_exit'}) }}\"  class=\"nav-link\">
                            <i class=\"fas fa-sign-out-alt  text-blue\"></i> Quitter Switch mode
                        </a>
                    {% else %}
                        <a href=\"{{ path(\"switch_home\")}}\" class=\"nav-link {% if menu is defined and menu == \"switch\" %}active{% endif %}\">
                            <i class=\"fas fa-user-friends  text-blue\"></i> <span class=\"nav-link-text\">Switch mode</span>
                        </a>
                    {% endif %}
                </li>
            </ul>
            {% endif %}

      </div>
    </div>
  </div>
</nav>
", "admin/components/sidebar.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/components/sidebar.html.twig");
    }
}
