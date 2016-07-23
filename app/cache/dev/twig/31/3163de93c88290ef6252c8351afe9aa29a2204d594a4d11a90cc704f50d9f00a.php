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
        $__internal_c95800b530cc0e748d2666dcdb2bed0a2c35c197e23b19fd12b0fbb7d8ec8ad9 = $this->env->getExtension("native_profiler");
        $__internal_c95800b530cc0e748d2666dcdb2bed0a2c35c197e23b19fd12b0fbb7d8ec8ad9->enter($__internal_c95800b530cc0e748d2666dcdb2bed0a2c35c197e23b19fd12b0fbb7d8ec8ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c95800b530cc0e748d2666dcdb2bed0a2c35c197e23b19fd12b0fbb7d8ec8ad9->leave($__internal_c95800b530cc0e748d2666dcdb2bed0a2c35c197e23b19fd12b0fbb7d8ec8ad9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d221985d7caa5959baea22f516515f7dd1a531dfceb793a1f23f7acbe714b925 = $this->env->getExtension("native_profiler");
        $__internal_d221985d7caa5959baea22f516515f7dd1a531dfceb793a1f23f7acbe714b925->enter($__internal_d221985d7caa5959baea22f516515f7dd1a531dfceb793a1f23f7acbe714b925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_d221985d7caa5959baea22f516515f7dd1a531dfceb793a1f23f7acbe714b925->leave($__internal_d221985d7caa5959baea22f516515f7dd1a531dfceb793a1f23f7acbe714b925_prof);

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
