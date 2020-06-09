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

/* product/index.html.twig */
class __TwigTemplate_fb5a4795a893d48bae1822b6289a1a89b5031cd488ee4b9598e478631fc7bfd1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
\t- Alma Project
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "\t<div class=\"container\">
\t\t<div class=\"text-center m-5\">
\t\t\t<h2>Alma Project</h2>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15), "html", null, true);
        echo "&w=550&q=80\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<h5>";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "price", [], "any", false, false, false, 21), 2, ".", ","), "html", null, true);
        echo "€</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart");
        echo "\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"quantity\" id=\"quantity\" value=\"1\" min=\"1\" max=\"99\" style=\"max-width: 70px;\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Ajouter au panier\" class=\"btn btn-warning\">
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<ul class=\"nav nav-tabs mt-5\" id=\"myTab\" role=\"tablist\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" id=\"description-tab\" data-toggle=\"tab\" href=\"#description\" role=\"tab\" aria-controls=\"description\" aria-selected=\"true\">Descritpion</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" id=\"reviews-tab\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"false\">Reviews</a>
\t\t\t</li>

\t\t</ul>
\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "description", [], "any", false, false, false, 44), "html", null, true);
        echo "</div>
\t\t\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">Aucun avis pour ce product.</div>
\t\t</div>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 44,  105 => 25,  98 => 21,  94 => 20,  86 => 15,  78 => 9,  71 => 8,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\t{{product.name}}
\t- Alma Project
{% endblock %}

{% block body %}
\t<div class=\"container\">
\t\t<div class=\"text-center m-5\">
\t\t\t<h2>Alma Project</h2>
\t\t</div>
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<img src=\"{{product.image}}&w=550&q=80\"/>
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<h4>{{product.name}}</h4>
\t\t\t\t\t\t<h5>{{ product.price|number_format(2, '.', ',') }}€</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
\t\t\t\t\t<div>
\t\t\t\t\t\t<form action=\"{{path(\"add_to_cart\")}}\" method=\"post\">
\t\t\t\t\t\t\t<input type=\"number\" name=\"quantity\" id=\"quantity\" value=\"1\" min=\"1\" max=\"99\" style=\"max-width: 70px;\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Ajouter au panier\" class=\"btn btn-warning\">
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<ul class=\"nav nav-tabs mt-5\" id=\"myTab\" role=\"tablist\">
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link active\" id=\"description-tab\" data-toggle=\"tab\" href=\"#description\" role=\"tab\" aria-controls=\"description\" aria-selected=\"true\">Descritpion</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link\" id=\"reviews-tab\" data-toggle=\"tab\" href=\"#reviews\" role=\"tab\" aria-controls=\"reviews\" aria-selected=\"false\">Reviews</a>
\t\t\t</li>

\t\t</ul>
\t\t<div class=\"tab-content\" id=\"myTabContent\">
\t\t\t<div class=\"tab-pane fade show active\" id=\"description\" role=\"tabpanel\" aria-labelledby=\"description-tab\">{{product.description}}</div>
\t\t\t<div class=\"tab-pane fade\" id=\"reviews\" role=\"tabpanel\" aria-labelledby=\"reviews-tab\">Aucun avis pour ce product.</div>
\t\t</div>

\t</div>
{% endblock %}
", "product/index.html.twig", "/home/osboxes/Desktop/alma/templates/product/index.html.twig");
    }
}
