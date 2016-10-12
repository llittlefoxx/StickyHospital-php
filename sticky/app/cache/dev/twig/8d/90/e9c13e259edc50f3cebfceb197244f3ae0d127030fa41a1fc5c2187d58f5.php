<?php

/* PidevMedecinBundle:Rdv:new.html.twig */
class __TwigTemplate_8d90e9c13e259edc50f3cebfceb197244f3ae0d127030fa41a1fc5c2187d58f5 extends Twig_Template
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
            'stylesheet' => array($this, 'block_stylesheet'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
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
        echo "  Liste des RDV";
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "     ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
     <style>
         button{
             background-color: #3C8DBC;
             border-color: #367FA9;
             border-radius: 3px;
             box-shadow: none;
             display: inline-block;
             padding: 6px 12px;
             margin-bottom: 0px;
             font-size: 14px;
             font-weight: 400;
             line-height: 1.42857;
             text-align: center;
             white-space: nowrap;
             vertical-align: middle;
             cursor: pointer;
             -moz-user-select: none;
             background-image: none;
             border: 1px solid transparent;
         }
         input{
             -moz-appearance: none;
             border-color: #D2D6DE;
             display: block;
             width: 100%;
             height: 34px;
             padding: 6px 12px;
             font-size: 14px;
             line-height: 1.42857;
             color: #555;
             background-color: #FFF;
             background-image: none;
             border: 1px solid #CCC;
             border-radius: 4px;
             box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
             transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
         }
         </style>
 ";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "    <h1>Liste des Rdv</h1>
";
        // line 46
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
";
    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        // line 50
        $this->displayBlock('main', $context, $blocks);
    }

    public function block_main($context, array $blocks = array())
    {
        // line 51
        echo "        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"box box-primary\">
                    <div class=\"box-header\"><h3 class=\"box-title\">Creation d'un Rdv</h3></div>
    

                  
                        <div class=\"box-body\">
                            <div class=\"form-group\">
                                
                                ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                                <div class=\"input-group\">
                
              </div>
              <br>
              
              <div class=\"box box-solid\">

                            </div>
                            
                        </div>
                   
        <ul class=\"record_actions\">
  
        <a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("rdv");
        echo "\">
            <button class=\"btn btn-primary\">Revenir a la list des RDV</button>
        </a>
   
</ul>
                </div>
            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "PidevMedecinBundle:Rdv:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 75,  128 => 61,  116 => 51,  110 => 50,  107 => 49,  101 => 46,  98 => 45,  95 => 44,  50 => 4,  47 => 3,  40 => 2,  11 => 1,);
    }
}
