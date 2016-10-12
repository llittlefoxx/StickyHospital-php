<?php

/* PidevMedecinBundle:Default:contact.html.twig */
class __TwigTemplate_0bfcc550fb944eb2b40db6c4c40263875f0d7d9405cb6cb875692a8e282f2482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("PidevMedecinBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PidevMedecinBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "   
    ";
        // line 5
        $this->displayParentBlock("content", $context, $blocks);
        echo " 


    ";
        // line 8
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<header>
            <h1>Contact</h1>
        </header>
        Notre Adresse

        <script src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyB04hAzhlCKiw3wpV1YWgcZRHWpV2fZPPA\"></script>
        <script>
           var myCenter=new google.maps.LatLng(36.853358,10.208089);

function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:5,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById(\"googleMap\"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(9);
  map.setCenter(marker.getPosition());
  });
     
google.maps.event.addListener(map,'center_changed',function() {
// 3 seconds after the center of the map has changed, pan back to the marker
  window.setTimeout(function() {
    map.panTo(marker.getPosition());
  },3000);
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </head>

    <body>
        <div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>
    </body>
    <p>Voulez-vous nous contacter  ?</p>

    <form action=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">

        <a class=\"btn btn-block btn-primary\" data-toggle=\"modal\" data-target=\"#compose-modal\"><i class=\"fa fa-pencil\"></i> Compose Message</a>
        <input type=\"submit\" value=\"Submit\" />
    </form>


    <!-- COMPOSE MESSAGE MODAL -->
    <div class=\"modal fade\" id=\"compose-modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\"><i class=\"fa fa-envelope-o\"></i> Compose New Message</h4>
                </div>
                <form action=\"#\" method=\"post\">
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Nom :</span>
                                ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                                ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Email :</span>

                                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "


                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Sujet :</span>


                                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "

                            </div>
                        </div>
                        <div class=\"form-group\">
                            <span class=\"input-group-addon\">Message :</span>
                            ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "


                        </div>
                        <div class=\"form-group\">
                            <div class=\"btn btn-success btn-file\">
                                <i class=\"fa fa-paperclip\"></i> Attachment
                                <input type=\"file\" name=\"attachment\"/>
                            </div>
                            <p class=\"help-block\">Max. 32MB</p>
                        </div>

                    </div>
                    <div class=\"modal-footer clearfix\">

                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\"><i class=\"fa fa-times\"></i> Discard</button>

                        <button type=\"submit\" class=\"btn btn-primary pull-left\"><i class=\"fa fa-envelope\"></i> Send Message</button>

                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

                    </div>
                </form>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Slimscroll -->
    <script src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src='";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "'></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- Page script -->
    <script type=\"text/javascript\">
\$(function () {

    \"use strict\";

    //iCheck for checkbox and radio inputs
    \$('input[type=\"checkbox\"]').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });

    //When unchecking the checkbox
    \$(\"#check-all\").on('ifUnchecked', function (event) {
        //Uncheck all checkboxes
        \$(\"input[type='checkbox']\", \".table-mailbox\").iCheck(\"uncheck\");
    });
    //When checking the checkbox
    \$(\"#check-all\").on('ifChecked', function (event) {
        //Check all checkboxes
        \$(\"input[type='checkbox']\", \".table-mailbox\").iCheck(\"check\");
    });
    //Handle starring for glyphicon and font awesome
    \$(\".fa-star, .fa-star-o, .glyphicon-star, .glyphicon-star-empty\").click(function (e) {
        e.preventDefault();
        //detect type
        var glyph = \$(this).hasClass(\"glyphicon\");
        var fa = \$(this).hasClass(\"fa\");

        //Switch states
        if (glyph) {
            \$(this).toggleClass(\"glyphicon-star\");
            \$(this).toggleClass(\"glyphicon-star-empty\");
        }

        if (fa) {
            \$(this).toggleClass(\"fa-star\");
            \$(this).toggleClass(\"fa-star-o\");
        }
    });

    //Initialize WYSIHTML5 - text editor
    \$(\"#email_message\").wysihtml5();
});
    </script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    public function getTemplateName()
    {
        return "PidevMedecinBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 187,  230 => 141,  225 => 139,  220 => 137,  215 => 135,  210 => 133,  205 => 131,  200 => 129,  188 => 120,  166 => 101,  157 => 95,  144 => 85,  134 => 78,  130 => 77,  105 => 57,  55 => 9,  49 => 8,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}
