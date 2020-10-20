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

/* emails/base.html.twig */
class __TwigTemplate_cdac0ceccb204d36a158d73905d1c8bcfb43ef42055f6f8ef034bc36b6c54c20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'sign' => [$this, 'block_sign'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/base.html.twig"));

        // line 1
        echo "<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
    <title> Hello world </title>
    <!--[if !mso]><!-- -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <!--[if lte mso 11]>
    <style type=\"text/css\">
        .mj-outlook-group-fix { width:100% !important; }
    </style>
    <![endif]-->
    <!--[if !mso]><!-->
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,300&display=swap\" rel=\"stylesheet\">
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,300&display=swap0);
    </style>
    <!--<![endif]-->
    <style type=\"text/css\">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
            .mj-column-per-45 {
                width: 45% !important;
                max-width: 45%;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }
            td.mj-full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>

<body>
<div style=\"\">
    <!--[if mso | IE]>
    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:600px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-50 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:10px;word-break:break-word;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:collapse;border-spacing:0px;\">
                                        <tbody>
                                        <tr>
                                            <td style=\"width:280px;\"> <a href=\"https://mjml.io\" target=\"_blank\">

                                                    <img
                                                            alt=\"Racoon logo\" height=\"auto\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/front/logo.png")), "html", null, true);
        echo "\" style=\"border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;\" width=\"280\"
                                                    />

                                                </a> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>

    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:600px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\"> </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>

    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:400px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-50 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:0px;word-break:break-word;\">
                                    <div style=\"font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:24px;text-align:center;color:#616161;\">
                                        ";
        // line 213
        $this->displayBlock('title', $context, $blocks);
        echo "</div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <p style=\"border-top:solid 2px #1b148c;font-size:1px;margin:0px auto;width:100%;\"> </p>
                                    <!--[if mso | IE]>
                      <table
                         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 2px #1b148c;;font-size:1px;margin:0px auto;width:220px;\" role=\"presentation\" width=\"220px\"
                      >
                        <tr>
                          <td style=\"height:0;line-height:0;\">
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    <![endif]-->
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>

    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;padding-top:30px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:600px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                                <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <div style=\"font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:left;color:#616161;\">
                                        ";
        // line 276
        $this->displayBlock('content', $context, $blocks);
        // line 277
        echo "                                        ";
        $this->displayBlock('sign', $context, $blocks);
        // line 278
        echo "                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
</div>
</body>

</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 213
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 276
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 277
    public function block_sign($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sign"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sign"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "emails/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 277,  387 => 276,  369 => 213,  334 => 278,  331 => 277,  329 => 276,  263 => 213,  167 => 120,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\" xmlns:o=\"urn:schemas-microsoft-com:office:office\">

<head>
    <title> Hello world </title>
    <!--[if !mso]><!-- -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <!--<![endif]-->
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <style type=\"text/css\">
        #outlook a {
            padding: 0;
        }

        body {
            margin: 0;
            padding: 0;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            border-collapse: collapse;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            -ms-interpolation-mode: bicubic;
        }

        p {
            display: block;
            margin: 13px 0;
        }
    </style>
    <!--[if mso]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->
    <!--[if lte mso 11]>
    <style type=\"text/css\">
        .mj-outlook-group-fix { width:100% !important; }
    </style>
    <![endif]-->
    <!--[if !mso]><!-->
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,300&display=swap\" rel=\"stylesheet\">
    <style type=\"text/css\">
        @import url(https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;1,300&display=swap0);
    </style>
    <!--<![endif]-->
    <style type=\"text/css\">
        @media only screen and (min-width:480px) {
            .mj-column-per-100 {
                width: 100% !important;
                max-width: 100%;
            }
            .mj-column-per-45 {
                width: 45% !important;
                max-width: 45%;
            }
        }
    </style>
    <style type=\"text/css\">
        @media only screen and (max-width:480px) {
            table.mj-full-width-mobile {
                width: 100% !important;
            }
            td.mj-full-width-mobile {
                width: auto !important;
            }
        }
    </style>
</head>

<body>
<div style=\"\">
    <!--[if mso | IE]>
    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:600px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-50 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:10px;word-break:break-word;\">
                                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"border-collapse:collapse;border-spacing:0px;\">
                                        <tbody>
                                        <tr>
                                            <td style=\"width:280px;\"> <a href=\"https://mjml.io\" target=\"_blank\">

                                                    <img
                                                            alt=\"Racoon logo\" height=\"auto\" src=\"{{ absolute_url(asset('assets/img/front/logo.png')) }}\" style=\"border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;\" width=\"280\"
                                                    />

                                                </a> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>

    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:600px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\"> </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>

    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:400px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-50 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                                <td align=\"center\" style=\"font-size:0px;padding:0px;word-break:break-word;\">
                                    <div style=\"font-family:Roboto, Helvetica, sans-serif;font-size:18px;font-weight:500;line-height:24px;text-align:center;color:#616161;\">
                                        {% block title %}{% endblock %}</div>
                                </td>
                            </tr>
                            <tr>
                                <td style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <p style=\"border-top:solid 2px #1b148c;font-size:1px;margin:0px auto;width:100%;\"> </p>
                                    <!--[if mso | IE]>
                      <table
                         align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"border-top:solid 2px #1b148c;;font-size:1px;margin:0px auto;width:220px;\" role=\"presentation\" width=\"220px\"
                      >
                        <tr>
                          <td style=\"height:0;line-height:0;\">
                            &nbsp;
                          </td>
                        </tr>
                      </table>
                    <![endif]-->
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>

    <table
            align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" class=\"\" style=\"width:600px;\" width=\"600\"
    >
        <tr>
            <td style=\"line-height:0px;font-size:0px;mso-line-height-rule:exactly;\">
    <![endif]-->
    <div style=\"margin:0px auto;max-width:600px;\">
        <table align=\"center\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"width:100%;\">
            <tbody>
            <tr>
                <td style=\"direction:ltr;font-size:0px;padding:0px;padding-top:30px;text-align:center;\">
                    <!--[if mso | IE]>
                    <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\">

                        <tr>

                            <td
                                    class=\"\" style=\"vertical-align:top;width:600px;\"
                            >
                    <![endif]-->
                    <div class=\"mj-column-per-100 mj-outlook-group-fix\" style=\"font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;\">
                        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" role=\"presentation\" style=\"vertical-align:top;\" width=\"100%\">
                            <tr>
                                <td align=\"left\" style=\"font-size:0px;padding:10px 25px;word-break:break-word;\">
                                    <div style=\"font-family:Roboto, Helvetica, sans-serif;font-size:16px;font-weight:300;line-height:24px;text-align:left;color:#616161;\">
                                        {% block content %}{% endblock %}
                                        {% block sign %}{% endblock %}
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!--[if mso | IE]>
                    </td>

                    </tr>

                    </table>
                    <![endif]-->
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
</div>
</body>

</html>", "emails/base.html.twig", "/Applications/MAMP/htdocs/aaa/templates/emails/base.html.twig");
    }
}
