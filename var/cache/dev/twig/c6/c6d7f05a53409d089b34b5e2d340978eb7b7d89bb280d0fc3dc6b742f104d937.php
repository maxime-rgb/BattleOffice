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

/* delivery_adress/show.html.twig */
class __TwigTemplate_2099b9455fc9014d3e3fbe85bec1ea9ff9c79250d9f9528d4588c21b4bfba20f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "delivery_adress/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "delivery_adress/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "delivery_adress/show.html.twig", 1);
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

        echo "DeliveryAdress";
        
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
        echo "    <h1>DeliveryAdress</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 16, $this->source); })()), "firstName", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 20, $this->source); })()), "lastName", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 24, $this->source); })()), "adress", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>OtherAdress</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 28, $this->source); })()), "otherAdress", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 32, $this->source); })()), "country", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PostalCode</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 36, $this->source); })()), "postalCode", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 40, $this->source); })()), "city", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 44, $this->source); })()), "phone", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_adress_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delivery_adress_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["delivery_adress"]) || array_key_exists("delivery_adress", $context) ? $context["delivery_adress"] : (function () { throw new RuntimeError('Variable "delivery_adress" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 53
        echo twig_include($this->env, $context, "delivery_adress/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "delivery_adress/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 53,  165 => 51,  160 => 49,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DeliveryAdress{% endblock %}

{% block body %}
    <h1>DeliveryAdress</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ delivery_adress.id }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ delivery_adress.firstName }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ delivery_adress.lastName }}</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>{{ delivery_adress.adress }}</td>
            </tr>
            <tr>
                <th>OtherAdress</th>
                <td>{{ delivery_adress.otherAdress }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ delivery_adress.country }}</td>
            </tr>
            <tr>
                <th>PostalCode</th>
                <td>{{ delivery_adress.postalCode }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ delivery_adress.city }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ delivery_adress.phone }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('delivery_adress_index') }}\">back to list</a>

    <a href=\"{{ path('delivery_adress_edit', {'id': delivery_adress.id}) }}\">edit</a>

    {{ include('delivery_adress/_delete_form.html.twig') }}
{% endblock %}
", "delivery_adress/show.html.twig", "/home/simplon/devilbox/data/www/battle-office/templates/delivery_adress/show.html.twig");
    }
}
