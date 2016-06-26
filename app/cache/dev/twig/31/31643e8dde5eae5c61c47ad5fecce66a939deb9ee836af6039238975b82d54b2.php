<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_f9052b34daecf4363cd3cf59b3251ff57096fcddcdffe13ccba1bd99680741dd extends Twig_Template
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
        $__internal_14d2e78d78a4525d9e73afd3b743e41597e75276f16a73ed1f9c0fe9f0c3b69a = $this->env->getExtension("native_profiler");
        $__internal_14d2e78d78a4525d9e73afd3b743e41597e75276f16a73ed1f9c0fe9f0c3b69a->enter($__internal_14d2e78d78a4525d9e73afd3b743e41597e75276f16a73ed1f9c0fe9f0c3b69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

        // line 1
        echo "
<form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("rechercheProduits");
        echo "\" method=\"post\"  class=\"navbar-form form-search pull-right\">
 ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "recherche", array()), 'widget');
        echo "
 <button type=\"submit\" class=\"btn\">Rechercher</button>
 ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
</form>";
        
        $__internal_14d2e78d78a4525d9e73afd3b743e41597e75276f16a73ed1f9c0fe9f0c3b69a->leave($__internal_14d2e78d78a4525d9e73afd3b743e41597e75276f16a73ed1f9c0fe9f0c3b69a_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* <form action="{{ path('rechercheProduits') }}" method="post"  class="navbar-form form-search pull-right">*/
/*  {{ form_widget(form.recherche) }}*/
/*  <button type="submit" class="btn">Rechercher</button>*/
/*  {{ form_widget(form) }}*/
/* </form>*/
