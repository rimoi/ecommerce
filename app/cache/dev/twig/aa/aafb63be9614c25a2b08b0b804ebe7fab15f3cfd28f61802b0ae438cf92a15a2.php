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
        $__internal_ce1c2d0907242925b66609d65669cb77eaac395585e08d23e93e5e220c7c85d9 = $this->env->getExtension("native_profiler");
        $__internal_ce1c2d0907242925b66609d65669cb77eaac395585e08d23e93e5e220c7c85d9->enter($__internal_ce1c2d0907242925b66609d65669cb77eaac395585e08d23e93e5e220c7c85d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ce1c2d0907242925b66609d65669cb77eaac395585e08d23e93e5e220c7c85d9->leave($__internal_ce1c2d0907242925b66609d65669cb77eaac395585e08d23e93e5e220c7c85d9_prof);

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
