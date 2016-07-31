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
        $__internal_9259d829032f559956dd5011c63c78ad89f7c2ed5d6d5de8374df2ad18293e63 = $this->env->getExtension("native_profiler");
        $__internal_9259d829032f559956dd5011c63c78ad89f7c2ed5d6d5de8374df2ad18293e63->enter($__internal_9259d829032f559956dd5011c63c78ad89f7c2ed5d6d5de8374df2ad18293e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9259d829032f559956dd5011c63c78ad89f7c2ed5d6d5de8374df2ad18293e63->leave($__internal_9259d829032f559956dd5011c63c78ad89f7c2ed5d6d5de8374df2ad18293e63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dff08f5a9ef7ed5e49c4cd2249fad4c66101b875fc6af3a71ca87b2e1bd1c209 = $this->env->getExtension("native_profiler");
        $__internal_dff08f5a9ef7ed5e49c4cd2249fad4c66101b875fc6af3a71ca87b2e1bd1c209->enter($__internal_dff08f5a9ef7ed5e49c4cd2249fad4c66101b875fc6af3a71ca87b2e1bd1c209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dff08f5a9ef7ed5e49c4cd2249fad4c66101b875fc6af3a71ca87b2e1bd1c209->leave($__internal_dff08f5a9ef7ed5e49c4cd2249fad4c66101b875fc6af3a71ca87b2e1bd1c209_prof);

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
