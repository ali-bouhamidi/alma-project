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

/* product/thankyou.html.twig */
class __TwigTemplate_4f2a33609418d301eba9716eac98b1acd7d023e16e0fd565aa308582c38e8eeb extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/thankyou.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/thankyou.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Merci pour votre paiement
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
        echo "\t<div class=\"jumbotron text-center\">
\t\t<h1 class=\"display-3\">Merci pour votre achat!</h1>
\t\t<p class=\"lead\">
\t\t\t<strong>Alma Project vous remercie pour votre confiance.</strong><br>
\t\t\tA très bientôt!
\t\t</p>
\t\t<hr>
\t\t<h6>Votre identifiant de paiement est:
\t\t\t<p class=\"text-info m-4\">

\t\t\t\t";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["pid"]) || array_key_exists("pid", $context) ? $context["pid"] : (function () { throw new RuntimeError('Variable "pid" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-sm\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" role=\"button\">Revenir à la page d'accueil</a>
\t\t\t</p>
\t\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/thankyou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  86 => 17,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Merci pour votre paiement
{% endblock %}

{% block body %}
\t<div class=\"jumbotron text-center\">
\t\t<h1 class=\"display-3\">Merci pour votre achat!</h1>
\t\t<p class=\"lead\">
\t\t\t<strong>Alma Project vous remercie pour votre confiance.</strong><br>
\t\t\tA très bientôt!
\t\t</p>
\t\t<hr>
\t\t<h6>Votre identifiant de paiement est:
\t\t\t<p class=\"text-info m-4\">

\t\t\t\t{{pid}}
\t\t\t</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-sm\" href=\"{{path('home')}}\" role=\"button\">Revenir à la page d'accueil</a>
\t\t\t</p>
\t\t</div>
\t{% endblock %}
", "product/thankyou.html.twig", "/home/osboxes/Desktop/alma/templates/product/thankyou.html.twig");
    }
}
