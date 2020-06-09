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

/* product/content/_installment_item.html.twig */
class __TwigTemplate_fa187dda90004da1e52136f3d1b2fe942bf6957c16d9c6f4f50e8de8da177f43 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/content/_installment_item.html.twig"));

        // line 1
        echo "<ul class=\"list-group\">
\t<li class=\"list-group-item\">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t";
        // line 5
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["installement"]) || array_key_exists("installement", $context) ? $context["installement"] : (function () { throw new RuntimeError('Variable "installement" does not exist.', 5, $this->source); })()), "due_date", [], "any", false, false, false, 5), "d - m - Y"), "html", null, true);
        echo "
\t\t\t</div>
\t\t\t<div class=\"col-md-8 text-info\">
\t\t\t\t<h6>
\t\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["installement"]) || array_key_exists("installement", $context) ? $context["installement"] : (function () { throw new RuntimeError('Variable "installement" does not exist.', 9, $this->source); })()), "net_amount", [], "any", false, false, false, 9) / twig_number_format_filter($this->env, 100, 2, ".", ",")), "html", null, true);
        echo "
\t\t\t\t\t€
\t\t\t\t\t";
        // line 11
        if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["installement"]) || array_key_exists("installement", $context) ? $context["installement"] : (function () { throw new RuntimeError('Variable "installement" does not exist.', 11, $this->source); })()), "customer_fee", [], "any", false, false, false, 11), 0)) {
            // line 12
            echo "\t\t\t\t\t\t+

\t\t\t\t\t\t<small>";
            // line 14
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["installement"]) || array_key_exists("installement", $context) ? $context["installement"] : (function () { throw new RuntimeError('Variable "installement" does not exist.', 14, $this->source); })()), "customer_fee", [], "any", false, false, false, 14) / twig_number_format_filter($this->env, 100, 2, ".", ",")), "html", null, true);
            echo "
\t\t\t\t\t\t\t€ (frais de service)</small>
\t\t\t\t\t";
        }
        // line 17
        echo "\t\t\t\t</h6>

\t\t\t</div>

\t\t</div>
\t</li>
</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/content/_installment_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  64 => 14,  60 => 12,  58 => 11,  53 => 9,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"list-group\">
\t<li class=\"list-group-item\">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-md-4 text-center\">
\t\t\t\t{{ installement.due_date| date(\"d - m - Y\") }}
\t\t\t</div>
\t\t\t<div class=\"col-md-8 text-info\">
\t\t\t\t<h6>
\t\t\t\t\t{{ installement.net_amount / 100 |number_format(2, '.', ',')  }}
\t\t\t\t\t€
\t\t\t\t\t{% if installement.customer_fee !=0 %}
\t\t\t\t\t\t+

\t\t\t\t\t\t<small>{{installement.customer_fee / 100 |number_format(2, '.', ',') }}
\t\t\t\t\t\t\t€ (frais de service)</small>
\t\t\t\t\t{% endif %}
\t\t\t\t</h6>

\t\t\t</div>

\t\t</div>
\t</li>
</ul>
", "product/content/_installment_item.html.twig", "/home/osboxes/Desktop/alma/templates/product/content/_installment_item.html.twig");
    }
}
