<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_f51a10f18ac9363ee8249025aaf869fb4334f56c756d0661234efc4ba902da96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_2e108a4eff11a8e88d9b1aff2ad2cdb272cf6fee44bd94f0698581adaed02dfc = $this->env->getExtension("native_profiler");
        $__internal_2e108a4eff11a8e88d9b1aff2ad2cdb272cf6fee44bd94f0698581adaed02dfc->enter($__internal_2e108a4eff11a8e88d9b1aff2ad2cdb272cf6fee44bd94f0698581adaed02dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e108a4eff11a8e88d9b1aff2ad2cdb272cf6fee44bd94f0698581adaed02dfc->leave($__internal_2e108a4eff11a8e88d9b1aff2ad2cdb272cf6fee44bd94f0698581adaed02dfc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1686133a63033e5afa243e48ea126a834a999384199eb40ab4815576b21ef530 = $this->env->getExtension("native_profiler");
        $__internal_1686133a63033e5afa243e48ea126a834a999384199eb40ab4815576b21ef530->enter($__internal_1686133a63033e5afa243e48ea126a834a999384199eb40ab4815576b21ef530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_1686133a63033e5afa243e48ea126a834a999384199eb40ab4815576b21ef530->leave($__internal_1686133a63033e5afa243e48ea126a834a999384199eb40ab4815576b21ef530_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
