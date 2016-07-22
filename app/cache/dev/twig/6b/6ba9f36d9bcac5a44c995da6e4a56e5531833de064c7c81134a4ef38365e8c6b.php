<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_a7b56a1c0f84c7a3da45d8957af84463f2683f548f60726ef177bf1b5b69c1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c5838c42bedcae75f214e0a656ea8c72e421774e28ab8a49f1bc1048968b867c = $this->env->getExtension("native_profiler");
        $__internal_c5838c42bedcae75f214e0a656ea8c72e421774e28ab8a49f1bc1048968b867c->enter($__internal_c5838c42bedcae75f214e0a656ea8c72e421774e28ab8a49f1bc1048968b867c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5838c42bedcae75f214e0a656ea8c72e421774e28ab8a49f1bc1048968b867c->leave($__internal_c5838c42bedcae75f214e0a656ea8c72e421774e28ab8a49f1bc1048968b867c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_722c47eaff656b36e92744437ce7fc362b3c3aad174c2a8fda3989b8b25045f6 = $this->env->getExtension("native_profiler");
        $__internal_722c47eaff656b36e92744437ce7fc362b3c3aad174c2a8fda3989b8b25045f6->enter($__internal_722c47eaff656b36e92744437ce7fc362b3c3aad174c2a8fda3989b8b25045f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_722c47eaff656b36e92744437ce7fc362b3c3aad174c2a8fda3989b8b25045f6->leave($__internal_722c47eaff656b36e92744437ce7fc362b3c3aad174c2a8fda3989b8b25045f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
