<?php

/* StickyBitHospitalBundle:messagemed:envoiemsg.html.twig */
class __TwigTemplate_c94d8a8fc1870a14a19bc383b95b3ba867d6dee467a1098fbdc8bdfaf54299d1 extends Twig_Template
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
 <div class=\"col-md-4\">

    <!--

     USERS LIST 

    -->
    <div class=\"box box-danger\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\"></h3>
            <div class=\"box-tools pull-right\"></div>
        </div>
        <!--

         /.box-header 

        -->
        <div class=\"box-body no-padding\">
            <ul class=\"users-list clearfix\">
                ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medecin2"]) ? $context["medecin2"] : $this->getContext($context, "medecin2")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 28
            echo "                <li>
    ";
            // line 30
            echo "     <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("envoyermsgmed", array("id" => $this->getAttribute($context["m"], "idMedecin", array()))), "html", null, true);
            echo "\">
         
  ";
            // line 33
            echo "       <span class=\"users-list-date\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomMedecin", array()), "html", null, true);
            echo "<span/>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenomMedecin", array()), "html", null, true);
            echo " </span>
     
     </a>
     
                  
                </li>
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
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
        return "StickyBitHospitalBundle:messagemed:envoiemsg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  98 => 33,  92 => 30,  89 => 28,  85 => 27,  60 => 7,  53 => 4,  48 => 5,  46 => 4,  41 => 3,  38 => 2,  11 => 1,);
    }
}
