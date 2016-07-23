<?php

/* EcommerceBundle:Default:panier/modulesUsed/panier.html.twig */
class __TwigTemplate_81f266688b09bbd08a902dfdbd7b4f26125342c58def9d649c72403448f4ffea extends Twig_Template
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
        $__internal_2c7c3c34d927ba3fe299acaaacd49c4621e32c6ada476d37da6a63c1716df5f3 = $this->env->getExtension("native_profiler");
        $__internal_2c7c3c34d927ba3fe299acaaacd49c4621e32c6ada476d37da6a63c1716df5f3->enter($__internal_2c7c3c34d927ba3fe299acaaacd49c4621e32c6ada476d37da6a63c1716df5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig"));

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
        
        $__internal_2c7c3c34d927ba3fe299acaaacd49c4621e32c6ada476d37da6a63c1716df5f3->leave($__internal_2c7c3c34d927ba3fe299acaaacd49c4621e32c6ada476d37da6a63c1716df5f3_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/modulesUsed/panier.html.twig";
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
