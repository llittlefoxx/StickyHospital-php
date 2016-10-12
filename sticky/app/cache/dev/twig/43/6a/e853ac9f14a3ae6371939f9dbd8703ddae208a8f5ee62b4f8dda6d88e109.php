<?php

/* PidevMedecinBundle:Rdv:show.html.twig */
class __TwigTemplate_436ae853ac9f14a3ae6371939f9dbd8703ddae208a8f5ee62b4f8dda6d88e109 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevMedecinBundle::layout2.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'calender' => array($this, 'block_calender'),
            'test' => array($this, 'block_test'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevMedecinBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Rdv";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $this->displayParentBlock("content", $context, $blocks);
        echo " 



    ";
        // line 7
        $this->displayBlock('calender', $context, $blocks);
    }

    public function block_calender($context, array $blocks = array())
    {
        $this->displayParentBlock("calender", $context, $blocks);
        echo " 
        ";
        // line 8
        $this->displayBlock('test', $context, $blocks);
        // line 50
        echo "    ";
    }

    // line 8
    public function block_test($context, array $blocks = array())
    {
        // line 9
        echo "        <section>
            
            <table class=\"record_properties\" border='1'>
                <tbody>
                    <tr>
                        <th>Id RDV</th>
                        <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Patient</th>
                        <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idPatient", array()), "html", null, true);
        echo "</td>
                    </tr>

                    <tr>
                        <th>Date RDV</th>
                        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateRdv", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Service</th>
                        <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idServ", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Medecin</th>
                        <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idMedecin", array()), "html", null, true);
        echo "</td>
                    </tr>
                </tbody>
            </table>



            <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("rdv");
        echo "\">
                <button>Revenir a la list des RDV</button>
            </a>


            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <button>Editer RDV</button>
            </a>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "
        </section>
    ";
    }

    public function getTemplateName()
    {
        return "PidevMedecinBundle:Rdv:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  128 => 44,  120 => 39,  110 => 32,  103 => 28,  96 => 24,  88 => 19,  81 => 15,  73 => 9,  70 => 8,  66 => 50,  64 => 8,  55 => 7,  46 => 3,  39 => 2,  11 => 1,);
    }
}
