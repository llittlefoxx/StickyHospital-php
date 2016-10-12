<?php

/* StickyBitHospitalBundle:DossierAdministratif:TestPdfdos.html.twig */
class __TwigTemplate_1fa7c8e11122e6f317852d86e7ab552d363ff2be91a80ea7d0b251820b7ba193 extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "  Mes Factures";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo " 

";
        // line 6
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 7
        $this->displayBlock('main', $context, $blocks);
        // line 112
        echo "
";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "        <center>
    <h2> Mr/Mme ( ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "nomPatient", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "prenomPatient", array()), "html", null, true);
        echo " )</h2>
<p>
<table>
    <tr> 
        <td> <li>Identifiant  </li>
        <td> : ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "idPatient", array()), "html", null, true);
        echo " <td>
    </tr>
    <tr> 
        <td> <li>Nom  </li>
        <td> : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "nomPatient", array()), "html", null, true);
        echo " <td>
    </tr>
     <tr> 
        <td> <li>Prénom </li>
        <td> : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "prenomPatient", array()), "html", null, true);
        echo " <td>
    </tr>
     <tr> 
        <td> <li>C.I.N </li>
        <td> : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "cinPatient", array()), "html", null, true);
        echo " <td>
    </tr>
     <tr> 
        <td> <li>Date de Naissance </li>
        <td> : ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "dateNPatient", array()), "Y-m-d H:i:s"), "html", null, true);
        echo " <td>
    </tr>
     <tr> 
        <td> <li>C.I.N </li>
        <td> : ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "cinPatient", array()), "html", null, true);
        echo " <td>
    </tr>
     <tr> 
        <td> <li>Adresse </li>
        <td> : ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "adresse", array()), "html", null, true);
        echo " <td>
    </tr>
     <tr> 
        <td> <li>Téléphone </li>
        <td> : ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "telPatient", array()), "html", null, true);
        echo " <td>
    </tr>
     <tr> 
        <td> <li>Adresse mail </li>
        <td> : ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pat"]) ? $context["pat"] : $this->getContext($context, "pat")), "mailPatient", array()), "html", null, true);
        echo " <td>
    </tr>
   
 </table>
</br></br>
<h2> Historique des hospitalisations </h2>
        </center>
</br>
 <table  id=\"example1\" class=\"table table-bordered table-striped\" style=\"text-align: center\">
    <tr>
        <th>ID Hospitalisation </th>       
        <th>La date d'entrée </th>
        <th>La date de sortie </th>
        <th>Type d'admission </th>
        <th>Etat du patient </th>
        <th>Médecin responsable </th>
        <th> Imprimer </th>
        
    </tr>
   
   ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hos"]) ? $context["hos"] : $this->getContext($context, "hos")));
        foreach ($context['_seq'] as $context["_key"] => $context["h"]) {
            // line 67
            echo "        <tr>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "idHos", array()), "html", null, true);
            echo "</td>           
            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["h"], "dateH", array()), "D M Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["h"], "dateS", array()), "D M Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "typeAdmisssion", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["h"], "etatPatient", array()), "html", null, true);
            echo "</td>
            
           <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["h"], "getIdMedecin", array(), "method"), "nomMedecin", array()), "html", null, true);
            echo "</td>
            
            <td>   <a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sticky_bit_hospital_pdf_hos", array("id" => $this->getAttribute($context["h"], "idHos", array()))), "html", null, true);
            echo "\">imprimer</a> </td>
            
                      
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['h'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "    
   
</table>
    
    <center>  <h2>Liste des Factures</h2>  </center>
    <br>

        <table  id=\"example1\" class=\"table table-bordered table-striped\" style=\"text-align: center\">  
    <tr>
        <td> Numéro Facture</td>
        <td> Date Facturation</td>
        <td> Etat de la Facture</td>
        <td> Total de la Facture</td>
        <td> Voir Plus </td>
    </tr>



";
        // line 98
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($context["facture"]);
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 99
            echo "    <tr> 
        <td> ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "idFacture", array()), "html", null, true);
            echo "  </td>
        <td> ";
            // line 101
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["facture"], "dateFacturation", array()), "D M Y"), "html", null, true);
            echo " </td>
        <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "etat", array()), "html", null, true);
            echo " </td>
        <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["facture"], "totalFacture", array()), "html", null, true);
            echo "  </td>
        <td> <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sticky_bit_hospital_ligne", array("id" => $this->getAttribute($context["facture"], "idFacture", array()))), "html", null, true);
            echo "\"> Afficher</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "</table>


    
   ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:DossierAdministratif:TestPdfdos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 107,  250 => 104,  246 => 103,  242 => 102,  238 => 101,  234 => 100,  231 => 99,  227 => 98,  207 => 80,  196 => 76,  191 => 74,  186 => 72,  182 => 71,  178 => 70,  174 => 69,  170 => 68,  167 => 67,  163 => 66,  140 => 46,  133 => 42,  126 => 38,  119 => 34,  112 => 30,  105 => 26,  98 => 22,  91 => 18,  84 => 14,  74 => 9,  71 => 8,  68 => 7,  63 => 112,  61 => 7,  55 => 6,  49 => 4,  46 => 3,  39 => 2,  11 => 1,);
    }
}
