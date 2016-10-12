<?php

/* StickyBitHospitalBundle:messagemed:envoiemsg1.html.twig */
class __TwigTemplate_86637d2bea5ea6b1f9c61b0fe0ce73b5bf97b67eaa9324e2f6d9da4f62312293 extends Twig_Template
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
            'haed' => array($this, 'block_haed'),
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
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
    public function block_haed($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("haed", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Messagerie";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
<form action=\"\" method=\"post\">
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"envoyer\"/>
    
</form> 
 ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:messagemed:envoiemsg1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 9,  60 => 7,  53 => 4,  48 => 5,  46 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
