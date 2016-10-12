<?php

/* StickyBitHospitalBundle:medecin:listmedecinbyservice.html.twig */
class __TwigTemplate_781cf1e6a4294e5961a66b1306f51920f74260c5e7f90cd7e2f1c75191274b81 extends Twig_Template
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
        echo "
<form action=\"\" method=\"post\">
      <table border=\"1\">
            <tr>
                <th>service</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>mail</th>
                <th>phone</th>
                <th>specialite</th>     
            </tr>
         
            
            ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listamed"]) ? $context["listamed"] : $this->getContext($context, "listamed")));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 16
            echo "                <tr>
                    <td>  <input   value=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "html", null, true);
            echo "\" readonly name=\"service\" ></input></td>
                   
                    <td>
                      ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "nomMedecin", array()), "html", null, true);
            echo "  
                    </td>
                    <td>
                      ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "prenomMedecin", array()), "html", null, true);
            echo "  
                    </td>
                    
                    <td>
                        <input   value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "mailMedecin", array()), "html", null, true);
            echo "\" readonly name=\"mail\" ></input>
                    </td>
                   
                     <td>
                      ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "telMedecin", array()), "html", null, true);
            echo "  
                    </td>
                     <td>
                      ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "specialiteMedecin", array()), "html", null, true);
            echo "  
                    </td>
       
                  <td>  <input id=\"field1\" class=\"form-control\" type=\"date\" onchange=\"myFunction()\" 
                               min=\"2015-04-06\" required=\"required\"
                               placeholder=\"MM/JJ/AAAA\" name=\"debut\" 
                      style=\"width:200px;margin-left:110px;margin-top:-25px;\">
                                   
                      </input>
                     
                  </td>
                    
   <input type=\"submit\" value=\"Fixer la date\"/>  
                </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </table>        
        
      </form>  
  
  ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:medecin:listmedecinbyservice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 50,  73 => 34,  67 => 31,  60 => 27,  53 => 23,  47 => 20,  41 => 17,  38 => 16,  34 => 15,  19 => 2,);
    }
}
