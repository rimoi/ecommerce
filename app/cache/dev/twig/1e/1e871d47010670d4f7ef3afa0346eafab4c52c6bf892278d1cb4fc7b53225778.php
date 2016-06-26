<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_8cf23b91fd142bfb899878bf2c9bb011edaddae351ab1e9289c6af3cafe9ff6d extends Twig_Template
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
        $__internal_77358feda1126f2277591b94e5b732b2e257cb60c04195e3002ef4ea944a4c6a = $this->env->getExtension("native_profiler");
        $__internal_77358feda1126f2277591b94e5b732b2e257cb60c04195e3002ef4ea944a4c6a->enter($__internal_77358feda1126f2277591b94e5b732b2e257cb60c04195e3002ef4ea944a4c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_77358feda1126f2277591b94e5b732b2e257cb60c04195e3002ef4ea944a4c6a->leave($__internal_77358feda1126f2277591b94e5b732b2e257cb60c04195e3002ef4ea944a4c6a_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
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
