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
        $__internal_bc83f623031ac79cb06d940b07a630ed65228f27af225c6f427bec284d5970a4 = $this->env->getExtension("native_profiler");
        $__internal_bc83f623031ac79cb06d940b07a630ed65228f27af225c6f427bec284d5970a4->enter($__internal_bc83f623031ac79cb06d940b07a630ed65228f27af225c6f427bec284d5970a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bc83f623031ac79cb06d940b07a630ed65228f27af225c6f427bec284d5970a4->leave($__internal_bc83f623031ac79cb06d940b07a630ed65228f27af225c6f427bec284d5970a4_prof);

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
