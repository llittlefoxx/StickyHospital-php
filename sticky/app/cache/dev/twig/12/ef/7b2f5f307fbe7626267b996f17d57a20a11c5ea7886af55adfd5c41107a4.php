<?php

/* StickyBitHospitalBundle:DossierMedical:print.html.twig */
class __TwigTemplate_12ef7b2f5f307fbe7626267b996f17d57a20a11c5ea7886af55adfd5c41107a4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>StickyHospital | Dossier Médecal</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"../../bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"../../dist/css/AdminLTE.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
    <body onload=\"window.print();\">
     
    <h1>DossierMedical</h1>
   
 <section class=\"invoice\">
          <!-- title row -->
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <h2 class=\"page-header\">
                <i class=\"fa fa-globe\"></i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "nomPatient", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "prenomPatient", array()), "html", null, true);
        echo "
                <small class=\"pull-right\">Date: ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "dateCreationDossier", array()), "d/m/Y"), "html", null, true);
        echo "</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <div class=\"row invoice-info\">
            
            
            <div class=\"col-sm-4 invoice-col\">
              <b>Dossier #";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()), "html", null, true);
        echo "</b><br/>
              <br/>
              <b>Date Naissance:</b> ";
        // line 43
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "dateNPatient", array()), "d/m/Y"), "html", null, true);
        echo " <br/>
              <b>Sexe:</b> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "sexPatient", array()), "html", null, true);
        echo "<br/>
              <b>Adresse:</b> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "adresse", array()), "html", null, true);
        echo "<br/>
              <b>Tél:</b> ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "telPatient", array()), "html", null, true);
        echo "
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class=\"row\">
            <div class=\"col-xs-12 table-responsive\">
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Intervention</th>
                    <th>Libelle Intervention</th>
                    <th>Prix Intervention</th>
                    <th>Date Intervention</th>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Interventions"]) ? $context["Interventions"] : $this->getContext($context, "Interventions")));
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 64
            echo "                  <tr>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervention"], "idIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervention"], "libIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervention"], "prixInterv", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["intervention"], "dateInterv", array()), "d/m/Y"), "html", null, true);
            echo "</td>                  
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                  
                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Allergie</th>
                    <th>Nom Allergie</th>
                  </tr>
                </thead>
                <tbody>
                ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allergies"]) ? $context["Allergies"] : $this->getContext($context, "Allergies")));
        foreach ($context['_seq'] as $context["_key"] => $context["allergie"]) {
            // line 88
            echo "                  <tr>
                      <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergie"], "idAllergie", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergie"], "nomAllergie", array()), "html", null, true);
            echo "</td>
                    
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allergie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
           <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
              <table class=\"table table-striped\">
                 <thead>
                  <tr>
                    <th>Numéro Maladie</th>
                    <th>Nom Maladie</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 108
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Maladies"]) ? $context["Maladies"] : $this->getContext($context, "Maladies")));
        foreach ($context['_seq'] as $context["_key"] => $context["maladie"]) {
            // line 109
            echo "                  <tr>
                      <td>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "idMaladie", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "nomMaladie", array()), "html", null, true);
            echo "</td> 
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maladie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
           <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
              <table class=\"table table-striped\">
               <thead>
                  <tr>
                    <th>Numéro Traitement</th>
                    <th>Libellé Traitement</th>
                    <th>Prix Traitement</th>
                    
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 130
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Traitements"]) ? $context["Traitements"] : $this->getContext($context, "Traitements")));
        foreach ($context['_seq'] as $context["_key"] => $context["traitement"]) {
            // line 131
            echo "                  <tr>
                      <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "idTraitement", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "libTraitement", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "prixTraitement", array()), "html", null, true);
            echo "</td>
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['traitement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
           <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Ordonnace</th>
                    <th>Description</th>
                    <th>Date Ordonnance</th>
                    <th>Médicament</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 153
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ordonnances"]) ? $context["Ordonnances"] : $this->getContext($context, "Ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 154
            echo "                  <tr>
                      <td>";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "idOrdonnance", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "description", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "dateOrdonnance", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "idMedicament", array()), "html", null, true);
            echo "</td>
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "                </tbody>
              </table>
            </div><!-- /.col -->
          </div><!-- /.row -->
         
          <!-- this row will not appear when printing -->
         
        </section><!-- /.content -->
        
  
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
   ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:DossierMedical:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 171,  297 => 161,  288 => 158,  284 => 157,  280 => 156,  276 => 155,  273 => 154,  269 => 153,  251 => 137,  242 => 134,  238 => 133,  234 => 132,  231 => 131,  227 => 130,  209 => 114,  200 => 111,  196 => 110,  193 => 109,  189 => 108,  173 => 94,  163 => 90,  159 => 89,  156 => 88,  152 => 87,  134 => 71,  125 => 68,  121 => 67,  117 => 66,  113 => 65,  110 => 64,  106 => 63,  86 => 46,  82 => 45,  78 => 44,  74 => 43,  69 => 41,  58 => 33,  52 => 32,  19 => 1,);
    }
}
