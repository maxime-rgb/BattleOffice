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

/* emails/confirmation.html.twig */
class __TwigTemplate_fc58beec62698cc28b8c93f05d667617da36c910c44ea83840b85b829b8ad160 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/confirmation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/confirmation.html.twig"));

        // line 1
        echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />

    <!-- Facebook sharing information tags -->
    <meta property=\"og:title\" content=\"Confirmation de votre commande sur Curcuma-citron.feelwellshop.com\" />

    <title>Confirmation de votre commande sur BattleOffice</title>
    <style type=\"text/css\">
        /* Client-specific Styles */
        #outlook a{padding:0;} /* Force Outlook to provide a \"view in browser\" button. */
        body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
        body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

        /* Reset Styles */
        body{margin:0; padding:0;}
        img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
        table td{border-collapse:collapse;}
        #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

        /* Template Styles */

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: COMMON PAGE ELEMENTS /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Page
        * @section background color
        * @tip Set the background color for your email. You may want to choose one that matches your company's branding.
        * @theme page
        */
        body, #backgroundTable{
            /*@editable*/ background-color:#FAFAFA;
        }

        /**
        * @tab Page
        * @section email border
        * @tip Set the border for your email.
        */
        #templateContainer{
            /*@editable*/ border: 1px solid #DDDDDD;
        }

        /**
        * @tab Page
        * @section heading 1
        * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
        * @style heading 1
        */
        h1, .h1{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:34px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Page
        * @section heading 2
        * @tip Set the styling for all second-level headings in your emails.
        * @style heading 2
        */
        h2, .h2{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:30px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Page
        * @section heading 3
        * @tip Set the styling for all third-level headings in your emails.
        * @style heading 3
        */
        h3, .h3{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:26px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Page
        * @section heading 4
        * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
        * @style heading 4
        */
        h4, .h4{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:22px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: HEADER /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Header
        * @section header style
        * @tip Set the background color and border for your email's header area.
        * @theme header
        */
        #templateHeader{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border-bottom:0;
        }

        /**
        * @tab Header
        * @section header text
        * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
        */
        .headerContent{
            /*@editable*/ color:#202020;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:34px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            /*@editable*/ padding:0;
            /*@editable*/ text-align:center;
            /*@editable*/ vertical-align:middle;
        }

        /**
        * @tab Header
        * @section header link
        * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
        */
        .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#336699;
            /*@editable*/ font-weight:normal;
            /*@editable*/ text-decoration:underline;
        }

        #headerImage{
            height:auto;
            max-width:600px !important;
        }

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: MAIN BODY /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Body
        * @section body style
        * @tip Set the background color for your email's body area.
        */
        #templateContainer, .bodyContent{
            /*@editable*/ background-color:#FFFFFF;
        }

        /**
        * @tab Body
        * @section body text
        * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
        * @theme main
        */
        .bodyContent div{
            /*@editable*/ color:#505050;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:14px;
            /*@editable*/ line-height:150%;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Body
        * @section body link
        * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
        */
        .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#336699;
            /*@editable*/ font-weight:normal;
            /*@editable*/ text-decoration:underline;
        }

        /**
        * @tab Body
        * @section data table style
        * @tip Set the background color and border for your email's data table.
        */
        .templateDataTable{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border:1px solid #DDDDDD;
        }

        /**
        * @tab Body
        * @section data table heading text
        * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
        */
        .dataTableHeading{
            /*@editable*/ background-color:#D8E2EA;
            /*@editable*/ color:#336699;
            /*@editable*/ font-family:Helvetica;
            /*@editable*/ font-size:14px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:150%;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Body
        * @section data table heading link
        * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
        */
        .dataTableHeading a:link, .dataTableHeading a:visited, /* Yahoo! Mail Override */ .dataTableHeading a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#FFFFFF;
            /*@editable*/ font-weight:bold;
            /*@editable*/ text-decoration:underline;
        }

        /**
        * @tab Body
        * @section data table text
        * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
        */
        .dataTableContent{
            /*@editable*/ border-top:1px solid #DDDDDD;
            /*@editable*/ border-bottom:0;
            /*@editable*/ color:#202020;
            /*@editable*/ font-family:Helvetica;
            /*@editable*/ font-size:12px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:150%;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Body
        * @section data table link
        * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
        */
        .dataTableContent a:link, .dataTableContent a:visited, /* Yahoo! Mail Override */ .dataTableContent a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#202020;
            /*@editable*/ font-weight:bold;
            /*@editable*/ text-decoration:underline;
        }

        /**
        * @tab Body
        * @section button style
        * @tip Set the styling for your email's button. Choose a style that draws attention.
        */
        .templateButton{
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            /*@editable*/ background-color:#336699;
            /*@editable*/ border:0;
            border-collapse:separate !important;
            border-radius:3px;
        }

        /**
        * @tab Body
        * @section button style
        * @tip Set the styling for your email's button. Choose a style that draws attention.
        */
        .templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#FFFFFF;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:15px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ letter-spacing:-.5px;
            /*@editable*/ line-height:100%;
            text-align:center;
            text-decoration:none;
        }

        .bodyContent img{
            display:inline;
            height:auto;
        }

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: FOOTER /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Footer
        * @section footer style
        * @tip Set the background color and top border for your email's footer area.
        * @theme footer
        */
        #templateFooter{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border-top:0;
        }

        /**
        * @tab Footer
        * @section footer text
        * @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
        * @theme footer
        */
        .footerContent div{
            /*@editable*/ color:#707070;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:12px;
            /*@editable*/ line-height:125%;
            /*@editable*/ text-align:center;
        }

        /**
        * @tab Footer
        * @section footer link
        * @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
        */
        .footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#336699;
            /*@editable*/ font-weight:normal;
            /*@editable*/ text-decoration:underline;
        }

        .footerContent img{
            display:inline;
        }

        /**
        * @tab Footer
        * @section utility bar style
        * @tip Set the background color and border for your email's footer utility bar.
        * @theme footer
        */
        #utility{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border:0;
        }

        /**
        * @tab Footer
        * @section utility bar style
        * @tip Set the background color and border for your email's footer utility bar.
        */
        #utility div{
            /*@editable*/ text-align:center;
        }

        #monkeyRewards img{
            max-width:190px;
        }
    </style>
