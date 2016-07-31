<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_87901ebe4bdcf55bfa9859ee146a45fd18ad6738765f6f02b740798e35a89a65 extends Twig_Template
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
        $__internal_855d37421bbb59a3aec20a1a5e1c3216922a9acebc82cbed0ec3feec929aebfa = $this->env->getExtension("native_profiler");
        $__internal_855d37421bbb59a3aec20a1a5e1c3216922a9acebc82cbed0ec3feec929aebfa->enter($__internal_855d37421bbb59a3aec20a1a5e1c3216922a9acebc82cbed0ec3feec929aebfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_855d37421bbb59a3aec20a1a5e1c3216922a9acebc82cbed0ec3feec929aebfa->leave($__internal_855d37421bbb59a3aec20a1a5e1c3216922a9acebc82cbed0ec3feec929aebfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
