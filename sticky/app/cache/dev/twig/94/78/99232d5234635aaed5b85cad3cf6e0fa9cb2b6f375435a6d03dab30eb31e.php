<?php

/* StickyBitHospitalBundle::layout.html.twig */
class __TwigTemplate_947899232d5234635aaed5b85cad3cf6e0fa9cb2b6f375435a6d03dab30eb31e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'user' => array($this, 'block_user'),
            'sidebar' => array($this, 'block_sidebar'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 29
        echo "  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the 
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |  
  |---------------------------------------------------------|
  
  -->
  <body class=\"skin-blue\">
    <div class=\"wrapper\">

    <!-- Main Header -->
      <header class=\"main-header\">

        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\"><b>Admin</b>LTE</a>

        <!-- Header Navbar -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">  
              <!-- User Account Menu -->
              <li class=\"dropdown user user-menu\">
                <!-- Menu Toggle Button -->
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <!-- The user image in the navbar-->
                  <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/avatar04.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- The user image in the menu -->
                  <li class=\"user-header\">
                    <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/avatar04.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                    ";
        // line 80
        $this->displayBlock('user', $context, $blocks);
        // line 86
        echo "                  </li>
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      ";
        // line 102
        $this->displayBlock('sidebar', $context, $blocks);
        // line 144
        echo "      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
          ";
        // line 146
        $this->displayBlock('header', $context, $blocks);
        // line 159
        echo "        <!-- Main content -->
        <section class=\"content\">
          ";
        // line 161
        $this->displayBlock('main', $context, $blocks);
        // line 164
        echo "        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class=\"main-footer\">
        <!-- To the right -->
        <div class=\"pull-right hidden-xs\">
          Anything you want
        </div>
        <!-- Default to the left --> 
        <strong>Copyright &copy; 2015 <a href=\"#\">Company</a>.</strong> All rights reserved.
      </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    
    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
        <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
    <script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.11.1.js"), "html", null, true);
        echo "\"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>
";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "  <head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    ";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 21
        echo "    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
    ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "StickyHospital";
    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 9
        echo "    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
   <!-- Theme style -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
    }

    // line 80
    public function block_user($context, array $blocks = array())
    {
        // line 81
        echo "                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                    ";
    }

    // line 102
    public function block_sidebar($context, array $blocks = array())
    {
        // line 103
        echo "      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
          
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">

          <!-- Sidebar user panel (optional) -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/avatar04.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>
              <!-- Status -->
              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">Dashboard</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("listrdv");
        echo "\"><span>Prise RDV</span></a><</li>
            <li><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("sticky_bit_hospital_affichage", array("idPatient" => 2));
        echo "\"><span>Dossier Administratif</span></a></li>
            <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("frontend_patient_affichedossiermedical", array("id" => 2));
        echo "\"><span>Dossier Médical</span></a></li>
            
            
            
            <li class=\"treeview\">
              <a href=\"#\"><span>User</span> <i class=\"fa fa-angle-left pull-right\"></i></a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("frontend_patient_homepage", array("id" => 2));
        echo "\">Profile</a></li>
                <li><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("listmsgpat");
        echo "\">Messagerie</a></li>
                <li><a href=\"#\">Log Out</a></li>
              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
            ";
    }

    // line 146
    public function block_header($context, array $blocks = array())
    {
        // line 147
        echo "        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Page Header
            <small>Optional description</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
            <li class=\"active\">Here</li>
          </ol>
        </section>
        ";
    }

    // line 161
    public function block_main($context, array $blocks = array())
    {
        // line 162
        echo "          <!-- Your Page Content Here -->
          ";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 162,  330 => 161,  315 => 147,  312 => 146,  299 => 135,  295 => 134,  285 => 127,  281 => 126,  277 => 125,  261 => 112,  250 => 103,  247 => 102,  239 => 81,  236 => 80,  230 => 19,  225 => 17,  215 => 10,  212 => 9,  209 => 8,  203 => 6,  192 => 21,  190 => 8,  185 => 6,  181 => 4,  178 => 3,  170 => 195,  165 => 193,  155 => 186,  150 => 184,  145 => 182,  125 => 164,  123 => 161,  119 => 159,  117 => 146,  113 => 144,  111 => 102,  93 => 86,  91 => 80,  87 => 79,  77 => 72,  32 => 29,  30 => 3,  26 => 1,);
    }
}
