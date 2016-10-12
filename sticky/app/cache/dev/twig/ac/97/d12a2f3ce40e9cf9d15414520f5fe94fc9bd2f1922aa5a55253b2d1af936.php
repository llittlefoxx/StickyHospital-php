<?php

/* StickyBitHospitalBundle:Profile:index.html.twig */
class __TwigTemplate_ac97d12a2f3ce40e9cf9d15414520f5fe94fc9bd2f1922aa5a55253b2d1af936 extends Twig_Template
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
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://snipplicious.com/css/bootstrap-3.2.0.min.css\">

    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://snipplicious.com/css/font-awesome-4.1.0.min.css\">

    <script src=\"http://snipplicious.com/js/jquery.js\"></script>
    <script src=\"http://snipplicious.com/js/bootstrap.min.js\"></script>
    <style>
        .container {
            width: 1122px;
        }
        input,select{
            display: table-cell;
            border-radius: 0px !important;
            border-color: #D2D6DE;
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857;
            color: #555;
            background-image: none;
            border: 1px solid #CCC;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        }
    </style>

";
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
    }

    // line 36
    public function block_main($context, array $blocks = array())
    {
        echo "   
    <div class=\"container\">
        <h1 class=\"page-header\">Edit Profile</h1>
        <div class=\"row\">
            <!-- left column -->
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"text-center\">
                    <img src=\"http://lorempixel.com/200/200/people/9/\" class=\"avatar img-circle img-thumbnail\" alt=\"avatar\">
                    <h6>Upload a different photo...</h6>
                    <input type=\"file\" class=\"text-center center-block well well-sm\">
                    <a class=\"btn btn-social btn-facebook\"><i class=\"fa fa-facebook\"></i></a>
                    <a class=\"btn btn-social btn-flickr\"><i class=\"fa fa-flickr\"></i></a>
                    <a class=\"btn btn-social btn-google-plus\"><i class=\"fa fa-google-plus\"></i></a>
                    <a class=\"btn btn-social btn-twitter\"><i class=\"fa fa-twitter\"></i></a>

                </div>
            </div>
            <div class=\"col-md-4 col-sm-6 col-xs-12\">
                <div class=\"text-center\">


                </div>
            </div>
            <!-- edit form column -->
            <div class=\"col-md-8 col-sm-6 col-xs-12 personal-info\">
                <div class=\"alert alert-info alert-dismissable\">
                    <a class=\"panel-close close\" data-dismiss=\"alert\">×</a> 
                    <i class=\"fa fa-coffee\"></i>
                    This is an <strong>.alert</strong>. Use this to show important messages to the user.
                </div>
                <h3>Personal info</h3>
                <form class=\"form-horizontal\" role=\"form\" action=\"\" method =\"post\" ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'enctype');
        echo ">
                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">First name:</label>
                        <div class=\"col-lg-8 input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenomPatient", array()), 'widget');
        echo "
                            ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenomPatient", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Last name:</label>
                        <div class=\"col-lg-8 input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-user\"></i>
                            </div>
                            ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomPatient", array()), 'widget');
        echo "
                            ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nomPatient", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Adresse:</label>
                        <div class=\"col-lg-8 input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-home\"></i>
                            </div>
                            ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse", array()), 'widget');
        echo "
                            ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "adresse", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Email:</label>
                        <div class=\"col-lg-8 input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-envelope\"></i>
                            </div>
                            ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "mailPatient", array()), 'widget');
        echo "
                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "mailPatient", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-lg-3 control-label\">Tel:</label>
                        <div class=\"col-lg-8 input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-phone\"></i>
                            </div>
                            ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telPatient", array()), 'widget');
        echo "
                            ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "telPatient", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Sexe:</label>
                        <div class=\"col-lg-8 input-group input-group-sm\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-female\"></i>
                            </div>
                            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sexPatient", array()), 'widget');
        echo "
                            ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "sexPatient", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">CIN:</label>
                        <div class=\"col-lg-8 input-group input-group-sm\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-credit-card\"></i>
                            </div>
                            ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "cinPatient", array()), 'widget');
        echo "
                            ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "cinPatient", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\">Date Naissance:</label>
                        <div class=\"col-md-8 input-group\">
                            <div class=\"input-group-addon\">
                                <i class=\"fa fa-calendar\"></i>
                            </div>
                            ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "dateNPatient", array()), 'widget');
        echo "
                            ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "dateNPatient", array()), 'errors');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-md-3 control-label\"></label>
                        <div class=\"col-md-8\">
                            <input class=\"btn bg-navy margin\" value=\"Save Changes\" type=\"submit\">
                            <span></span>
                            <input class=\"btn bg-gray margin\" value=\"Cancel\" type=\"reset\">
                        </div>
                    </div>
                    <div class=\"alert alert-danger alert-dismissable\">
                        <button class=\"close\" aria-hidden=\"true\" data-dismiss=\"alert\" type=\"button\">x</button>
                        <h4>
                            <i class=\"icon fa fa-ban\"></i>
                            Alert!
                        </h4>
                        ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'errors');
        echo "
                    </div>
                </form>


            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "StickyBitHospitalBundle:Profile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 162,  250 => 145,  246 => 144,  234 => 135,  230 => 134,  218 => 125,  214 => 124,  202 => 115,  198 => 114,  186 => 105,  182 => 104,  170 => 95,  166 => 94,  154 => 85,  150 => 84,  138 => 75,  134 => 74,  124 => 67,  89 => 36,  84 => 34,  49 => 4,  46 => 3,  39 => 2,  11 => 1,);
    }
}
