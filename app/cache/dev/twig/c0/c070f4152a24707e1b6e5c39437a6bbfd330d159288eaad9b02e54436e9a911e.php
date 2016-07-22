<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_47403f5d9544967b1631215e8d62edeb036c929b9e39abb7c38a72f7339959b2 extends Twig_Template
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
        $__internal_3aa5de6ac40bc23dcf87656ca70a5aad2bd17200f8bd7b498c727efacfc187fe = $this->env->getExtension("native_profiler");
        $__internal_3aa5de6ac40bc23dcf87656ca70a5aad2bd17200f8bd7b498c727efacfc187fe->enter($__internal_3aa5de6ac40bc23dcf87656ca70a5aad2bd17200f8bd7b498c727efacfc187fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3aa5de6ac40bc23dcf87656ca70a5aad2bd17200f8bd7b498c727efacfc187fe->leave($__internal_3aa5de6ac40bc23dcf87656ca70a5aad2bd17200f8bd7b498c727efacfc187fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
