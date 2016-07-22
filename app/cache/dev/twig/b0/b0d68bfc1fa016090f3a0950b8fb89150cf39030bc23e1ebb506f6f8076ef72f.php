<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5cf9fb43c11173fea11645ad2db8240e2a96d09c0489012590e9375015df23ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_f4c6f0cedcf432cbc842e987e6b4d24effbe009965acce1c3cdee4cfd6a0e193 = $this->env->getExtension("native_profiler");
        $__internal_f4c6f0cedcf432cbc842e987e6b4d24effbe009965acce1c3cdee4cfd6a0e193->enter($__internal_f4c6f0cedcf432cbc842e987e6b4d24effbe009965acce1c3cdee4cfd6a0e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4c6f0cedcf432cbc842e987e6b4d24effbe009965acce1c3cdee4cfd6a0e193->leave($__internal_f4c6f0cedcf432cbc842e987e6b4d24effbe009965acce1c3cdee4cfd6a0e193_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31ee47315c6f53b5873de9742d85d5c5b0b326406c34fa6ac8823b5c94e6b4ed = $this->env->getExtension("native_profiler");
        $__internal_31ee47315c6f53b5873de9742d85d5c5b0b326406c34fa6ac8823b5c94e6b4ed->enter($__internal_31ee47315c6f53b5873de9742d85d5c5b0b326406c34fa6ac8823b5c94e6b4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_31ee47315c6f53b5873de9742d85d5c5b0b326406c34fa6ac8823b5c94e6b4ed->leave($__internal_31ee47315c6f53b5873de9742d85d5c5b0b326406c34fa6ac8823b5c94e6b4ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
