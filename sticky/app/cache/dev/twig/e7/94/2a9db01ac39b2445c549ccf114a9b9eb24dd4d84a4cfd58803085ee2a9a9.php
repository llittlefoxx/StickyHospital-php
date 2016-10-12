<?php

/* StickyBitHospitalBundle:messagepatient:list.html.twig */
class __TwigTemplate_e7942a9db01ac39b2445c549ccf114a9b9eb24dd4d84a4cfd58803085ee2a9a9 extends Twig_Template
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
        echo "<form action=\"\" method=\"post\">

";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 7
            echo "      <div class=\"box-body\">
                  <!-- Conversations are loaded here -->
                  <div class=\"direct-chat-messages\">
                    <!-- Message. Default to the left -->
                   <div  class=\"direct-chat-msg\">
                      <div class='direct-chat-info clearfix'>
                        <span class='direct-chat-name pull-left' name=\"patient\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "getNomPatient", array(), "method"), "html", null, true);
            echo "</span>
                        <span class='direct-chat-timestamp pull-right'>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateEnv", array()), "d/m/Y"), "html", null, true);
            echo " </span>
                      </div><!-- /.direct-chat-info -->
                      ";
            // line 16
            echo "<!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                       ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "Corp", array()), "html", null, true);
            echo "
                      </div><!-- /.direct-chat-text -->
                    </div><!-- /.direct-chat-msg -->
   </div>         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    <div class=\"direct-chat-msg right\">
    <div class=\"direct-chat-info clearfix\"></div>
   ";
        // line 25
        echo "    <div class=\"direct-chat-text\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msg2"]) ? $context["msg2"] : $this->getContext($context, "msg2")), "Corp", array()), "html", null, true);
        echo "
    </div>
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
        // line 46
        echo "<!-- /.direct-chat-img -->
                      <div class=\"direct-chat-text\">
                     
                      </div><!-- /.direct-chat-text -->
                    </div>
    </form>    
    ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:messagepatient:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 46,  93 => 26,  90 => 25,  86 => 22,  76 => 18,  72 => 16,  67 => 14,  63 => 13,  55 => 7,  51 => 6,  47 => 4,  44 => 3,  37 => 2,  11 => 1,);
    }
}
