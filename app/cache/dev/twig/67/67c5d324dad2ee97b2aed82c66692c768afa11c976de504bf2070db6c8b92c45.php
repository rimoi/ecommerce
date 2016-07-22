<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_19f3cda14752587cbad9a199512ce04a711aab2c89ff67b25f09f840be741a5b extends Twig_Template
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
        $__internal_f0ab084ec81d33be1e5023c199b202bda774cf00b23f7f39ce91fbdb66405398 = $this->env->getExtension("native_profiler");
        $__internal_f0ab084ec81d33be1e5023c199b202bda774cf00b23f7f39ce91fbdb66405398->enter($__internal_f0ab084ec81d33be1e5023c199b202bda774cf00b23f7f39ce91fbdb66405398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f0ab084ec81d33be1e5023c199b202bda774cf00b23f7f39ce91fbdb66405398->leave($__internal_f0ab084ec81d33be1e5023c199b202bda774cf00b23f7f39ce91fbdb66405398_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
