<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e8108288248fb47b3043ad98eb360bb3f2c100e3bc1f6dd6fdd14a9ac9c83519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_a743cfe0e34d5df3e99e67015860044c321230d22389c403d7f8f0452c467484 = $this->env->getExtension("native_profiler");
        $__internal_a743cfe0e34d5df3e99e67015860044c321230d22389c403d7f8f0452c467484->enter($__internal_a743cfe0e34d5df3e99e67015860044c321230d22389c403d7f8f0452c467484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a743cfe0e34d5df3e99e67015860044c321230d22389c403d7f8f0452c467484->leave($__internal_a743cfe0e34d5df3e99e67015860044c321230d22389c403d7f8f0452c467484_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1acc6c90a9c812a79b816390fec9809c61f60a9c007af53bd3aedeaa40f890b = $this->env->getExtension("native_profiler");
        $__internal_b1acc6c90a9c812a79b816390fec9809c61f60a9c007af53bd3aedeaa40f890b->enter($__internal_b1acc6c90a9c812a79b816390fec9809c61f60a9c007af53bd3aedeaa40f890b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b1acc6c90a9c812a79b816390fec9809c61f60a9c007af53bd3aedeaa40f890b->leave($__internal_b1acc6c90a9c812a79b816390fec9809c61f60a9c007af53bd3aedeaa40f890b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