</head>
<body leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
<center>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"backgroundTable\">
        <tr>
            <td align=\"center\" valign=\"top\" style=\"padding-top:20px;\">
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateContainer\">
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- // Begin Template Header \\\\ -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateHeader\">
                                <tr>
                                    <td class=\"headerContent\" style=\"background: #41b3ff;padding: 10px 0;\">

                                        <!-- // Begin Module: Standard Header Image \\\\ -->
                                        BATTLEOFFICE
                                        <!-- // End Module: Standard Header Image \\\\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Header \\\\ -->
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- // Begin Template Body \\\\ -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateBody\">
                                <tr>
                                    <td valign=\"top\">

                                        <!-- // Begin Module: Standard Content \\\\ -->
                                        <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                                            <tr>
                                                <td valign=\"top\" class=\"bodyContent\">
                                                    <div mc:edit=\"std_content00\">
                                                        <h1 class=\"h1\">";
        // line 407
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 407, $this->source); })())), "html", null, true);
        echo ", votre commande est en cours de traitement</h1>
                                                        ";
        // line 409
        echo "                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign=\"top\" style=\"padding-top:0; padding-bottom:0;\">
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\" class=\"templateDataTable\">
                                                        <tr>
                                                            <th scope=\"col\" valign=\"top\" width=\"25%\" class=\"dataTableHeading\" mc:edit=\"data_table_heading00\">
                                                                DATE
                                                            </th>
                                                            <th scope=\"col\" valign=\"top\" width=\"50%\" class=\"dataTableHeading\" mc:edit=\"data_table_heading01\">
                                                                PRODUIT
                                                            </th>
                                                            <th scope=\"col\" valign=\"top\" width=\"25%\" class=\"dataTableHeading\" mc:edit=\"data_table_heading02\">
                                                                PRIX TTC
                                                            </th>
                                                        </tr>
                                                        <tr mc:repeatable>
                                                            <td valign=\"top\" class=\"dataTableContent\" mc:edit=\"data_table_content00\">
                                                                ";
        // line 428
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
                                                            </td>
                                                            <td valign=\"top\" class=\"dataTableContent\" mc:edit=\"data_table_content01\">
                                                                ";
        // line 431
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 431, $this->source); })()), "name", [], "any", false, false, false, 431), "html", null, true);
        echo "
                                                            </td>
                                                            <td valign=\"top\" class=\"dataTableContent\" mc:edit=\"data_table_content02\">
                                                                ";
        // line 434
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 434, $this->source); })()), "price", [], "any", false, false, false, 434), "html", null, true);
        echo " €
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign=\"top\" class=\"bodyContent\">
                                                    <div mc:edit=\"std_content01\">
                                                        La facture PDF est en pièce jointe.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align=\"center\" valign=\"top\" style=\"padding-top:0;\">
                                                    <table border=\"0\" cellpadding=\"15\" cellspacing=\"0\" class=\"templateButton\">
                                                        <tr>
                                                            <td valign=\"middle\" class=\"templateButtonContent\">
                                                                <div mc:edit=\"std_content02\">
                                                                    <a href=\"https://www.battleoffice.com/\" target=\"_blank\" style=\"color:white\">Visiter la boutique battleoffice.com</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // End Module: Standard Content \\\\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Body \\\\ -->
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- // Begin Template Footer \\\\ -->
                            <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"600\" id=\"templateFooter\">
                                <tr>
                                    <td valign=\"top\" class=\"footerContent\">

                                        <!-- // Begin Module: Transactional Footer \\\\ -->
                                        <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\">
                                            <tr>
                                                <td valign=\"top\">
                                                    <div mc:edit=\"std_footer\">
                                                        <em>Copyright &copy; ";
        // line 481
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " BattleOffice, Tous droits réservés.</em>
                                                        <br />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign=\"middle\" id=\"utility\">
                                                    <div mc:edit=\"std_utility\">
                                                        &nbsp;
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // End Module: Transactional Footer \\\\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Footer \\\\ -->
                        </td>
                    </tr>
                </table>
                <br />
            </td>
        </tr>
    </table>
