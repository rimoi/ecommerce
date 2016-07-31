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
        $__internal_91593dcb192f03234c1762e3283b73819a512361a749e3ccb17c25c5aaa8e5eb = $this->env->getExtension("native_profiler");
        $__internal_91593dcb192f03234c1762e3283b73819a512361a749e3ccb17c25c5aaa8e5eb->enter($__internal_91593dcb192f03234c1762e3283b73819a512361a749e3ccb17c25c5aaa8e5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91593dcb192f03234c1762e3283b73819a512361a749e3ccb17c25c5aaa8e5eb->leave($__internal_91593dcb192f03234c1762e3283b73819a512361a749e3ccb17c25c5aaa8e5eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0c2136976af5635c2dc1d4081ebbb028945fc705a625a0b7aae410b808f03d9 = $this->env->getExtension("native_profiler");
        $__internal_d0c2136976af5635c2dc1d4081ebbb028945fc705a625a0b7aae410b808f03d9->enter($__internal_d0c2136976af5635c2dc1d4081ebbb028945fc705a625a0b7aae410b808f03d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_d0c2136976af5635c2dc1d4081ebbb028945fc705a625a0b7aae410b808f03d9->leave($__internal_d0c2136976af5635c2dc1d4081ebbb028945fc705a625a0b7aae410b808f03d9_prof);

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
