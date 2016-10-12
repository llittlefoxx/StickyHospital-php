<?php

/* StickyBitHospitalBundle:DossierAdministratif:TestPdf.html.twig */
class __TwigTemplate_163f1224151019dc70f50c06c3378288deac0b44fa5ee62c50a702cafd26554d extends Twig_Template
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
        // line 1
        echo "<html>
    <head>

    </head>
    <body>
        <header>
            <aside style=\"width: 30%; position: relative; left: auto\">
                StickyHospital <br>
                Z.I.Chotrana II- B.P.106 <br>
                2083 Pole technologique <br>
                El Ghazela <br>
            </aside>
        </header> <br>
    <center>
        <table style=\"text-align: center; column-span: 20; border: 1px; width: 100%\">
            <tr>
                <td> Libelle</td>
                <td> Quantite</td>
                <td> Prix</td>

            </tr>


            ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["some"]) ? $context["some"] : $this->getContext($context, "some")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 25
            echo "                <tr>
                    <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libLigne", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "prix", array()), "html", null, true);
            echo " </td>

                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </table>
    </center>
        <footer style=\"position: absolute; bottom: 0;\">
            <div style=\"float: left; width: 700px\">
                StickyHospital <br>
                Z.I.Chotrana II- B.P.106 <br>
                2083 Pole technologique<br
                    El Ghazela<br>
            </div>
           
            
            <div style=\"float: right\">
                Contact <br>
                Tel: (+216)70.685.685 <br>
                Email: StickyBit@gmail.com <br>
                Site: www.StickyBite.com
            </div>
            
                
           
            
        </footer>
    

</body>

</html>







";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:DossierAdministratif:TestPdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  59 => 28,  55 => 27,  51 => 26,  48 => 25,  44 => 24,  19 => 1,);
    }
}
