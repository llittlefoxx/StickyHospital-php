<?php

/* StickyBitHospitalBundle:Facture:consult.html.twig */
class __TwigTemplate_79969c8a484b013cffcbd9642da619644c0bbf57ff622bea8b20a191495ce970 extends Twig_Template
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
        echo "    <h1>Liste des Factures</h1>
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
        // line 32
        echo "
";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "        <table  id=\"example1\" class=\"table table-bordered table-striped\" style=\"text-align: center\">  
    <tr>
        <td> Numéro Facture</td>
        <td> Date Facturation</td>
        <td> Etat de la Facture</td>
        <td> Total de la Facture</td>
        <td> Voir Plus </td>
    </tr>



";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tab"]) ? $context["tab"] : $this->getContext($context, "tab")));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 21
            echo "    <tr> 
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "idFacture", array()), "html", null, true);
            echo "  </td>
        <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "dateFacturation", array()), "D M Y"), "html", null, true);
            echo " </td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "etat", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "totalFacture", array()), "html", null, true);
            echo "  </td>
        <td> <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sticky_bit_hospital_ligne", array("id" => $this->getAttribute($context["facture"], "idFacture", array()))), "html", null, true);
            echo "\"> Afficher</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>
    
   ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:Facture:consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 29,  109 => 26,  105 => 25,  101 => 24,  97 => 23,  93 => 22,  90 => 21,  86 => 20,  73 => 9,  70 => 8,  65 => 32,  63 => 8,  57 => 7,  52 => 5,  49 => 4,  46 => 3,  39 => 2,  11 => 1,);
    }
}
