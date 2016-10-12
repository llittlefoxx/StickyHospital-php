<?php

/* BackendMedecinBundle:Maladie:new.html.twig */
class __TwigTemplate_d516662f79025cc9d19718355e4e5022ce5758c1645aad2d09f0cd206893cedb extends Twig_Template
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
    }

    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " Maladies ";
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
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
                            <li><a href=\"#\">Planification des RDVs</a><</li>
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

    // line 40
    public function block_main($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->displayBlock('box', $context, $blocks);
        // line 67
        echo "    ";
    }

    // line 41
    public function block_box($context, array $blocks = array())
    {
        // line 42
        echo "        <div class=\"box box-primary\">
            <div class=\"box-header\">
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_dossiermedical", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"> <i class=\"fa  fa-reply pull-left\"></i> </a><h3 class=\"box-title\">Ajout Maladie</h3>
            </div><!-- /.box-header -->
            <form action=\"\" method =\"post\" ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " role=\"form\">
                <div class=\"box-body\">
                    <div class=\"form-group\">    
                        <label>Nom Maladie: </label>
                        ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomMaladie", array()), 'widget');
        echo "
                    </div>   
                    <div class=\"form-group\">    
                        <label>Numéro du Dossier: </label>
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "idDossiermedical", array()), 'widget');
        echo "
                    </div>  
                </div>
                <div class=\"box-footer\">
                    <button type=\"submit\" class=\"btn btn-primary\">Submit</button>
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
                </div>
            </form>
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
            ";
        // line 65
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:Maladie:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  147 => 62,  141 => 59,  133 => 54,  126 => 50,  119 => 46,  114 => 44,  110 => 42,  107 => 41,  103 => 67,  100 => 41,  97 => 40,  61 => 7,  58 => 6,  48 => 4,  43 => 3,  40 => 2,  11 => 1,);
    }
}
