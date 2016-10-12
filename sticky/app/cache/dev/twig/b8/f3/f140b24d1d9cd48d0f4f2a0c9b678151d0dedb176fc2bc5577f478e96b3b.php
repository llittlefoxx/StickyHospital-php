<?php

/* BackendMedecinBundle::layout.html.twig */
class __TwigTemplate_b8f3f140b24d1d9cd48d0f4f2a0c9b678151d0dedb176fc2bc5577f478e96b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'box' => array($this, 'block_box'),
            'plugins' => array($this, 'block_plugins'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "    </head>

    <body class=\"skin-black\">
        <div class=\"wrapper\">

            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"#\" class=\"logo\"><b>Sticky</b>Hospital</a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class=\"dropdown messages-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    <span class=\"label label-success\">4</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li><!-- start message -->
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"user image\"/>
                                                    </div>
                                                    <h4>
                                                        StickyHospital
                                                        <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class=\"fa fa-clock-o\"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                                </ul>
                            </li>
                           
                            <!-- Tasks: style can be found in dropdown.less -->
                          
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user3-128x128.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                                    <span class=\"hidden-xs\">Alexander Pierce</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </li>
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
        // line 173
        $this->displayBlock('menu', $context, $blocks);
        // line 223
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        ";
        // line 226
        $this->displayBlock('content', $context, $blocks);
        // line 229
        echo "        ";
        $this->displayBlock('main', $context, $blocks);
        // line 246
        echo "    </div><!-- /.content-wrapper -->
    <div class=\"clearfix\"></div>
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
";
        // line 259
        $this->displayBlock('plugins', $context, $blocks);
        // line 290
        echo "</body>

</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta charset=\"UTF-8\">
            <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            ";
        // line 8
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 27
        echo "            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
                <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
            <![endif]-->

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
        echo "                <!-- Bootstrap 3.3.2 -->
                <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Font Awesome Icons -->
                <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Ionicons -->
                <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Morris chart -->
                <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- jvectormap -->
                <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Daterange picker -->
                <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- Theme style -->
                <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
                <!-- AdminLTE Skins. Choose a skin from the css/skins 
                     folder instead of downloading all of them to reduce the load. -->
                <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            ";
    }

    // line 173
    public function block_menu($context, array $blocks = array())
    {
        // line 174
        echo "                <!-- Left side column. contains the logo and sidebar -->
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

                        <!-- search form (Optional) -->
                        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
                                <span class=\"input-group-btn\">
                                    <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /.search form -->

                        <!-- Sidebar Menu -->
                        <ul class=\"sidebar-menu\">
                            <!-- Optionally, you can add icons to the links -->
                            <li><a href=\"";
        // line 206
        echo $this->env->getExtension('routing')->getPath("rdv");
        echo "\">Planification des RDVs</a></li>
                            <li class=\"treeview\">
                                <a href=\"";
        // line 208
        echo $this->env->getExtension('routing')->getPath("backend_hospital_affichedossiermedical");
        echo "\">
                                    <i class=\"fa fa-folder\"></i> Dossier Médical<i class=\"fa fa-angle-left pull-right\"></i>

                                </a>
                                <ul class=\"treeview-menu menu-open\">
                                    <li><a href=\"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("backend_hospital_affichedossiermedical");
        echo "\"><span>Show</span></a></li>
                               </ul>
                            </li>
                            <li><a href=\"";
        // line 216
        echo $this->env->getExtension('routing')->getPath("listmsgmed");
        echo "\">Messagerie</a></li>

                        </ul><!-- /.sidebar-menu -->
                    </section>
                    <!-- /.sidebar -->
                </aside>
            ";
    }

    // line 226
    public function block_content($context, array $blocks = array())
    {
        // line 227
        echo "           
        ";
    }

    // line 229
    public function block_main($context, array $blocks = array())
    {
        // line 230
        echo "            <!-- Main content -->
            <section class=\"content\">

                <!-- Default box -->
                <div class=\"box\">
                    ";
        // line 235
        $this->displayBlock('box', $context, $blocks);
        // line 242
        echo "                </div><!-- /.box -->

            </section><!-- /.content -->
        ";
    }

    // line 235
    public function block_box($context, array $blocks = array())
    {
        // line 236
        echo "                        
                        <div class=\"box-body\">
                            
                        </div><!-- /.box-body -->
                       
                    ";
    }

    // line 259
    public function block_plugins($context, array $blocks = array())
    {
        // line 260
        echo "    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src='";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "'></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Sparkline -->
    <script src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- jvectormap -->
    <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- daterangepicker -->
    <script src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- datepicker -->
    <script src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- ChartJS 1.0.1 -->
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/chartjs/Chart.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/pages/dashboard2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 288,  465 => 285,  459 => 282,  454 => 280,  449 => 278,  444 => 276,  439 => 274,  434 => 272,  430 => 271,  425 => 269,  420 => 267,  415 => 265,  410 => 263,  405 => 261,  402 => 260,  399 => 259,  390 => 236,  387 => 235,  380 => 242,  378 => 235,  371 => 230,  368 => 229,  363 => 227,  360 => 226,  349 => 216,  343 => 213,  335 => 208,  330 => 206,  296 => 174,  293 => 173,  287 => 25,  281 => 22,  276 => 20,  271 => 18,  266 => 16,  261 => 14,  254 => 10,  251 => 9,  248 => 8,  242 => 6,  231 => 27,  229 => 8,  224 => 6,  221 => 5,  218 => 4,  212 => 290,  210 => 259,  195 => 246,  192 => 229,  190 => 226,  185 => 223,  183 => 173,  147 => 140,  138 => 134,  79 => 78,  34 => 35,  32 => 4,  27 => 1,);
    }
}
