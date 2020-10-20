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

/* admin/pdf/invoice.html.twig */
class __TwigTemplate_97dab9844f97c8338b572208d5cc26e8f4b1c893b17fff69711ae8c32fecdf0b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/invoice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/pdf/invoice.html.twig"));

        // line 1
        echo "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\"><head>
<link rel=\"STYLESHEET\" href=\"https://dompdf.net/test/css/print_static.css\" type=\"text/css\">
</head>

<body marginwidth=\"0\" marginheight=\"0\">

<div id=\"body\">
    
<div id=\"section_header\">
    
    <table style=\"width: 100%;\" class=\"header\">
        <tbody>
            <tr>
                <td>
                    <h1 style=\"text-align: left\">Soroptimist Internationale Union Française</h1>
                </td>
                <td style='text-align: right;'>
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.jpg")), "html", null, true);
        echo "\" style='width:75px;' class=\"navbar-brand-img\" alt=\"Soroptimist France\">
                </td>
            </tr>
        </tbody>
    </table>

</div>
<br/>

<div id=\"content\">
  
<div class=\"page\" style=\"font-size: 7pt\">
    
<table style=\"width: 100%;\" class=\"header\">
<tbody>
    <tr>
        <td><h1 style=\"text-align: left\">Facture ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 34, $this->source); })()), "code", [], "any", false, false, false, 34), "html", null, true);
        echo "</h1></td>
        <td><h1 style=\"text-align: right\">";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 35, $this->source); })()), "createdAt", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
        echo "</h1></td>
    </tr>
</tbody>
</table>
    
<br/>

<table style=\"width: 100%; font-size: 8pt;\">
<tbody>
    <tr>
        <td>Nom : <strong>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "lastname", [], "any", false, false, false, 45), "html", null, true);
        echo "</strong></td>
        <td>Prénom : <strong>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "firstname", [], "any", false, false, false, 46), "html", null, true);
        echo "</strong></td>
    </tr>
    <tr>
        <td>Adresse: <strong>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 49, $this->source); })()), "address", [], "any", false, false, false, 49), "html", null, true);
        echo "</strong></td>
        <td>Complément adresse: <strong>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 50, $this->source); })()), "addressBis", [], "any", false, false, false, 50), "html", null, true);
        echo "</strong></td>
    </tr>

    <tr>
        <td>Code postal: <strong>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 54, $this->source); })()), "zip", [], "any", false, false, false, 54), "html", null, true);
        echo "</strong></td>
        <td>Ville: <strong>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "city", [], "any", false, false, false, 55), "html", null, true);
        echo "</strong></td>
    </tr>
</tbody></table>


<table class=\"change_order_items\">

    <tbody>
        <tr>
            <td colspan=\"4\">
                <h2>Détails de la commande:</h2>
            </td>
        </tr>
    </tbody>
    
    <tbody>
        <tr>
            <th>Article</th>
            <th>Quantity</th>
            <th>Prix unitaire</th>
            <th>Sous-total</th>
        </tr>
        ";
        // line 77
        $context["total"] = 0;
        // line 78
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 78, $this->source); })()), "shopOrderDetails", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["k"] => $context["detail"]) {
            // line 79
            echo "            <tr class=\"";
            if (($context["k"] % 2)) {
                echo "even_row";
            } else {
                echo "odd_row";
            }
            echo "\">
                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                <td style=\"text-align: center\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                <td style=\"text-align: right;\">";
            // line 82
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 82), 2, ",", " "), "html", null, true);
            echo "€</td>
                <td class=\"change_order_total_col\">";
            // line 83
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 83) * twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 83)), 2, ",", " "), "html", null, true);
            echo "€</td>
            </tr>
            ";
            // line 85
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 85, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["detail"], "price", [], "any", false, false, false, 85) * twig_get_attribute($this->env, $this->source, $context["detail"], "quantity", [], "any", false, false, false, 85)));
            // line 86
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </tbody>

    <tbody>
        <tr>
            <td colspan=\"3\" style=\"text-align: right;\"><strong>TOTAL:</strong></td>
            <td class=\"change_order_total_col\"><strong>";
        // line 92
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 92, $this->source); })()), 2, ",", " "), "html", null, true);
        echo "€</strong></td>
        </tr>
    </tbody>
</table>

