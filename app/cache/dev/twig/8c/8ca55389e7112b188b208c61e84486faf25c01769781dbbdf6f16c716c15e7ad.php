<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_cb7d108c4c252c4c3cb6f86165ce68e28f04961979d9affe311ddb00ad04aa85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_d3bf4431944a7acc4354ffd2e7097bfab357d40837c83c2aad3e6004a919daba = $this->env->getExtension("native_profiler");
        $__internal_d3bf4431944a7acc4354ffd2e7097bfab357d40837c83c2aad3e6004a919daba->enter($__internal_d3bf4431944a7acc4354ffd2e7097bfab357d40837c83c2aad3e6004a919daba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3bf4431944a7acc4354ffd2e7097bfab357d40837c83c2aad3e6004a919daba->leave($__internal_d3bf4431944a7acc4354ffd2e7097bfab357d40837c83c2aad3e6004a919daba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc61fd6e5a5d2add620b837e48b9da54729a45bd014d02c07cb9077a4bf39544 = $this->env->getExtension("native_profiler");
        $__internal_bc61fd6e5a5d2add620b837e48b9da54729a45bd014d02c07cb9077a4bf39544->enter($__internal_bc61fd6e5a5d2add620b837e48b9da54729a45bd014d02c07cb9077a4bf39544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_bc61fd6e5a5d2add620b837e48b9da54729a45bd014d02c07cb9077a4bf39544->leave($__internal_bc61fd6e5a5d2add620b837e48b9da54729a45bd014d02c07cb9077a4bf39544_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
