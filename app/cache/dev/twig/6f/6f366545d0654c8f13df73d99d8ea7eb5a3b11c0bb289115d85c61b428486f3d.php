<?php

/* modulesUsed/navigation.html.twig */
class __TwigTemplate_522439cedd346694d49f6015c935c4b146ab4c5ebe974868050af088d434e4fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a239a52286f6560444ad0c77b0bc16ed315f90a18ad86d0dcc6f8651ba9849c6 = $this->env->getExtension("native_profiler");
        $__internal_a239a52286f6560444ad0c77b0bc16ed315f90a18ad86d0dcc6f8651ba9849c6->enter($__internal_a239a52286f6560444ad0c77b0bc16ed315f90a18ad86d0dcc6f8651ba9849c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modulesUsed/navigation.html.twig"));

        // line 1
        echo "

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\"><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\">Nos produits</a></li>
            ";
        // line 6
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 7
        echo "        </ul>
    </div>

";
        
        $__internal_a239a52286f6560444ad0c77b0bc16ed315f90a18ad86d0dcc6f8651ba9849c6->leave($__internal_a239a52286f6560444ad0c77b0bc16ed315f90a18ad86d0dcc6f8651ba9849c6_prof);

    }

    public function getTemplateName()
    {
        return "modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* */
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li class="nav-header"><a href="{{ path('produits') }}">Nos produits</a></li>*/
/*             {% render(controller('EcommerceBundle:Categories:menu') ) %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* */
