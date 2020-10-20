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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_686f12aff981176c2cb7e66c1d300bf1cf98b2dba363c8481fd101a52f8a5dde extends Template
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
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        // line 3
        $context["menu"] = "dashboard";
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 7
            echo "    <div class=\"container-fluid mt-3\" id=\"dashboardContainer\">
      <div class=\"row m-auto\">
          <div class=\"col-lg-12 d-flex flex-column justify-content-center\">
              <div class=\"col-12 col-lg-6 d-flex flex-column justify-content-center m-auto\">
                <div class=\"row\">
                <div class=\"col-xl-12 col-md-12\">
                  <div class=\"card card-stats\">
                    <!-- Card body -->
                    <div class=\"card-body\">
                      <div class=\"row\">
                        <div class=\"col\">
                          <h5 class=\"card-title text-uppercase text-muted mb-0\">Bienvenue</h5>
                          <span class=\"subtitle h2 font-weight-bold mb-0\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "firstname", [], "any", false, false, false, 19), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "lastname", [], "any", false, false, false, 19), "html", null, true);
            echo "</span>
                        </div>
                        <div class=\"col-auto\">
                          <div class=\"picto icon icon-shape bg-gradient-orange text-white rounded-circle shadow\">
                            <i class=\"fa fa-smile\"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6\">
                </div>
              </div>
                <div class=\"row\">
                    <div class=\"col-12 col-lg-6\">
                        <div class=\"row\">
                            <a href=\"";
            // line 36
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
            echo "\" class=\"w-100\">
                                <div class=\"col-xl-12 col-md-12\">
                                    <div class=\"card card-stats\">
                                        <!-- Card body -->
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\"> Messages en attente</span>
                                                </div>
                                                <div class=\"col-auto\">
                                                    <div class=\"picto icon icon-shape bg-light-blue text-white rounded-circle shadow font-weight-bold\">
                                                        ";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["messagesCount"]) || array_key_exists("messagesCount", $context) ? $context["messagesCount"] : (function () { throw new RuntimeError('Variable "messagesCount" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"row\">
                            <a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("correction_index");
            echo "\" class=\"w-100\">
                                <div class=\"col-xl-12 col-md-12\">
                                    <div class=\"card card-stats\">
                                        <!-- Card body -->
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\"> Exercices à corriger</span>
                                                </div>
                                                <div class=\"col-auto\">
                                                    <div class=\"picto icon icon-shape bg-light-blue text-white rounded-circle shadow font-weight-bold\">
                                                        ";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["exercicesCount"]) || array_key_exists("exercicesCount", $context) ? $context["exercicesCount"] : (function () { throw new RuntimeError('Variable "exercicesCount" does not exist.', 71, $this->source); })()), "html", null, true);
            echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
              <div class=\"col-lg-6 d-flex flex-row px-0 m-auto\">
                  <div class=\"col-lg-6\">
                          <div class=\"row h-100\">
                              <div class=\"col-xl-12 col-md-12 h-100\">
                                  <div class=\"card card-stats h-100\">
                                      <!-- Card body -->
                                      <div class=\"card-body d-flex align-items-center justify-content-center\">
                                          <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                              <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                                  <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow d-flex justify-content-center align-items-center\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                      <span class=\"h2 font-weight-bold mb-0 text-white\"> ";
            // line 93
            echo twig_escape_filter($this->env, (isset($context["studentsCount"]) || array_key_exists("studentsCount", $context) ? $context["studentsCount"] : (function () { throw new RuntimeError('Variable "studentsCount" does not exist.', 93, $this->source); })()), "html", null, true);
            echo "</span>
                                                  </div>
                                              </div>
                                              <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                                  <span class=\"subtitle h2 font-weight-bold mb-0\">Elèves en formation</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class=\"col-lg-6\">
                              </div>
                          </div>
                      </div>
                  <div class=\"col-lg-6\">
                          <div class=\"row h-100\">
                              <div class=\"col-xl-12 col-md-12 h-100\">
                                  <div class=\"card card-stats h-100\">
                                      <!-- Card body -->
                                      <div class=\"card-body d-flex align-items-center justify-content-center\">
                                      <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                          <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                              <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow d-flex justify-content-center align-items-center\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                  <span class=\"h2 font-weight-bold mb-0 text-white\"> ";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["students"]) || array_key_exists("students", $context) ? $context["students"] : (function () { throw new RuntimeError('Variable "students" does not exist.', 116, $this->source); })()), "html", null, true);
            echo "</span>
                                              </div>
                                          </div>
                                          <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                              <span class=\"subtitle h2 font-weight-bold mb-0\">Elèves Inscrits</span>
                                          </div>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                              <div class=\"col-lg-6\">
                              </div>
                          </div>
                      </div>
              </div>
          </div>
      </div>
    </div>
    ";
        } else {
            // line 135
            echo "        <div class=\"container-fluid mt-3\" id=\"dashboardContainer\">
            <div class=\"row m-auto\">
                <div class=\"col-lg-12 d-flex flex-column justify-content-center\">
                    <div class=\"col-lg-6 d-flex flex-column justify-content-center m-auto\">
                        <div class=\"row\">
                            <div class=\"col-md-12 ";
            // line 140
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 140), "formationUsers", [], "any", true, true, false, 140) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "formationUsers", [], "any", false, false, false, 140))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "formationUsers", [], "any", false, false, false, 140)))) {
                echo "col-lg-6";
            } else {
                echo " col-lg-12";
            }
            echo " \">
                                <div class=\"card card-stats\">
                                    <!-- Card body -->
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Bienvenue</h5>
                                                <span class=\"subtitle h2 font-weight-bold mb-0\">";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "firstname", [], "any", false, false, false, 147), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "lastname", [], "any", false, false, false, 147), "html", null, true);
            echo "</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow\">
                                                    <i class=\"fa fa-smile\"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ";
            // line 158
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 158), "formationUsers", [], "any", true, true, false, 158) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "formationUsers", [], "any", false, false, false, 158))) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "formationUsers", [], "any", false, false, false, 158)))) {
                // line 159
                echo "                            <div class=\"col-lg-6 col-md-12\">
                                <div class=\"row\">
                                    <a href=\"";
                // line 161
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("message_index");
                echo "\" class=\"w-100\">
                                        <div class=\"col-xl-12 col-md-12\">
                                            <div class=\"card card-stats\">
                                                <!-- Card body -->
                                                <div class=\"card-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col d-flex align-items-center\">
                                                            <span class=\"subtitle h2 font-weight-bold mb-0\"> Messages en attente</span>
                                                        </div>
                                                        <div class=\"col-auto\">
                                                            <div class=\"picto icon icon-shape bg-light-blue text-white rounded-circle shadow font-weight-bold\">
                                                                ";
                // line 172
                echo twig_escape_filter($this->env, (isset($context["messagesCount"]) || array_key_exists("messagesCount", $context) ? $context["messagesCount"] : (function () { throw new RuntimeError('Variable "messagesCount" does not exist.', 172, $this->source); })()), "html", null, true);
                echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            ";
            }
            // line 183
            echo "                        </div>
                    </div>
                    ";
            // line 185
            if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 185), "formationUsers", [], "any", true, true, false, 185) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "formationUsers", [], "any", false, false, false, 185))) && 0 !== twig_compare((isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 185, $this->source); })()), false)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "formationUsers", [], "any", false, false, false, 185)))) {
                // line 186
                echo "                    <div class=\"col-lg-6 d-flex flex-row px-0 m-auto\">
                        <div class=\"col-lg-6\">
                            <div class=\"row h-100\">
                                <div class=\"col-xl-12 col-md-12 h-100\">
                                    <div class=\"card card-stats h-100\">
                                        <!-- Card body -->
                                        <div class=\"card-body d-flex align-items-center justify-content-center\">
                                            <a href=\"";
                // line 193
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("student_course_index", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193)]), "html", null, true);
                echo "\">
                                            <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                                    <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow d-flex justify-content-center align-items-center\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                        <i class=\"fas fa-pencil-alt\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\">Ma Formation</span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"row h-100\">
                                <div class=\"col-xl-12 col-md-12 h-100\">
                                    <div class=\"card card-stats h-100\">
                                        <!-- Card body -->
                                        <div class=\"card-body bg-white d-flex align-items-center justify-content-center\">
                                            <a href=\"";
                // line 218
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("technical_doc_index");
                echo "\">
                                            <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                                    <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                        <i class=\"fa fa-book-open\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\">Documents Techniques</span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
            } else {
                // line 239
                echo "                        <div class=\"col-lg-6 d-flex flex-row px-0 m-auto\">
                            <div class=\"col-lg-12\">
                                <div class=\"row h-100\">
                                    <div class=\"col-xl-12 col-md-12 h-100\">
                                        <div class=\"card card-stats h-100\">
                                            <!-- Card body -->
                                            <div class=\"card-body d-flex align-items-center justify-content-center\">
                                                <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                                    <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4\">
                                                        <h2 class=\"font-weight-bold mb-3\">Vous ne suivez actuellement aucune formation !</h2>
                                                        <a href=\"";
                // line 249
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_choice");
                echo "\" class=\"btn btn-primary btn-main\">S'inscire </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            // line 259
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 263
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 267
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 268
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 268,  409 => 267,  397 => 263,  391 => 259,  378 => 249,  366 => 239,  342 => 218,  314 => 193,  305 => 186,  303 => 185,  299 => 183,  285 => 172,  271 => 161,  267 => 159,  265 => 158,  249 => 147,  235 => 140,  228 => 135,  206 => 116,  180 => 93,  155 => 71,  141 => 60,  125 => 47,  111 => 36,  89 => 19,  75 => 7,  72 => 6,  62 => 5,  51 => 1,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'dashboard' %}

