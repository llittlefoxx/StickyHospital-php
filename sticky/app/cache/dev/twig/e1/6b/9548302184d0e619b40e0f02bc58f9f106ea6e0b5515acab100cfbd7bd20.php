<?php

/* BackendMedecinBundle:messagemed:home.html.twig */
class __TwigTemplate_e16b9548302184d0e619b40e0f02bc58f9f106ea6e0b5515acab100cfbd7bd20 extends Twig_Template
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
        return "BackendMedecinBundle:messagemed:home.html.twig";
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
