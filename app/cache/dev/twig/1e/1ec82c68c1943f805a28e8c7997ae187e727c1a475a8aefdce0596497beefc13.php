<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_73c81c377bf69680f7e808caa96e12664674017715aabada5d64b0ad6307197c extends Twig_Template
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
        $__internal_1534d282c0fb723396f3ef32b698136d9ce1ddffe93e6a8d4301bd0ce2bde85d = $this->env->getExtension("native_profiler");
        $__internal_1534d282c0fb723396f3ef32b698136d9ce1ddffe93e6a8d4301bd0ce2bde85d->enter($__internal_1534d282c0fb723396f3ef32b698136d9ce1ddffe93e6a8d4301bd0ce2bde85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1534d282c0fb723396f3ef32b698136d9ce1ddffe93e6a8d4301bd0ce2bde85d->leave($__internal_1534d282c0fb723396f3ef32b698136d9ce1ddffe93e6a8d4301bd0ce2bde85d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
