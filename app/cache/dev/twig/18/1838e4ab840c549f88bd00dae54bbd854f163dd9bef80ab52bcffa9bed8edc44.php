<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_7c868e2c710e1396ce87e07c096f50599af3afb2b6fa7d57aecd68ef7698a4fa extends Twig_Template
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
        $__internal_42ec08da09afbb8d302844bc6edb5e96c3f75ecae96021a85b64ef775f195932 = $this->env->getExtension("native_profiler");
        $__internal_42ec08da09afbb8d302844bc6edb5e96c3f75ecae96021a85b64ef775f195932->enter($__internal_42ec08da09afbb8d302844bc6edb5e96c3f75ecae96021a85b64ef775f195932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_42ec08da09afbb8d302844bc6edb5e96c3f75ecae96021a85b64ef775f195932->leave($__internal_42ec08da09afbb8d302844bc6edb5e96c3f75ecae96021a85b64ef775f195932_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
