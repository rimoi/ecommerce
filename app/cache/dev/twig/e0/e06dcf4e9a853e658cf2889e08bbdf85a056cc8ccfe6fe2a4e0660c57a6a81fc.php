<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_40ff227a9954626dc6381d39688077f751842bc5d1302bfda75d414215dd258e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_157053c12218165476581ff7bda255d3474f1e9a2d974f5fe59682c4d5be8511 = $this->env->getExtension("native_profiler");
        $__internal_157053c12218165476581ff7bda255d3474f1e9a2d974f5fe59682c4d5be8511->enter($__internal_157053c12218165476581ff7bda255d3474f1e9a2d974f5fe59682c4d5be8511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_157053c12218165476581ff7bda255d3474f1e9a2d974f5fe59682c4d5be8511->leave($__internal_157053c12218165476581ff7bda255d3474f1e9a2d974f5fe59682c4d5be8511_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93c03ce908259587554308d7bbfd03de6d2438b4e5302b0ddd5668b3af67fea8 = $this->env->getExtension("native_profiler");
        $__internal_93c03ce908259587554308d7bbfd03de6d2438b4e5302b0ddd5668b3af67fea8->enter($__internal_93c03ce908259587554308d7bbfd03de6d2438b4e5302b0ddd5668b3af67fea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_93c03ce908259587554308d7bbfd03de6d2438b4e5302b0ddd5668b3af67fea8->leave($__internal_93c03ce908259587554308d7bbfd03de6d2438b4e5302b0ddd5668b3af67fea8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
