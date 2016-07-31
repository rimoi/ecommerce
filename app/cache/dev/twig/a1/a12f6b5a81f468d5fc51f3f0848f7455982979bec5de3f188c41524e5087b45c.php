<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e45f6f5fd56d761e721f898c6c958a1e5faba0b46b3533e43c66db6dfa4bce0b extends Twig_Template
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
        $__internal_1f5a1579301898e3d2d8c08ede2a00c93b83e3f75b4bb8ed4b7d64918295488e = $this->env->getExtension("native_profiler");
        $__internal_1f5a1579301898e3d2d8c08ede2a00c93b83e3f75b4bb8ed4b7d64918295488e->enter($__internal_1f5a1579301898e3d2d8c08ede2a00c93b83e3f75b4bb8ed4b7d64918295488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1f5a1579301898e3d2d8c08ede2a00c93b83e3f75b4bb8ed4b7d64918295488e->leave($__internal_1f5a1579301898e3d2d8c08ede2a00c93b83e3f75b4bb8ed4b7d64918295488e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
