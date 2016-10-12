<?php

/* BackendMedecinBundle:DossierMedical:show.html.twig */
class __TwigTemplate_145667db8539c8af751e41cca94e2d42a840ee41405640b82d4840f595f7eb7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BackendMedecinBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'plugins' => array($this, 'block_plugins'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendMedecinBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Home Page ";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        $this->displayBlock('menu', $context, $blocks);
        // line 44
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 393
        echo "   ";
        $this->displayBlock('plugins', $context, $blocks);
        // line 400
        echo "   
";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel\">
                <div class=\"pull-left image\">
                    <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" />
                </div>
                <div class=\"pull-left info\">
                    <p>Alexander Pierce</p>
                    <!-- Status -->
                    <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <ul class=\"sidebar-menu\">
                <!-- Optionally, you can add icons to the links -->
                <li><a href=\"#\">Planification des RDVs</a><</li>
                <li class=\"treeview\">
                    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("backend_hospital_affichedossiermedical");
        echo "\">
                        <i class=\"fa fa-folder\"></i>Dossier Médical<i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                        <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                            <li class=\"active\"><a href=\"#\"><span>Show</span></a></li>
                            
                        </ul>
                </li>

            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
";
    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        // line 45
        echo "     <section class=\"content-header\">
                <h1>
                    Dossier Medical
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Dashboard</a></li>
                    <li class=\"active\">Dossier Médical</li>
                </ol>
            </section>
    ";
    }

    // line 55
    public function block_main($context, array $blocks = array())
    {
        // line 56
        echo "      
 <section class=\"invoice\">
          <!-- title row -->
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <h2 class=\"page-header\">
                <i class=\"fa fa-globe\"></i> ";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "nomPatient", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "prenomPatient", array()), "html", null, true);
        echo "
                <small class=\"pull-right\">Date: ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "dateCreationDossier", array()), "d/m/Y"), "html", null, true);
        echo "</small>
              </h2>
            </div><!-- /.col -->
          </div>
          <div class=\"row invoice-info\">
            
            
            <div class=\"col-sm-4 invoice-col\">
              <b>Dossier #";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()), "html", null, true);
        echo "</b><br/>
              <br/>
              <b>Date Naissance:</b> ";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "dateNPatient", array()), "d/m/Y"), "html", null, true);
        echo " <br/>
              <b>Sexe:</b> ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "sexPatient", array()), "html", null, true);
        echo "<br/>
              <b>Adresse:</b> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierpatient", array()), "idPatient", array()), "adresse", array()), "html", null, true);
        echo "<br/>
              <b>Tél:</b> ";
        // line 76
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
                    <th>Action</th>
                  </tr>
                </thead>
                ";
        // line 97
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Interventions"]) ? $context["Interventions"] : $this->getContext($context, "Interventions")));
        foreach ($context['_seq'] as $context["_key"] => $context["interventions"]) {
            // line 98
            echo "                <tbody>
                    
                  <tr>
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["interventions"], "idIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["interventions"], "libIntervention", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["interventions"], "prixInterv", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["interventions"], "dateInterv", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>
                    
                   <button type=\"button\" class=\"btn btn-primary btn-lg btn-app\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"><i class=\"fa fa-times\"></i>supprimer</button>
            
                    </td>
                  </tr>
                
                </tbody>
                
                 <div class=\"modal bs-example-modal-sm\" id=\"deleteModel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button class=\"close\" aria-label=\"Close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                            <h4 class=\"modal-title\">supprimer Intervention</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Voulez vous supprimer cette intervention?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-default pull-left\" data-dismiss=\"modal\" type=\"button\">Non</button>
                            <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_deleteintervention", array("id" => $this->getAttribute($context["interventions"], "idIntervention", array()), "idm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\" type=\"button\">Oui</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['interventions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "                
              </table>
                 <p>
                  <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_ajoutintervention", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
        echo "\"><button class=\"btn bg-navy btn-flat margin\">Ajouter</button></a>
              </p>
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
                    <th>Action</th>
                  </tr>
                </thead>
                ";
        // line 156
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allergies"]) ? $context["Allergies"] : $this->getContext($context, "Allergies")));
        foreach ($context['_seq'] as $context["_key"] => $context["allergies"]) {
            // line 157
            echo "                <tbody>
                    
                  <tr>
                   <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergies"], "idAllergie", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["allergies"], "nomAllergie", array()), "html", null, true);
            echo "</td>
                    <td>
                    <button type=\"button\" class=\"btn btn-primary btn-lg btn-app\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"><i class=\"fa fa-times\"></i>supprimer</button>
                    </td>
                  </tr>
                </tbody>
                 <div class=\"modal bs-example-modal-sm\" id=\"deleteModel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button class=\"close\" aria-label=\"Close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                            <h4 class=\"modal-title\">supprimer Intervention</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Voulez vous supprimer cette intervention?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-default pull-left\" data-dismiss=\"modal\" type=\"button\">Non</button>
                            <a href=\"";
            // line 179
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_deleteAllergie", array("id" => $this->getAttribute($context["allergies"], "idAllergie", array()), "idm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\" type=\"button\">Oui</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allergies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "              </table>
              <p>
                  <a href=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_medecin_ajoutallergie", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
        echo "\"> <button class=\"btn bg-navy btn-flat margin\">Ajouter</button></a>
              </p>
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
                    <th>Action</th>
                  </tr>
                </thead>
                ";
        // line 208
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Observations"]) ? $context["Observations"] : $this->getContext($context, "Observations")));
        foreach ($context['_seq'] as $context["_key"] => $context["observations"]) {
            // line 209
            echo "                <tbody>
                    
                  <tr>
                    <td>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["observations"], "idObservation", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["observations"], "texte", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 214
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["observations"], "dateObservation", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>
                     <button type=\"button\" class=\"btn btn-primary btn-lg btn-app\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"><i class=\"fa fa-times\"></i>supprimer</button>
                    </td>
                  </tr>
                </tbody>
                <div class=\"modal bs-example-modal-sm\" id=\"deleteModel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button class=\"close\" aria-label=\"Close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                            <h4 class=\"modal-title\">supprimer Intervention</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Voulez vous supprimer cette intervention?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-default pull-left\" data-dismiss=\"modal\" type=\"button\">Non</button>
                            <a href=\"";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_deleteObservation", array("id" => $this->getAttribute($context["observations"], "idObservation", array()), "idm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\" type=\"button\">Oui</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['observations'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "              </table>
              <p>
            <a href=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_medecin_ajoutobservation", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
        echo "\"> <button class=\"btn bg-navy btn-flat margin\">Ajouter</button></a>
              </p>
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
                    <th>Action</th>
                  </tr>
                </thead>
                ";
        // line 259
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Maladies"]) ? $context["Maladies"] : $this->getContext($context, "Maladies")));
        foreach ($context['_seq'] as $context["_key"] => $context["maladie"]) {
            // line 260
            echo "                <tbody>
                    
                  <tr>
                   <td>";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "idMaladie", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($context["maladie"], "nomMaladie", array()), "html", null, true);
            echo "</td>
                    <td>
                     <button type=\"button\" class=\"btn btn-primary btn-lg btn-app\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"><i class=\"fa fa-times\"></i>supprimer</button>
                    </td>
                  </tr>
                </tbody>
                 <div class=\"modal bs-example-modal-sm\" id=\"deleteModel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button class=\"close\" aria-label=\"Close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                            <h4 class=\"modal-title\">supprimer Intervention</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Voulez vous supprimer cette intervention?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-default pull-left\" data-dismiss=\"modal\" type=\"button\">Non</button>
                            <a href=\"";
            // line 282
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_deleteMaladie", array("id" => $this->getAttribute($context["maladie"], "idMaladie", array()), "idm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\" type=\"button\">Oui</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maladie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "              </table>
              <p>
            <a href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_medecin_ajoutMaladie", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
        echo "\"> <button class=\"btn bg-navy btn-flat margin\">Ajouter</button></a>
              </p>
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
                    <th>Action</th>
                  </tr>
                </thead>
                ";
        // line 310
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Ordonnances"]) ? $context["Ordonnances"] : $this->getContext($context, "Ordonnances")));
        foreach ($context['_seq'] as $context["_key"] => $context["ordonnance"]) {
            // line 311
            echo "                <tbody>
                    
                  <tr>
                   <td>";
            // line 314
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "idOrdonnance", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 315
            echo twig_escape_filter($this->env, $this->getAttribute($context["ordonnance"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 316
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ordonnance"], "dateOrdonnance", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>
                        <a class=\"btn btn-app\"><i class=\"fa fa-times\"></i>supprimer</a>
                    </td>
                  </tr>
                </tbody>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ordonnance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "              </table>
              <p>
                <button class=\"btn bg-navy btn-flat margin\">Ajouter</button>
              </p>
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
                    <th>Action</th>
                  </tr>
                </thead>
                ";
        // line 345
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Traitements"]) ? $context["Traitements"] : $this->getContext($context, "Traitements")));
        foreach ($context['_seq'] as $context["_key"] => $context["traitement"]) {
            // line 346
            echo "                <tbody>
                    
                  <tr>
                   <td>";
            // line 349
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "idTraitement", array()), "html", null, true);
            echo "</td> 
                    <td>";
            // line 350
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "libTraitement", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 351
            echo twig_escape_filter($this->env, $this->getAttribute($context["traitement"], "prixTraitement", array()), "html", null, true);
            echo "</td>
                    <td>
                     <button type=\"button\" class=\"btn btn-primary btn-lg btn-app\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\"><i class=\"fa fa-times\"></i>supprimer</button>
                    </td>
                  </tr>
                </tbody>
                <div class=\"modal bs-example-modal-sm\" id=\"deleteModel\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-sm\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button class=\"close\" aria-label=\"Close\" data-dismiss=\"modal\" type=\"button\"><span aria-hidden=\"true\">×</span></button>
                            <h4 class=\"modal-title\">supprimer Intervention</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Voulez vous supprimer cette intervention?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button class=\"btn btn-default pull-left\" data-dismiss=\"modal\" type=\"button\">Non</button>
                            <a href=\"";
            // line 369
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_deleteTraitement", array("id" => $this->getAttribute($context["traitement"], "idTraitement", array()), "idm" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
            echo "\"><button class=\"btn btn-primary\" type=\"button\">Oui</button></a>
                        </div>
                    </div>
                    </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['traitement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 375
        echo "              </table>
               <p>
            <a href=\"";
        // line 377
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_medecin_ajoutTraitement", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
        echo "\"> <button class=\"btn bg-navy btn-flat margin\">Ajouter</button></a>
              </p>
               </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
          <!-- this row will not appear when printing -->
          <div class=\"row no-print\">
            <div class=\"col-xs-12\">
              <a href=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_printdossier", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDossierMedical", array()))), "html", null, true);
        echo "\" target=\"_blank\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</a>
             
              <button class=\"btn btn-primary pull-right\" style=\"margin-right: 5px;\"><i class=\"fa fa-download\"></i> Generate PDF</button>
            </div>
          </div>
        </section><!-- /.content -->
        
    ";
    }

    // line 393
    public function block_plugins($context, array $blocks = array())
    {
        // line 394
        echo "       ";
        $this->displayParentBlock("plugins", $context, $blocks);
        echo "
       <script>
           \$('#deleteModel').on('shown.bs.modal', function () {
                \$('#myInput').focus();
                });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:DossierMedical:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 394,  639 => 393,  627 => 385,  616 => 377,  612 => 375,  600 => 369,  579 => 351,  575 => 350,  571 => 349,  566 => 346,  562 => 345,  538 => 323,  525 => 316,  521 => 315,  517 => 314,  512 => 311,  508 => 310,  485 => 290,  481 => 288,  469 => 282,  448 => 264,  444 => 263,  439 => 260,  435 => 259,  413 => 240,  409 => 238,  397 => 232,  376 => 214,  372 => 213,  368 => 212,  363 => 209,  359 => 208,  335 => 187,  331 => 185,  319 => 179,  298 => 161,  294 => 160,  289 => 157,  285 => 156,  261 => 135,  256 => 132,  244 => 126,  219 => 104,  215 => 103,  211 => 102,  207 => 101,  202 => 98,  198 => 97,  174 => 76,  170 => 75,  166 => 74,  162 => 73,  157 => 71,  146 => 63,  140 => 62,  132 => 56,  129 => 55,  116 => 45,  113 => 44,  95 => 30,  70 => 7,  67 => 6,  62 => 400,  59 => 393,  56 => 55,  53 => 44,  51 => 6,  48 => 5,  41 => 3,  11 => 1,);
    }
}
