<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_81e327201bf7c640d650fb2315259bddd078f67944ecc14941916c54a2093adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_62ef886c179e0bc5a95adb5053e5a5bf1f273189e423fa57dd11ba4a335cb9ed = $this->env->getExtension("native_profiler");
        $__internal_62ef886c179e0bc5a95adb5053e5a5bf1f273189e423fa57dd11ba4a335cb9ed->enter($__internal_62ef886c179e0bc5a95adb5053e5a5bf1f273189e423fa57dd11ba4a335cb9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62ef886c179e0bc5a95adb5053e5a5bf1f273189e423fa57dd11ba4a335cb9ed->leave($__internal_62ef886c179e0bc5a95adb5053e5a5bf1f273189e423fa57dd11ba4a335cb9ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_145c783e610c63073ed1dd42f79115aa8f6fccd3a6b0948677d27ab62e81a09a = $this->env->getExtension("native_profiler");
        $__internal_145c783e610c63073ed1dd42f79115aa8f6fccd3a6b0948677d27ab62e81a09a->enter($__internal_145c783e610c63073ed1dd42f79115aa8f6fccd3a6b0948677d27ab62e81a09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_145c783e610c63073ed1dd42f79115aa8f6fccd3a6b0948677d27ab62e81a09a->leave($__internal_145c783e610c63073ed1dd42f79115aa8f6fccd3a6b0948677d27ab62e81a09a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
