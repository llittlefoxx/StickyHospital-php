<?php

/* StickyBitHospitalBundle:DossierAdministratif:TestPdfhos.html.twig */
class __TwigTemplate_bfe1005ac4770a8fb7be0f684b8573e7700159f102e2b7c74c7d506837e28f6c extends Twig_Template
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
                <td> Numero Hospitalisation </td>
                <td> Type d'admission </td>
                <td> Etat du patient </td>
                <td> Date Entree </td>
                <td> Date Sortie </td>


            </tr>


            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["some"]) ? $context["some"] : $this->getContext($context, "some")));
        foreach ($context['_seq'] as $context["_key"] => $context["hos"]) {
            // line 28
            echo "                <tr>
                    <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["hos"], "idHos", array()), "html", null, true);
            echo " </td>
                    <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["hos"], "typeAdmisssion", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["hos"], "etatPatient", array()), "html", null, true);
            echo "</td>
                    <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["hos"], "dateH", array()), "D M Y"), "html", null, true);
            echo "</td>
                    <td> ";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["hos"], "dateS", array()), "D M Y"), "html", null, true);
            echo "</td>


                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
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
        return "StickyBitHospitalBundle:DossierAdministratif:TestPdfhos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 39,  70 => 33,  66 => 32,  62 => 31,  58 => 30,  54 => 29,  51 => 28,  47 => 27,  19 => 1,);
    }
}
