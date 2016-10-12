<?php

/* BackendMedecinBundle:messagepatient:envoiemsg.html.twig */
class __TwigTemplate_2e782e2c9261873bb931c728e5ac23c1a6e1a7035bfde8918b846856f98106b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("BackendMedecinBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

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

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Home Page ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $this->displayParentBlock("content", $context, $blocks);
        echo "
 
   
    
    <div class=\"col-md-4\">

   <div class=\"box box-danger\">

    <div class=\"box-header with-border\">
        <h3 class=\"box-title\"></h3>
        <div class=\"box-tools pull-right\">
            <span class=\"label label-danger\">Send new message</span>
          
        </div>
    </div>
    <!--

     /.box-header 

    -->
    <div class=\"box-body no-padding\" style=\"display: block;\">

       
        <div class=\"box-body no-padding\">
            <ul class=\"users-list clearfix\">
                ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecin2"]) ? $context["medecin2"] : $this->getContext($context, "medecin2")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 40
            echo "                <li>
                     <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("envoyermsgpat", array("id2" => $this->getAttribute($context["m"], "idPatient", array()))), "html", null, true);
            echo "\">
                         <img alt=\"User Image\" src=\"data:image/png;base64,";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
            echo "\" width=\"80\" height=\"80\"></img>
                    </a>
                    <span class=\"users-list-date\">";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomPatient", array()), "html", null, true);
            echo " </span>
                </li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </ul>
            <!--

             /.users-list 

            -->
        </div>
        <!--

         /.box-body 

        -->
        <div class=\"box-footer text-center\"></div>
        <!--

         /.box-footer 

        -->
    </div>
    <!--

    /.box 

    -->

</div>";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:messagepatient:envoiemsg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 47,  90 => 44,  85 => 42,  81 => 41,  78 => 40,  74 => 39,  44 => 14,  37 => 13,  11 => 12,);
    }
}
