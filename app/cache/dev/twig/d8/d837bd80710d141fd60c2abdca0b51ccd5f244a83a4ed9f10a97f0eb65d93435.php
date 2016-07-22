<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_0e067501e202b04f49c95573300ed08b09fb6aefd0787be30df2a478fbf3ac75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_be9c11596123e4f56b9a3d41bc0966c5d7e6e28148bc7b50917d49c96ac1058a = $this->env->getExtension("native_profiler");
        $__internal_be9c11596123e4f56b9a3d41bc0966c5d7e6e28148bc7b50917d49c96ac1058a->enter($__internal_be9c11596123e4f56b9a3d41bc0966c5d7e6e28148bc7b50917d49c96ac1058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be9c11596123e4f56b9a3d41bc0966c5d7e6e28148bc7b50917d49c96ac1058a->leave($__internal_be9c11596123e4f56b9a3d41bc0966c5d7e6e28148bc7b50917d49c96ac1058a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b0dee89d36d955b1b966599219bf53b4d2d3af2ef5c675f65ba6bb1216e8b43a = $this->env->getExtension("native_profiler");
        $__internal_b0dee89d36d955b1b966599219bf53b4d2d3af2ef5c675f65ba6bb1216e8b43a->enter($__internal_b0dee89d36d955b1b966599219bf53b4d2d3af2ef5c675f65ba6bb1216e8b43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b0dee89d36d955b1b966599219bf53b4d2d3af2ef5c675f65ba6bb1216e8b43a->leave($__internal_b0dee89d36d955b1b966599219bf53b4d2d3af2ef5c675f65ba6bb1216e8b43a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
