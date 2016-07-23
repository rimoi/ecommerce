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
        $__internal_b8883f4d5fe4158d18b5661cd60bb9f9fbfa78ce823e57100e8f054a3d08a948 = $this->env->getExtension("native_profiler");
        $__internal_b8883f4d5fe4158d18b5661cd60bb9f9fbfa78ce823e57100e8f054a3d08a948->enter($__internal_b8883f4d5fe4158d18b5661cd60bb9f9fbfa78ce823e57100e8f054a3d08a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b8883f4d5fe4158d18b5661cd60bb9f9fbfa78ce823e57100e8f054a3d08a948->leave($__internal_b8883f4d5fe4158d18b5661cd60bb9f9fbfa78ce823e57100e8f054a3d08a948_prof);

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
