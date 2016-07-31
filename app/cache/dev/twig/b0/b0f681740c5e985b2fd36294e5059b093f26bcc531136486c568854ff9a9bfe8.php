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
        $__internal_52c71ba122a890ad1b643ed887490d7a3ed856a1d86aace18e56d6d8b0d100d8 = $this->env->getExtension("native_profiler");
        $__internal_52c71ba122a890ad1b643ed887490d7a3ed856a1d86aace18e56d6d8b0d100d8->enter($__internal_52c71ba122a890ad1b643ed887490d7a3ed856a1d86aace18e56d6d8b0d100d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52c71ba122a890ad1b643ed887490d7a3ed856a1d86aace18e56d6d8b0d100d8->leave($__internal_52c71ba122a890ad1b643ed887490d7a3ed856a1d86aace18e56d6d8b0d100d8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4513f52e716e44064a56784b35447d8ca4f5d339ee9524b821086c2cb71b9b6d = $this->env->getExtension("native_profiler");
        $__internal_4513f52e716e44064a56784b35447d8ca4f5d339ee9524b821086c2cb71b9b6d->enter($__internal_4513f52e716e44064a56784b35447d8ca4f5d339ee9524b821086c2cb71b9b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4513f52e716e44064a56784b35447d8ca4f5d339ee9524b821086c2cb71b9b6d->leave($__internal_4513f52e716e44064a56784b35447d8ca4f5d339ee9524b821086c2cb71b9b6d_prof);

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
