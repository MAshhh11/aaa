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

/* student/subscription/formation_form.html.twig */
class __TwigTemplate_16a6fd475407e317f99b1fa7ca6deffd095d41b40c52be2dd55c7ddcf52bb139 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/subscription/formation_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/subscription/formation_form.html.twig"));

        // line 3
        $context["menu"] = "formation_choice";
        // line 4
        $context["breadcrumbs"] = [0 => ["title" => "test", "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "student/subscription/formation_form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div class=\"card shadow\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-12\">
                ";
        // line 12
        $this->loadTemplate("admin/components/confirmation.html.twig", "student/subscription/formation_form.html.twig", 12)->display($context);
        // line 13
        echo "
                <div class=\"card border-0 mb-0\">
                    <div class=\"card-header\">
                        <h2 class=\"font-weight-bold text-center\">Je choisis ma formation !<span class=\"text-yellow\"> •</span></</span></h2>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <div class=\"row\">
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 21
            echo "                                <div class=\"cardformation card shadow col-lg-4 text-center\">
                                    <div class=\"text-center py-4\">
                                        <div class=\"row d-flex justify-content-center align-items-center\">
                                            <div class=\"col-12\">
                                                <h2>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</h2>
                                            </div>
                                            <div class=\"col-12\">
                                                <h2>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "price", [], "any", false, false, false, 28), "html", null, true);
            echo " €</h2>
                                            </div>
                                            <div class=\"col-12 choseFormation\" id=\"choseFormation\">
                                                <input type=\"checkbox\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" name=\"formation\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "\" style=\"display: none;\">
                                                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_checkout", ["formationId" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" class=\"btn btn-secondary select-formation\">
                                                    <span class=\"btn-inner--text\">Choisir</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 50
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var env = 'dev';
        var API = {
            'dev' : 'pk_test_51GxBtmB8l4a2HJoGpVab1Yvw8ieTWeT61bPtHFcMNZ44I7VMg8nTchSzXcpBsr6mog1JFcpyByCKpzn7H1YaAzRv00Hf1RdxxS',
            'prod' : ''
        }
        var stripe = Stripe(API[env]);
        var elements = stripe.elements();

        var style = {
            base: {
                color: \"#32325d\",
            }
        };

        var card = elements.create(\"card\", { style: style });
        card.mount(\"#card-element\");
        var cardButton = document.getElementById('card-button');
        var clientSecret = cardButton.dataset.secret;

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();

            let address = document.getElementById('address').value;
            let address2 = document.getElementById('address2').value;
            let city = document.getElementById('city').value;
            let zip = document.getElementById('zip').value;
            let country = document.getElementById('country').value;


            stripe.confirmCardPayment(clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: '";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "firstname", [], "any", false, false, false, 97), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "lastname", [], "any", false, false, false, 97), "html", null, true);
        echo "',
                        email: '";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "email", [], "any", false, false, false, 98), "html", null, true);
        echo "',
                        address : {
                            city : city,
                            country : 'FR',
                            line1 : address + ' ' + address2,
                            postal_code : zip,
                        }
                    }
                }
            }).then(function(result) {
                if (result.error) {

                    \$('#card-errors')
                        .html(result.error.message)
                        .show();
                } else {
                    if (result.paymentIntent.status === 'succeeded') {
                        \$('#payment-form').submit();
                    }
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "student/subscription/formation_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 98,  210 => 97,  159 => 50,  149 => 49,  132 => 40,  118 => 32,  112 => 31,  106 => 28,  100 => 25,  94 => 21,  90 => 20,  81 => 13,  79 => 12,  74 => 9,  64 => 8,  53 => 1,  51 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% set menu = \"formation_choice\" %}
    {% set breadcrumbs = [
        {\"title\": 'test', 'url' : \"\"},
    ] %}

{% block body %}
<div class=\"card shadow\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10 col-lg-12\">
                {% include 'admin/components/confirmation.html.twig' %}

                <div class=\"card border-0 mb-0\">
                    <div class=\"card-header\">
                        <h2 class=\"font-weight-bold text-center\">Je choisis ma formation !<span class=\"text-yellow\"> •</span></</span></h2>
                    </div>
                    <div class=\"card-body bg-secondary\">
                        <div class=\"row\">
                            {% for formation in formations %}
                                <div class=\"cardformation card shadow col-lg-4 text-center\">
                                    <div class=\"text-center py-4\">
                                        <div class=\"row d-flex justify-content-center align-items-center\">
                                            <div class=\"col-12\">
                                                <h2>{{ formation.title }}</h2>
                                            </div>
                                            <div class=\"col-12\">
                                                <h2>{{ formation.price }} €</h2>
                                            </div>
                                            <div class=\"col-12 choseFormation\" id=\"choseFormation\">
                                                <input type=\"checkbox\" value=\"{{ formation.id }}\" name=\"formation\" id=\"{{ formation.title }}\" style=\"display: none;\">
                                                <a href=\"{{ path('formation_checkout', {formationId : formation.id}) }}\" class=\"btn btn-secondary select-formation\">
                                                    <span class=\"btn-inner--text\">Choisir</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent()}}
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script>
        var env = 'dev';
        var API = {
            'dev' : 'pk_test_51GxBtmB8l4a2HJoGpVab1Yvw8ieTWeT61bPtHFcMNZ44I7VMg8nTchSzXcpBsr6mog1JFcpyByCKpzn7H1YaAzRv00Hf1RdxxS',
            'prod' : ''
        }
        var stripe = Stripe(API[env]);
        var elements = stripe.elements();

        var style = {
            base: {
                color: \"#32325d\",
            }
        };

        var card = elements.create(\"card\", { style: style });
        card.mount(\"#card-element\");
        var cardButton = document.getElementById('card-button');
        var clientSecret = cardButton.dataset.secret;

        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('payment-form');

        form.addEventListener('submit', function(ev) {
            ev.preventDefault();

            let address = document.getElementById('address').value;
            let address2 = document.getElementById('address2').value;
            let city = document.getElementById('city').value;
            let zip = document.getElementById('zip').value;
            let country = document.getElementById('country').value;


            stripe.confirmCardPayment(clientSecret, {
                payment_method: {
                    card: card,
                    billing_details: {
                        name: '{{ app.user.firstname }} {{ app.user.lastname }}',
                        email: '{{ app.user.email }}',
                        address : {
                            city : city,
                            country : 'FR',
                            line1 : address + ' ' + address2,
                            postal_code : zip,
                        }
                    }
                }
            }).then(function(result) {
                if (result.error) {

                    \$('#card-errors')
                        .html(result.error.message)
                        .show();
                } else {
                    if (result.paymentIntent.status === 'succeeded') {
                        \$('#payment-form').submit();
                    }
                }
            });
        });
    </script>
{% endblock %}
", "student/subscription/formation_form.html.twig", "/Applications/MAMP/htdocs/aaa/templates/student/subscription/formation_form.html.twig");
    }
}
