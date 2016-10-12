<?php

/* BackendMedecinBundle:DossierMedical:index.html.twig */
class __TwigTemplate_3729ea5bfe57ee737d9a49dfe88140ec7a2412f1dc0410e982f27b8060f8a505 extends Twig_Template
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
            'haed' => array($this, 'block_haed'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'box' => array($this, 'block_box'),
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
    public function block_haed($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("haed", $context, $blocks);
        echo "
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 57
        echo "    ";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Home Page ";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
  <style type=\"text/css\">
      /* FROM HTTP://WWW.GETBOOTSTRAP.COM
        * Glyphicons
        *
        * Special styles for displaying the icons and their classes in the docs.
        */

      .bs-glyphicons {
        padding-left: 0;
        padding-bottom: 1px;
        margin-bottom: 20px;
        list-style: none;
        overflow: hidden;
      }
      .bs-glyphicons li {
        float: left;
        width: 25%;
        height: 115px;
        padding: 10px;
        margin: 0 -1px -1px 0;
        font-size: 12px;
        line-height: 1.4;
        text-align: center;
        border: 1px solid #ddd;
      }
      .bs-glyphicons .glyphicon {
        margin-top: 5px;
        margin-bottom: 10px;
        font-size: 24px;
      }
      .bs-glyphicons .glyphicon-class {
        display: block;
        text-align: center;
        word-wrap: break-word; /* Help out IE10+ with class names */
      }
      .bs-glyphicons li:hover {
        background-color: rgba(86,61,124,.1);
      }

      @media (min-width: 768px) {
        .bs-glyphicons li {
          width: 12.5%;
        }
      }
      li{
          list-style: outside none none;
      }
    </style>
    ";
    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        // line 59
        $this->displayBlock('menu', $context, $blocks);
        // line 97
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 108
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
    }

    // line 59
    public function block_menu($context, array $blocks = array())
    {
        // line 60
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
               <li class=\"treeview active\">
                    <a href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("backend_hospital_affichedossiermedical");
        echo "\">
                        <i class=\"fa fa-folder\"></i> <span>Dossier Médical</span><i class=\"fa fa-angle-left pull-right\"></i>
                    </a>
                        <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                            <li><a href=\"\">Show</a></li>
                            
                        </ul>
                </li>

            </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
";
    }

    // line 97
    public function block_content($context, array $blocks = array())
    {
        // line 98
        echo "     <section class=\"content-header\">
                <h1>
                    List des dossiers Médical
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Dashboard</a></li>
                    <li class=\"active\">Dossier Médical</li>
                </ol>
            </section>
    ";
    }

    // line 108
    public function block_main($context, array $blocks = array())
    {
        // line 109
        echo "        ";
        $this->displayBlock('box', $context, $blocks);
        // line 151
        echo "  ";
    }

    // line 109
    public function block_box($context, array $blocks = array())
    {
        // line 110
        echo "        
    <div class=\"box-body\">
       <table id=\"example1\" class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th>Nom Patient</th>
                <th>Numéro du Dossier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 121
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 122
            echo "            <tr>
                <td>";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "idDossierpatient", array()), "idPatient", array()), "nomPatient", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossiermedical_show", array("id" => $this->getAttribute($context["entity"], "idDossierMedical", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idDossierMedical", array()), "html", null, true);
            echo "</a></td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossiermedical_show", array("id" => $this->getAttribute($context["entity"], "idDossierMedical", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-fw fa-eye\"></i>Show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dossiermedical_edit", array("id" => $this->getAttribute($context["entity"], "idDossierMedical", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-edit\"></i>Edit</a>
                    </li>
                </ul>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "       
        </tbody>
    </table>
</div>
      ";
        // line 148
        echo "            </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:DossierMedical:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 148,  263 => 137,  251 => 131,  245 => 128,  236 => 124,  232 => 123,  229 => 122,  225 => 121,  212 => 110,  209 => 109,  205 => 151,  202 => 109,  199 => 108,  186 => 98,  183 => 97,  165 => 83,  140 => 60,  137 => 59,  132 => 108,  129 => 97,  127 => 59,  124 => 58,  69 => 7,  66 => 6,  59 => 5,  55 => 57,  53 => 6,  51 => 5,  46 => 4,  43 => 3,  11 => 1,);
    }
}
