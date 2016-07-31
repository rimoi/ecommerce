<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_569567c10048b6a85c6cc3393e1a3a95a95f03c6b0bd6caa9baed7dfe04d760c extends Twig_Template
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
        $__internal_9780fb5861d600a3278deaf65cf13b7cc86a36cbc01078300c5e48ff28b17f95 = $this->env->getExtension("native_profiler");
        $__internal_9780fb5861d600a3278deaf65cf13b7cc86a36cbc01078300c5e48ff28b17f95->enter($__internal_9780fb5861d600a3278deaf65cf13b7cc86a36cbc01078300c5e48ff28b17f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9780fb5861d600a3278deaf65cf13b7cc86a36cbc01078300c5e48ff28b17f95->leave($__internal_9780fb5861d600a3278deaf65cf13b7cc86a36cbc01078300c5e48ff28b17f95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1709eeced6e345dc0b6c80c54edddf6c7f847f534a6db7bb46177137babd060 = $this->env->getExtension("native_profiler");
        $__internal_a1709eeced6e345dc0b6c80c54edddf6c7f847f534a6db7bb46177137babd060->enter($__internal_a1709eeced6e345dc0b6c80c54edddf6c7f847f534a6db7bb46177137babd060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a1709eeced6e345dc0b6c80c54edddf6c7f847f534a6db7bb46177137babd060->leave($__internal_a1709eeced6e345dc0b6c80c54edddf6c7f847f534a6db7bb46177137babd060_prof);

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
