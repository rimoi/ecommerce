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
        $__internal_51e980d2722f9f002e8a3fbf8848d1560d1cbc2194c9b0b62f6fc99937c8040a = $this->env->getExtension("native_profiler");
        $__internal_51e980d2722f9f002e8a3fbf8848d1560d1cbc2194c9b0b62f6fc99937c8040a->enter($__internal_51e980d2722f9f002e8a3fbf8848d1560d1cbc2194c9b0b62f6fc99937c8040a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_51e980d2722f9f002e8a3fbf8848d1560d1cbc2194c9b0b62f6fc99937c8040a->leave($__internal_51e980d2722f9f002e8a3fbf8848d1560d1cbc2194c9b0b62f6fc99937c8040a_prof);

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
