<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_ff47b31a0862bdeaafddfb1234fcc1894b01963493009d110a56f20e8e880154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_24ef018d02f96d8349ca63839e121ca7ac6180c68aa0d731d53cc628a561841b = $this->env->getExtension("native_profiler");
        $__internal_24ef018d02f96d8349ca63839e121ca7ac6180c68aa0d731d53cc628a561841b->enter($__internal_24ef018d02f96d8349ca63839e121ca7ac6180c68aa0d731d53cc628a561841b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24ef018d02f96d8349ca63839e121ca7ac6180c68aa0d731d53cc628a561841b->leave($__internal_24ef018d02f96d8349ca63839e121ca7ac6180c68aa0d731d53cc628a561841b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff599f314a0617e129ed86014a84b0921eb2cc8a71386b600f1a48947cde7f68 = $this->env->getExtension("native_profiler");
        $__internal_ff599f314a0617e129ed86014a84b0921eb2cc8a71386b600f1a48947cde7f68->enter($__internal_ff599f314a0617e129ed86014a84b0921eb2cc8a71386b600f1a48947cde7f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_ff599f314a0617e129ed86014a84b0921eb2cc8a71386b600f1a48947cde7f68->leave($__internal_ff599f314a0617e129ed86014a84b0921eb2cc8a71386b600f1a48947cde7f68_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
