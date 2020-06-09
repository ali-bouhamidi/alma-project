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

/* product/content/_installments.html.twig */
class __TwigTemplate_88147ef3d3878a40ec9b3cabad35faffd9ad645c3d425d3398942694d7a80ca2 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/content/_installments.html.twig"));

        // line 1
        echo "<h2 class=\"md-3\">
\tEchéancier
</h2>
<div class=\"row\">

\t<div class=\"col-md-6\">
\t\t<h5 class=\"card-title text-center\">Payer en 3 fois</h5>
\t\t";
        // line 8
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 8, $this->source); })()), 0, [], "array", false, false, false, 8), "eligible", [], "any", false, false, false, 8), true)) {
            // line 9
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 9, $this->source); })()), 0, [], "array", false, false, false, 9), "installments", [], "any", false, false, false, 9));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["installement"]) {
                // line 10
                echo "\t\t\t\t";
                $this->loadTemplate("product/content/_installment_item.html.twig", "product/content/_installments.html.twig", 10)->display($context);
                // line 11
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['installement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t\t\t<div class=\"card-body text-center\">
\t\t\t\t<input type=\"radio\" id=\"count3\" name=\"count\" value=\"3\" checked>
\t\t\t\t<label for=\"count3\">3 Echéances</label>
\t\t\t</div>
\t\t";
        } else {
            // line 17
            echo "\t\t\t<h6 class=\"text-danger text-center\">
\t\t\t\tPas éligible pour ce type d'échéancier</h6>
\t\t";
        }
        // line 20
        echo "\t</div>
\t<div class=\"col-md-6\">
\t\t<h5 class=\"card-title text-center\">Payer en 4 fois</h5>
\t\t";
        // line 23
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 23, $this->source); })()), 1, [], "array", false, false, false, 23), "eligible", [], "any", false, false, false, 23), true)) {
            // line 24
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 24, $this->source); })()), 1, [], "array", false, false, false, 24), "installments", [], "any", false, false, false, 24));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["installement"]) {
                // line 25
                echo "\t\t\t\t";
                $this->loadTemplate("product/content/_installment_item.html.twig", "product/content/_installments.html.twig", 25)->display($context);
                // line 26
                echo "\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['installement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t<div class=\"card-body text-center\">
\t\t\t\t<input type=\"radio\" id=\"count4\" name=\"count\" value=\"4\" checked>
\t\t\t\t<label for=\"count4\">4 Echéances</label>
\t\t\t</div>
\t\t";
        } else {
            // line 32
            echo "\t\t\t<div class=\"text-danger text-center\">
\t\t\t\t<h6>Votre commande n'est pas éligible pour ce type d'échéancier</h6>
\t\t\t\t<ul>
\t\t\t\t\t<li>Montant minimum requis:
\t\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 36, $this->source); })()), 1, [], "array", false, false, false, 36), "constraints", [], "any", false, false, false, 36), "purchase_amount", [], "any", false, false, false, 36), "minimum", [], "array", false, false, false, 36) / 100), "html", null, true);
            echo "
\t\t\t\t\t\t€
\t\t\t\t\t</li>
\t\t\t\t\t<li>Montant maximum requis:
\t\t\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 40, $this->source); })()), 1, [], "array", false, false, false, 40), "constraints", [], "any", false, false, false, 40), "purchase_amount", [], "any", false, false, false, 40), "maximum", [], "array", false, false, false, 40) / 100), "html", null, true);
            echo "
\t\t\t\t\t\t€
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 47
        echo "</div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/content/_installments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  160 => 40,  153 => 36,  147 => 32,  140 => 27,  126 => 26,  123 => 25,  105 => 24,  103 => 23,  98 => 20,  93 => 17,  86 => 12,  72 => 11,  69 => 10,  51 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"md-3\">
\tEchéancier
</h2>
<div class=\"row\">

\t<div class=\"col-md-6\">
\t\t<h5 class=\"card-title text-center\">Payer en 3 fois</h5>
\t\t{% if content[0].eligible == true %}
\t\t\t{% for installement in content[0].installments %}
\t\t\t\t{% include 'product/content/_installment_item.html.twig' %}
\t\t\t{% endfor %}
\t\t\t<div class=\"card-body text-center\">
\t\t\t\t<input type=\"radio\" id=\"count3\" name=\"count\" value=\"3\" checked>
\t\t\t\t<label for=\"count3\">3 Echéances</label>
\t\t\t</div>
\t\t{% else %}
\t\t\t<h6 class=\"text-danger text-center\">
\t\t\t\tPas éligible pour ce type d'échéancier</h6>
\t\t{% endif %}
\t</div>
\t<div class=\"col-md-6\">
\t\t<h5 class=\"card-title text-center\">Payer en 4 fois</h5>
\t\t{% if content[1].eligible == true %}
\t\t\t{% for installement in content[1].installments %}
\t\t\t\t{% include 'product/content/_installment_item.html.twig' %}
\t\t\t{% endfor %}
\t\t\t<div class=\"card-body text-center\">
\t\t\t\t<input type=\"radio\" id=\"count4\" name=\"count\" value=\"4\" checked>
\t\t\t\t<label for=\"count4\">4 Echéances</label>
\t\t\t</div>
\t\t{% else %}
\t\t\t<div class=\"text-danger text-center\">
\t\t\t\t<h6>Votre commande n'est pas éligible pour ce type d'échéancier</h6>
\t\t\t\t<ul>
\t\t\t\t\t<li>Montant minimum requis:
\t\t\t\t\t\t{{content[1].constraints.purchase_amount['minimum'] /100 }}
\t\t\t\t\t\t€
\t\t\t\t\t</li>
\t\t\t\t\t<li>Montant maximum requis:
\t\t\t\t\t\t{{content[1].constraints.purchase_amount['maximum'] /100 }}
\t\t\t\t\t\t€
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t{% endif %}
</div></div>
", "product/content/_installments.html.twig", "/home/osboxes/Desktop/alma/templates/product/content/_installments.html.twig");
    }
}
