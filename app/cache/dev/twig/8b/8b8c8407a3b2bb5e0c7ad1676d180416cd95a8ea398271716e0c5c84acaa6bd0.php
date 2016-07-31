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
        $__internal_c6ca5f889211d8a81fcb2f0023e903e0645ea68bc9d69e468feb96c2266283b5 = $this->env->getExtension("native_profiler");
        $__internal_c6ca5f889211d8a81fcb2f0023e903e0645ea68bc9d69e468feb96c2266283b5->enter($__internal_c6ca5f889211d8a81fcb2f0023e903e0645ea68bc9d69e468feb96c2266283b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c6ca5f889211d8a81fcb2f0023e903e0645ea68bc9d69e468feb96c2266283b5->leave($__internal_c6ca5f889211d8a81fcb2f0023e903e0645ea68bc9d69e468feb96c2266283b5_prof);

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
