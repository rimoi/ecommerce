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
        $__internal_1d2552ee593fb0a9c0674714b47f4732f7c33295a05c5f1059a20f42c3044bec = $this->env->getExtension("native_profiler");
        $__internal_1d2552ee593fb0a9c0674714b47f4732f7c33295a05c5f1059a20f42c3044bec->enter($__internal_1d2552ee593fb0a9c0674714b47f4732f7c33295a05c5f1059a20f42c3044bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/layout/layout.html.twig"));

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
        
        $__internal_1d2552ee593fb0a9c0674714b47f4732f7c33295a05c5f1059a20f42c3044bec->leave($__internal_1d2552ee593fb0a9c0674714b47f4732f7c33295a05c5f1059a20f42c3044bec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_26134e711ffb3e3c50a33755007c763650cd9e6d9e1a629a18ea29b1bf0279dc = $this->env->getExtension("native_profiler");
        $__internal_26134e711ffb3e3c50a33755007c763650cd9e6d9e1a629a18ea29b1bf0279dc->enter($__internal_26134e711ffb3e3c50a33755007c763650cd9e6d9e1a629a18ea29b1bf0279dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bienvenue Sur Zemenak";
        
        $__internal_26134e711ffb3e3c50a33755007c763650cd9e6d9e1a629a18ea29b1bf0279dc->leave($__internal_26134e711ffb3e3c50a33755007c763650cd9e6d9e1a629a18ea29b1bf0279dc_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8b931da56216d6445c66ba2b7629642e79a226018a5ad2f8a5817a4973fc477 = $this->env->getExtension("native_profiler");
        $__internal_f8b931da56216d6445c66ba2b7629642e79a226018a5ad2f8a5817a4973fc477->enter($__internal_f8b931da56216d6445c66ba2b7629642e79a226018a5ad2f8a5817a4973fc477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f8b931da56216d6445c66ba2b7629642e79a226018a5ad2f8a5817a4973fc477->leave($__internal_f8b931da56216d6445c66ba2b7629642e79a226018a5ad2f8a5817a4973fc477_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_1875f29f24040b9dd2acb67371d83db6092926b426becc2f854a6272c5ae879f = $this->env->getExtension("native_profiler");
        $__internal_1875f29f24040b9dd2acb67371d83db6092926b426becc2f854a6272c5ae879f->enter($__internal_1875f29f24040b9dd2acb67371d83db6092926b426becc2f854a6272c5ae879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "        
        ";
        
        $__internal_1875f29f24040b9dd2acb67371d83db6092926b426becc2f854a6272c5ae879f->leave($__internal_1875f29f24040b9dd2acb67371d83db6092926b426becc2f854a6272c5ae879f_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5aedd2e2f86cac010b28b90049fac41cb02db53ca646a048346b8a1e9db5f725 = $this->env->getExtension("native_profiler");
        $__internal_5aedd2e2f86cac010b28b90049fac41cb02db53ca646a048346b8a1e9db5f725->enter($__internal_5aedd2e2f86cac010b28b90049fac41cb02db53ca646a048346b8a1e9db5f725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5aedd2e2f86cac010b28b90049fac41cb02db53ca646a048346b8a1e9db5f725->leave($__internal_5aedd2e2f86cac010b28b90049fac41cb02db53ca646a048346b8a1e9db5f725_prof);

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
