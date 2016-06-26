<?php

/* ::/layout/layout.html.twig */
class __TwigTemplate_92d5ea6626711051b877152c35b7ce5bb0c161ea542d43f21eb176d422c1c3cd extends Twig_Template
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
        $__internal_8e6fd67367e8e9189e3a600dfe1dbb9fd009b6effb8f83c36d80cf74e45ef3eb = $this->env->getExtension("native_profiler");
        $__internal_8e6fd67367e8e9189e3a600dfe1dbb9fd009b6effb8f83c36d80cf74e45ef3eb->enter($__internal_8e6fd67367e8e9189e3a600dfe1dbb9fd009b6effb8f83c36d80cf74e45ef3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
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
                        ";
        // line 25
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 26
        echo "                    </div>
                </div>
            </div>
        </div>
            
        
        
        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "
        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 45
        echo "                            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 46
        echo "                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Zemenak</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "
    </body>
</html>
";
        
        $__internal_8e6fd67367e8e9189e3a600dfe1dbb9fd009b6effb8f83c36d80cf74e45ef3eb->leave($__internal_8e6fd67367e8e9189e3a600dfe1dbb9fd009b6effb8f83c36d80cf74e45ef3eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a882d5ea28a410abbe537336e2577eca4cd7954fc443df2cba5a3b8c6a39badd = $this->env->getExtension("native_profiler");
        $__internal_a882d5ea28a410abbe537336e2577eca4cd7954fc443df2cba5a3b8c6a39badd->enter($__internal_a882d5ea28a410abbe537336e2577eca4cd7954fc443df2cba5a3b8c6a39badd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue Sur Zemenak";
        
        $__internal_a882d5ea28a410abbe537336e2577eca4cd7954fc443df2cba5a3b8c6a39badd->leave($__internal_a882d5ea28a410abbe537336e2577eca4cd7954fc443df2cba5a3b8c6a39badd_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c023b544c8183c5c6d7d4ce8ba028b656d3dca120d1caebac83d8ed0dece492f = $this->env->getExtension("native_profiler");
        $__internal_c023b544c8183c5c6d7d4ce8ba028b656d3dca120d1caebac83d8ed0dece492f->enter($__internal_c023b544c8183c5c6d7d4ce8ba028b656d3dca120d1caebac83d8ed0dece492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c023b544c8183c5c6d7d4ce8ba028b656d3dca120d1caebac83d8ed0dece492f->leave($__internal_c023b544c8183c5c6d7d4ce8ba028b656d3dca120d1caebac83d8ed0dece492f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c81cc8da3a5c865eaa36fa531c5af333188f9768559c973b0b2b66a754544416 = $this->env->getExtension("native_profiler");
        $__internal_c81cc8da3a5c865eaa36fa531c5af333188f9768559c973b0b2b66a754544416->enter($__internal_c81cc8da3a5c865eaa36fa531c5af333188f9768559c973b0b2b66a754544416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "        
        ";
        
        $__internal_c81cc8da3a5c865eaa36fa531c5af333188f9768559c973b0b2b66a754544416->leave($__internal_c81cc8da3a5c865eaa36fa531c5af333188f9768559c973b0b2b66a754544416_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fef87fb05161af19c2c3a5d90bbe0b1893da5e939bb8116384167de3fe84172 = $this->env->getExtension("native_profiler");
        $__internal_4fef87fb05161af19c2c3a5d90bbe0b1893da5e939bb8116384167de3fe84172->enter($__internal_4fef87fb05161af19c2c3a5d90bbe0b1893da5e939bb8116384167de3fe84172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4fef87fb05161af19c2c3a5d90bbe0b1893da5e939bb8116384167de3fe84172->leave($__internal_4fef87fb05161af19c2c3a5d90bbe0b1893da5e939bb8116384167de3fe84172_prof);

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
        return array (  194 => 70,  186 => 34,  180 => 33,  169 => 11,  157 => 5,  147 => 71,  145 => 70,  141 => 69,  137 => 68,  129 => 63,  120 => 57,  116 => 56,  108 => 51,  101 => 46,  98 => 45,  88 => 36,  86 => 33,  77 => 26,  75 => 25,  70 => 23,  55 => 12,  53 => 11,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
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
/*                         {% render(controller('EcommerceBundle:Produits:recherche')) %}*/
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
/*                             {# Appelle d'une méthode dans le template de base, merci symfony #}*/
/*                             {% render(controller('PagesBundle:Pages:menu')) %}*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="span4">*/
/*                         <h4>Notre entrepôt</h4>*/
/*                         <p><i class="icon-map-marker"></i>&nbsp;{{ adresse }}</p>*/
/*                     </div>*/
/* */
/*                     <div class="span2">*/
/*                         <h4>Nous contacter</h4>*/
/*                         <p><i class="icon-phone"></i>&nbsp;Tel: {{ telephone }}</p>*/
/*                         <p><i class="icon-print"></i>&nbsp;Fax: {{ fax }}</p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="row">*/
/*                     <div class="span4">*/
/*                         <p>&copy; Copyright {{ "now"|date('Y') }} - Zemenak</p>*/
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
