<?php

/* BackendMedecinBundle:DossierMedical:print.html.twig */
class __TwigTemplate_118c506193fe020cbe8300a91d34ca92e8de8cb5a8380e5eddb93ff4bc9cd685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
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
     ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 231
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
   ";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        // line 25
        echo "    <h1>DossierMedical</h1>
    ";
    }

    // line 27
    public function block_main($context, array $blocks = array())
    {
        // line 28
        echo " <section class=\"invoice\">
          <!-- title row -->
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <h2 class=\"page-header\">
                <i class=\"fa fa-globe\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "nomPatient", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "prenomPatient", array()), "html", null, true);
        echo "
                <small class=\"pull-right\">Date: ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "dateCreationDossier", array()), "d/m/Y"), "html", null, true);
        echo "</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <div class=\"row invoice-info\">
            <div class=\"col-sm-4 invoice-col\">
              <b>Dossier #";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()), "html", null, true);
        echo "</b><br/>
              <br/>
              <b>Date Naissance:</b> ";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "dateNPatient", array()), "d/m/Y"), "html", null, true);
        echo " <br/>
              <b>Sexe:</b> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "sexPatient", array()), "html", null, true);
        echo "<br/>
              <b>Adresse:</b> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "adresse", array()), "html", null, true);
        echo "<br/>
              <b>Tél:</b> ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "telPatient", array()), "html", null, true);
        echo "
            </div><!-- /.col -->
          </div><!-- /.row -->

          <!-- Table row -->
          <div class=\"row\">
            <div class=\"col-xs-12 table-responsive\">
              <div class=\"box box-primary\">
                <div class=\"box-header\">
                     <h3 class=\"box-title\">Liste des Interventions</h3>
                </div>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Intervention</th>
                    <th>Libelle Intervention</th>
                    <th>Prix Intervention</th>
                    <th>Date Intervention</th>
                  </tr>
                </thead>
                ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Interventions"]) ? $context["Interventions"] : $this->getContext($context, "Interventions")));
        foreach ($context['_seq'] as $context["_key"] => $context["interventions"]) {
            // line 66
            echo "                <tbody>
                    
                  <tr>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["interventions"], "idIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["interventions"], "libIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["interventions"], "prixInterv", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["interventions"], "dateInterv", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                   
                  </tr>
                
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interventions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "              </table>
                </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
             <div class=\"box box-primary\">
               <div class=\"box-header\">
                     <h3 class=\"box-title\">Liste des Allergies</h3>
                </div>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Allergie</th>
                    <th>Nom Allergie</th>
                  </tr>
                </thead>
                ";
        // line 96
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allergies"]) ? $context["Allergies"] : $this->getContext($context, "Allergies")));
        foreach ($context['_seq'] as $context["_key"] => $context["allergies"]) {
            // line 97
            echo "                <tbody>
                    
                  <tr>
                   <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergies"], "idAllergie", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergies"], "nomAllergie", array()), "html", null, true);
            echo "</td>
                    
                  </tr>
                </tbody>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allergies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "              </table>
              
               </div>
             
            </div><!-- /.col -->
          </div><!-- /.row -->
           <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
              <div class=\"box box-primary\">
               <div class=\"box-header\">
                     <h3 class=\"box-title\">Liste des Observations</h3>
                </div>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro d'Observation</th>
                    <th>Description</th>
                    <th>Date Observation</th>
                  </tr>
                </thead>
                ";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Observations"]) ? $context["Observations"] : $this->getContext($context, "Observations")));
        foreach ($context['_seq'] as $context["_key"] => $context["observations"]) {
            // line 128
            echo "                <tbody>
                    
                  <tr>
                    <td>";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["observations"], "idObservation", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["observations"], "texte", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["observations"], "dateObservation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                  </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "              </table>
               </div>
             
            </div><!-- /.col -->
          </div><!-- /.row -->
           <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
             <div class=\"box box-primary\">
               <div class=\"box-header\">
                     <h3 class=\"box-title\">Liste des Maladies</h3>
                </div>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Maladie</th>
                    <th>Nom Maladie</th>
                  </tr>
                </thead>
                ";
        // line 155
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Maladies"]) ? $context["Maladies"] : $this->getContext($context, "Maladies")));
        foreach ($context['_seq'] as $context["_key"] => $context["maladie"]) {
            // line 156
            echo "                <tbody>
                  <tr>
                   <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "idMaladie", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "nomMaladie", array()), "html", null, true);
            echo "</td>
                  </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maladie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "              </table>
               </div>
             
            </div><!-- /.col -->
          </div><!-- /.row -->
           <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
              <div class=\"box box-primary\">
               <div class=\"box-header\">
                     <h3 class=\"box-title\">Liste des Ordonnances</h3>
                </div>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Ordonnance</th>
                    <th>Description</th>
                    <th>Date Ordonnance</th>
                  </tr>
                </thead>
                ";
        // line 182
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ordonnances"]) ? $context["Ordonnances"] : $this->getContext($context, "Ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 183
            echo "                <tbody>
                    
                  <tr>
                   <td>";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "idOrdonnance", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 188
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordonnance"], "dateOrdonnance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                  </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "              </table>
               </div>
             
            </div><!-- /.col -->
          </div><!-- /.row -->
          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
              <div class=\"box box-primary\">
               <div class=\"box-header\">
                     <h3 class=\"box-title\">Liste des Traitements</h3>
                </div>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Traitement</th>
                    <th>Libellé traitement</th>
                    <th>Prix traitement</th>
                  </tr>
                </thead>
                ";
        // line 211
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Traitements"]) ? $context["Traitements"] : $this->getContext($context, "Traitements")));
        foreach ($context['_seq'] as $context["_key"] => $context["traitement"]) {
            // line 212
            echo "                <tbody>
                    
                  <tr>
                   <td>";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "idTraitement", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "libTraitement", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "prixTraitement", array()), "html", null, true);
            echo "</td>
                  </tr>
                </tbody>
                
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['traitement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "              </table>
               </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <!-- this row will not appear when printing -->
         
        </section><!-- /.content -->
        
    ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:DossierMedical:print.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  398 => 222,  387 => 217,  383 => 216,  379 => 215,  374 => 212,  370 => 211,  349 => 192,  339 => 188,  335 => 187,  331 => 186,  326 => 183,  322 => 182,  301 => 163,  291 => 159,  287 => 158,  283 => 156,  279 => 155,  259 => 137,  249 => 133,  245 => 132,  241 => 131,  236 => 128,  232 => 127,  210 => 107,  198 => 101,  194 => 100,  189 => 97,  185 => 96,  165 => 78,  153 => 72,  149 => 71,  145 => 70,  141 => 69,  136 => 66,  132 => 65,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  92 => 40,  83 => 34,  77 => 33,  70 => 28,  67 => 27,  62 => 25,  59 => 24,  51 => 231,  48 => 27,  46 => 24,  21 => 1,);
    }
}
