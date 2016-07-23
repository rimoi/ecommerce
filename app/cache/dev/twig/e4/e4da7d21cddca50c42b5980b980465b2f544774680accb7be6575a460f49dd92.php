<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_53bf73d2c704aaec0a529afae4fc6eb4edeeb80de01fa866e1af8e713bf751f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8a174d2f1a6dffc54b9a75a0e3dc47b61bbbbaca1ad9e11c0504c732922e83b1 = $this->env->getExtension("native_profiler");
        $__internal_8a174d2f1a6dffc54b9a75a0e3dc47b61bbbbaca1ad9e11c0504c732922e83b1->enter($__internal_8a174d2f1a6dffc54b9a75a0e3dc47b61bbbbaca1ad9e11c0504c732922e83b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a174d2f1a6dffc54b9a75a0e3dc47b61bbbbaca1ad9e11c0504c732922e83b1->leave($__internal_8a174d2f1a6dffc54b9a75a0e3dc47b61bbbbaca1ad9e11c0504c732922e83b1_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8702f7797137b2d0f19cc9207aca1c5280b9b5f25a9be0bf387a152ac370f62e = $this->env->getExtension("native_profiler");
        $__internal_8702f7797137b2d0f19cc9207aca1c5280b9b5f25a9be0bf387a152ac370f62e->enter($__internal_8702f7797137b2d0f19cc9207aca1c5280b9b5f25a9be0bf387a152ac370f62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8702f7797137b2d0f19cc9207aca1c5280b9b5f25a9be0bf387a152ac370f62e->leave($__internal_8702f7797137b2d0f19cc9207aca1c5280b9b5f25a9be0bf387a152ac370f62e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
