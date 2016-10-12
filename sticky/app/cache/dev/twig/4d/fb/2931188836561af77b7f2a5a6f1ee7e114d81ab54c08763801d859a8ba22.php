<?php

/* StickyBitHospitalBundle:Default:index.html.twig */
class __TwigTemplate_4dfb2931188836561af77b7f2a5a6f1ee7e114d81ab54c08763801d859a8ba22 extends Twig_Template
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
        echo " Home Page ";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    
";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 

<h1> Sticky Hospital</h1>
    
";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
