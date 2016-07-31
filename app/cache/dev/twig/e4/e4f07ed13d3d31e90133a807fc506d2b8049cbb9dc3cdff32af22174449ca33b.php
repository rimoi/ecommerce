<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7c9ffef9f4411038e13e41c38fb659bdd5f165ecfd19c93f0d23da960ea157f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_781e0896bf7975962e35a2a8bd0d012b5d19712e783123e4067613cd5c78179d = $this->env->getExtension("native_profiler");
        $__internal_781e0896bf7975962e35a2a8bd0d012b5d19712e783123e4067613cd5c78179d->enter($__internal_781e0896bf7975962e35a2a8bd0d012b5d19712e783123e4067613cd5c78179d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_781e0896bf7975962e35a2a8bd0d012b5d19712e783123e4067613cd5c78179d->leave($__internal_781e0896bf7975962e35a2a8bd0d012b5d19712e783123e4067613cd5c78179d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62640c5ce38192fddef30d72dbbdad7e6fbdcc00d73abf46bfe3d7ae51d623cf = $this->env->getExtension("native_profiler");
        $__internal_62640c5ce38192fddef30d72dbbdad7e6fbdcc00d73abf46bfe3d7ae51d623cf->enter($__internal_62640c5ce38192fddef30d72dbbdad7e6fbdcc00d73abf46bfe3d7ae51d623cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_62640c5ce38192fddef30d72dbbdad7e6fbdcc00d73abf46bfe3d7ae51d623cf->leave($__internal_62640c5ce38192fddef30d72dbbdad7e6fbdcc00d73abf46bfe3d7ae51d623cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
