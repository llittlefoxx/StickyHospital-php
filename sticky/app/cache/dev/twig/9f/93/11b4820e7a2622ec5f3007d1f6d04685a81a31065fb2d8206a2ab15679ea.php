<?php

/* StickyBitHospitalBundle:service:list.html.twig */
class __TwigTemplate_9f9311b4820e7a2622ec5f3007d1f6d04685a81a31065fb2d8206a2ab15679ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<form action=\"\" method=\"post\">
 <select name=\"ser\"> 
 ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mods"]) ? $context["mods"] : $this->getContext($context, "mods")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            echo " 
    <option value=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "idserv", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomServ", array()), "html", null, true);
            echo "</option>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo " </select>
 
 <input type=\"submit\" value=\"Next\"/>
   
    </form>";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:service:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  29 => 5,  23 => 4,  19 => 2,);
    }
}
