<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7bf4740b5e967aac34b3fca040eb357156ac80737aa17c6dbead4dc23c02ec22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_05ea9367f4dcbe0bcd23742bf2d78a5d14d400e25302aff074aa3c70574143a9 = $this->env->getExtension("native_profiler");
        $__internal_05ea9367f4dcbe0bcd23742bf2d78a5d14d400e25302aff074aa3c70574143a9->enter($__internal_05ea9367f4dcbe0bcd23742bf2d78a5d14d400e25302aff074aa3c70574143a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ea9367f4dcbe0bcd23742bf2d78a5d14d400e25302aff074aa3c70574143a9->leave($__internal_05ea9367f4dcbe0bcd23742bf2d78a5d14d400e25302aff074aa3c70574143a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fa3f1f8ae417595731fe55055fe18e4f3cb6f6258c15d7489aa4328405000c6 = $this->env->getExtension("native_profiler");
        $__internal_6fa3f1f8ae417595731fe55055fe18e4f3cb6f6258c15d7489aa4328405000c6->enter($__internal_6fa3f1f8ae417595731fe55055fe18e4f3cb6f6258c15d7489aa4328405000c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_6fa3f1f8ae417595731fe55055fe18e4f3cb6f6258c15d7489aa4328405000c6->leave($__internal_6fa3f1f8ae417595731fe55055fe18e4f3cb6f6258c15d7489aa4328405000c6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
