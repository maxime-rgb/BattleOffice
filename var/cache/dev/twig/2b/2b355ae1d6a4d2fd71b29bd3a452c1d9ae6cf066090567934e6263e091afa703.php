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

/* landing_page/partials/form_new.html.twig */
class __TwigTemplate_0af63906bf3dc65eaefca434186b0dc1101a22f5a5265f26a86e466e3be17489 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/form_new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/partials/form_new.html.twig"));

        // line 1
        echo "<style type=\"text/css\">
    .form-error {
        color: red;
        font-weight: bold;
        padding-bottom:10px;
    }
    .form-error ul {
        margin:0;
    }
</style>

";
        // line 13
        echo "

<div>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'errors');
        echo "</div>
<div class=\"card step_2\">
    <div class=\"card-content\">
    
        <span class=\"card-title color_product_primary center-align\">Étape 2</span>
        <p class=\"h6 center-align\">Remplissez ce formulaire</p>
        <div class=\"form-wrapper\">

            <div class=\"input-field\">
              ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "firstName", [], "any", false, false, false, 24), 'widget');
        echo "
              ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "lastName", [], "any", false, false, false, 29), 'widget');
        echo "
              ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "lastName", [], "any", false, false, false, 30), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "adress", [], "any", false, false, false, 34), 'widget');
        echo "
              ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "adress", [], "any", false, false, false, 35), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "otherAdress", [], "any", false, false, false, 39), 'widget');
        echo "
              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "otherAdress", [], "any", false, false, false, 40), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "city", [], "any", false, false, false, 44), 'widget');
        echo "
              ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "city", [], "any", false, false, false, 45), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "postalCode", [], "any", false, false, false, 49), 'widget');
        echo "
              ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "postalCode", [], "any", false, false, false, 50), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "country", [], "any", false, false, false, 54), 'widget');
        echo "
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "country", [], "any", false, false, false, 55), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "phone", [], "any", false, false, false, 59), 'widget');
        echo "
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "phone", [], "any", false, false, false, 60), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "mail", [], "any", false, false, false, 64), 'widget');
        echo "
              ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "mail", [], "any", false, false, false, 65), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "mailConfirm", [], "any", false, false, false, 69), 'widget');
        echo "
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "mailConfirm", [], "any", false, false, false, 70), 'label');
        echo "
            <div class=\"form-error\"></div>
            </div>  
        </div>  
        
    </div>


    <ul class=\"collapsible\">
        <li>
            <div class=\"collapsible-header\"><i class=\"material-icons\">markunread_mailbox</i>Adresse de livraison différente ?</div>
            <div class=\"collapsible-body\">
                <div class=\"input-field\">
                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "delivery_adress", [], "any", false, false, false, 83), "firstName", [], "any", false, false, false, 83), 'widget');
        echo "
                    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "delivery_adress", [], "any", false, false, false, 84), "firstName", [], "any", false, false, false, 84), 'label');
        echo "
                    <div class=\"form-error\"></div>
                </div>            
                <div class=\"input-field\">
                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "delivery_adress", [], "any", false, false, false, 88), "lastName", [], "any", false, false, false, 88), 'widget');
        echo "
                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "delivery_adress", [], "any", false, false, false, 89), "lastName", [], "any", false, false, false, 89), 'label');
        echo "
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "delivery_adress", [], "any", false, false, false, 93), "adress", [], "any", false, false, false, 93), 'widget');
        echo "
                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "delivery_adress", [], "any", false, false, false, 94), "adress", [], "any", false, false, false, 94), 'label');
        echo "
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "delivery_adress", [], "any", false, false, false, 98), "otherAdress", [], "any", false, false, false, 98), 'widget');
        echo "
                    ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "delivery_adress", [], "any", false, false, false, 99), "otherAdress", [], "any", false, false, false, 99), 'label');
        echo "
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "delivery_adress", [], "any", false, false, false, 103), "city", [], "any", false, false, false, 103), 'widget');
        echo "
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "delivery_adress", [], "any", false, false, false, 104), "city", [], "any", false, false, false, 104), 'label');
        echo "
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "delivery_adress", [], "any", false, false, false, 108), "postalCode", [], "any", false, false, false, 108), 'widget');
        echo "
                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "delivery_adress", [], "any", false, false, false, 109), "postalCode", [], "any", false, false, false, 109), 'label');
        echo "
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "delivery_adress", [], "any", false, false, false, 113), "country", [], "any", false, false, false, 113), 'widget');
        echo "
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "delivery_adress", [], "any", false, false, false, 114), "country", [], "any", false, false, false, 114), 'label');
        echo "
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "delivery_adress", [], "any", false, false, false, 118), "phone", [], "any", false, false, false, 118), 'widget');
        echo "
                    ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "delivery_adress", [], "any", false, false, false, 119), "phone", [], "any", false, false, false, 119), 'label');
        echo "
                <div class=\"form-error\"></div>
                </div>
            </div>
        </li>
    </ul>
</div>


