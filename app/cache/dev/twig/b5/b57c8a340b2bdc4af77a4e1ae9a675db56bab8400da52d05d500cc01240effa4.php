<?php

/* @Ecommerce/Default/Recherche/modulesUsed/recherche.html.twig */
class __TwigTemplate_bd4855165826ddccca6f9f0ea2f54e8f340d24f803d37cf050ca5e4555d3c8c7 extends Twig_Template
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
        $__internal_c2baef1a95e393645c548f36a0b3c15071ee6eb42100ca9dc6e07a16d54ded35 = $this->env->getExtension("native_profiler");
        $__internal_c2baef1a95e393645c548f36a0b3c15071ee6eb42100ca9dc6e07a16d54ded35->enter($__internal_c2baef1a95e393645c548f36a0b3c15071ee6eb42100ca9dc6e07a16d54ded35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Recherche/modulesUsed/recherche.html.twig"));

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
        
        $__internal_c2baef1a95e393645c548f36a0b3c15071ee6eb42100ca9dc6e07a16d54ded35->leave($__internal_c2baef1a95e393645c548f36a0b3c15071ee6eb42100ca9dc6e07a16d54ded35_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Recherche/modulesUsed/recherche.html.twig";
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
