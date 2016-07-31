<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8bfcb3bf066a9499487998bcaaaf88b181ea19959a6d18006ca08aefaf2c3bf5 extends Twig_Template
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
        $__internal_9c6945fb23359b6f203c6ae5e739e6a23f1c6de3cbed7fd814aaaa4e943b3893 = $this->env->getExtension("native_profiler");
        $__internal_9c6945fb23359b6f203c6ae5e739e6a23f1c6de3cbed7fd814aaaa4e943b3893->enter($__internal_9c6945fb23359b6f203c6ae5e739e6a23f1c6de3cbed7fd814aaaa4e943b3893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9c6945fb23359b6f203c6ae5e739e6a23f1c6de3cbed7fd814aaaa4e943b3893->leave($__internal_9c6945fb23359b6f203c6ae5e739e6a23f1c6de3cbed7fd814aaaa4e943b3893_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
