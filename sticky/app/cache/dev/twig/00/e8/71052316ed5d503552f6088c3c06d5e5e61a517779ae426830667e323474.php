<?php

/* BackendMedecinBundle:Observation:new.html.twig */
class __TwigTemplate_00e871052316ed5d503552f6088c3c06d5e5e61a517779ae426830667e323474 extends Twig_Template
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

    // line 2
    public function block_haed($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("haed", $context, $blocks);
        echo "
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Observation";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        $this->displayBlock('menu', $context, $blocks);
        // line 41
        echo " 
";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 77
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
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
                        <!-- Sidebar Menu -->
                        <ul class=\"sidebar-menu\">
                            <!-- Optionally, you can add icons to the links -->
                            <li><a href=\"#\">Planification des RDVs</a></li>
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-folder\"></i> Dossier Médical

                                </a>
                            </li>

                        </ul><!-- /.sidebar-menu -->
                    </section>
                    <!-- /.sidebar -->
                </aside>
";
    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        // line 45
        echo "    ";
        $this->displayBlock('box', $context, $blocks);
        // line 76
        echo "    ";
    }

    // line 45
    public function block_box($context, array $blocks = array())
    {
        // line 46
        echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
             <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_dossiermedical", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"> <i class=\"fa  fa-reply pull-left\"></i> </a><h3 class=\"box-title\">Ajout Observation</h3>
            </div><!-- /.box-header -->
            <form action=\"\" method =\"post\" ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " role=\"form\">
                <div class=\"box-body\">
                    <div class=\"form-group\">    
                        <label>Text: </label>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "texte", array()), 'widget');
        echo "
                    </div>    
                    <div class=\"form-group\">    
                        <label>Date Observation: </label>
                        ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "dateObservation", array()), 'widget');
        echo "
                    </div> 
                    <div class=\"form-group\">    
                        <label>Numéro du Dossier: </label>
                        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idDossiermedical", array()), 'widget');
        echo "
                    </div> 
                    
                </div>
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                </div>
            </form>
            ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
            ";
        // line 74
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:Observation:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 74,  183 => 71,  177 => 68,  168 => 62,  161 => 58,  154 => 54,  147 => 50,  142 => 48,  138 => 46,  135 => 45,  131 => 76,  128 => 45,  125 => 44,  120 => 42,  84 => 9,  81 => 8,  76 => 77,  74 => 44,  72 => 42,  69 => 41,  67 => 8,  64 => 7,  57 => 4,  52 => 5,  50 => 4,  45 => 3,  42 => 2,  11 => 1,);
    }
}
