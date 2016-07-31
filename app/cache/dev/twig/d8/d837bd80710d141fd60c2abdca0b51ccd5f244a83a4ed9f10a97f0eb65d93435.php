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
        $__internal_985b7ed040a9f0a146a34462de1574d9910e655a7cec0af53a6c01ab55f67126 = $this->env->getExtension("native_profiler");
        $__internal_985b7ed040a9f0a146a34462de1574d9910e655a7cec0af53a6c01ab55f67126->enter($__internal_985b7ed040a9f0a146a34462de1574d9910e655a7cec0af53a6c01ab55f67126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_985b7ed040a9f0a146a34462de1574d9910e655a7cec0af53a6c01ab55f67126->leave($__internal_985b7ed040a9f0a146a34462de1574d9910e655a7cec0af53a6c01ab55f67126_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7baf4e5ab1829554f627dadb761b0ff785e6fb938a25da6066e0ec117152fe58 = $this->env->getExtension("native_profiler");
        $__internal_7baf4e5ab1829554f627dadb761b0ff785e6fb938a25da6066e0ec117152fe58->enter($__internal_7baf4e5ab1829554f627dadb761b0ff785e6fb938a25da6066e0ec117152fe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_7baf4e5ab1829554f627dadb761b0ff785e6fb938a25da6066e0ec117152fe58->leave($__internal_7baf4e5ab1829554f627dadb761b0ff785e6fb938a25da6066e0ec117152fe58_prof);

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
