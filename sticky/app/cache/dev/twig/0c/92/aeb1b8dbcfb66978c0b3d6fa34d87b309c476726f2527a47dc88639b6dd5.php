<?php

/* StickyBitHospitalBundle:Rdv:Update.html.twig */
class __TwigTemplate_0c92aeb1b8dbcfb66978c0b3d6fa34d87b309c476726f2527a47dc88639b6dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("StickyBitHospitalBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'calender' => array($this, 'block_calender'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Rdv";
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        $this->displayParentBlock("main", $context, $blocks);
        echo " 


    ";
        // line 7
        $this->displayBlock('calender', $context, $blocks);
        // line 13
        echo "  ";
    }

    // line 7
    public function block_calender($context, array $blocks = array())
    {
        $this->displayParentBlock("calender", $context, $blocks);
        echo " 
<form action=\"\" method=\"post\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Enregister\"/>
</form> 
 ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:Rdv:Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  59 => 7,  55 => 13,  53 => 7,  45 => 4,  38 => 3,  11 => 2,);
    }
}
