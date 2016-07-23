<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_97827d9603d753e0d69e7e47f5c9065bf4f20c5299020c392e5bf77518ecc0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_031ff4d583241dd2e7f7abe81345a5758d339acbf485dd1e1422a04ad0b346a6 = $this->env->getExtension("native_profiler");
        $__internal_031ff4d583241dd2e7f7abe81345a5758d339acbf485dd1e1422a04ad0b346a6->enter($__internal_031ff4d583241dd2e7f7abe81345a5758d339acbf485dd1e1422a04ad0b346a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031ff4d583241dd2e7f7abe81345a5758d339acbf485dd1e1422a04ad0b346a6->leave($__internal_031ff4d583241dd2e7f7abe81345a5758d339acbf485dd1e1422a04ad0b346a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2588fec628e629b5a0026bf69e5cdb41a4b77257e0294298c09bc30f96724a02 = $this->env->getExtension("native_profiler");
        $__internal_2588fec628e629b5a0026bf69e5cdb41a4b77257e0294298c09bc30f96724a02->enter($__internal_2588fec628e629b5a0026bf69e5cdb41a4b77257e0294298c09bc30f96724a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_2588fec628e629b5a0026bf69e5cdb41a4b77257e0294298c09bc30f96724a02->leave($__internal_2588fec628e629b5a0026bf69e5cdb41a4b77257e0294298c09bc30f96724a02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
