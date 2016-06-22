<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_ee49dba48a6f3bdffb0dd9905319e200385310592489b93aa9518ca32ded59b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_162bc9b22509b5af7de50151051c434a25ec657176fe5b5044ac6335b6feb8c0 = $this->env->getExtension("native_profiler");
        $__internal_162bc9b22509b5af7de50151051c434a25ec657176fe5b5044ac6335b6feb8c0->enter($__internal_162bc9b22509b5af7de50151051c434a25ec657176fe5b5044ac6335b6feb8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_162bc9b22509b5af7de50151051c434a25ec657176fe5b5044ac6335b6feb8c0->leave($__internal_162bc9b22509b5af7de50151051c434a25ec657176fe5b5044ac6335b6feb8c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ecc03469c650f55461b0a71bad8e8f110d3902fe9e80b54763f52e06207722b9 = $this->env->getExtension("native_profiler");
        $__internal_ecc03469c650f55461b0a71bad8e8f110d3902fe9e80b54763f52e06207722b9->enter($__internal_ecc03469c650f55461b0a71bad8e8f110d3902fe9e80b54763f52e06207722b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ecc03469c650f55461b0a71bad8e8f110d3902fe9e80b54763f52e06207722b9->leave($__internal_ecc03469c650f55461b0a71bad8e8f110d3902fe9e80b54763f52e06207722b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
