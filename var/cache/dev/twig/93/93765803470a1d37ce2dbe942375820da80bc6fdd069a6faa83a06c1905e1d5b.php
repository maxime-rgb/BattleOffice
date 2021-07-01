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

/* landing_page/index.html.twig */
class __TwigTemplate_461f4644202f83222650ef19fedef940bfb8458902cb7774e8bb0ba081c6426b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "landing_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "landing_page/index.html.twig", 1);
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
        echo "    <section class=\"countdown bg_brand_secondary\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align\"><b>Dépêchez-vous !!</b> Il ne vous reste que</h4>
                </div>
                <div class=\"col s12 m12 l2\">
                    <div class=\"row center-align\">
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"minutes\" class=\"color_brand_primary\">2</span> Jours
                        </div>
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"seconds\" class=\"color_brand_primary\">4</span> Heures
                        </div>
                    </div>
                </div>
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align \">pour profiter de cette offre !!</h4>
                </div>
            </div>
        </div>
    </section>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"content col s12 m12 l8\">

                    <section class=\"formulas\">
                        <div class=\"card bg_grey\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary center-align\">Étape 1</span>
                                <p class=\"h6 center-align\">Choisissez votre produit</p>
                            </div>
                        </div>

                        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 42
            echo "
                        <label class=\"cure-radio\">
                            <input name= \"product\" value= '";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "' type=\"radio\" required>
                            <article>
                                <div class=\"card center-align\">
                                    <div class=\"row\">
                                        <div class=\"col s12 m12 l4\">
                                            <div class=\"image-content\">
                                                <img src= ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "picture", [], "any", false, false, false, 50), "html", null, true);
            echo " alt=\"10 Nerf Elite Jolt© + 2 offerts\" class=\"responsive-img\">
                                            </div>
                                        </div>
                                        <div class=\"col s12 m6 l4\">
                                            <div class=\"card-content\">
                                                <p class=\"h6\">
                                                    ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
                                                </p>
                                                ";
            // line 61
            echo "                                                <p class=\"h4\">
                                                    ";
            // line 62
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 62) / 100) - twig_get_attribute($this->env, $this->source, $context["product"], "reduction", [], "any", false, false, false, 62)) . 0), "html", null, true);
            echo "€
                                                    <span class=\"h6\"><br>au lieu de <del class=\"h5 color_brand_secondary\">";
            // line 63
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 63) / 100) . 0), "html", null, true);
            echo "€</del></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"col s12 m6 l4\">
                                            <div class=\"card-content\">
                                                <p class=\"h6 color_brand_secondary\">
                                                    J'économise ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "reduction", [], "any", false, false, false, 70), "html", null, true);
            echo "€
                                                </p>
                                                <p class=\"h6\">
                                                    + livraison gratuite
                                                </p>
                                                <div class=\"picto-wrapper\">
                                                    <img src=\"assets/images/like-product.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                                    <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </label>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
                        <h6 class=\"center-align\">OUI ! Je veux profiter de cette offre exceptionnelle et créer une guerre au bureau.</h6>
                        <p class=\"center-align\">Je bénéficie gratuitement de la garantie <b>100% satisfait ou remboursé</b><br>A tous moment durant ma cure, je peux retourner mes Nerfs et me faire rembourser immédiatement.</p>
                    </section>
                    <section class=\"benefices\">
                        <h5 class=\"center-align color_product_primary\">POURQUOI NERF EST AUSSI POPULAIRE EN OPEN SPACE</h5>
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary\">Qu'est ce que Nerf ?</span>
                                <p>
                                    Les premiers modèles comprenaient la gamme Dart Tag (utilisée en compétition, et l'une des plus anciennes) et la gamme N-Strike. Depuis, plusieurs gammes ont été commercialisées : Zombie Strike (de couleur verte), Rebelle (marketés envers un public féminin), Élite et Élite XD (les plus puissantes), et Vortex (tirant des disques et possédant un modèle automatique appelé Nitron).
                                </p>
                                <p>
                                    Des accessoires peuvent compléter le blaster, comme les viseurs, les crosses, et les rallonges de canon.
                                </p>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Bienfaits :</span>
                                        <ul>
                                            <li>✔ Favorise la vengeance entre collègues</li>
                                            <li>✔ Aide à combattre l'injustice</li>
                                            <li>✔ Favorise le respect de chacun</li>
                                            <li>✔ Aide à traiter la dépression, la nervosité</li>
                                            <li>✔ Calme les esprits révolutionnaires</li>
                                            <li>✔ Aide à réduire les après-midi ennuyeuses</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Nos Conseils :</span>
                                        <b>Conseils d’utilisation :</b>
                                        <p>Toujours viser la tête</p>
                                        <b>Soyez tactiques :</b>
                                        <p>
                                            Il est possible de tenter de créer des situations qu’on pense qui ne seront pas en faveur de notre adversaire. Par exemple,

                                            Prendre une garde gauche ou droite;
                                            Effectuer des déplacements qui seront déstabilisants pour l’adversaire;
                                            Utiliser un rythme qui désavantage l’adversaire selon son style de combattant;
                                            Intimider l’adversaire par son attitude ou son regard.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"row\">
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/france.png\" class=\"responsive-img\" alt=\"Fabriqué en France\">
                                    <p class=\"color_brand_primary\">Fabriqué<br><b>en France</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/naturel.png\" class=\"responsive-img\" alt=\"100% naturel\">
                                    <p class=\"color_brand_primary\">100%<br><b>Ecologique</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/secure.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">Paiement<br><b>sécurisé</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/chrono.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                    <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/like.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">100% Satisfait<br><b>ou remboursé</b></p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"card\">
                            <div class=\"row\">
                                <div class=\"col s12 l4\">
                                    <div class=\"card-content picto-wrapper center-align\">
                                        <img src=\"assets/images/chrono-big.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                        <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                    </div>
                                </div>
                                <div class=\"col s12 l8\">
                                    <div class=\"card-content\">
                                        <p>Nous nous engageons à livrer votre commande le plus rapidement possible. Généralement, une commande est traitée en moins de 24h. Vous devez donc ensuite compter le temps de transport jusqu'à la livraison chez vous (généralement entre 24h et 48h). Les commandes passées le vendredi et le week-end sont traitées et expédiées le lundi qui suit.</p>
                                        <p>Pour toute livraison de produits extérieure à la France métropolitaine, les délais d'acheminement peuvent être légèrement plus importants.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                ";
        // line 193
        echo "                <aside class=\"sidebar col s12 m12 l4\">


                    ";
        // line 196
        $this->loadTemplate("landing_page/partials/form_new.html.twig", "landing_page/index.html.twig", 196)->display($context);
        // line 197
        echo "
                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <div class=\"card-content picto-wrapper center-align\">
                                    <img src=\"assets/images/like-big.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                    <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                </div>
                            </div>
                            <div class=\"col s12\">
                                <div class=\"card-content\">
                                    <p>Les produits BattleOffice bénéficient de la garantie satisfait ou remboursé. Vous pouvez nous retourner vos produits (sauf si la boîte a été ouverte) et nous vous les rembourserons immédiatement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        ";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), 'rest');
        echo "
";
        // line 217
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "landing_page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 217,  333 => 216,  312 => 197,  310 => 196,  305 => 193,  198 => 87,  175 => 70,  165 => 63,  161 => 62,  158 => 61,  153 => 56,  144 => 50,  135 => 44,  131 => 42,  127 => 41,  111 => 28,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    <section class=\"countdown bg_brand_secondary\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align\"><b>Dépêchez-vous !!</b> Il ne vous reste que</h4>
                </div>
                <div class=\"col s12 m12 l2\">
                    <div class=\"row center-align\">
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"minutes\" class=\"color_brand_primary\">2</span> Jours
                        </div>
                        <div class=\"time-wrapper col s12 m6\">
                            <span id=\"seconds\" class=\"color_brand_primary\">4</span> Heures
                        </div>
                    </div>
                </div>
                <div class=\"col s12 m12 l5\">
                    <h4 class=\"center-align \">pour profiter de cette offre !!</h4>
                </div>
            </div>
        </div>
    </section>
{{ form_start(form) }}
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"content col s12 m12 l8\">

                    <section class=\"formulas\">
                        <div class=\"card bg_grey\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary center-align\">Étape 1</span>
                                <p class=\"h6 center-align\">Choisissez votre produit</p>
                            </div>
                        </div>

                        {% for product in products %}

                        <label class=\"cure-radio\">
                            <input name= \"product\" value= '{{product.id}}' type=\"radio\" required>
                            <article>
                                <div class=\"card center-align\">
                                    <div class=\"row\">
                                        <div class=\"col s12 m12 l4\">
                                            <div class=\"image-content\">
                                                <img src= {{product.picture}} alt=\"10 Nerf Elite Jolt© + 2 offerts\" class=\"responsive-img\">
                                            </div>
                                        </div>
                                        <div class=\"col s12 m6 l4\">
                                            <div class=\"card-content\">
                                                <p class=\"h6\">
                                                    {{product.name}}
                                                </p>
                                                {# <p class=\"h5 color_brand_secondary\">
                                                    + 4 OFFERTS
                                                </p> #}
                                                <p class=\"h4\">
                                                    {{(product.price / 100 - product.reduction) ~ 0}}€
                                                    <span class=\"h6\"><br>au lieu de <del class=\"h5 color_brand_secondary\">{{product.price / 100 ~ 0}}€</del></span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class=\"col s12 m6 l4\">
                                            <div class=\"card-content\">
                                                <p class=\"h6 color_brand_secondary\">
                                                    J'économise {{product.reduction}}€
                                                </p>
                                                <p class=\"h6\">
                                                    + livraison gratuite
                                                </p>
                                                <div class=\"picto-wrapper\">
                                                    <img src=\"assets/images/like-product.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                                    <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </label>

                        {% endfor %}

                        <h6 class=\"center-align\">OUI ! Je veux profiter de cette offre exceptionnelle et créer une guerre au bureau.</h6>
                        <p class=\"center-align\">Je bénéficie gratuitement de la garantie <b>100% satisfait ou remboursé</b><br>A tous moment durant ma cure, je peux retourner mes Nerfs et me faire rembourser immédiatement.</p>
                    </section>
                    <section class=\"benefices\">
                        <h5 class=\"center-align color_product_primary\">POURQUOI NERF EST AUSSI POPULAIRE EN OPEN SPACE</h5>
                        <div class=\"card\">
                            <div class=\"card-content\">
                                <span class=\"card-title color_product_primary\">Qu'est ce que Nerf ?</span>
                                <p>
                                    Les premiers modèles comprenaient la gamme Dart Tag (utilisée en compétition, et l'une des plus anciennes) et la gamme N-Strike. Depuis, plusieurs gammes ont été commercialisées : Zombie Strike (de couleur verte), Rebelle (marketés envers un public féminin), Élite et Élite XD (les plus puissantes), et Vortex (tirant des disques et possédant un modèle automatique appelé Nitron).
                                </p>
                                <p>
                                    Des accessoires peuvent compléter le blaster, comme les viseurs, les crosses, et les rallonges de canon.
                                </p>
                            </div>
                            <hr>
                            <div class=\"row\">
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Bienfaits :</span>
                                        <ul>
                                            <li>✔ Favorise la vengeance entre collègues</li>
                                            <li>✔ Aide à combattre l'injustice</li>
                                            <li>✔ Favorise le respect de chacun</li>
                                            <li>✔ Aide à traiter la dépression, la nervosité</li>
                                            <li>✔ Calme les esprits révolutionnaires</li>
                                            <li>✔ Aide à réduire les après-midi ennuyeuses</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col s12 l6\">
                                    <div class=\"card-content\">
                                        <span class=\"card-title color_product_primary\">Nos Conseils :</span>
                                        <b>Conseils d’utilisation :</b>
                                        <p>Toujours viser la tête</p>
                                        <b>Soyez tactiques :</b>
                                        <p>
                                            Il est possible de tenter de créer des situations qu’on pense qui ne seront pas en faveur de notre adversaire. Par exemple,

                                            Prendre une garde gauche ou droite;
                                            Effectuer des déplacements qui seront déstabilisants pour l’adversaire;
                                            Utiliser un rythme qui désavantage l’adversaire selon son style de combattant;
                                            Intimider l’adversaire par son attitude ou son regard.

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"row\">
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/france.png\" class=\"responsive-img\" alt=\"Fabriqué en France\">
                                    <p class=\"color_brand_primary\">Fabriqué<br><b>en France</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/naturel.png\" class=\"responsive-img\" alt=\"100% naturel\">
                                    <p class=\"color_brand_primary\">100%<br><b>Ecologique</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/secure.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">Paiement<br><b>sécurisé</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/chrono.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                    <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                </div>
                            </div>
                            <div class=\"col m5ths s6\">
                                <div class=\"picto-wrapper center-align\">
                                    <img src=\"assets/images/like.png\" class=\"responsive-img\" alt=\"Paiement sécurisé\">
                                    <p class=\"color_brand_primary\">100% Satisfait<br><b>ou remboursé</b></p>
                                </div>
                            </div>

                        </div>
                    </section>
                    <section class=\"banner\">
                        <div class=\"card\">
                            <div class=\"row\">
                                <div class=\"col s12 l4\">
                                    <div class=\"card-content picto-wrapper center-align\">
                                        <img src=\"assets/images/chrono-big.png\" class=\"responsive-img\" alt=\"Votre commande est traitée en moins de 24h\">
                                        <p class=\"color_brand_primary\">Livraison<br><b>Colis suivi</b></p>
                                    </div>
                                </div>
                                <div class=\"col s12 l8\">
                                    <div class=\"card-content\">
                                        <p>Nous nous engageons à livrer votre commande le plus rapidement possible. Généralement, une commande est traitée en moins de 24h. Vous devez donc ensuite compter le temps de transport jusqu'à la livraison chez vous (généralement entre 24h et 48h). Les commandes passées le vendredi et le week-end sont traitées et expédiées le lundi qui suit.</p>
                                        <p>Pour toute livraison de produits extérieure à la France métropolitaine, les délais d'acheminement peuvent être légèrement plus importants.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                {# Sidebar Form #}
                <aside class=\"sidebar col s12 m12 l4\">


                    {% include 'landing_page/partials/form_new.html.twig' %}

                    <div class=\"card\">
                        <div class=\"row\">
                            <div class=\"col s12\">
                                <div class=\"card-content picto-wrapper center-align\">
                                    <img src=\"assets/images/like-big.png\" class=\"responsive-img\" alt=\"Garantie satisfait ou remboursé\">
                                    <p class=\"color_brand_primary\">Satisfait<br>ou remboursé</p>
                                </div>
                            </div>
                            <div class=\"col s12\">
                                <div class=\"card-content\">
                                    <p>Les produits BattleOffice bénéficient de la garantie satisfait ou remboursé. Vous pouvez nous retourner vos produits (sauf si la boîte a été ouverte) et nous vous les rembourserons immédiatement.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        {{ form_rest(form) }}
{{ form_end(form) }}
{% endblock %}
", "landing_page/index.html.twig", "/home/simplon/devilbox/data/www/battle-office/templates/landing_page/index.html.twig");
    }
}
