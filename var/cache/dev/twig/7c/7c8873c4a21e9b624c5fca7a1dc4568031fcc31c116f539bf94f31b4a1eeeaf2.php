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

/* product/cart.html.twig */
class __TwigTemplate_cad98200f1548a32a87af920871938b66bc14d2711a8f968adc5603cd55c521f extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/cart.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon Panier - Alma Project
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t<div class=\"container\">
\t\t<div class=\"text-center m-5\">
\t\t\t<h2>Alma Project</h2>
\t\t</div>

\t\t<div class=\"card-header bg-dark text-light\">
\t\t\t<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>
\t\t\tVotre Panier
\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"btn btn-outline-info btn-sm pull-right\">Retour</a>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t";
        // line 19
        if ((isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 text-center\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23), "html", null, true);
            echo "&w=160&q=120\" alt=\"prewiew\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
            echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" col-md-4 text-right row\">
\t\t\t\t\t\t<div class=\"col-md-6 text-right\" style=\"padding-top: 5px\">
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t<strong id=\"unit_price\">";
            // line 36
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 2, ".", ","), "html", null, true);
            echo "</strong>
\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t<span class=\"text-muted ml-2\">x</span>

\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<input type=\"number\" style=\"max-width: 70px;\" step=\"1\" max=\"99\" min=\"1\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\" title=\"Qty\" size=\"4\" onchange=\"changeQuantity(this.value)\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 text-right\">
\t\t\t\t\t\t\t<a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_from_cart");
            echo "\" type=\"button\" class=\"btn btn-outline-danger btn-xs\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"row\">


\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\tPrix Total:
\t\t\t\t\t\t\t<strong id=\"total\">";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total_price"]) || array_key_exists("total_price", $context) ? $context["total_price"] : (function () { throw new RuntimeError('Variable "total_price" does not exist.', 60, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t€</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 \">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<form action=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payement_eligibility");
            echo "\" method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"totalprice\" id=\"totalprice\" value=\"\"/>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" id=\"quantity\" value=\"\"/>
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info\" value=\"Payer avec Alma\"/>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"m-4\">

\t\t\t\t";
            // line 79
            if ((isset($context["error"]) || array_key_exists("error", $context))) {
                // line 80
                echo "\t\t\t\t\t<h6>
\t\t\t\t\t\tUne erreure s'est produite</h6>
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
                // line 83
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 83, $this->source); })()), "error", [], "any", false, false, false, 83));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 84
                    echo "\t\t\t\t\t\t\t<li class=\"text-danger\">";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo ":
\t\t\t\t\t\t\t\t";
                    // line 85
                    echo twig_escape_filter($this->env, $context["value"]);
                    echo "</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "\t\t\t\t\t</ul>

\t\t\t\t";
            }
            // line 90
            echo "

\t\t\t</div>
\t\t\t";
            // line 93
            if (((isset($context["content"]) || array_key_exists("content", $context)) && 0 === twig_compare((isset($context["eligible"]) || array_key_exists("eligible", $context) ? $context["eligible"] : (function () { throw new RuntimeError('Variable "eligible" does not exist.', 93, $this->source); })()), true))) {
                // line 94
                echo "\t\t\t\t<div class=\"m-4\">
\t\t\t\t\t";
                // line 95
                $this->loadTemplate("product/content/_alma_payement.html.twig", "product/cart.html.twig", 95)->display($context);
                // line 96
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif ((            // line 97
(isset($context["content"]) || array_key_exists("content", $context)) && 0 === twig_compare((isset($context["eligible"]) || array_key_exists("eligible", $context) ? $context["eligible"] : (function () { throw new RuntimeError('Variable "eligible" does not exist.', 97, $this->source); })()), false))) {
                // line 98
                echo "\t\t\t\t<div class=\"text-danger text-center\">
\t\t\t\t\t<h6>Votre commande n'est pas éligible pour un paiement en plusieurs fois</h6>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Montant minimum requis:
\t\t\t\t\t\t\t";
                // line 103
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 103, $this->source); })()), 0, [], "array", false, false, false, 103), "constraints", [], "any", false, false, false, 103), "purchase_amount", [], "any", false, false, false, 103), "minimum", [], "array", false, false, false, 103) / 100), "html", null, true);
                echo "
\t\t\t\t\t\t\t€
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>Montant maximum requis:
\t\t\t\t\t\t\t";
                // line 107
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 107, $this->source); })()), 0, [], "array", false, false, false, 107), "constraints", [], "any", false, false, false, 107), "purchase_amount", [], "any", false, false, false, 107), "maximum", [], "array", false, false, false, 107) / 100), "html", null, true);
                echo "
\t\t\t\t\t\t\t€
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t";
            }
            // line 113
            echo "
