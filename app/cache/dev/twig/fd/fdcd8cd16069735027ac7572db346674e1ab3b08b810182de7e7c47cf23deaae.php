<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_7950e95d9572d36bb0c7baf2950a0ffd5b941f6b13e45226119316b6618a48a2 extends Twig_Template
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
        $__internal_67f38b0af2e14234c7d050fe8248d00431fef91d56865c398a2560ed85068c8c = $this->env->getExtension("native_profiler");
        $__internal_67f38b0af2e14234c7d050fe8248d00431fef91d56865c398a2560ed85068c8c->enter($__internal_67f38b0af2e14234c7d050fe8248d00431fef91d56865c398a2560ed85068c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_67f38b0af2e14234c7d050fe8248d00431fef91d56865c398a2560ed85068c8c->leave($__internal_67f38b0af2e14234c7d050fe8248d00431fef91d56865c398a2560ed85068c8c_prof);

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
