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

/* paiement/Stripe.html.twig */
class __TwigTemplate_8be4f200cec584bcc577cb850b4e9906b42d571cff90ec3ff58474012293b514 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/Stripe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "paiement/Stripe.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "paiement/Stripe.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New Paiement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <h1>Stripe Paiement</h1>


<form method=\"post\" class=\"paiementstripe\" action=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stripe", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 9, $this->source); })())]), "html", null, true);
        echo "\">
        <div class=\"clearfix\"></div>
        <h5 class=\"center\">Paiement CB</h5>
        <div
            class=\"input-field col s12\">

            ";
        // line 16
        echo "            <input type=\"hidden\" name=\"amount\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"paymentApi\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["paymentApi"]) || array_key_exists("paymentApi", $context) ? $context["paymentApi"] : (function () { throw new RuntimeError('Variable "paymentApi" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
            <input id=\"card_name\" type=\"text\" class=\"validate\">
            <label for=\"card_name\">Nom sur la carte</label>
        </div>
        <div class=\"input-field col s12\" id=\"card-element\">
            <input id=\"card_number\" type=\"text\" class=\"validate\">
            <label id=\"card-element\" for=\"card_number\">Numéro de la carte</label>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s12 l6\">
                <a href=\"#!\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
            </div>

            <div class=\"input-field col s12 l6\">
                <button class=\"btn btn-large waves-effect waves-light lighten-1 col s12\" type=\"submit\" name=\"action\">
                    Payer
                    <i class=\"material-icons right\">euro_symbol</i>
                </button>
            </div>
        </div>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    <script>
        let stripe = Stripe(\"pk_test_51IuwAFEHR08MdWvwKhCbOaT2odaZNHSwBQgUFgvb86dze0VxjuAAgTFdRF2k70jht1y4rsRNqnyhN9iXSRKkPPLw00bMYLfT5Y\");
        // The items the customer wants to buy
        let elements = stripe.elements();

        var style = {
    base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
    },
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    </script>

    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "paiement/Stripe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 42,  141 => 41,  108 => 17,  103 => 16,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Paiement{% endblock %}

{% block body %}
    <h1>Stripe Paiement</h1>


<form method=\"post\" class=\"paiementstripe\" action=\"{{ path ('stripe', {'id': id})}}\">
        <div class=\"clearfix\"></div>
        <h5 class=\"center\">Paiement CB</h5>
        <div
            class=\"input-field col s12\">

            {# TODO Mettre l'input du participant id à la place  #}
            <input type=\"hidden\" name=\"amount\" value=\"{{amount}}\">
            <input type=\"hidden\" name=\"paymentApi\" value=\"{{paymentApi}}\">
            <input id=\"card_name\" type=\"text\" class=\"validate\">
            <label for=\"card_name\">Nom sur la carte</label>
        </div>
        <div class=\"input-field col s12\" id=\"card-element\">
            <input id=\"card_number\" type=\"text\" class=\"validate\">
            <label id=\"card-element\" for=\"card_number\">Numéro de la carte</label>
        </div>
        <div class=\"row\">
            <div class=\"input-field col s12 l6\">
                <a href=\"#!\" class=\"btn btn-large waves-effect waves-light grey col s12\">Annuler</a>
            </div>

            <div class=\"input-field col s12 l6\">
                <button class=\"btn btn-large waves-effect waves-light lighten-1 col s12\" type=\"submit\" name=\"action\">
                    Payer
                    <i class=\"material-icons right\">euro_symbol</i>
                </button>
            </div>
        </div>
    </form>

{% endblock %}

{% block javascripts %}
    <script>
        let stripe = Stripe(\"pk_test_51IuwAFEHR08MdWvwKhCbOaT2odaZNHSwBQgUFgvb86dze0VxjuAAgTFdRF2k70jht1y4rsRNqnyhN9iXSRKkPPLw00bMYLfT5Y\");
        // The items the customer wants to buy
        let elements = stripe.elements();

        var style = {
    base: {
    // Add your base input styles here. For example:
    fontSize: '16px',
    color: '#32325d',
    },
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    </script>

    
{% endblock %}", "paiement/Stripe.html.twig", "/shared/httpd/battle-office/templates/paiement/Stripe.html.twig");
    }
}
