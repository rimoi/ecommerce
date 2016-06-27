<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_8f715d7721cd3a95d4afcef2a48b80bf46fe605b79a753556939c9b051e20de5 extends Twig_Template
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
        $__internal_57da686d8bd7a9b9665081dc7ac99448bb6893304f73f28e78903110279ba6e4 = $this->env->getExtension("native_profiler");
        $__internal_57da686d8bd7a9b9665081dc7ac99448bb6893304f73f28e78903110279ba6e4->enter($__internal_57da686d8bd7a9b9665081dc7ac99448bb6893304f73f28e78903110279ba6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_57da686d8bd7a9b9665081dc7ac99448bb6893304f73f28e78903110279ba6e4->leave($__internal_57da686d8bd7a9b9665081dc7ac99448bb6893304f73f28e78903110279ba6e4_prof);

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
