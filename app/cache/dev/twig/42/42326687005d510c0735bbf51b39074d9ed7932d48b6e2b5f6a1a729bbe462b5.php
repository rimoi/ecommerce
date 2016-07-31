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
        $__internal_4f48c07acf1baf4ddf77268a48e9a84f662bec9926944491a51b190d91090d58 = $this->env->getExtension("native_profiler");
        $__internal_4f48c07acf1baf4ddf77268a48e9a84f662bec9926944491a51b190d91090d58->enter($__internal_4f48c07acf1baf4ddf77268a48e9a84f662bec9926944491a51b190d91090d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f48c07acf1baf4ddf77268a48e9a84f662bec9926944491a51b190d91090d58->leave($__internal_4f48c07acf1baf4ddf77268a48e9a84f662bec9926944491a51b190d91090d58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_515be463b6c1921c1f77975e85f4c3b581cbc7710a6d1b0c25fa8dde7129defd = $this->env->getExtension("native_profiler");
        $__internal_515be463b6c1921c1f77975e85f4c3b581cbc7710a6d1b0c25fa8dde7129defd->enter($__internal_515be463b6c1921c1f77975e85f4c3b581cbc7710a6d1b0c25fa8dde7129defd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_515be463b6c1921c1f77975e85f4c3b581cbc7710a6d1b0c25fa8dde7129defd->leave($__internal_515be463b6c1921c1f77975e85f4c3b581cbc7710a6d1b0c25fa8dde7129defd_prof);

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
