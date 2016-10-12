<?php

/* BackendMedecinBundle:messagepatient:envoiemsg1.html.twig */
class __TwigTemplate_4b6d21f179978008fb25c988d7be6bcdfc02c9e2228c871167b1299da3f5b531 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("BackendMedecinBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Home Page ";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<form action=\"\" method=\"post\">
    ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"envoyer\"/>
    
</form> 
 ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:messagepatient:envoiemsg1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 6,  44 => 4,  37 => 3,  11 => 2,);
    }
}
