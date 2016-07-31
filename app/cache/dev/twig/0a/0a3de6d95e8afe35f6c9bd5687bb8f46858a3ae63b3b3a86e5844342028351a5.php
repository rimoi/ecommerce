<?php

/* @Ecommerce/Default/panier/modulesUsed/panier.html.twig */
class __TwigTemplate_836986d87901d7d0b8fa90b85b52ad141c86fa417511affa435ddb1a4aa587a3 extends Twig_Template
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
        $__internal_739ac977d952ec7e3492c6332f2100d3e398cb17226c66f05aa054d924b240ea = $this->env->getExtension("native_profiler");
        $__internal_739ac977d952ec7e3492c6332f2100d3e398cb17226c66f05aa054d924b240ea->enter($__internal_739ac977d952ec7e3492c6332f2100d3e398cb17226c66f05aa054d924b240ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/panier/modulesUsed/panier.html.twig"));

        // line 1
        echo "
<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">Panier</a></li>


        <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("panier");
        echo "\">
                ";
        // line 8
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 0)) {
            // line 9
            echo "                    Aucun n'article dans votre panier
                ";
        } elseif ((        // line 10
(isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == 1)) {
            // line 11
            echo "                    1 article dans votre panier
                ";
        } else {
            // line 13
            echo "                     ";
            echo twig_escape_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")), "html", null, true);
            echo " artcles dans votre panier.
                ";
        }
        // line 15
        echo "
            </a></li>
    </ul>
</div>";
        
        $__internal_739ac977d952ec7e3492c6332f2100d3e398cb17226c66f05aa054d924b240ea->leave($__internal_739ac977d952ec7e3492c6332f2100d3e398cb17226c66f05aa054d924b240ea_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/panier/modulesUsed/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  48 => 13,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* */
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header"><a href="{{ path('panier') }}">Panier</a></li>*/
/* */
/* */
/*         <li><a href="{{ path('panier') }}">*/
/*                 {% if articles == 0 %}*/
/*                     Aucun n'article dans votre panier*/
/*                 {% elseif articles == 1 %}*/
/*                     1 article dans votre panier*/
/*                 {% else %}*/
/*                      {{ articles }} artcles dans votre panier.*/
/*                 {% endif %}*/
/* */
/*             </a></li>*/
/*     </ul>*/
/* </div>*/
