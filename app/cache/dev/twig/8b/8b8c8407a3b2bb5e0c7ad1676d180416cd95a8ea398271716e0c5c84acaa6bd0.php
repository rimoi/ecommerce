<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_14ae34e3ad173e8afd937b9e0be9df3f71355aa10d87f6fefa86929d2ac7d296 extends Twig_Template
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
        $__internal_267d2765055153e5dd41689f992b50ad4852f2aca42321f1653dd87f9d697162 = $this->env->getExtension("native_profiler");
        $__internal_267d2765055153e5dd41689f992b50ad4852f2aca42321f1653dd87f9d697162->enter($__internal_267d2765055153e5dd41689f992b50ad4852f2aca42321f1653dd87f9d697162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_267d2765055153e5dd41689f992b50ad4852f2aca42321f1653dd87f9d697162->leave($__internal_267d2765055153e5dd41689f992b50ad4852f2aca42321f1653dd87f9d697162_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
