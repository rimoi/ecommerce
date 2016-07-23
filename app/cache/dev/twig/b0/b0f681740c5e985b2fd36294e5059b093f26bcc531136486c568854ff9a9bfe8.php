<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a27d5c26c89b6abf51e61e0ec0dc908b809e511e55f28e6b3c4abac8c8fbb28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_05ad4af244bff9566190d54cb0b6ab7851155d89fb4e337cf96887143abd1a7e = $this->env->getExtension("native_profiler");
        $__internal_05ad4af244bff9566190d54cb0b6ab7851155d89fb4e337cf96887143abd1a7e->enter($__internal_05ad4af244bff9566190d54cb0b6ab7851155d89fb4e337cf96887143abd1a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ad4af244bff9566190d54cb0b6ab7851155d89fb4e337cf96887143abd1a7e->leave($__internal_05ad4af244bff9566190d54cb0b6ab7851155d89fb4e337cf96887143abd1a7e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4f78ee6588977ef48cbeff26c0a9576298ae38ce1fba62bca4b7c27828a271cf = $this->env->getExtension("native_profiler");
        $__internal_4f78ee6588977ef48cbeff26c0a9576298ae38ce1fba62bca4b7c27828a271cf->enter($__internal_4f78ee6588977ef48cbeff26c0a9576298ae38ce1fba62bca4b7c27828a271cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4f78ee6588977ef48cbeff26c0a9576298ae38ce1fba62bca4b7c27828a271cf->leave($__internal_4f78ee6588977ef48cbeff26c0a9576298ae38ce1fba62bca4b7c27828a271cf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
