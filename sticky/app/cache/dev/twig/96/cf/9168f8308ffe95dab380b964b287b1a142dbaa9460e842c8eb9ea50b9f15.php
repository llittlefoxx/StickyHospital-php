<?php

/* StickyBitHospitalBundle:Facture:ligne.html.twig */
class __TwigTemplate_96cf9168f8308ffe95dab380b964b287b1a142dbaa9460e842c8eb9ea50b9f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("StickyBitHospitalBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StickyBitHospitalBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "  Mes Factures";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Les lignes de la Facture</h1>
";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 

";
        // line 7
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "    <table  id=\"example1\" class=\"table table-bordered table-striped\" style=\"text-align: center\">
    <tr>
        <td> Libelle</td>
        <td> Quantité</td>
        <td> Prix</td>
        
    </tr>


";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 19
            echo "    <tr>
        <td> ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libLigne", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "prix", array()), "html", null, true);
            echo " </td>
    
    </tr>
 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </table>
<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sticky_bit_hospital_pdf", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">imprimer</a>
";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:Facture:ligne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 28,  106 => 27,  95 => 22,  91 => 21,  87 => 20,  84 => 19,  80 => 18,  69 => 9,  63 => 8,  57 => 7,  52 => 5,  49 => 4,  46 => 3,  39 => 2,  11 => 1,);
    }
}
