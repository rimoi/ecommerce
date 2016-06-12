<?php

/* ::/layout/layout.html.twig */
class __TwigTemplate_cb15b33051a4de9dc9840ae485a052537bc178e8a881945a719ceffab41e736a extends Twig_Template
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
        $__internal_6f33e02da0fb338b798c1e62d4742a280ec897b123f95e1b1636cc9b6274a9c6 = $this->env->getExtension("native_profiler");
        $__internal_6f33e02da0fb338b798c1e62d4742a280ec897b123f95e1b1636cc9b6274a9c6->enter($__internal_6f33e02da0fb338b798c1e62d4742a280ec897b123f95e1b1636cc9b6274a9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/layout/layout.html.twig"));

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
                    <a class=\"brand\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Zemenak</a>
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
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 1));
        echo "\">CGV</a>
                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("page", array("id" => 2));
        echo "\">Mentions légales</a>
                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;Bordeaux 33 000 - 3 rue des jardins</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: +(33) 6 61 69 86 30</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: 02 35 00 00 00</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright 2016 - Zemenak</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "
    </body>
</html>
";
        
        $__internal_6f33e02da0fb338b798c1e62d4742a280ec897b123f95e1b1636cc9b6274a9c6->leave($__internal_6f33e02da0fb338b798c1e62d4742a280ec897b123f95e1b1636cc9b6274a9c6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a431137734913213df3fc5ff80ac743260ae41cc7b58d83d3dc6a5c6fd9d79e = $this->env->getExtension("native_profiler");
        $__internal_8a431137734913213df3fc5ff80ac743260ae41cc7b58d83d3dc6a5c6fd9d79e->enter($__internal_8a431137734913213df3fc5ff80ac743260ae41cc7b58d83d3dc6a5c6fd9d79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue Sur Zemenak";
        
        $__internal_8a431137734913213df3fc5ff80ac743260ae41cc7b58d83d3dc6a5c6fd9d79e->leave($__internal_8a431137734913213df3fc5ff80ac743260ae41cc7b58d83d3dc6a5c6fd9d79e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_19cdf811ad7ca11e28c5264ffea9b4052e04c2e96c58388a9c1a55533d3b7c62 = $this->env->getExtension("native_profiler");
        $__internal_19cdf811ad7ca11e28c5264ffea9b4052e04c2e96c58388a9c1a55533d3b7c62->enter($__internal_19cdf811ad7ca11e28c5264ffea9b4052e04c2e96c58388a9c1a55533d3b7c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_19cdf811ad7ca11e28c5264ffea9b4052e04c2e96c58388a9c1a55533d3b7c62->leave($__internal_19cdf811ad7ca11e28c5264ffea9b4052e04c2e96c58388a9c1a55533d3b7c62_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8d90ae7f194de620f5db4d1f95edb85932df692ad5afdbede9724f522b4385d = $this->env->getExtension("native_profiler");
        $__internal_d8d90ae7f194de620f5db4d1f95edb85932df692ad5afdbede9724f522b4385d->enter($__internal_d8d90ae7f194de620f5db4d1f95edb85932df692ad5afdbede9724f522b4385d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "        
        ";
        
        $__internal_d8d90ae7f194de620f5db4d1f95edb85932df692ad5afdbede9724f522b4385d->leave($__internal_d8d90ae7f194de620f5db4d1f95edb85932df692ad5afdbede9724f522b4385d_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d285e19ac750334265be8c1f2df7618a6f7d3ee41bcb56423ca8c928393e5a1 = $this->env->getExtension("native_profiler");
        $__internal_6d285e19ac750334265be8c1f2df7618a6f7d3ee41bcb56423ca8c928393e5a1->enter($__internal_6d285e19ac750334265be8c1f2df7618a6f7d3ee41bcb56423ca8c928393e5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d285e19ac750334265be8c1f2df7618a6f7d3ee41bcb56423ca8c928393e5a1->leave($__internal_6d285e19ac750334265be8c1f2df7618a6f7d3ee41bcb56423ca8c928393e5a1_prof);

    }

    public function getTemplateName()
    {
        return "::/layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 73,  177 => 37,  171 => 36,  160 => 11,  148 => 5,  138 => 74,  136 => 73,  132 => 72,  128 => 71,  102 => 48,  98 => 47,  88 => 39,  86 => 36,  70 => 23,  55 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Bienvenue Sur Zemenak{% endblock %}</title>*/
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
/*                     <a class="brand" href="{{ path('produits')}}">Zemenak</a>*/
/*                     <div class="nav-collapse collapse">*/
/*                         <form class="navbar-form form-search pull-right">*/
/*                             <input id="Search" name="Search" type="text" class="input-medium search-query">*/
/*                             <button type="submit" class="btn">Rechercher</button>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*             */
/*         */
/*         */
/*         {% block body %}*/
/*         */
/*         {% endblock %}*/
/* */
/*         <hr />*/
/*         <footer id="footer" class="vspace20">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="span4 offset1">*/
/*                         <h4>Informations</h4>*/
/*                         <ul class="nav nav-stacked">*/
/*                             <li><a href="{{path('page', {'id':1})}}">CGV</a>*/
/*                             <li><a href="{{path('page', {'id':2})}}">Mentions légales</a>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="span4">*/
/*                         <h4>Notre entrepôt</h4>*/
/*                         <p><i class="icon-map-marker"></i>&nbsp;Bordeaux 33 000 - 3 rue des jardins</p>*/
/*                     </div>*/
/* */
/*                     <div class="span2">*/
/*                         <h4>Nous contacter</h4>*/
/*                         <p><i class="icon-phone"></i>&nbsp;Tel: +(33) 6 61 69 86 30</p>*/
/*                         <p><i class="icon-print"></i>&nbsp;Fax: 02 35 00 00 00</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="span4">*/
/*                         <p>&copy; Copyright 2016 - Zemenak</p>*/
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
