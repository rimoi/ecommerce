<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_18f2a60213ecdcc3b21805dfb8e134145033e2274b3ebce7f6adc0874d4e1119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2cd29524feeceafe123ad3faab1f3dfab46d4c5ff93404099f67610025bb2c51 = $this->env->getExtension("native_profiler");
        $__internal_2cd29524feeceafe123ad3faab1f3dfab46d4c5ff93404099f67610025bb2c51->enter($__internal_2cd29524feeceafe123ad3faab1f3dfab46d4c5ff93404099f67610025bb2c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cd29524feeceafe123ad3faab1f3dfab46d4c5ff93404099f67610025bb2c51->leave($__internal_2cd29524feeceafe123ad3faab1f3dfab46d4c5ff93404099f67610025bb2c51_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_19da82aa628b4ae78a56401645b19a12eb1a50bf0c6c20ddfb34add3ad5e7df9 = $this->env->getExtension("native_profiler");
        $__internal_19da82aa628b4ae78a56401645b19a12eb1a50bf0c6c20ddfb34add3ad5e7df9->enter($__internal_19da82aa628b4ae78a56401645b19a12eb1a50bf0c6c20ddfb34add3ad5e7df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_19da82aa628b4ae78a56401645b19a12eb1a50bf0c6c20ddfb34add3ad5e7df9->leave($__internal_19da82aa628b4ae78a56401645b19a12eb1a50bf0c6c20ddfb34add3ad5e7df9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
