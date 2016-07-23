<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2268b26bab0199630e65222dd1ef7024abc0b932f7cc8959f4c6b604e3d7a71e extends Twig_Template
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
        $__internal_b89aee546fb5e8c8ffff290ea7d97fb04d9a9865534bb81577a56156879fc906 = $this->env->getExtension("native_profiler");
        $__internal_b89aee546fb5e8c8ffff290ea7d97fb04d9a9865534bb81577a56156879fc906->enter($__internal_b89aee546fb5e8c8ffff290ea7d97fb04d9a9865534bb81577a56156879fc906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b89aee546fb5e8c8ffff290ea7d97fb04d9a9865534bb81577a56156879fc906->leave($__internal_b89aee546fb5e8c8ffff290ea7d97fb04d9a9865534bb81577a56156879fc906_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
