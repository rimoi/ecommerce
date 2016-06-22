<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_36d381accf0e2555a5570ffaffc568045fd028377dc55310203fa4b2598fe50f extends Twig_Template
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
        $__internal_a33fcab5ad729d7ed382165accfbe596c7d77d3eb7e9cd2cbb5ecf28e78ce398 = $this->env->getExtension("native_profiler");
        $__internal_a33fcab5ad729d7ed382165accfbe596c7d77d3eb7e9cd2cbb5ecf28e78ce398->enter($__internal_a33fcab5ad729d7ed382165accfbe596c7d77d3eb7e9cd2cbb5ecf28e78ce398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a33fcab5ad729d7ed382165accfbe596c7d77d3eb7e9cd2cbb5ecf28e78ce398->leave($__internal_a33fcab5ad729d7ed382165accfbe596c7d77d3eb7e9cd2cbb5ecf28e78ce398_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31bcbfeb598f01bd2963324669a57630329d570e3f61a3e29f4f6c39b2ad8c6a = $this->env->getExtension("native_profiler");
        $__internal_31bcbfeb598f01bd2963324669a57630329d570e3f61a3e29f4f6c39b2ad8c6a->enter($__internal_31bcbfeb598f01bd2963324669a57630329d570e3f61a3e29f4f6c39b2ad8c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_31bcbfeb598f01bd2963324669a57630329d570e3f61a3e29f4f6c39b2ad8c6a->leave($__internal_31bcbfeb598f01bd2963324669a57630329d570e3f61a3e29f4f6c39b2ad8c6a_prof);

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
