<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_ef91458df4fccee118164c30ae970f080818003e5ec32573b5bc9689a1ab314b extends Twig_Template
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
        $__internal_4ba2dcce9a6f800b036698971f9853675e53a65f0614cb346e4c3c2e64dec32a = $this->env->getExtension("native_profiler");
        $__internal_4ba2dcce9a6f800b036698971f9853675e53a65f0614cb346e4c3c2e64dec32a->enter($__internal_4ba2dcce9a6f800b036698971f9853675e53a65f0614cb346e4c3c2e64dec32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4ba2dcce9a6f800b036698971f9853675e53a65f0614cb346e4c3c2e64dec32a->leave($__internal_4ba2dcce9a6f800b036698971f9853675e53a65f0614cb346e4c3c2e64dec32a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