{% block body %}
    {% if is_granted('ROLE_ADMIN') %}
    <div class=\"container-fluid mt-3\" id=\"dashboardContainer\">
      <div class=\"row m-auto\">
          <div class=\"col-lg-12 d-flex flex-column justify-content-center\">
              <div class=\"col-12 col-lg-6 d-flex flex-column justify-content-center m-auto\">
                <div class=\"row\">
                <div class=\"col-xl-12 col-md-12\">
                  <div class=\"card card-stats\">
                    <!-- Card body -->
                    <div class=\"card-body\">
                      <div class=\"row\">
                        <div class=\"col\">
                          <h5 class=\"card-title text-uppercase text-muted mb-0\">Bienvenue</h5>
                          <span class=\"subtitle h2 font-weight-bold mb-0\">{{app.user.firstname}} {{app.user.lastname}}</span>
                        </div>
                        <div class=\"col-auto\">
                          <div class=\"picto icon icon-shape bg-gradient-orange text-white rounded-circle shadow\">
                            <i class=\"fa fa-smile\"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-6\">
                </div>
              </div>
                <div class=\"row\">
                    <div class=\"col-12 col-lg-6\">
                        <div class=\"row\">
                            <a href=\"{{ path('message_index') }}\" class=\"w-100\">
                                <div class=\"col-xl-12 col-md-12\">
                                    <div class=\"card card-stats\">
                                        <!-- Card body -->
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\"> Messages en attente</span>
                                                </div>
                                                <div class=\"col-auto\">
                                                    <div class=\"picto icon icon-shape bg-light-blue text-white rounded-circle shadow font-weight-bold\">
                                                        {{ messagesCount }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"row\">
                            <a href=\"{{ path('correction_index') }}\" class=\"w-100\">
                                <div class=\"col-xl-12 col-md-12\">
                                    <div class=\"card card-stats\">
                                        <!-- Card body -->
                                        <div class=\"card-body\">
                                            <div class=\"row\">
                                                <div class=\"col\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\"> Exercices à corriger</span>
                                                </div>
                                                <div class=\"col-auto\">
                                                    <div class=\"picto icon icon-shape bg-light-blue text-white rounded-circle shadow font-weight-bold\">
                                                        {{ exercicesCount }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
              <div class=\"col-lg-6 d-flex flex-row px-0 m-auto\">
                  <div class=\"col-lg-6\">
                          <div class=\"row h-100\">
                              <div class=\"col-xl-12 col-md-12 h-100\">
                                  <div class=\"card card-stats h-100\">
                                      <!-- Card body -->
                                      <div class=\"card-body d-flex align-items-center justify-content-center\">
                                          <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                              <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                                  <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow d-flex justify-content-center align-items-center\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                      <span class=\"h2 font-weight-bold mb-0 text-white\"> {{ studentsCount }}</span>
                                                  </div>
                                              </div>
                                              <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                                  <span class=\"subtitle h2 font-weight-bold mb-0\">Elèves en formation</span>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class=\"col-lg-6\">
                              </div>
                          </div>
                      </div>
                  <div class=\"col-lg-6\">
                          <div class=\"row h-100\">
                              <div class=\"col-xl-12 col-md-12 h-100\">
                                  <div class=\"card card-stats h-100\">
                                      <!-- Card body -->
                                      <div class=\"card-body d-flex align-items-center justify-content-center\">
                                      <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                          <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                              <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow d-flex justify-content-center align-items-center\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                  <span class=\"h2 font-weight-bold mb-0 text-white\"> {{ students }}</span>
                                              </div>
                                          </div>
                                          <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                              <span class=\"subtitle h2 font-weight-bold mb-0\">Elèves Inscrits</span>
                                          </div>
                                      </div>
                                  </div>
                                  </div>
                              </div>
                              <div class=\"col-lg-6\">
                              </div>
                          </div>
                      </div>
              </div>
          </div>
      </div>
    </div>
    {% else %}
        <div class=\"container-fluid mt-3\" id=\"dashboardContainer\">
            <div class=\"row m-auto\">
                <div class=\"col-lg-12 d-flex flex-column justify-content-center\">
                    <div class=\"col-lg-6 d-flex flex-column justify-content-center m-auto\">
                        <div class=\"row\">
                            <div class=\"col-md-12 {% if app.user.formationUsers is defined and app.user.formationUsers is not null  and app.user.formationUsers is not empty %}col-lg-6{% else%} col-lg-12{% endif%} \">
                                <div class=\"card card-stats\">
                                    <!-- Card body -->
                                    <div class=\"card-body\">
                                        <div class=\"row\">
                                            <div class=\"col\">
                                                <h5 class=\"card-title text-uppercase text-muted mb-0\">Bienvenue</h5>
                                                <span class=\"subtitle h2 font-weight-bold mb-0\">{{app.user.firstname}} {{app.user.lastname}}</span>
                                            </div>
                                            <div class=\"col-auto\">
                                                <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow\">
                                                    <i class=\"fa fa-smile\"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {% if app.user.formationUsers is defined and app.user.formationUsers is not null  and app.user.formationUsers is not empty%}
                            <div class=\"col-lg-6 col-md-12\">
                                <div class=\"row\">
                                    <a href=\"{{ path('message_index') }}\" class=\"w-100\">
                                        <div class=\"col-xl-12 col-md-12\">
                                            <div class=\"card card-stats\">
                                                <!-- Card body -->
                                                <div class=\"card-body\">
                                                    <div class=\"row\">
                                                        <div class=\"col d-flex align-items-center\">
                                                            <span class=\"subtitle h2 font-weight-bold mb-0\"> Messages en attente</span>
                                                        </div>
                                                        <div class=\"col-auto\">
                                                            <div class=\"picto icon icon-shape bg-light-blue text-white rounded-circle shadow font-weight-bold\">
                                                                {{ messagesCount }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            {% endif %}
                        </div>
                    </div>
                    {% if app.user.formationUsers is defined and app.user.formationUsers is not null  and formation != false  and app.user.formationUsers is not empty%}
                    <div class=\"col-lg-6 d-flex flex-row px-0 m-auto\">
                        <div class=\"col-lg-6\">
                            <div class=\"row h-100\">
                                <div class=\"col-xl-12 col-md-12 h-100\">
                                    <div class=\"card card-stats h-100\">
                                        <!-- Card body -->
                                        <div class=\"card-body d-flex align-items-center justify-content-center\">
                                            <a href=\"{{ path('student_course_index', {id : formation.id}) }}\">
                                            <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                                    <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow d-flex justify-content-center align-items-center\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                        <i class=\"fas fa-pencil-alt\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\">Ma Formation</span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"row h-100\">
                                <div class=\"col-xl-12 col-md-12 h-100\">
                                    <div class=\"card card-stats h-100\">
                                        <!-- Card body -->
                                        <div class=\"card-body bg-white d-flex align-items-center justify-content-center\">
                                            <a href=\"{{ path('technical_doc_index') }}\">
                                            <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center\">
                                                    <div class=\"picto icon icon-shape bg-orange text-white rounded-circle shadow\" style=\"height: 3rem !important; width: 3rem !important;\">
                                                        <i class=\"fa fa-book-open\"></i>
                                                    </div>
                                                </div>
                                                <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4 px-0\">
                                                    <span class=\"subtitle h2 font-weight-bold mb-0\">Documents Techniques</span>
                                                </div>
                                            </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                </div>
                            </div>
                        </div>
                    </div>
                    {% else %}
                        <div class=\"col-lg-6 d-flex flex-row px-0 m-auto\">
                            <div class=\"col-lg-12\">
                                <div class=\"row h-100\">
                                    <div class=\"col-xl-12 col-md-12 h-100\">
                                        <div class=\"card card-stats h-100\">
                                            <!-- Card body -->
                                            <div class=\"card-body d-flex align-items-center justify-content-center\">
                                                <div class=\"row d-flex flex-column justify-content-center align-items-center\">
                                                    <div class=\"col d-flex flex-column justify-content-center align-items-center mt-4\">
                                                        <h2 class=\"font-weight-bold mb-3\">Vous ne suivez actuellement aucune formation !</h2>
                                                        <a href=\"{{ path('formation_choice') }}\" class=\"btn btn-primary btn-main\">S'inscire </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}


{% endblock %}

{% block javascripts %}
{{ parent()}}
{% endblock %}
", "admin/dashboard/index.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/dashboard/index.html.twig");
    }
}
