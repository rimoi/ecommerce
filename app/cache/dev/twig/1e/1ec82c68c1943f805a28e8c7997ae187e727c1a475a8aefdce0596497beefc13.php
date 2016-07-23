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
        $__internal_9e2117b5e264d60bd75905d1ed12f174dab9beed46365cce64af815febb7fda4 = $this->env->getExtension("native_profiler");
        $__internal_9e2117b5e264d60bd75905d1ed12f174dab9beed46365cce64af815febb7fda4->enter($__internal_9e2117b5e264d60bd75905d1ed12f174dab9beed46365cce64af815febb7fda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9e2117b5e264d60bd75905d1ed12f174dab9beed46365cce64af815febb7fda4->leave($__internal_9e2117b5e264d60bd75905d1ed12f174dab9beed46365cce64af815febb7fda4_prof);

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
