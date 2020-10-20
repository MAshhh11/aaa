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

/* admin/website_admin/storage/form.html.twig */
class __TwigTemplate_69bedf8bcf79bfb0f32a36371a770513cbf4f9f6b01d31fa00910d7b4e75e12d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/website_admin/storage/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/website_admin/storage/form.html.twig"));

        // line 3
        $context["menu"] = "website_admin";
        // line 4
        $context["submenu"] = "website_admin_storage";
        // line 7
        $context["page_name"] = "Gestion du stockage";
        // line 10
        $context["breadcrumbs"] = [0 => ["title" => "Gestion du site", "url" => ""], 1 => ["title" =>         // line 12
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 12, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/website_admin/storage/form.html.twig", 1);
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
    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\" row my-4\">
                <div class=\"col-lg-6 m-auto text-center\">
                    <h4 class=\"mb-2\">Espace Disponible</h4>
                    <h2>";
        // line 31
        echo twig_escape_filter($this->env, (5 - twig_number_format_filter($this->env, (isset($context["stored"]) || array_key_exists("stored", $context) ? $context["stored"] : (function () { throw new RuntimeError('Variable "stored" does not exist.', 31, $this->source); })()), 3, ".", ",")), "html", null, true);
        echo " / 5 Go</h2>
                </div>
            </div>
            ";
        // line 34
        if ((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"table-responsive bg-white\">
                        <table class=\"table align-items-center table-flush table-hover\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>Exercice</th>
                                <th>Document</th>
                                <th>Elève</th>
                                <th>Envoyé le </th>
                                <th>Poids </th>
                                <th style=\"width:150px;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["files"]) || array_key_exists("files", $context) ? $context["files"] : (function () { throw new RuntimeError('Variable "files" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 51
                echo "                                <tr>
                                    <td>
                                        ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "exercice", [], "any", false, false, false, 53), "title", [], "any", false, false, false, 53), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "file", [], "any", false, false, false, 56), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "user", [], "any", false, false, false, 59), "firstname", [], "any", false, false, false, 59), "html", null, true);
                echo "
                                        ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["file"], "user", [], "any", false, false, false, 60), "lastname", [], "any", false, false, false, 60), "html", null, true);
                echo "
                                    </td>
                                    <td >
                                        ";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "updatedAt", [], "any", false, false, false, 63), "d/m/Y"), "html", null, true);
                echo "
                                    </td>
                                    <td>
                                        ";
                // line 66
                $context["i"] = 0;
                // line 67
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["filesSizes"]) || array_key_exists("filesSizes", $context) ? $context["filesSizes"] : (function () { throw new RuntimeError('Variable "filesSizes" does not exist.', 67, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["fileSize"]) {
                    // line 68
                    echo "                                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["filesSizes"] ?? null), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 68, $this->source); })()), [], "array", false, true, false, 68), twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 68), [], "array", true, true, false, 68)) {
                        // line 69
                        echo "                                                ";
                        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fileSize"], twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 69), [], "array", false, false, false, 69), 3, ".", ","), "html", null, true);
                        echo " Go
                                            ";
                    }
                    // line 71
                    echo "                                            ";
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 71, $this->source); })()) + 1);
                    // line 72
                    echo "                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fileSize'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "
                                    </td>
                                    <td>
                                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                                           data-message=\"Souhaitez-vous supprimer définitivement ce document ?\"
                                           data-token=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 78))), "html", null, true);
                echo "\"
                                           data-url=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("file_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\"><i
                                                    class=\"fa fa-trash\"></i> Supprimer</a>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        ";
        }
        // line 90
        echo "        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("website_admin_storage");
        echo "'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(\"body\").on(\"click\", \".removeAttachment\", function () {
            \$(this).parent().parent().remove();
        });

        let i = 2;
        \$('#addAttachment').click(function () {
            var html = \$(\"#attachmentModel\").html();
            \$(\"#listAttachments\").prepend(html);

            \$('.select-file-type').last().attr('id', i);
            i++;
        });



    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/website_admin/storage/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 110,  245 => 109,  224 => 97,  215 => 90,  207 => 84,  196 => 79,  192 => 78,  185 => 73,  179 => 72,  176 => 71,  170 => 69,  167 => 68,  162 => 67,  160 => 66,  154 => 63,  148 => 60,  144 => 59,  138 => 56,  132 => 53,  128 => 51,  124 => 50,  107 => 35,  105 => 34,  99 => 31,  87 => 22,  79 => 16,  69 => 15,  58 => 1,  56 => 12,  55 => 10,  53 => 7,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = 'website_admin' %}
{% set submenu = 'website_admin_storage' %}


    {% set page_name = 'Gestion du stockage' %}

    
    {% set breadcrumbs = [
        {\"title\": \"Gestion du site\", 'url' : \"\"},
        {\"title\": page_name, 'url' : \"\"},
    ] %}

{% block body %}

    <div class=\"card bg-secondary shadow\">

        <div class=\"card-header border-0\">
            <div class='row align-items-center'>
                <div class=\"col\">
                    <h3 class=\"mb-0\">{{ page_name }}</h3>
                </div>
            </div>
        </div>

        <div class=\"card-body\">
            <div class=\" row my-4\">
                <div class=\"col-lg-6 m-auto text-center\">
                    <h4 class=\"mb-2\">Espace Disponible</h4>
                    <h2>{{ 5 - stored|number_format(3, '.', ',') }} / 5 Go</h2>
                </div>
            </div>
            {% if files %}
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"table-responsive bg-white\">
                        <table class=\"table align-items-center table-flush table-hover\">
                            <thead class=\"thead-light\">
                            <tr>
                                <th>Exercice</th>
                                <th>Document</th>
                                <th>Elève</th>
                                <th>Envoyé le </th>
                                <th>Poids </th>
                                <th style=\"width:150px;\">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for file in files %}
                                <tr>
                                    <td>
                                        {{ file.exercice.title }}
                                    </td>
                                    <td>
                                        {{ file.file }}
                                    </td>
                                    <td>
                                        {{ file.user.firstname }}
                                        {{ file.user.lastname }}
                                    </td>
                                    <td >
                                        {{ file.updatedAt|date('d/m/Y') }}
                                    </td>
                                    <td>
                                        {% set i = 0 %}
                                        {% for fileSize in filesSizes %}
                                            {% if filesSizes[i][file.id] is defined %}
                                                {{ fileSize[file.id]|number_format(3, '.', ',') }} Go
                                            {% endif %}
                                            {% set i = i + 1 %}
                                        {% endfor %}

                                    </td>
                                    <td>
                                        <a href=\"javascript:void(0);\" class=\"btn btn-sm btn-danger confirmDeleteBox\"
                                           data-message=\"Souhaitez-vous supprimer définitivement ce document ?\"
                                           data-token=\"{{ csrf_token('delete'~file.id ) }}\"
                                           data-url=\"{{ path('file_delete', {'id': file.id}) }}\"><i
                                                    class=\"fa fa-trash\"></i> Supprimer</a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        {% endif %}
        </div>
        <div class=\"card-footer\">
            <button class=\"btn btn-icon btn-success\" type='submit'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-save\"></i></span>
                <span class=\"btn-inner--text\">Enregistrer</span>
            </button>

            <a class=\"btn btn-icon btn-sm\" href='{{ path(\"website_admin_storage\") }}'>
                <span class=\"btn-inner--icon\"><i class=\"fa fa-arrow-left\"></i></span>
                <span class=\"btn-inner--text\">Annuler</span>
            </a>
        </div>
    </div>




{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(\"body\").on(\"click\", \".removeAttachment\", function () {
            \$(this).parent().parent().remove();
        });

        let i = 2;
        \$('#addAttachment').click(function () {
            var html = \$(\"#attachmentModel\").html();
            \$(\"#listAttachments\").prepend(html);

            \$('.select-file-type').last().attr('id', i);
            i++;
        });



    </script>
{% endblock %}
", "admin/website_admin/storage/form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/website_admin/storage/form.html.twig");
    }
}
