<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_44e8b2f0ced05ceb2767569be3662487d203f9e574c541d2d543ca8e2d41753e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_49d4b887abb3157549d523355f0a335394912693c195e0426616db1d78e23260 = $this->env->getExtension("native_profiler");
        $__internal_49d4b887abb3157549d523355f0a335394912693c195e0426616db1d78e23260->enter($__internal_49d4b887abb3157549d523355f0a335394912693c195e0426616db1d78e23260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49d4b887abb3157549d523355f0a335394912693c195e0426616db1d78e23260->leave($__internal_49d4b887abb3157549d523355f0a335394912693c195e0426616db1d78e23260_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c514988a45fa3048c36f77485797f59afb13ccb4093235e6c0fd7bf28f9d90f7 = $this->env->getExtension("native_profiler");
        $__internal_c514988a45fa3048c36f77485797f59afb13ccb4093235e6c0fd7bf28f9d90f7->enter($__internal_c514988a45fa3048c36f77485797f59afb13ccb4093235e6c0fd7bf28f9d90f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c514988a45fa3048c36f77485797f59afb13ccb4093235e6c0fd7bf28f9d90f7->leave($__internal_c514988a45fa3048c36f77485797f59afb13ccb4093235e6c0fd7bf28f9d90f7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
