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
        $__internal_ef5405b5bb485621faac70023bc5761916baaf5d583ea7cd3d8461a96725c734 = $this->env->getExtension("native_profiler");
        $__internal_ef5405b5bb485621faac70023bc5761916baaf5d583ea7cd3d8461a96725c734->enter($__internal_ef5405b5bb485621faac70023bc5761916baaf5d583ea7cd3d8461a96725c734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef5405b5bb485621faac70023bc5761916baaf5d583ea7cd3d8461a96725c734->leave($__internal_ef5405b5bb485621faac70023bc5761916baaf5d583ea7cd3d8461a96725c734_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_402e6a55967166c9f24caed7246b6a621602731795fcf2617916cd01ac11fd71 = $this->env->getExtension("native_profiler");
        $__internal_402e6a55967166c9f24caed7246b6a621602731795fcf2617916cd01ac11fd71->enter($__internal_402e6a55967166c9f24caed7246b6a621602731795fcf2617916cd01ac11fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_402e6a55967166c9f24caed7246b6a621602731795fcf2617916cd01ac11fd71->leave($__internal_402e6a55967166c9f24caed7246b6a621602731795fcf2617916cd01ac11fd71_prof);

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
