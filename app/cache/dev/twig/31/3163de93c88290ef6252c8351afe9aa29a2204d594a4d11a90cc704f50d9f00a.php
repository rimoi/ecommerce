<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f979061b043090bfc7ae5413287218f8784c18ea2a252da4c22996cde671582d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_91afe4dfebd339355904b24b22db29c9db922107c5ff45ad96c1c90866b491c4 = $this->env->getExtension("native_profiler");
        $__internal_91afe4dfebd339355904b24b22db29c9db922107c5ff45ad96c1c90866b491c4->enter($__internal_91afe4dfebd339355904b24b22db29c9db922107c5ff45ad96c1c90866b491c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91afe4dfebd339355904b24b22db29c9db922107c5ff45ad96c1c90866b491c4->leave($__internal_91afe4dfebd339355904b24b22db29c9db922107c5ff45ad96c1c90866b491c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b0a296cb9929b9fddb96ccc85fe6ef4d4eb786cdaa13441bf95c348ce8063d4 = $this->env->getExtension("native_profiler");
        $__internal_4b0a296cb9929b9fddb96ccc85fe6ef4d4eb786cdaa13441bf95c348ce8063d4->enter($__internal_4b0a296cb9929b9fddb96ccc85fe6ef4d4eb786cdaa13441bf95c348ce8063d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4b0a296cb9929b9fddb96ccc85fe6ef4d4eb786cdaa13441bf95c348ce8063d4->leave($__internal_4b0a296cb9929b9fddb96ccc85fe6ef4d4eb786cdaa13441bf95c348ce8063d4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
