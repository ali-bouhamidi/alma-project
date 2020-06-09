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

/* product/content/_alma_payement.html.twig */
class __TwigTemplate_bb9926bf2ca198e316f0515f4b6c627b28ee60a467b88a93bd79d549bda76e95 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/content/_alma_payement.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("payement");
        echo "\" method=\"POST\">
\t";
        // line 2
        $this->loadTemplate("product/content/_installments.html.twig", "product/content/_alma_payement.html.twig", 2)->display($context);
        // line 3
        echo "\t<h2>
\t\tPasser la commande
\t</h2>
\t<h5 class=\"mb-4 text-primary\">
\t\tVos informations personnelles</h5>
\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"last_name\">Nom</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"last_name\" id=\"last_name\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 11, $this->source); })()), "customer", [], "any", false, false, false, 11), "last_name", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"first_name\">Prénom</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"first_name\" id=\"first_name\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 15, $this->source); })()), "customer", [], "any", false, false, false, 15), "first_name", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
\t\t</div>
\t</div>

\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"email\">E-mail</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"email\" id=\"email\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 22, $this->source); })()), "customer", [], "any", false, false, false, 22), "email", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"phone\">Téléphone</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"phone\" id=\"phone\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 26, $this->source); })()), "customer", [], "any", false, false, false, 26), "phone", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
\t\t</div>
\t</div>
\t<h5 class=\"mb-4 text-primary\">
\t\tAdresse de livraison</h5>

\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"line1\">Adresse</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"line1\" id=\"line1\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 35, $this->source); })()), "shipping_address", [], "any", false, false, false, 35), "line1", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
\t\t</div>

\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"line2\">Complément</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"line2\" id=\"line2\" placeholder=\"Appartement, Porte, Etage... \">
\t\t</div>
\t</div>
\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"postal_code\">Code postal</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"postal_code\" id=\"postal_code\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 46, $this->source); })()), "shipping_address", [], "any", false, false, false, 46), "postal_code", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"city\">Villes</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"city\" id=\"city\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new RuntimeError('Variable "customer" does not exist.', 50, $this->source); })()), "shipping_address", [], "any", false, false, false, 50), "city", [], "any", false, false, false, 50), "html", null, true);
        echo "\">
\t\t</div>
\t</div>
\t<div class=\"pull-right m-5\">
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider ma commande\"/>
\t</div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/content/_alma_payement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 50,  107 => 46,  93 => 35,  81 => 26,  74 => 22,  64 => 15,  57 => 11,  47 => 3,  45 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"{{path('payement')}}\" method=\"POST\">
\t{% include 'product/content/_installments.html.twig' %}
\t<h2>
\t\tPasser la commande
\t</h2>
\t<h5 class=\"mb-4 text-primary\">
\t\tVos informations personnelles</h5>
\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"last_name\">Nom</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"last_name\" id=\"last_name\" value=\"{{customer.customer.last_name}}\">
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"first_name\">Prénom</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"first_name\" id=\"first_name\" value=\"{{customer.customer.first_name}}\">
\t\t</div>
\t</div>

\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"email\">E-mail</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"email\" id=\"email\" value=\"{{customer.customer.email}}\">
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"phone\">Téléphone</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"phone\" id=\"phone\" value=\"{{customer.customer.phone}}\">
\t\t</div>
\t</div>
\t<h5 class=\"mb-4 text-primary\">
\t\tAdresse de livraison</h5>

\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"line1\">Adresse</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"line1\" id=\"line1\" value=\"{{customer.shipping_address.line1}}\">
\t\t</div>

\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"line2\">Complément</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"line2\" id=\"line2\" placeholder=\"Appartement, Porte, Etage... \">
\t\t</div>
\t</div>
\t<div class=\"form-row\">
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"postal_code\">Code postal</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"postal_code\" id=\"postal_code\" value=\"{{customer.shipping_address.postal_code}}\">
\t\t</div>
\t\t<div class=\"form-group col-md-6\">
\t\t\t<label class=\"col-4\" for=\"city\">Villes</label>
\t\t\t<input type=\"text\" class=\"col-7\" name=\"city\" id=\"city\" value=\"{{customer.shipping_address.city}}\">
\t\t</div>
\t</div>
\t<div class=\"pull-right m-5\">
\t\t<input type=\"submit\" class=\"btn btn-primary\" value=\"Valider ma commande\"/>
\t</div>
</form>
", "product/content/_alma_payement.html.twig", "/home/osboxes/Desktop/alma/templates/product/content/_alma_payement.html.twig");
    }
}
