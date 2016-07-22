<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e09f89a39d4de32d5d488248a4a38cb87bebdcd4d94c3576ea68dadbaff5e348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_50b331ddd552020d844f68640a8e497ed1092e9ca266f4c933118644accedd06 = $this->env->getExtension("native_profiler");
        $__internal_50b331ddd552020d844f68640a8e497ed1092e9ca266f4c933118644accedd06->enter($__internal_50b331ddd552020d844f68640a8e497ed1092e9ca266f4c933118644accedd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b331ddd552020d844f68640a8e497ed1092e9ca266f4c933118644accedd06->leave($__internal_50b331ddd552020d844f68640a8e497ed1092e9ca266f4c933118644accedd06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a420561b8e988bf10ec73a99792a3228e073c44c9ab9ba6d3860512bcd5de4b2 = $this->env->getExtension("native_profiler");
        $__internal_a420561b8e988bf10ec73a99792a3228e073c44c9ab9ba6d3860512bcd5de4b2->enter($__internal_a420561b8e988bf10ec73a99792a3228e073c44c9ab9ba6d3860512bcd5de4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_a420561b8e988bf10ec73a99792a3228e073c44c9ab9ba6d3860512bcd5de4b2->leave($__internal_a420561b8e988bf10ec73a99792a3228e073c44c9ab9ba6d3860512bcd5de4b2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
