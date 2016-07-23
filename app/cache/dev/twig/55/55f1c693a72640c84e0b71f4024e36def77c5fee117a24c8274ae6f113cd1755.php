<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_174d9a2d4ce12f5f449537e2c100b5d607b56ce9aa0a76581ef73cecadf94b4c extends Twig_Template
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
        $__internal_1bbf34c9ff37298261e9eea0b4fdd7f00157a09e9c60be3626ed0ebe0622bcd0 = $this->env->getExtension("native_profiler");
        $__internal_1bbf34c9ff37298261e9eea0b4fdd7f00157a09e9c60be3626ed0ebe0622bcd0->enter($__internal_1bbf34c9ff37298261e9eea0b4fdd7f00157a09e9c60be3626ed0ebe0622bcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1bbf34c9ff37298261e9eea0b4fdd7f00157a09e9c60be3626ed0ebe0622bcd0->leave($__internal_1bbf34c9ff37298261e9eea0b4fdd7f00157a09e9c60be3626ed0ebe0622bcd0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
