<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e43541e033e147fae7700d81dc249a91e06f1c95fab82e2881ef8833294d08b9 extends Twig_Template
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
        $__internal_795882ee416c63d8c81622101e9b787c3ca0677ba4c0944872b0d9f68b3cb91a = $this->env->getExtension("native_profiler");
        $__internal_795882ee416c63d8c81622101e9b787c3ca0677ba4c0944872b0d9f68b3cb91a->enter($__internal_795882ee416c63d8c81622101e9b787c3ca0677ba4c0944872b0d9f68b3cb91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_795882ee416c63d8c81622101e9b787c3ca0677ba4c0944872b0d9f68b3cb91a->leave($__internal_795882ee416c63d8c81622101e9b787c3ca0677ba4c0944872b0d9f68b3cb91a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
