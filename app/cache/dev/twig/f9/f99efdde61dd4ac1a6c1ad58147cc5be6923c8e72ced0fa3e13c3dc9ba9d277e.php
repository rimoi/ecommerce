<?php

/* ::/layout/layout.html.twig */
class __TwigTemplate_4a8e5dbf96d4780d3cbc8110f0a0e51ca002daff18a722e9d92faa8854ad8a6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f115689f0007014326dbd979836f527795919b62ad8ec64e44607284bc696a4 = $this->env->getExtension("native_profiler");
        $__internal_4f115689f0007014326dbd979836f527795919b62ad8ec64e44607284bc696a4->enter($__internal_4f115689f0007014326dbd979836f527795919b62ad8ec64e44607284bc696a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::/layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>

        <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\"  content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" charset=\"UTF-8\" />
        <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
        <!-- CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Zemenak</a>
                    <div class=\"nav-collapse collapse\">
                        ";
        // line 27
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Produits:recherche"), array());
        // line 28
        echo "                    </div>
                </div>
            </div>
        </div>



        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
        <hr />
        <footer id=\"footer\" class=\"vspace20\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span4 offset1\">
                        <h4>Informations</h4>
                        <ul class=\"nav nav-stacked\">
                            ";
        // line 47
        echo "                            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 48
        echo "                        </ul>
                    </div>

                    <div class=\"span4\">
                        <h4>Notre entrepôt</h4>
                        <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
                    </div>

                    <div class=\"span2\">
                        <h4>Nous contacter</h4>
                        <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                        <p><i class=\"icon-print\"></i>&nbsp;Fax: ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["fax"]) ? $context["fax"] : $this->getContext($context, "fax")), "html", null, true);
        echo "</p>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"span4\">
                        <p>&copy; Copyright ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - Zemenak</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 73
        echo "
    </body>
</html>
";
        
        $__internal_4f115689f0007014326dbd979836f527795919b62ad8ec64e44607284bc696a4->leave($__internal_4f115689f0007014326dbd979836f527795919b62ad8ec64e44607284bc696a4_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_272dcf4b78e01c3889dd94bfa9a6968e22e02fbd0de197ac448827ee77f4f2cf = $this->env->getExtension("native_profiler");
        $__internal_272dcf4b78e01c3889dd94bfa9a6968e22e02fbd0de197ac448827ee77f4f2cf->enter($__internal_272dcf4b78e01c3889dd94bfa9a6968e22e02fbd0de197ac448827ee77f4f2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Ecommerce T-shirt Personalisé - By Zemenak";
        
        $__internal_272dcf4b78e01c3889dd94bfa9a6968e22e02fbd0de197ac448827ee77f4f2cf->leave($__internal_272dcf4b78e01c3889dd94bfa9a6968e22e02fbd0de197ac448827ee77f4f2cf_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_d964b32dcb8e36636d149a7e2244b4bb135e6668eca1b2b6b40ad2a8694a4600 = $this->env->getExtension("native_profiler");
        $__internal_d964b32dcb8e36636d149a7e2244b4bb135e6668eca1b2b6b40ad2a8694a4600->enter($__internal_d964b32dcb8e36636d149a7e2244b4bb135e6668eca1b2b6b40ad2a8694a4600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        echo " ";
        
        $__internal_d964b32dcb8e36636d149a7e2244b4bb135e6668eca1b2b6b40ad2a8694a4600->leave($__internal_d964b32dcb8e36636d149a7e2244b4bb135e6668eca1b2b6b40ad2a8694a4600_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_b3d636e3dd286d37e048e8898ea59994b54d621f398c69e4fa0577bb210aaf7f = $this->env->getExtension("native_profiler");
        $__internal_b3d636e3dd286d37e048e8898ea59994b54d621f398c69e4fa0577bb210aaf7f->enter($__internal_b3d636e3dd286d37e048e8898ea59994b54d621f398c69e4fa0577bb210aaf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo " ";
        
        $__internal_b3d636e3dd286d37e048e8898ea59994b54d621f398c69e4fa0577bb210aaf7f->leave($__internal_b3d636e3dd286d37e048e8898ea59994b54d621f398c69e4fa0577bb210aaf7f_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_143374d748a97e0589a91d381def9ed92139fc5c6caaab2c59b9a68d84bac1fc = $this->env->getExtension("native_profiler");
        $__internal_143374d748a97e0589a91d381def9ed92139fc5c6caaab2c59b9a68d84bac1fc->enter($__internal_143374d748a97e0589a91d381def9ed92139fc5c6caaab2c59b9a68d84bac1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_143374d748a97e0589a91d381def9ed92139fc5c6caaab2c59b9a68d84bac1fc->leave($__internal_143374d748a97e0589a91d381def9ed92139fc5c6caaab2c59b9a68d84bac1fc_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_e07e296be76f8e68c4aaba1122fd3e08c814f563145f8220597af6e9911c9eb0 = $this->env->getExtension("native_profiler");
        $__internal_e07e296be76f8e68c4aaba1122fd3e08c814f563145f8220597af6e9911c9eb0->enter($__internal_e07e296be76f8e68c4aaba1122fd3e08c814f563145f8220597af6e9911c9eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "
        ";
        
        $__internal_e07e296be76f8e68c4aaba1122fd3e08c814f563145f8220597af6e9911c9eb0->leave($__internal_e07e296be76f8e68c4aaba1122fd3e08c814f563145f8220597af6e9911c9eb0_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_366df62053ba1e69f7ef39d14d8cf2cddb120bf9c92ffb4c6fcfbfea5b042dcf = $this->env->getExtension("native_profiler");
        $__internal_366df62053ba1e69f7ef39d14d8cf2cddb120bf9c92ffb4c6fcfbfea5b042dcf->enter($__internal_366df62053ba1e69f7ef39d14d8cf2cddb120bf9c92ffb4c6fcfbfea5b042dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_366df62053ba1e69f7ef39d14d8cf2cddb120bf9c92ffb4c6fcfbfea5b042dcf->leave($__internal_366df62053ba1e69f7ef39d14d8cf2cddb120bf9c92ffb4c6fcfbfea5b042dcf_prof);

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
        return array (  228 => 72,  220 => 36,  214 => 35,  203 => 13,  191 => 7,  179 => 6,  167 => 5,  157 => 73,  155 => 72,  151 => 71,  147 => 70,  139 => 65,  130 => 59,  126 => 58,  118 => 53,  111 => 48,  108 => 47,  98 => 38,  96 => 35,  87 => 28,  85 => 27,  80 => 25,  65 => 14,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/* */
/*         <title>{% block titre %}Ecommerce T-shirt Personalisé - By Zemenak{% endblock %}</title>*/
/*         <meta name="keywords"  content="{% block motsCles %} {% endblock %}" charset="UTF-8" />*/
/*         <meta name="description" content="{% block description %} {% endblock %}" />*/
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
/* */
/* */
/* */
/*         {% block body %}*/
/* */
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
