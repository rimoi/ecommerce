<?php

/* EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_2d78e4f564d5921208eec1dd706bc345af3ee5d95507932c35f6a23ed3e430b4 extends Twig_Template
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
        $__internal_42b2f043b57e9c650029a2b7c7cf6b5412d1ddfc5228f9f1b7fcd2a2e93b8acd = $this->env->getExtension("native_profiler");
        $__internal_42b2f043b57e9c650029a2b7c7cf6b5412d1ddfc5228f9f1b7fcd2a2e93b8acd->enter($__internal_42b2f043b57e9c650029a2b7c7cf6b5412d1ddfc5228f9f1b7fcd2a2e93b8acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:Recherche/modulesUsed/recherche.html.twig"));

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
        
        $__internal_42b2f043b57e9c650029a2b7c7cf6b5412d1ddfc5228f9f1b7fcd2a2e93b8acd->leave($__internal_42b2f043b57e9c650029a2b7c7cf6b5412d1ddfc5228f9f1b7fcd2a2e93b8acd_prof);

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
