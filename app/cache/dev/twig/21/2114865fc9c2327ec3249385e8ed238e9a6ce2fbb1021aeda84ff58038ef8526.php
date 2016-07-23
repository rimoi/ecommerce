<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3ac0da2fbb8f0b3d615b04ea31b2838eba86cfe919d653c892fd5c017ca4fff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_608bea2d15f37eb00b9ab8d97027aaf0e7dbc0eda793d370289ffbfec22d0da7 = $this->env->getExtension("native_profiler");
        $__internal_608bea2d15f37eb00b9ab8d97027aaf0e7dbc0eda793d370289ffbfec22d0da7->enter($__internal_608bea2d15f37eb00b9ab8d97027aaf0e7dbc0eda793d370289ffbfec22d0da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_608bea2d15f37eb00b9ab8d97027aaf0e7dbc0eda793d370289ffbfec22d0da7->leave($__internal_608bea2d15f37eb00b9ab8d97027aaf0e7dbc0eda793d370289ffbfec22d0da7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
