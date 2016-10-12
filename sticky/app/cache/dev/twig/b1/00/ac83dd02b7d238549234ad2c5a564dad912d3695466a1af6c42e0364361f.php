<?php

/* StickyBitHospitalBundle:Rdv:listrdv.html.twig */
class __TwigTemplate_b100ac83dd02b7d238549234ad2c5a564dad912d3695466a1af6c42e0364361f extends Twig_Template
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
            'main' => array($this, 'block_main'),
            'calender' => array($this, 'block_calender'),
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
        echo " Rdv";
    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $this->displayParentBlock("main", $context, $blocks);
        echo " 


    ";
        // line 6
        $this->displayBlock('calender', $context, $blocks);
    }

    public function block_calender($context, array $blocks = array())
    {
        $this->displayParentBlock("calender", $context, $blocks);
        echo " 
   
        <section>
            <table class=\"table table-bordered table-striped\" style=\"text-align: center\">
  
    <th>Date Rendez vous</th>
    <th>heure</th>
    <th>Service de rendez vous</th>
    <th>Medecin</th>
    
      ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mods"]) ? $context["mods"] : $this->getContext($context, "mods")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 17
            echo "    <tr> 
    <th>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateRdv", array()), "Y/m/d"), "html", null, true);
            echo "</th>
    <th>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["m"], "dateRdv", array()), "H:i:s"), "html", null, true);
            echo "</th>
    <th>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "getIdServ", array(), "method"), "nomServ", array()), "html", null, true);
            echo "</th>    
    <th>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["m"], "getIdMedecin", array(), "method"), "nomMedecin", array()), "html", null, true);
            echo "</th> 
    <th>  <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("updaterdv", array("id" => $this->getAttribute($context["m"], "idRdv", array()))), "html", null, true);
            echo "\">
                <button>Changer votre Rendez-vous</button>
      </a>
     </th> 
      <th>  <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sup", array("id" => $this->getAttribute($context["m"], "idRdv", array()))), "html", null, true);
            echo "\">
                <button>Annuler</button>
      </a>
     </th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " 
                     </section>
   
            </table>
  ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:Rdv:listrdv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 30,  101 => 26,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  75 => 17,  71 => 16,  53 => 6,  45 => 3,  38 => 2,  11 => 1,);
    }
}
