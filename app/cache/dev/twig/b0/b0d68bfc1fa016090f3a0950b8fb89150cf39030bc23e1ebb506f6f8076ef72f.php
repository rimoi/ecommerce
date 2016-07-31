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
        $__internal_3477072c377814df347a38ea888a5ace9d21e17ce5a6bd0c96fc30c8b1914bd8 = $this->env->getExtension("native_profiler");
        $__internal_3477072c377814df347a38ea888a5ace9d21e17ce5a6bd0c96fc30c8b1914bd8->enter($__internal_3477072c377814df347a38ea888a5ace9d21e17ce5a6bd0c96fc30c8b1914bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3477072c377814df347a38ea888a5ace9d21e17ce5a6bd0c96fc30c8b1914bd8->leave($__internal_3477072c377814df347a38ea888a5ace9d21e17ce5a6bd0c96fc30c8b1914bd8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8139891355192d0f8b3bc8e2f004065ec83cde780dba458a98971e579db0dae = $this->env->getExtension("native_profiler");
        $__internal_d8139891355192d0f8b3bc8e2f004065ec83cde780dba458a98971e579db0dae->enter($__internal_d8139891355192d0f8b3bc8e2f004065ec83cde780dba458a98971e579db0dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d8139891355192d0f8b3bc8e2f004065ec83cde780dba458a98971e579db0dae->leave($__internal_d8139891355192d0f8b3bc8e2f004065ec83cde780dba458a98971e579db0dae_prof);

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
