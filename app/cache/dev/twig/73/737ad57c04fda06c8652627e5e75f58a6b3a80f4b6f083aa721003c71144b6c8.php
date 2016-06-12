<?php

/* layout.html.twig */
class __TwigTemplate_460c5a4a2d78bd87268908608607f499bf67dc639393aa5fb037a6639cfea354 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a95770b5dd632b36e5f0b41e2cd566e96863a3aa227e37a52bc62df9cc7bef29 = $this->env->getExtension("native_profiler");
        $__internal_a95770b5dd632b36e5f0b41e2cd566e96863a3aa227e37a52bc62df9cc7bef29->enter($__internal_a95770b5dd632b36e5f0b41e2cd566e96863a3aa227e37a52bc62df9cc7bef29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"navbar navbar-inverse navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"brand\" href=\"index.php\">DevAndClick</a>
                    <div class=\"nav-collapse collapse\">
                        <form class=\"navbar-form form-search pull-right\">
                            <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\">
                            <button type=\"submit\" class=\"btn\">Rechercher</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "
        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            <li><a href=\"texte.php\">CGV</a>
                            <li><a href=\"texte.php\">Mentions légales</a>
                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: 02 35 00 00 00</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright 2016 - DevAndClick</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
    </body>
</html>
";
        
        $__internal_a95770b5dd632b36e5f0b41e2cd566e96863a3aa227e37a52bc62df9cc7bef29->leave($__internal_a95770b5dd632b36e5f0b41e2cd566e96863a3aa227e37a52bc62df9cc7bef29_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e415a3a2bcb6975fc2491200c557cf8e5e20087264850f0f06bce9066b3dfefa = $this->env->getExtension("native_profiler");
        $__internal_e415a3a2bcb6975fc2491200c557cf8e5e20087264850f0f06bce9066b3dfefa->enter($__internal_e415a3a2bcb6975fc2491200c557cf8e5e20087264850f0f06bce9066b3dfefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e415a3a2bcb6975fc2491200c557cf8e5e20087264850f0f06bce9066b3dfefa->leave($__internal_e415a3a2bcb6975fc2491200c557cf8e5e20087264850f0f06bce9066b3dfefa_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5791bcc8d5f71e5f55c9ef7f4c6f93d875ec51489cbdbbcda7b6e9329ca832db = $this->env->getExtension("native_profiler");
        $__internal_5791bcc8d5f71e5f55c9ef7f4c6f93d875ec51489cbdbbcda7b6e9329ca832db->enter($__internal_5791bcc8d5f71e5f55c9ef7f4c6f93d875ec51489cbdbbcda7b6e9329ca832db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5791bcc8d5f71e5f55c9ef7f4c6f93d875ec51489cbdbbcda7b6e9329ca832db->leave($__internal_5791bcc8d5f71e5f55c9ef7f4c6f93d875ec51489cbdbbcda7b6e9329ca832db_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e5e4a54a2a698433e9f484148f0116462906ad7fc70ec3c4eebdf65cdf88ac8 = $this->env->getExtension("native_profiler");
        $__internal_9e5e4a54a2a698433e9f484148f0116462906ad7fc70ec3c4eebdf65cdf88ac8->enter($__internal_9e5e4a54a2a698433e9f484148f0116462906ad7fc70ec3c4eebdf65cdf88ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e5e4a54a2a698433e9f484148f0116462906ad7fc70ec3c4eebdf65cdf88ac8->leave($__internal_9e5e4a54a2a698433e9f484148f0116462906ad7fc70ec3c4eebdf65cdf88ac8_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_723b85a11fff6108fdd4a2d27f331397aac8be92b83105c52f2031306de5e3c5 = $this->env->getExtension("native_profiler");
        $__internal_723b85a11fff6108fdd4a2d27f331397aac8be92b83105c52f2031306de5e3c5->enter($__internal_723b85a11fff6108fdd4a2d27f331397aac8be92b83105c52f2031306de5e3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_723b85a11fff6108fdd4a2d27f331397aac8be92b83105c52f2031306de5e3c5->leave($__internal_723b85a11fff6108fdd4a2d27f331397aac8be92b83105c52f2031306de5e3c5_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 69,  160 => 34,  149 => 11,  137 => 5,  127 => 70,  125 => 69,  121 => 68,  117 => 67,  83 => 35,  81 => 34,  55 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <!-- CSS -->*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css')}}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="brand" href="index.php">DevAndClick</a>*/
/*                     <div class="nav-collapse collapse">*/
/*                         <form class="navbar-form form-search pull-right">*/
/*                             <input id="Search" name="Search" type="text" class="input-medium search-query">*/
/*                             <button type="submit" class="btn">Rechercher</button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% block body %}{% endblock %}*/
/* */
/*         <hr />*/
/*         <footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="span4 offset1">*/
/*                         <h4>Informations</h4>*/
/*                         <ul class="nav nav-stacked">*/
/*                             <li><a href="texte.php">CGV</a>*/
/*                             <li><a href="texte.php">Mentions légales</a>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="span4">*/
/*                         <h4>Notre entrepôt</h4>*/
/*                         <p><i class="icon-map-marker"></i>&nbsp;Paris 75 000 - 3 rue des jardins</p>*/
/*                     </div>*/
/* */
/*                     <div class="span2">*/
/*                         <h4>Nous contacter</h4>*/
/*                         <p><i class="icon-phone"></i>&nbsp;Tel: 02 35 00 00 00</p>*/
/*                         <p><i class="icon-print"></i>&nbsp;Fax: 02 35 00 00 00</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="span4">*/
/*                         <p>&copy; Copyright 2016 - DevAndClick</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
/*         <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/*         <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
