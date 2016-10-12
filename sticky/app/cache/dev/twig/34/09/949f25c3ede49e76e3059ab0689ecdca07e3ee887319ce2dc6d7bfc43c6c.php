<?php

/* BackendMedecinBundle:messagepatient:home.html.twig */
class __TwigTemplate_3409949f25c3ede49e76e3059ab0689ecdca07e3ee887319ce2dc6d7bfc43c6c extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("listmsgpat");
        echo "\">
                         inbox</a>   
                    </td>
                    <td>
                        <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("envoyermsgmed");
        echo "\">
                       Send message
                    </a>  ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:messagepatient:home.html.twig";
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