</center>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 481,  488 => 434,  482 => 431,  476 => 428,  455 => 409,  451 => 407,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />

    <!-- Facebook sharing information tags -->
    <meta property=\"og:title\" content=\"Confirmation de votre commande sur Curcuma-citron.feelwellshop.com\" />

    <title>Confirmation de votre commande sur BattleOffice</title>
    <style type=\"text/css\">
        /* Client-specific Styles */
        #outlook a{padding:0;} /* Force Outlook to provide a \"view in browser\" button. */
        body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
        body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

        /* Reset Styles */
        body{margin:0; padding:0;}
        img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
        table td{border-collapse:collapse;}
        #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

        /* Template Styles */

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: COMMON PAGE ELEMENTS /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Page
        * @section background color
        * @tip Set the background color for your email. You may want to choose one that matches your company's branding.
        * @theme page
        */
        body, #backgroundTable{
            /*@editable*/ background-color:#FAFAFA;
        }

        /**
        * @tab Page
        * @section email border
        * @tip Set the border for your email.
        */
        #templateContainer{
            /*@editable*/ border: 1px solid #DDDDDD;
        }

        /**
        * @tab Page
        * @section heading 1
        * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
        * @style heading 1
        */
        h1, .h1{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:34px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Page
        * @section heading 2
        * @tip Set the styling for all second-level headings in your emails.
        * @style heading 2
        */
        h2, .h2{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:30px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Page
        * @section heading 3
        * @tip Set the styling for all third-level headings in your emails.
        * @style heading 3
        */
        h3, .h3{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:26px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Page
        * @section heading 4
        * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
        * @style heading 4
        */
        h4, .h4{
            /*@editable*/ color:#202020;
            display:block;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:22px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            margin-top:0;
            margin-right:0;
            margin-bottom:10px;
            margin-left:0;
            /*@editable*/ text-align:left;
        }

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: HEADER /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Header
        * @section header style
        * @tip Set the background color and border for your email's header area.
        * @theme header
        */
        #templateHeader{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border-bottom:0;
        }

        /**
        * @tab Header
        * @section header text
        * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
        */
        .headerContent{
            /*@editable*/ color:#202020;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:34px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:100%;
            /*@editable*/ padding:0;
            /*@editable*/ text-align:center;
            /*@editable*/ vertical-align:middle;
        }

        /**
        * @tab Header
        * @section header link
        * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
        */
        .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#336699;
            /*@editable*/ font-weight:normal;
            /*@editable*/ text-decoration:underline;
        }

        #headerImage{
            height:auto;
            max-width:600px !important;
        }

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: MAIN BODY /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Body
        * @section body style
        * @tip Set the background color for your email's body area.
        */
        #templateContainer, .bodyContent{
            /*@editable*/ background-color:#FFFFFF;
        }

        /**
        * @tab Body
        * @section body text
        * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
        * @theme main
        */
        .bodyContent div{
            /*@editable*/ color:#505050;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:14px;
            /*@editable*/ line-height:150%;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Body
        * @section body link
        * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
        */
        .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#336699;
            /*@editable*/ font-weight:normal;
            /*@editable*/ text-decoration:underline;
        }

        /**
        * @tab Body
        * @section data table style
        * @tip Set the background color and border for your email's data table.
        */
        .templateDataTable{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border:1px solid #DDDDDD;
        }

        /**
        * @tab Body
        * @section data table heading text
        * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
        */
        .dataTableHeading{
            /*@editable*/ background-color:#D8E2EA;
            /*@editable*/ color:#336699;
            /*@editable*/ font-family:Helvetica;
            /*@editable*/ font-size:14px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:150%;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Body
        * @section data table heading link
        * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
        */
        .dataTableHeading a:link, .dataTableHeading a:visited, /* Yahoo! Mail Override */ .dataTableHeading a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#FFFFFF;
            /*@editable*/ font-weight:bold;
            /*@editable*/ text-decoration:underline;
        }

        /**
        * @tab Body
        * @section data table text
        * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
        */
        .dataTableContent{
            /*@editable*/ border-top:1px solid #DDDDDD;
            /*@editable*/ border-bottom:0;
            /*@editable*/ color:#202020;
            /*@editable*/ font-family:Helvetica;
            /*@editable*/ font-size:12px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ line-height:150%;
            /*@editable*/ text-align:left;
        }

        /**
        * @tab Body
        * @section data table link
        * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
        */
        .dataTableContent a:link, .dataTableContent a:visited, /* Yahoo! Mail Override */ .dataTableContent a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#202020;
            /*@editable*/ font-weight:bold;
            /*@editable*/ text-decoration:underline;
        }

        /**
        * @tab Body
        * @section button style
        * @tip Set the styling for your email's button. Choose a style that draws attention.
        */
        .templateButton{
            -moz-border-radius:3px;
            -webkit-border-radius:3px;
            /*@editable*/ background-color:#336699;
            /*@editable*/ border:0;
            border-collapse:separate !important;
            border-radius:3px;
        }

        /**
        * @tab Body
        * @section button style
        * @tip Set the styling for your email's button. Choose a style that draws attention.
        */
        .templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#FFFFFF;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:15px;
            /*@editable*/ font-weight:bold;
            /*@editable*/ letter-spacing:-.5px;
            /*@editable*/ line-height:100%;
            text-align:center;
            text-decoration:none;
        }

        .bodyContent img{
            display:inline;
            height:auto;
        }

        /* /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ STANDARD STYLING: FOOTER /\\/\\/\\/\\/\\/\\/\\/\\/\\/\\ */

        /**
        * @tab Footer
        * @section footer style
        * @tip Set the background color and top border for your email's footer area.
        * @theme footer
        */
        #templateFooter{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border-top:0;
        }

        /**
        * @tab Footer
        * @section footer text
        * @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
        * @theme footer
        */
        .footerContent div{
            /*@editable*/ color:#707070;
            /*@editable*/ font-family:Arial;
            /*@editable*/ font-size:12px;
            /*@editable*/ line-height:125%;
            /*@editable*/ text-align:center;
        }

        /**
        * @tab Footer
        * @section footer link
        * @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
        */
        .footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
            /*@editable*/ color:#336699;
            /*@editable*/ font-weight:normal;
            /*@editable*/ text-decoration:underline;
        }

        .footerContent img{
            display:inline;
        }

        /**
        * @tab Footer
        * @section utility bar style
        * @tip Set the background color and border for your email's footer utility bar.
        * @theme footer
        */
        #utility{
            /*@editable*/ background-color:#FFFFFF;
            /*@editable*/ border:0;
        }

        /**
        * @tab Footer
        * @section utility bar style
        * @tip Set the background color and border for your email's footer utility bar.
        */
        #utility div{
            /*@editable*/ text-align:center;
        }

        #monkeyRewards img{
            max-width:190px;
        }
    </style>
