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
        $__internal_bb533957848748541dc89209ed57e347eee26a1a94b2d0d4ab23395b37532229 = $this->env->getExtension("native_profiler");
        $__internal_bb533957848748541dc89209ed57e347eee26a1a94b2d0d4ab23395b37532229->enter($__internal_bb533957848748541dc89209ed57e347eee26a1a94b2d0d4ab23395b37532229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_bb533957848748541dc89209ed57e347eee26a1a94b2d0d4ab23395b37532229->leave($__internal_bb533957848748541dc89209ed57e347eee26a1a94b2d0d4ab23395b37532229_prof);

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
