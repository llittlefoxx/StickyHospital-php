<?php

/* PidevMedecinBundle:Rdv:index.html.twig */
class __TwigTemplate_666670f9386cd2408c2dcd9fda80134896bb571c44c4aa8537682a013f300201 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevMedecinBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevMedecinBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo "  Liste des RDV";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Liste des Rdv</h1>
";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 
    

";
        // line 8
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "<table class=\"table table-bordered table-striped\" style=\"text-align: center\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Patient</th>
                <th>Date rdv</th>
                <th>Medecin</th>
                <th>Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "            <tr>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idPatient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["entity"], "dateRdv", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateRdv", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idMedecin", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idServ", array()), "html", null, true);
            echo "</td>
                <td>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"> <button id=\"affichage\" type=\"button\" class=\"btn btn-primary btn-flat\">Afficher</button></a>
                    
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rdv_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><button id=\"modifier\" type=\"button\" class=\"btn btn-primary btn-flat\">Modifier</button></a>
                    
                
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "         
        </tbody>
    </table>

        <ul>
        
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("rdv_new");
        echo "\">
                <button>Creer un nouveau RDV</button>
            </a>
        
    </ul>
    
";
    }

    public function getTemplateName()
    {
        return "PidevMedecinBundle:Rdv:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 44,  126 => 38,  114 => 32,  109 => 30,  104 => 28,  100 => 27,  94 => 26,  90 => 25,  84 => 24,  81 => 23,  77 => 22,  63 => 10,  57 => 8,  51 => 5,  48 => 4,  45 => 3,  38 => 2,  11 => 1,);
    }
}