</head>
<body leftmargin=\"0\" marginwidth=\"0\" topmargin=\"0\" marginheight=\"0\" offset=\"0\">
<center>
    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" height=\"100%\" width=\"100%\" id=\"backgroundTable\">
        <tr>
            <td align=\"center\" valign=\"top\" style=\"padding-top:20px;\">
                <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateContainer\">
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- // Begin Template Header \\\\ -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateHeader\">
                                <tr>
                                    <td class=\"headerContent\" style=\"background: #41b3ff;padding: 10px 0;\">

                                        <!-- // Begin Module: Standard Header Image \\\\ -->
                                        BATTLEOFFICE
                                        <!-- // End Module: Standard Header Image \\\\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Header \\\\ -->
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- // Begin Template Body \\\\ -->
                            <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateBody\">
                                <tr>
                                    <td valign=\"top\">

                                        <!-- // Begin Module: Standard Content \\\\ -->
                                        <table border=\"0\" cellpadding=\"20\" cellspacing=\"0\" width=\"100%\">
                                            <tr>
                                                <td valign=\"top\" class=\"bodyContent\">
                                                    <div mc:edit=\"std_content00\">
                                                        <h1 class=\"h1\">{{name|capitalize}}, votre commande est en cours de traitement</h1>
                                                        {#<strong>Getting started:</strong> Transactional emails serve a defined and simple purpose. They differ from traditional mass-emails because they're generally sent on a user-by-user basis, instead of large list of users, and are generally used to deliver purchase receipts, account updates, security notifications, and more.#}
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign=\"top\" style=\"padding-top:0; padding-bottom:0;\">
                                                    <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\" class=\"templateDataTable\">
                                                        <tr>
                                                            <th scope=\"col\" valign=\"top\" width=\"25%\" class=\"dataTableHeading\" mc:edit=\"data_table_heading00\">
                                                                DATE
                                                            </th>
                                                            <th scope=\"col\" valign=\"top\" width=\"50%\" class=\"dataTableHeading\" mc:edit=\"data_table_heading01\">
                                                                PRODUIT
                                                            </th>
                                                            <th scope=\"col\" valign=\"top\" width=\"25%\" class=\"dataTableHeading\" mc:edit=\"data_table_heading02\">
                                                                PRIX TTC
                                                            </th>
                                                        </tr>
                                                        <tr mc:repeatable>
                                                            <td valign=\"top\" class=\"dataTableContent\" mc:edit=\"data_table_content00\">
                                                                {{ \"now\"|date('d/m/Y') }}
                                                            </td>
                                                            <td valign=\"top\" class=\"dataTableContent\" mc:edit=\"data_table_content01\">
                                                                {{ product.name }}
                                                            </td>
                                                            <td valign=\"top\" class=\"dataTableContent\" mc:edit=\"data_table_content02\">
                                                                {{ product.price }} €
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign=\"top\" class=\"bodyContent\">
                                                    <div mc:edit=\"std_content01\">
                                                        La facture PDF est en pièce jointe.
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align=\"center\" valign=\"top\" style=\"padding-top:0;\">
                                                    <table border=\"0\" cellpadding=\"15\" cellspacing=\"0\" class=\"templateButton\">
                                                        <tr>
                                                            <td valign=\"middle\" class=\"templateButtonContent\">
                                                                <div mc:edit=\"std_content02\">
                                                                    <a href=\"https://www.battleoffice.com/\" target=\"_blank\" style=\"color:white\">Visiter la boutique battleoffice.com</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // End Module: Standard Content \\\\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Body \\\\ -->
                        </td>
                    </tr>
                    <tr>
                        <td align=\"center\" valign=\"top\">
                            <!-- // Begin Template Footer \\\\ -->
                            <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"600\" id=\"templateFooter\">
                                <tr>
                                    <td valign=\"top\" class=\"footerContent\">

                                        <!-- // Begin Module: Transactional Footer \\\\ -->
                                        <table border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"100%\">
                                            <tr>
                                                <td valign=\"top\">
                                                    <div mc:edit=\"std_footer\">
                                                        <em>Copyright &copy; {{ \"now\"|date('Y') }} BattleOffice, Tous droits réservés.</em>
                                                        <br />
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td valign=\"middle\" id=\"utility\">
                                                    <div mc:edit=\"std_utility\">
                                                        &nbsp;
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // End Module: Transactional Footer \\\\ -->

                                    </td>
                                </tr>
                            </table>
                            <!-- // End Template Footer \\\\ -->
                        </td>
                    </tr>
                </table>
                <br />
            </td>
        </tr>
    </table>
</center>
</body>
</html>", "emails/confirmation.html.twig", "/home/simplon/devilbox/data/www/battle-office/templates/emails/confirmation.html.twig");
    }
}
