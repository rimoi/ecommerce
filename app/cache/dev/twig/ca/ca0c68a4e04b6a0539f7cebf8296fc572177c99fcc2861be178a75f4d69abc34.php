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
        $__internal_150cf8972ba852615c9d6366185091e0a4df2d6714bea7eb02bcc805766fe528 = $this->env->getExtension("native_profiler");
        $__internal_150cf8972ba852615c9d6366185091e0a4df2d6714bea7eb02bcc805766fe528->enter($__internal_150cf8972ba852615c9d6366185091e0a4df2d6714bea7eb02bcc805766fe528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_150cf8972ba852615c9d6366185091e0a4df2d6714bea7eb02bcc805766fe528->leave($__internal_150cf8972ba852615c9d6366185091e0a4df2d6714bea7eb02bcc805766fe528_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_33158e019fa6de14adca405210c8d0df6f7e0c834f6bd5a4e555d8432b6299e8 = $this->env->getExtension("native_profiler");
        $__internal_33158e019fa6de14adca405210c8d0df6f7e0c834f6bd5a4e555d8432b6299e8->enter($__internal_33158e019fa6de14adca405210c8d0df6f7e0c834f6bd5a4e555d8432b6299e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_33158e019fa6de14adca405210c8d0df6f7e0c834f6bd5a4e555d8432b6299e8->leave($__internal_33158e019fa6de14adca405210c8d0df6f7e0c834f6bd5a4e555d8432b6299e8_prof);

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