";
        // line 129
        echo "<div class=\"card step_3\">
    <div class=\"card-content\">
        <span class=\"card-title color_product_primary center-align\">Étape 3</span>
        <p class=\"h6 center-align\">Choisissez un paiement</p>
        <ul class=\"collapsible\">
            <li class=\"active\">
                <div class=\"collapsible-header\"><i class=\"fas fa-credit-card\"></i>Payer avec la Carte Bancaire</div>
                <div class=\"collapsible-body card-form\">
                    <div class=\"row\">

                        <div class=\"center-align\">
                            <button type=\"submit\"  name=\"method\" value=\"stripe\" class=\"btn-large btn-block waves-effect waves-light\">Continuer</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                            <img class=\"responsive-img monetico\" src=\"assets/images/paiement-securise-stripe.jpeg\" alt=\"Stripe protège vos achats\">
                        </div>
                        
                    </div>
                </div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"fab fa-cc-paypal\"></i>Payer avec Paypal</div>
                <div class=\"collapsible-body\">
                    <div class=\"row\">
                        <div class=\"center-align\">
                            <button type=\"submit\" name=\"method\" value=\"paypal\" class=\"btn-large btn-block waves-effect waves-light\">Continuer sur PayPal</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "_token", [], "any", false, false, false, 162), 'widget');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "landing_page/partials/form_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 162,  284 => 129,  272 => 119,  268 => 118,  261 => 114,  257 => 113,  250 => 109,  246 => 108,  239 => 104,  235 => 103,  228 => 99,  224 => 98,  217 => 94,  213 => 93,  206 => 89,  202 => 88,  195 => 84,  191 => 83,  175 => 70,  171 => 69,  164 => 65,  160 => 64,  153 => 60,  149 => 59,  142 => 55,  138 => 54,  131 => 50,  127 => 49,  120 => 45,  116 => 44,  109 => 40,  105 => 39,  98 => 35,  94 => 34,  87 => 30,  83 => 29,  76 => 25,  72 => 24,  60 => 15,  56 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style type=\"text/css\">
    .form-error {
        color: red;
        font-weight: bold;
        padding-bottom:10px;
    }
    .form-error ul {
        margin:0;
    }
</style>

{# Etape 2 #}


<div>{{form_errors(form)}}</div>
<div class=\"card step_2\">
    <div class=\"card-content\">
    
        <span class=\"card-title color_product_primary center-align\">Étape 2</span>
        <p class=\"h6 center-align\">Remplissez ce formulaire</p>
        <div class=\"form-wrapper\">

            <div class=\"input-field\">
              {{ form_widget(form.firstName) }}
              {{ form_label(form.firstName) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.lastName) }}
              {{ form_label(form.lastName) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.adress) }}
              {{ form_label(form.adress) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.otherAdress) }}
              {{ form_label(form.otherAdress) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.city) }}
              {{ form_label(form.city) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.postalCode) }}
              {{ form_label(form.postalCode) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.country) }}
              {{ form_label(form.country) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.phone) }}
              {{ form_label(form.phone) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.mail) }}
              {{ form_label(form.mail) }}
            <div class=\"form-error\"></div>
            </div>
            <div class=\"input-field\">
              {{ form_widget(form.mailConfirm) }}
              {{ form_label(form.mailConfirm) }}
            <div class=\"form-error\"></div>
            </div>  
        </div>  
        
    </div>


    <ul class=\"collapsible\">
        <li>
            <div class=\"collapsible-header\"><i class=\"material-icons\">markunread_mailbox</i>Adresse de livraison différente ?</div>
            <div class=\"collapsible-body\">
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.firstName) }}
                    {{ form_label(form.delivery_adress.firstName) }}
                    <div class=\"form-error\"></div>
                </div>            
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.lastName) }}
                    {{ form_label(form.delivery_adress.lastName) }}
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.adress) }}
                    {{ form_label(form.delivery_adress.adress) }}
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.otherAdress) }}
                    {{ form_label(form.delivery_adress.otherAdress) }}
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.city) }}
                    {{ form_label(form.delivery_adress.city) }}
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.postalCode) }}
                    {{ form_label(form.delivery_adress.postalCode) }}
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.country) }}
                    {{ form_label(form.delivery_adress.country) }}
                <div class=\"form-error\"></div>
                </div>
                <div class=\"input-field\">
                    {{ form_widget(form.delivery_adress.phone) }}
                    {{ form_label(form.delivery_adress.phone) }}
                <div class=\"form-error\"></div>
                </div>
            </div>
        </li>
    </ul>
</div>


{# Etape 3 #}
<div class=\"card step_3\">
    <div class=\"card-content\">
        <span class=\"card-title color_product_primary center-align\">Étape 3</span>
        <p class=\"h6 center-align\">Choisissez un paiement</p>
        <ul class=\"collapsible\">
            <li class=\"active\">
                <div class=\"collapsible-header\"><i class=\"fas fa-credit-card\"></i>Payer avec la Carte Bancaire</div>
                <div class=\"collapsible-body card-form\">
                    <div class=\"row\">

                        <div class=\"center-align\">
                            <button type=\"submit\"  name=\"method\" value=\"stripe\" class=\"btn-large btn-block waves-effect waves-light\">Continuer</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                            <img class=\"responsive-img monetico\" src=\"assets/images/paiement-securise-stripe.jpeg\" alt=\"Stripe protège vos achats\">
                        </div>
                        
                    </div>
                </div>
            </li>
            <li>
                <div class=\"collapsible-header\"><i class=\"fab fa-cc-paypal\"></i>Payer avec Paypal</div>
                <div class=\"collapsible-body\">
                    <div class=\"row\">
                        <div class=\"center-align\">
                            <button type=\"submit\" name=\"method\" value=\"paypal\" class=\"btn-large btn-block waves-effect waves-light\">Continuer sur PayPal</button>
                            <p>J'accepte les <a href=\"https://feelwellshop.com/fr/conditions-generales-de-ventes\" target=\"_blank\">conditions générales de vente</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
{{ form_widget(form._token) }}", "landing_page/partials/form_new.html.twig", "/shared/httpd/battle-office/templates/landing_page/partials/form_new.html.twig");
    }
}
