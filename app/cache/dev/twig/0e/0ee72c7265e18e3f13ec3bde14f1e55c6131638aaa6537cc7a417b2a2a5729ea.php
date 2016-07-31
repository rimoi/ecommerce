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
        $__internal_2993f9bb98568176bbbe018dc0a0ceaba2982edde6fb54ba135bc1876e2372ba = $this->env->getExtension("native_profiler");
        $__internal_2993f9bb98568176bbbe018dc0a0ceaba2982edde6fb54ba135bc1876e2372ba->enter($__internal_2993f9bb98568176bbbe018dc0a0ceaba2982edde6fb54ba135bc1876e2372ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2993f9bb98568176bbbe018dc0a0ceaba2982edde6fb54ba135bc1876e2372ba->leave($__internal_2993f9bb98568176bbbe018dc0a0ceaba2982edde6fb54ba135bc1876e2372ba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3c9285ccde976bb57718e60a60c7b7c36f7f87b9cb25c06aa33dfe99296bf7c6 = $this->env->getExtension("native_profiler");
        $__internal_3c9285ccde976bb57718e60a60c7b7c36f7f87b9cb25c06aa33dfe99296bf7c6->enter($__internal_3c9285ccde976bb57718e60a60c7b7c36f7f87b9cb25c06aa33dfe99296bf7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_3c9285ccde976bb57718e60a60c7b7c36f7f87b9cb25c06aa33dfe99296bf7c6->leave($__internal_3c9285ccde976bb57718e60a60c7b7c36f7f87b9cb25c06aa33dfe99296bf7c6_prof);

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
