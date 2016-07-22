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
        $__internal_a9b9fbf480f880c22ecefa9fb43d461e4c6846758e5540e570557cd58aa97323 = $this->env->getExtension("native_profiler");
        $__internal_a9b9fbf480f880c22ecefa9fb43d461e4c6846758e5540e570557cd58aa97323->enter($__internal_a9b9fbf480f880c22ecefa9fb43d461e4c6846758e5540e570557cd58aa97323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b9fbf480f880c22ecefa9fb43d461e4c6846758e5540e570557cd58aa97323->leave($__internal_a9b9fbf480f880c22ecefa9fb43d461e4c6846758e5540e570557cd58aa97323_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2fcc7a646864524b8bbb8a15100526d89a4fe704f6674e0302983cf2a74fd26 = $this->env->getExtension("native_profiler");
        $__internal_c2fcc7a646864524b8bbb8a15100526d89a4fe704f6674e0302983cf2a74fd26->enter($__internal_c2fcc7a646864524b8bbb8a15100526d89a4fe704f6674e0302983cf2a74fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_c2fcc7a646864524b8bbb8a15100526d89a4fe704f6674e0302983cf2a74fd26->leave($__internal_c2fcc7a646864524b8bbb8a15100526d89a4fe704f6674e0302983cf2a74fd26_prof);

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