<table class=\"sa_signature_box\" style=\"border-top: 1px solid black; padding-top: 2em; margin-top: 2em;\">
    <tbody>
      <tr>
          <td colspan=\"4\" style=\"white-space: normal\">Soroptimist International Union Française</td>
      </tr>
  </tbody>
</table>

</div>

</div>
</div>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/pdf/invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 92,  189 => 87,  183 => 86,  181 => 85,  176 => 83,  172 => 82,  168 => 81,  164 => 80,  155 => 79,  150 => 78,  148 => 77,  123 => 55,  119 => 54,  112 => 50,  108 => 49,  102 => 46,  98 => 45,  85 => 35,  81 => 34,  62 => 18,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\"><head>
<link rel=\"STYLESHEET\" href=\"https://dompdf.net/test/css/print_static.css\" type=\"text/css\">
</head>

<body marginwidth=\"0\" marginheight=\"0\">

<div id=\"body\">
    
<div id=\"section_header\">
    
    <table style=\"width: 100%;\" class=\"header\">
        <tbody>
            <tr>
                <td>
                    <h1 style=\"text-align: left\">Soroptimist Internationale Union Française</h1>
                </td>
                <td style='text-align: right;'>
                    <img src=\"{{ absolute_url(asset('assets/img/logo.jpg')) }}\" style='width:75px;' class=\"navbar-brand-img\" alt=\"Soroptimist France\">
                </td>
            </tr>
        </tbody>
    </table>

</div>
<br/>

<div id=\"content\">
  
<div class=\"page\" style=\"font-size: 7pt\">
    
<table style=\"width: 100%;\" class=\"header\">
<tbody>
    <tr>
        <td><h1 style=\"text-align: left\">Facture {{ order.code }}</h1></td>
        <td><h1 style=\"text-align: right\">{{ order.createdAt|date(\"d/m/Y\") }}</h1></td>
    </tr>
</tbody>
</table>
    
<br/>

<table style=\"width: 100%; font-size: 8pt;\">
<tbody>
    <tr>
        <td>Nom : <strong>{{ order.user.lastname }}</strong></td>
        <td>Prénom : <strong>{{ order.user.firstname }}</strong></td>
    </tr>
    <tr>
        <td>Adresse: <strong>{{ order.address }}</strong></td>
        <td>Complément adresse: <strong>{{ order.addressBis }}</strong></td>
    </tr>

    <tr>
        <td>Code postal: <strong>{{ order.zip }}</strong></td>
        <td>Ville: <strong>{{ order.city }}</strong></td>
    </tr>
</tbody></table>


<table class=\"change_order_items\">

    <tbody>
        <tr>
            <td colspan=\"4\">
                <h2>Détails de la commande:</h2>
            </td>
        </tr>
    </tbody>
    
    <tbody>
        <tr>
            <th>Article</th>
            <th>Quantity</th>
            <th>Prix unitaire</th>
            <th>Sous-total</th>
        </tr>
        {% set total = 0 %}
        {% for k, detail in order.shopOrderDetails %}
            <tr class=\"{% if k%2 %}even_row{% else %}odd_row{% endif %}\">
                <td>{{ detail.name }}</td>
                <td style=\"text-align: center\">{{ detail.quantity }}</td>
                <td style=\"text-align: right;\">{{ detail.price|number_format(2, ',', ' ') }}€</td>
                <td class=\"change_order_total_col\">{{ (detail.price * detail.quantity)|number_format(2, ',', ' ') }}€</td>
            </tr>
            {% set total = total + detail.price * detail.quantity %}
        {% endfor %}
    </tbody>

    <tbody>
        <tr>
            <td colspan=\"3\" style=\"text-align: right;\"><strong>TOTAL:</strong></td>
            <td class=\"change_order_total_col\"><strong>{{ total|number_format(2, ',', ' ') }}€</strong></td>
        </tr>
    </tbody>
</table>

<table class=\"sa_signature_box\" style=\"border-top: 1px solid black; padding-top: 2em; margin-top: 2em;\">
    <tbody>
      <tr>
          <td colspan=\"4\" style=\"white-space: normal\">Soroptimist International Union Française</td>
      </tr>
  </tbody>
</table>

</div>

</div>
</div>

</body>
</html>", "admin/pdf/invoice.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/pdf/invoice.html.twig");
    }
}
