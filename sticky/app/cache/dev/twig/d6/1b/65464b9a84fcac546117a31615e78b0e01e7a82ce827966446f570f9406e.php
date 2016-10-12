<?php

/* StickyBitHospitalBundle:DossierMedical:index.html.twig */
class __TwigTemplate_d61b65464b9a84fcac546117a31615e78b0e01e7a82ce827966446f570f9406e extends Twig_Template
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
            'stylesheet' => array($this, 'block_stylesheet'),
            'header' => array($this, 'block_header'),
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
        echo " Home Page ";
    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <style>
        a:hover, a:active, a:focus{
            color: #E60A0A;
        }
   </style>
";
    }

    // line 11
    public function block_header($context, array $blocks = array())
    {
    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        echo "   
<section class=\"invoice\">
          <!-- title row -->
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <h2 class=\"page-header\">
                <i class=\"fa fa-globe\"></i> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "nomPatient", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "prenomPatient", array()), "html", null, true);
        echo "
                <small class=\"pull-right\">Date: ";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "dateCreationDossier", array()), "d/m/Y"), "html", null, true);
        echo "</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <div class=\"row invoice-info\">
            
            
            <div class=\"col-sm-4 invoice-col\">
              <b>Dossier #";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()), "html", null, true);
        echo "</b><br/>
              <br/>
              <b>Date Naissance:</b> ";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "dateNPatient", array()), "d/m/Y"), "html", null, true);
        echo " <br/>
              <b>Sexe:</b> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "sexPatient", array()), "html", null, true);
        echo "<br/>
              <b>Adresse:</b> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "adresse", array()), "html", null, true);
        echo "<br/>
              <b>Tél:</b> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "telPatient", array()), "html", null, true);
        echo "
            </div><!-- /.col -->
          </div><!-- /.row -->
    <!-- Table row -->
      <div class=\"box box-solid\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Information Médical</h3>
          <div class=\"row\">
            <div class=\"col-xs-12 table-responsive\">
              
                        <div class=\"box-body\">
                            <div id=\"accordion\" class=\"box-group\">
                                <div class=\"panel box box-primary\">
                                    <div class=\"box-header with-border\">
                                        <h4 class=\"box-title\"><a class=\"collapsed\">List des Interventions</a></h4>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Intervention</th>
                    <th>Libelle Intervention</th>
                    <th>Prix Intervention</th>
                    <th>Date Intervention</th>
                    <th>Traitement</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Interventions"]) ? $context["Interventions"] : $this->getContext($context, "Interventions")));
        foreach ($context['_seq'] as $context["_key"] => $context["intervention"]) {
            // line 60
            echo "                  <tr>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervention"], "idIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervention"], "libIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["intervention"], "prixInterv", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["intervention"], "dateInterv", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    
                  </tr>
                  
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['intervention'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                </tbody>
              </table>
                                    </div>
                                </div>
                        </div>
                        </div>
            </div><!-- /.col -->
          </div><!-- /.row -->

          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
               <div class=\"box-body\">
                            <div id=\"accordion\" class=\"box-group\">
                                <div class=\"panel box box-primary\">
                                    <div class=\"box-header with-border\">
                                        <h4 class=\"box-title\"><a class=\"collapsed\">List des Allergies</a></h4>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Allergie</th>
                    <th>Nom Allergie</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 93
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allergies"]) ? $context["Allergies"] : $this->getContext($context, "Allergies")));
        foreach ($context['_seq'] as $context["_key"] => $context["allergie"]) {
            // line 94
            echo "                  <tr>
                      <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergie"], "idAllergie", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergie"], "nomAllergie", array()), "html", null, true);
            echo "</td>
                    
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allergie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                </tbody>
              </table>
                                    </div>
                                </div>
                            </div>
               </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
          
          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
               <div class=\"box-body\">
                            <div id=\"accordion\" class=\"box-group\">
                                <div class=\"panel box box-primary\">
                                    <div class=\"box-header with-border\">
                                        <h4 class=\"box-title\"><a class=\"collapsed\">List des observations</a></h4>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Observation</th>
                    <th>Description</th>
                    <th>Date Observation</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 125
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Observations"]) ? $context["Observations"] : $this->getContext($context, "Observations")));
        foreach ($context['_seq'] as $context["_key"] => $context["observation"]) {
            // line 126
            echo "                  <tr>
                      <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["observation"], "idObservation", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["observation"], "texte", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["observation"], "dateObservation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                </tbody>
              </table>
                                    </div>
                                </div>
                            </div>
               </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
          
          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
               <div class=\"box-body\">
                            <div id=\"accordion\" class=\"box-group\">
                                <div class=\"panel box box-primary\">
                                    <div class=\"box-header with-border\">
                                        <h4 class=\"box-title\"><a class=\"collapsed\">List des Maladies</a></h4>
              <table class=\"table table-striped\">
                <thead>
                  <tr>
                    <th>Numéro Maladie</th>
                    <th>Nom Maladie</th>
                  </tr>
                </thead>
                <tbody>
                    ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Maladies"]) ? $context["Maladies"] : $this->getContext($context, "Maladies")));
        foreach ($context['_seq'] as $context["_key"] => $context["maladie"]) {
            // line 157
            echo "                  <tr>
                      <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "idMaladie", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "nomMaladie", array()), "html", null, true);
            echo "</td> 
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maladie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                </tbody>
              </table>
                                    </div>
                                </div>
                            </div>
               </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
          
          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
               <div class=\"box-body\">
                    <div id=\"accordion\" class=\"box-group\">
                    <div class=\"panel box box-primary\">
                    <div class=\"box-header with-border\">
                        <h4 class=\"box-title\"><a class=\"collapsed\">Liste des Traitements</a></h4>
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
        // line 188
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Traitements"]) ? $context["Traitements"] : $this->getContext($context, "Traitements")));
        foreach ($context['_seq'] as $context["_key"] => $context["traitement"]) {
            // line 189
            echo "                  <tr>
                      <td>";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "idTraitement", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "libTraitement", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "prixTraitement", array()), "html", null, true);
            echo "</td>
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['traitement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                </tbody>
              </table>
                    </div>
                    </div>
                    </div>
               </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
          
          <div class=\"row\">
           <div class=\"col-xs-12 table-responsive\">
               <div class=\"box-body\">
                            <div id=\"accordion\" class=\"box-group\">
                                <div class=\"panel box box-primary\">
                                    <div class=\"box-header with-border\">
                                        <h4 class=\"box-title\"><a class=\"collapsed\">List des Ordonnaces</a></h4>
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
        // line 221
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ordonnances"]) ? $context["Ordonnances"] : $this->getContext($context, "Ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 222
            echo "                  <tr>
                      <td>";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "idOrdonnance", array()), "html", null, true);
            echo "</td> 
                      <td>";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "description", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "dateOrdonnance", array()), "html", null, true);
            echo "</td>
                      <td>";
            // line 226
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "idMedicament", array()), "html", null, true);
            echo "</td>
                  </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                </tbody>
                
              </table>
                                    </div>
                                </div>
                            </div>
               </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
           </div>
                </div>
          <!-- this row will not appear when printing -->
          <div class=\"row no-print\">
            <div class=\"col-xs-12\">
              <a href=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("frontend_patient_printdossierMedical", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</a>
             
              <button class=\"btn btn-primary pull-right\" style=\"margin-right: 5px;\"><i class=\"fa fa-download\"></i> Generate PDF</button>
            </div>
          </div>
        </section><!-- /.content -->
        
";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:DossierMedical:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 243,  421 => 229,  412 => 226,  408 => 225,  404 => 224,  400 => 223,  397 => 222,  393 => 221,  365 => 195,  356 => 192,  352 => 191,  348 => 190,  345 => 189,  341 => 188,  313 => 162,  304 => 159,  300 => 158,  297 => 157,  293 => 156,  267 => 132,  258 => 129,  254 => 128,  250 => 127,  247 => 126,  243 => 125,  216 => 100,  206 => 96,  202 => 95,  199 => 94,  195 => 93,  169 => 69,  158 => 64,  154 => 63,  150 => 62,  146 => 61,  143 => 60,  139 => 59,  110 => 33,  106 => 32,  102 => 31,  98 => 30,  93 => 28,  82 => 20,  76 => 19,  66 => 13,  61 => 11,  49 => 4,  46 => 3,  39 => 2,  11 => 1,);
    }
}
