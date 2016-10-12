<?php

/* StickyBitHospitalBundle:messagemed:home.html.twig */
class __TwigTemplate_7aa52793f7adf07135039bf6019295c8bca723a97df17cc76e64d870688e5f2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "                     <td>
                        <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("listmsgmed ");
        echo "\">
                         inbox</a>   
                    </td>
                    <td>
                       <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("envoyermsg");
        echo "\">
                       Send message
                    </a>  ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:messagemed:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  22 => 3,  19 => 2,);
    }
}
