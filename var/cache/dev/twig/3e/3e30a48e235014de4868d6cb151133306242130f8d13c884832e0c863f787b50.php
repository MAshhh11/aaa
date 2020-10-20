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

/* admin/components/js_datatable.html.twig */
class __TwigTemplate_d54edd85cb573b3f9738afb92f8e0d980d691ef5a84b39723049c0d5812cc8a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/js_datatable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/components/js_datatable.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons/js/buttons.html5.min.js\"></script>
<script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons/js/buttons.flash.min.js\"></script>
<script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-buttons/js/buttons.print.min.js\"></script>
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/"), "html", null, true);
        echo "vendor/datatables.net-select/js/dataTables.select.min.js\"></script>

<script>
    \$(document).ready(function(){
        \$(\"#dt_default\").DataTable({
            \"aLengthMenu\": [
                [ 50, 100, 150],
                [ 50, 100, 150] // change per page values here
            ],
    responsive: true,
            \"iDisplayLength\": 50, // default record count per page
            \"bServerSide\": true, // server side processing
            \"sDom\": '<\"top\"l>rt<\"bottom\"p><\"clear\">',// cacher le champ de recherche
            \"sAjaxSource\": tableUrl, // ajax source
            \"aaSorting\": tableSortingDefault, // set first column as a default sort by asc
            \"columnDefs\": [ {
                    \"targets\": tableNotOrderable,
                    \"orderable\": false
            }],
            \"language\": {
                \"url\": \"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/datatables.net/fr.json"), "html", null, true);
        echo "\"
            }
        });
        
        \$(\"#dt_default\").on('xhr.dt', function ( e, settings, json, xhr ) {
          setTimeout(function() {
              \$('[data-toggle=\"tooltip\"]').tooltip()
          },500)
        });
        
        function fnFilterColumn(i) {
            \$('#dt_default').dataTable().fnFilter(
                \$(\"#col\"+i+\"_filter\").val(),
                i
            );
        }

        \$('.table-filter').keyup( function() {
            var i = \$(this).data('filter');
            fnFilterColumn(i);
        });

        \$('.table-filter').change( function() {
            var i = \$(this).data('filter');
            fnFilterColumn(i);
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/components/js_datatable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 28,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  56 => 4,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('assets/') }}vendor/datatables.net/js/jquery.dataTables.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-buttons/js/dataTables.buttons.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-buttons/js/buttons.html5.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-buttons/js/buttons.flash.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-buttons/js/buttons.print.min.js\"></script>
<script src=\"{{ asset('assets/') }}vendor/datatables.net-select/js/dataTables.select.min.js\"></script>

<script>
    \$(document).ready(function(){
        \$(\"#dt_default\").DataTable({
            \"aLengthMenu\": [
                [ 50, 100, 150],
                [ 50, 100, 150] // change per page values here
            ],
    responsive: true,
            \"iDisplayLength\": 50, // default record count per page
            \"bServerSide\": true, // server side processing
            \"sDom\": '<\"top\"l>rt<\"bottom\"p><\"clear\">',// cacher le champ de recherche
            \"sAjaxSource\": tableUrl, // ajax source
            \"aaSorting\": tableSortingDefault, // set first column as a default sort by asc
            \"columnDefs\": [ {
                    \"targets\": tableNotOrderable,
                    \"orderable\": false
            }],
            \"language\": {
                \"url\": \"{{ asset('assets/vendor/datatables.net/fr.json') }}\"
            }
        });
        
        \$(\"#dt_default\").on('xhr.dt', function ( e, settings, json, xhr ) {
          setTimeout(function() {
              \$('[data-toggle=\"tooltip\"]').tooltip()
          },500)
        });
        
        function fnFilterColumn(i) {
            \$('#dt_default').dataTable().fnFilter(
                \$(\"#col\"+i+\"_filter\").val(),
                i
            );
        }

        \$('.table-filter').keyup( function() {
            var i = \$(this).data('filter');
            fnFilterColumn(i);
        });

        \$('.table-filter').change( function() {
            var i = \$(this).data('filter');
            fnFilterColumn(i);
        });
    });
</script>", "admin/components/js_datatable.html.twig", "/Applications/MAMP/htdocs/aaa/templates/admin/components/js_datatable.html.twig");
    }
}
