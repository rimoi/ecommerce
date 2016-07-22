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
        $__internal_56887ba43fee40b4c32c77d68821f978bd5a810e2110fbb7ad7025aa056a4b3a = $this->env->getExtension("native_profiler");
        $__internal_56887ba43fee40b4c32c77d68821f978bd5a810e2110fbb7ad7025aa056a4b3a->enter($__internal_56887ba43fee40b4c32c77d68821f978bd5a810e2110fbb7ad7025aa056a4b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_56887ba43fee40b4c32c77d68821f978bd5a810e2110fbb7ad7025aa056a4b3a->leave($__internal_56887ba43fee40b4c32c77d68821f978bd5a810e2110fbb7ad7025aa056a4b3a_prof);

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
