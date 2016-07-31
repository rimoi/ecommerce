<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_33cd693ae529a87dfcd45c1f02461772a50c10188f4ac50fa712420f9a5a1d03 extends Twig_Template
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
        $__internal_15f40d7bd986244887f3d071be04e618449a2391dd68d8782adf8fe2561b5125 = $this->env->getExtension("native_profiler");
        $__internal_15f40d7bd986244887f3d071be04e618449a2391dd68d8782adf8fe2561b5125->enter($__internal_15f40d7bd986244887f3d071be04e618449a2391dd68d8782adf8fe2561b5125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_15f40d7bd986244887f3d071be04e618449a2391dd68d8782adf8fe2561b5125->leave($__internal_15f40d7bd986244887f3d071be04e618449a2391dd68d8782adf8fe2561b5125_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
