<?php

/* BackendMedecinBundle:Intervention:edit.html.twig */
class __TwigTemplate_6090f12fea8519dfa6fcc7d2dcef2796004d1debdf14131b7f244866fdbd5ec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BackendHospitalBundle::layout.html.twig");
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "BackendHospitalBundle::layout.html.twig";
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('menu', $context, $blocks);
        // line 39
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "        <!-- Left side column. contains the logo and sidebar -->
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
                        <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("backend_hospital_dossiermedical");
        echo "\">
                            <i class=\"fa fa-folder\"></i> Dossier Médical

                        </a>
                    </li>

                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
    ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backend_hospital_dossiermedical", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\"><i class=\"fa  fa-reply pull-left\"></i> </a><h3>Modifier Intervention</h3>
    ";
    }

    // line 42
    public function block_main($context, array $blocks = array())
    {
        // line 43
        echo "

        <form action=\"\" method =\"post\" ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo " >
            <table>
                <tr>
                    <td>Libelle Intervention: </td>
                    <td>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "libIntervention", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>Prix Intervention: </td>
                    <td>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prixInterv", array()), 'widget');
        echo "</td>
                </tr>
                <tr>
                    <td>date Intervention: </td>
                    <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "dateInterv", array()), 'widget');
        echo "</td>
                </tr>
            </table>
            <input type=\"submit\"/>
            ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
        </form>

    ";
    }

    public function getTemplateName()
    {
        return "BackendMedecinBundle:Intervention:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 61,  141 => 57,  134 => 53,  127 => 49,  120 => 45,  116 => 43,  113 => 42,  106 => 40,  103 => 39,  88 => 28,  63 => 5,  60 => 4,  55 => 42,  52 => 39,  50 => 4,  47 => 3,  40 => 2,  11 => 1,);
    }
}
