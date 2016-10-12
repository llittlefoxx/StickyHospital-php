<?php

/* BackendMedecinBundle:Default:index.html.twig */
class __TwigTemplate_7bbc421127ab1fbb669f00fb0c399ec9f19d190903bcebdcbc14b4c695d03abf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BackendMedecinBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendMedecinBundle::layout.html.twig";
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
        echo "    <h1><center>StickyHospital</center></h1>
";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  53 => 6,  48 => 4,  45 => 3,  38 => 2,  11 => 1,);
    }
}
