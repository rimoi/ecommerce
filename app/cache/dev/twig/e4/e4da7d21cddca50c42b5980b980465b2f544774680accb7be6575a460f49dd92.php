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
        $__internal_d260c28bf2ec5d60793ff6c9bfedb8be59c58e4d3455486be7ec1dd426b4e7ed = $this->env->getExtension("native_profiler");
        $__internal_d260c28bf2ec5d60793ff6c9bfedb8be59c58e4d3455486be7ec1dd426b4e7ed->enter($__internal_d260c28bf2ec5d60793ff6c9bfedb8be59c58e4d3455486be7ec1dd426b4e7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d260c28bf2ec5d60793ff6c9bfedb8be59c58e4d3455486be7ec1dd426b4e7ed->leave($__internal_d260c28bf2ec5d60793ff6c9bfedb8be59c58e4d3455486be7ec1dd426b4e7ed_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40bad97ced269dd136747d21d0ea9e7f1db4eb6eb923abb5dbf79122a3cb5b06 = $this->env->getExtension("native_profiler");
        $__internal_40bad97ced269dd136747d21d0ea9e7f1db4eb6eb923abb5dbf79122a3cb5b06->enter($__internal_40bad97ced269dd136747d21d0ea9e7f1db4eb6eb923abb5dbf79122a3cb5b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_40bad97ced269dd136747d21d0ea9e7f1db4eb6eb923abb5dbf79122a3cb5b06->leave($__internal_40bad97ced269dd136747d21d0ea9e7f1db4eb6eb923abb5dbf79122a3cb5b06_prof);

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
