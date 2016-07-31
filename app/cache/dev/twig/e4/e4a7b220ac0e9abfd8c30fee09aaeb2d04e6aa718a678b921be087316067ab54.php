<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_44e8b2f0ced05ceb2767569be3662487d203f9e574c541d2d543ca8e2d41753e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_39fd075af5d08f96320d59ef6cc670d21c7fa3175df9d8f5aa15ed4f1525b493 = $this->env->getExtension("native_profiler");
        $__internal_39fd075af5d08f96320d59ef6cc670d21c7fa3175df9d8f5aa15ed4f1525b493->enter($__internal_39fd075af5d08f96320d59ef6cc670d21c7fa3175df9d8f5aa15ed4f1525b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39fd075af5d08f96320d59ef6cc670d21c7fa3175df9d8f5aa15ed4f1525b493->leave($__internal_39fd075af5d08f96320d59ef6cc670d21c7fa3175df9d8f5aa15ed4f1525b493_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea847bbc4d173bf1ed427bea1548490a16208c5407a27f8fbad2c2bafc766c38 = $this->env->getExtension("native_profiler");
        $__internal_ea847bbc4d173bf1ed427bea1548490a16208c5407a27f8fbad2c2bafc766c38->enter($__internal_ea847bbc4d173bf1ed427bea1548490a16208c5407a27f8fbad2c2bafc766c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_ea847bbc4d173bf1ed427bea1548490a16208c5407a27f8fbad2c2bafc766c38->leave($__internal_ea847bbc4d173bf1ed427bea1548490a16208c5407a27f8fbad2c2bafc766c38_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
