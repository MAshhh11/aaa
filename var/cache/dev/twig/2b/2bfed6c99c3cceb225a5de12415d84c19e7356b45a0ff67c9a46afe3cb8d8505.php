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

/* student/subscription/checkout.html.twig */
class __TwigTemplate_30cc15a0e244f5bf26d96625cf7adc715fb491651085ea193f6ad853ab50dd6e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/subscription/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/subscription/checkout.html.twig"));

        // line 3
        $context["breadcrumbs"] = [0 => ["title" =>         // line 4
(isset($context["page_name"]) || array_key_exists("page_name", $context) ? $context["page_name"] : (function () { throw new RuntimeError('Variable "page_name" does not exist.', 4, $this->source); })()), "url" => ""]];
        // line 1
        $this->parent = $this->loadTemplate("admin/base.html.twig", "student/subscription/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"card p-5 text-center shadow\">
      <h2>
        <i class=\"fa fa-credit-card mr-2\"></i>
        Paiement de votre Formation <b>par CB</b></h2>
        <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
      <hr>
      <h2 class=\"mt-3\">Adresse de Facturation</h2>
      <form method=\"post\" id=\"payment-form\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_payment", ["formation" => (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\">
        <div class=\"row d-flex justify-content-center align-items-center m-auto\" style=\"max-width: 800px;\">
          <div class=\"form-group col-lg-7\">
            <label for=\"address\">Adresse</label>
            <input type=\"text\" name=\"address\" id=\"address\" class=\"form-control\">
          </div>
          <div class=\"form-group col-lg-5\">
            <label for=\"address2\">complément d'adresse</label>
            <input type=\"text\" name=\"address2\" id=\"address2\" class=\"form-control\">
          </div>
          <div class=\"form-group col-lg-4\">
            <label for=\"city\">Ville</label>
            <input type=\"text\" name=\"city\" id=\"city\" class=\"form-control\" required>
          </div>
          <div class=\"form-group col-lg-4\">
            <label for=\"zip\">Code Postal</label>
            <input type=\"text\" name=\"zip\" id=\"zip\" class=\"form-control\" required>
          </div>
          <div class=\"form-group col-lg-4\">
            <label for=\"country\">Pays</label>
            <input type=\"text\" name=\"country\" id=\"country\" class=\"form-control\" required>
          </div>
        </div>
      <hr>
      <table style=\"max-width:800px;\" class=\"table table-striped text-left m-auto\">
        <tr>
          <td>Total HT</td>
          <td class=\"text-right\"><b>";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ht"]) || array_key_exists("ht", $context) ? $context["ht"] : (function () { throw new RuntimeError('Variable "ht" does not exist.', 43, $this->source); })()), 2, ","), "html", null, true);
        echo "€</b></td>
        </tr>
        <tr>
          <td>Frais de gestion</td>
          <td class=\"text-right\"><b>";
        // line 47
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["fee"]) || array_key_exists("fee", $context) ? $context["fee"] : (function () { throw new RuntimeError('Variable "fee" does not exist.', 47, $this->source); })()), 2, ","), "html", null, true);
        echo "€</b></td>
        </tr>
        <tr>
          <td>Total TTC</td>
          <td class=\"text-right\"><b>";
        // line 51
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 51, $this->source); })()), 2, ","), "html", null, true);
        echo "€</b></td>
        </tr>
      </table>

      <h1 class=\"pt-5\">Montant à payer : <b>";
        // line 55
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 55, $this->source); })()), 2, ","), "html", null, true);
        echo "€</b></h1>
      <p>Veuillez saisir les informations suivantes pour finaliser votre paiement :</p>

        <div style=\"max-width:500px\" class=\"form-control mx-auto\" id=\"card-element\"></div>
        <div id=\"card-errors\" role=\"alert\"></div>
        <input type=\"hidden\" name=\"paymentIntent\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intent"]) || array_key_exists("intent", $context) ? $context["intent"] : (function () { throw new RuntimeError('Variable "intent" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60), "html", null, true);
        echo "\">

        <button class=\"btn btn-icon btn-primary mt-3\" id=\"card-button\" data-secret=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["intent"]) || array_key_exists("intent", $context) ? $context["intent"] : (function () { throw new RuntimeError('Variable "intent" does not exist.', 62, $this->source); })()), "client_secret", [], "any", false, false, false, 62), "html", null, true);
        echo "\" type=\"submit\">
            <span class=\"btn-inner--icon\"><i class=\"fas fa-shopping-cart\"></i></span>
            <span class=\"btn-inner--text\">Confirmer le paiement</span>
        </button>
      </form>
      <hr>
      <p class=\"text-left\">
        <b><i class=\"fa fa-lock mr-2\"></i>Paiement sécurisé : </b><br>
Vos coordonnées bancaires sont cryptées et transmises directement via une connexion sécurisée à Stripe.
<br>
La plateforme l'Animateur Autodidacte Accompagné vous garantit un achat sans risque et en toute confiance.
<br>
Stripe utilise la technologie SSL (cryptage en 128 bits) pour garantir une transaction sécurisée lors d'un paiement par carte bancaire.
<br><br>
<b><i class=\"fa fa-shield-alt mr-2\"></i>Une garantie de confidentialité :</b><br>
La plateforme l'Animateur Autodidacte Accompagné n'a, à aucun moment, accès à vos coordonnées bancaires. Stripe agit en tant que tiers de confiance pour réaliser la transaction.

</p>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 85
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
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "firstname", [], "any", false, false, false, 132), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "lastname", [], "any", false, false, false, 132), "html", null, true);
        echo "',
        email: '";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "user", [], "any", false, false, false, 133), "email", [], "any", false, false, false, 133), "html", null, true);
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
        return "student/subscription/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 133,  241 => 132,  191 => 85,  181 => 84,  150 => 62,  145 => 60,  137 => 55,  130 => 51,  123 => 47,  116 => 43,  86 => 16,  80 => 13,  73 => 8,  63 => 7,  52 => 1,  50 => 4,  49 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

    {% set breadcrumbs = [
            {\"title\": page_name, 'url' : \"\"},
    ] %}

{% block body %}

    <div class=\"card p-5 text-center shadow\">
      <h2>
        <i class=\"fa fa-credit-card mr-2\"></i>
        Paiement de votre Formation <b>par CB</b></h2>
        <h1>{{ formation.title }}</h1>
      <hr>
      <h2 class=\"mt-3\">Adresse de Facturation</h2>
      <form method=\"post\" id=\"payment-form\" action=\"{{ path('formation_payment', { formation : formation }) }}\">
        <div class=\"row d-flex justify-content-center align-items-center m-auto\" style=\"max-width: 800px;\">
          <div class=\"form-group col-lg-7\">
            <label for=\"address\">Adresse</label>
            <input type=\"text\" name=\"address\" id=\"address\" class=\"form-control\">
          </div>
          <div class=\"form-group col-lg-5\">
            <label for=\"address2\">complément d'adresse</label>
            <input type=\"text\" name=\"address2\" id=\"address2\" class=\"form-control\">
          </div>
          <div class=\"form-group col-lg-4\">
            <label for=\"city\">Ville</label>
            <input type=\"text\" name=\"city\" id=\"city\" class=\"form-control\" required>
          </div>
          <div class=\"form-group col-lg-4\">
            <label for=\"zip\">Code Postal</label>
            <input type=\"text\" name=\"zip\" id=\"zip\" class=\"form-control\" required>
          </div>
          <div class=\"form-group col-lg-4\">
            <label for=\"country\">Pays</label>
            <input type=\"text\" name=\"country\" id=\"country\" class=\"form-control\" required>
          </div>
        </div>
      <hr>
      <table style=\"max-width:800px;\" class=\"table table-striped text-left m-auto\">
        <tr>
          <td>Total HT</td>
          <td class=\"text-right\"><b>{{ ht|number_format(2, ',') }}€</b></td>
        </tr>
        <tr>
          <td>Frais de gestion</td>
          <td class=\"text-right\"><b>{{ fee|number_format(2, ',') }}€</b></td>
        </tr>
        <tr>
          <td>Total TTC</td>
          <td class=\"text-right\"><b>{{ ttc|number_format(2, ',') }}€</b></td>
        </tr>
      </table>

      <h1 class=\"pt-5\">Montant à payer : <b>{{ ttc|number_format(2, ',') }}€</b></h1>
      <p>Veuillez saisir les informations suivantes pour finaliser votre paiement :</p>

        <div style=\"max-width:500px\" class=\"form-control mx-auto\" id=\"card-element\"></div>
        <div id=\"card-errors\" role=\"alert\"></div>
        <input type=\"hidden\" name=\"paymentIntent\" value=\"{{intent.id}}\">

        <button class=\"btn btn-icon btn-primary mt-3\" id=\"card-button\" data-secret=\"{{intent.client_secret}}\" type=\"submit\">
            <span class=\"btn-inner--icon\"><i class=\"fas fa-shopping-cart\"></i></span>
            <span class=\"btn-inner--text\">Confirmer le paiement</span>
        </button>
      </form>
      <hr>
      <p class=\"text-left\">
        <b><i class=\"fa fa-lock mr-2\"></i>Paiement sécurisé : </b><br>
Vos coordonnées bancaires sont cryptées et transmises directement via une connexion sécurisée à Stripe.
<br>
La plateforme l'Animateur Autodidacte Accompagné vous garantit un achat sans risque et en toute confiance.
<br>
Stripe utilise la technologie SSL (cryptage en 128 bits) pour garantir une transaction sécurisée lors d'un paiement par carte bancaire.
<br><br>
<b><i class=\"fa fa-shield-alt mr-2\"></i>Une garantie de confidentialité :</b><br>
La plateforme l'Animateur Autodidacte Accompagné n'a, à aucun moment, accès à vos coordonnées bancaires. Stripe agit en tant que tiers de confiance pour réaliser la transaction.

</p>
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
", "student/subscription/checkout.html.twig", "/Applications/MAMP/htdocs/aaa/templates/student/subscription/checkout.html.twig");
    }
}
