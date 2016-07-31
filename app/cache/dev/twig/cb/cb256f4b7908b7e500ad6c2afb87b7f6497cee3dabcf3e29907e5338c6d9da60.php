<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_f44f7bdbc316c0215a644a4b5012fdc0844af095fd980a1bb19bdf852d3343a8 extends Twig_Template
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
        $__internal_a5b476b94e3e0141876afc76267658258bd4b7d7a7f41aa5a9e606e44a560064 = $this->env->getExtension("native_profiler");
        $__internal_a5b476b94e3e0141876afc76267658258bd4b7d7a7f41aa5a9e606e44a560064->enter($__internal_a5b476b94e3e0141876afc76267658258bd4b7d7a7f41aa5a9e606e44a560064_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_a5b476b94e3e0141876afc76267658258bd4b7d7a7f41aa5a9e606e44a560064->leave($__internal_a5b476b94e3e0141876afc76267658258bd4b7d7a7f41aa5a9e606e44a560064_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
