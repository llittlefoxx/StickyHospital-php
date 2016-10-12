<?php

/* PidevMedecinBundle:Rdv:edit.html.twig */
class __TwigTemplate_0f5c17b929229661d86fb7731d846aabe235d110a5b762b64ff82684b6b106af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevMedecinBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevMedecinBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "  Editer un RDV";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    Editer un RDV
";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
    

";
        // line 8
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "
        <ul class=\"record_actions\">
    
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("rdv");
        echo "\">
            <button>Revenir a liste des RDV</button>
        </a>
            
 
  
   ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "PidevMedecinBundle:Rdv:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 14,  63 => 11,  57 => 8,  51 => 5,  48 => 4,  45 => 3,  38 => 2,  11 => 1,);
    }
}
