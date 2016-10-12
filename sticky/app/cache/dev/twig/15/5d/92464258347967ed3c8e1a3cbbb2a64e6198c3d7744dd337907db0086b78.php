<?php

/* BackendMedecinBundle:Allergie:new.html.twig */
class __TwigTemplate_155d92464258347967ed3c8e1a3cbbb2a64e6198c3d7744dd337907db0086b78 extends Twig_Template
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
            'menu' => array($this, 'block_menu'),
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
        echo " Allergie";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
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
    public function block_main($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayBlock('box', $context, $blocks);
        // line 69
        echo "    ";
    }

    // line 43
    public function block_box($context, array $blocks = array())
    {
        // line 44
        echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
         <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_dossiermedical", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"> <i class=\"fa  fa-reply pull-left\"></i> </a><h3 class=\"box-title\">Ajout Allergie</h3>
            </div><!-- /.box-header -->
            <form action=\"\" method =\"post\" ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " role=\"form\">
                <div class=\"box-body\">
                    <div class=\"form-group\">    
                        <label>Nom Allergie: </label>
                        ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomAllergie", array()), 'widget');
        echo "
                    </div>    
                    <div class=\"form-group\">    
                        <label>Numéro du dossier: </label>
                        ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idDossiermedical", array()), 'widget');
        echo "
                    </div>  
                </div>
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                </div>
            </form>
            ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
            ";
        // line 67
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:Allergie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 67,  152 => 64,  146 => 61,  138 => 56,  131 => 52,  124 => 48,  119 => 46,  115 => 44,  112 => 43,  108 => 69,  105 => 43,  102 => 42,  65 => 8,  62 => 7,  55 => 4,  50 => 5,  48 => 4,  43 => 3,  40 => 2,  11 => 1,);
    }
}
