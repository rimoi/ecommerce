<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_d4b7a727992127b4c35bea947bc353b3a054cb610499b2b5a2a0761cd0ea3dbb extends Twig_Template
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
        return array (  31 => 7,  29 => 6,  25 => 5,  19 => 1,);
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
