<?php

/* StickyBitHospitalBundle:messagemed:list.html.twig */
class __TwigTemplate_ebf5309aa52838f0a856db59182422b0eb244abcd1965df952a923baf1c805ca extends Twig_Template
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
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>Messagerie</h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Dashboard</a></li>
            <li class=\"active\">Messagerie</li>
          </ol>
        </section>
";
    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        // line 18
        echo "<form action=\"\" method=\"post\">

";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 21
            echo "    <div class=\"box-header with-border\"></div>  
    <div class=\"box-body\">
          
                  <!-- Conversations are loaded here -->
                  <div class=\"direct-chat-messages\">
                    <!-- Message. Default to the left -->
                   <div  class=\"direct-chat-msg\">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-left' name=\"patient\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "getNomMedecin", array(), "method"), "html", null, true);
            echo "</span>
                        <span class='direct-chat-timestamp pull-right'>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateEnv", array()), "d/m/Y"), "html", null, true);
            echo " </span>
                      </div><!-- /.direct-chat-info -->
               ";
            // line 32
            echo "<!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                       ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Corp", array()), "html", null, true);
            echo "
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->
   </div>        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "     <div class=\"direct-chat-msg right\">

    <div class=\"direct-chat-info clearfix\"></div>
    <!--

     /.direct-chat-info 

    -->
    <img class=\"direct-chat-img\" alt=\"Embedded Image\" src=\"data:image/png;base64,";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["img"]) ? $context["img"] : $this->getContext($context, "img")), "html", null, true);
        echo "\"></img>
     
    <div class=\"direct-chat-text\">
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg2"]) ? $context["msg2"] : $this->getContext($context, "msg2")), "Corp", array()), "html", null, true);
        echo "
    </div>
    <!--

      
    -->

</div>
      </div>
             
 
  <div class=\"direct-chat-messages\">
                    <!-- Message. Default to the left -->
                   <div  class=\"direct-chat-msg\">
                      <div class='direct-chat-info clearfix'>
                       <div class=\"input-group\">

    <input class=\"form-control\" type=\"text\" placeholder=\"Type Message ...\" name=\"message\"></input>
    <span class=\"input-group-btn\">
        
        <input class=\"btn btn-warning btn-flat\"  type=\"submit\" value=\"envoyer\" />
    </span>

</div>
                      </div><!-- /.direct-chat-info -->
                     ";
        // line 75
        echo "<!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                     
                      </div><!-- /.direct-chat-text -->
                    </div>
    </form>    
    ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:messagemed:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 75,  137 => 50,  131 => 47,  121 => 39,  110 => 34,  106 => 32,  101 => 30,  97 => 29,  87 => 21,  83 => 20,  79 => 18,  76 => 17,  64 => 8,  61 => 7,  54 => 4,  49 => 5,  47 => 4,  42 => 3,  39 => 2,  11 => 1,);
    }
}