\t\t";
        } else {
            // line 115
            echo "\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p>Aucun produit dans votre panier
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<a href=\"";
            // line 122
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"btn btn-success pull-right\">Effectuer des achats</a>
\t\t\t</div>
\t\t";
        }
        // line 125
        echo "\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 127
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        echo "\t\t<script>
\t\t\tfunction changeQuantity(val) {
let unit_price = document.getElementById(\"unit_price\").innerHTML

let newtotal = val * unit_price

document.getElementById(\"total\").innerHTML = newtotal.toFixed(2) + ' €'

document.getElementById(\"totalprice\").value = newtotal.toFixed(2)
document.getElementById(\"quantity\").value = val
}
\t\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 128,  274 => 127,  267 => 125,  261 => 122,  252 => 115,  248 => 113,  239 => 107,  232 => 103,  225 => 98,  223 => 97,  220 => 96,  218 => 95,  215 => 94,  213 => 93,  208 => 90,  203 => 87,  195 => 85,  190 => 84,  186 => 83,  181 => 80,  179 => 79,  163 => 66,  154 => 60,  137 => 46,  131 => 43,  121 => 36,  112 => 30,  106 => 27,  99 => 23,  94 => 20,  92 => 19,  86 => 16,  75 => 7,  68 => 6,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Panier - Alma Project
{% endblock %}

{% block body %}

\t<div class=\"container\">
\t\t<div class=\"text-center m-5\">
\t\t\t<h2>Alma Project</h2>
\t\t</div>

\t\t<div class=\"card-header bg-dark text-light\">
\t\t\t<i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i>
\t\t\tVotre Panier
\t\t\t<a href=\"{{path('home')}}\" class=\"btn btn-outline-info btn-sm pull-right\">Retour</a>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t\t{% if quantity %}
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-2 text-center\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{product.image}}&w=160&q=120\" alt=\"prewiew\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>
\t\t\t\t\t\t\t{{product.name}}
\t\t\t\t\t\t</h4>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{product.description}}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\" col-md-4 text-right row\">
\t\t\t\t\t\t<div class=\"col-md-6 text-right\" style=\"padding-top: 5px\">
\t\t\t\t\t\t\t<h6>
\t\t\t\t\t\t\t\t<strong id=\"unit_price\">{{product.price|number_format(2, '.', ',') }}</strong>
\t\t\t\t\t\t\t\t€
\t\t\t\t\t\t\t\t<span class=\"text-muted ml-2\">x</span>

\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t<input type=\"number\" style=\"max-width: 70px;\" step=\"1\" max=\"99\" min=\"1\" value=\"{{quantity}}\" title=\"Qty\" size=\"4\" onchange=\"changeQuantity(this.value)\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-2 text-right\">
\t\t\t\t\t\t\t<a href=\"{{path('remove_from_cart')}}\" type=\"button\" class=\"btn btn-outline-danger btn-xs\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<div class=\"row\">


\t\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\tPrix Total:
\t\t\t\t\t\t\t<strong id=\"total\">{{total_price|number_format(2, '.', ',') }}
\t\t\t\t\t\t\t\t€</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-2 \">
\t\t\t\t\t\t<div class=\"pull-right\">
\t\t\t\t\t\t\t<form action=\"{{path('payement_eligibility')}}\" method=\"post\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"totalprice\" id=\"totalprice\" value=\"\"/>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"quantity\" id=\"quantity\" value=\"\"/>
\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-info\" value=\"Payer avec Alma\"/>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</div>
\t\t\t<div class=\"m-4\">

\t\t\t\t{% if error is defined  %}
\t\t\t\t\t<h6>
\t\t\t\t\t\tUne erreure s'est produite</h6>
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% for key, value in error.error %}
\t\t\t\t\t\t\t<li class=\"text-danger\">{{ key }}:
\t\t\t\t\t\t\t\t{{ value|e }}</li>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>

\t\t\t\t{% endif %}


\t\t\t</div>
\t\t\t{% if content is defined and eligible == true %}
\t\t\t\t<div class=\"m-4\">
\t\t\t\t\t{% include 'product/content/_alma_payement.html.twig' %}
\t\t\t\t</div>
\t\t\t{% elseif content is defined and eligible == false %}
\t\t\t\t<div class=\"text-danger text-center\">
\t\t\t\t\t<h6>Votre commande n'est pas éligible pour un paiement en plusieurs fois</h6>

\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>Montant minimum requis:
\t\t\t\t\t\t\t{{content[0].constraints.purchase_amount['minimum'] /100 }}
\t\t\t\t\t\t\t€
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>Montant maximum requis:
\t\t\t\t\t\t\t{{content[0].constraints.purchase_amount['maximum'] /100 }}
\t\t\t\t\t\t\t€
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t{% else %}
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<p>Aucun produit dans votre panier
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"card-footer\">
\t\t\t\t<a href=\"{{path('home')}}\" class=\"btn btn-success pull-right\">Effectuer des achats</a>
\t\t\t</div>
\t\t{% endif %}
\t{% endblock %}

\t{% block javascripts %}
\t\t<script>
\t\t\tfunction changeQuantity(val) {
let unit_price = document.getElementById(\"unit_price\").innerHTML

let newtotal = val * unit_price

document.getElementById(\"total\").innerHTML = newtotal.toFixed(2) + ' €'

document.getElementById(\"totalprice\").value = newtotal.toFixed(2)
document.getElementById(\"quantity\").value = val
}
\t\t</script>
\t{% endblock %}
", "product/cart.html.twig", "/home/osboxes/Desktop/alma/templates/product/cart.html.twig");
    }
}
