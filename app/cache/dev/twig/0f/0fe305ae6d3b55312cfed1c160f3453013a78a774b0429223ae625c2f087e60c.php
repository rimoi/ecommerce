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
        $__internal_c8f1bba1d2306adc573e480fcef9005962f35c488858e171d7892e327606b413 = $this->env->getExtension("native_profiler");
        $__internal_c8f1bba1d2306adc573e480fcef9005962f35c488858e171d7892e327606b413->enter($__internal_c8f1bba1d2306adc573e480fcef9005962f35c488858e171d7892e327606b413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8f1bba1d2306adc573e480fcef9005962f35c488858e171d7892e327606b413->leave($__internal_c8f1bba1d2306adc573e480fcef9005962f35c488858e171d7892e327606b413_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6f2a7ed12affc61d772a87bba4e3a473f9fbfe665b595b2346f6495c7e6ac42c = $this->env->getExtension("native_profiler");
        $__internal_6f2a7ed12affc61d772a87bba4e3a473f9fbfe665b595b2346f6495c7e6ac42c->enter($__internal_6f2a7ed12affc61d772a87bba4e3a473f9fbfe665b595b2346f6495c7e6ac42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_6f2a7ed12affc61d772a87bba4e3a473f9fbfe665b595b2346f6495c7e6ac42c->leave($__internal_6f2a7ed12affc61d772a87bba4e3a473f9fbfe665b595b2346f6495c7e6ac42c_prof);

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
