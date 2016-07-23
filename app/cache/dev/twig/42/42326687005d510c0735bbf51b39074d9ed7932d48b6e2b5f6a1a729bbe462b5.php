<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_abd50b968fe73c0d1e46f573d6f0c18c2f1dab0b1a27edcfd6fc5132b114c051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_00e05ad0a1945bcc569098e87997dba2ffa98a3a59ce96474b31685e860818b0 = $this->env->getExtension("native_profiler");
        $__internal_00e05ad0a1945bcc569098e87997dba2ffa98a3a59ce96474b31685e860818b0->enter($__internal_00e05ad0a1945bcc569098e87997dba2ffa98a3a59ce96474b31685e860818b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00e05ad0a1945bcc569098e87997dba2ffa98a3a59ce96474b31685e860818b0->leave($__internal_00e05ad0a1945bcc569098e87997dba2ffa98a3a59ce96474b31685e860818b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ab82d68a57aa3f8e188e757e6f24fe23033d70e2c62ebc2c9078812840d4b84 = $this->env->getExtension("native_profiler");
        $__internal_7ab82d68a57aa3f8e188e757e6f24fe23033d70e2c62ebc2c9078812840d4b84->enter($__internal_7ab82d68a57aa3f8e188e757e6f24fe23033d70e2c62ebc2c9078812840d4b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_7ab82d68a57aa3f8e188e757e6f24fe23033d70e2c62ebc2c9078812840d4b84->leave($__internal_7ab82d68a57aa3f8e188e757e6f24fe23033d70e2c62ebc2c9078812840d4b84_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
