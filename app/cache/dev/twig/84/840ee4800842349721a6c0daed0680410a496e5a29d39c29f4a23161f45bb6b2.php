<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1dff010457d008c722ca641cd97354b7b27ce10b5f9ade522c641c7a55319fad extends Twig_Template
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
        $__internal_f9d46a615df93ee9cea5b51ccce80349f19f93e6e34f93be8dabc6fab78050c8 = $this->env->getExtension("native_profiler");
        $__internal_f9d46a615df93ee9cea5b51ccce80349f19f93e6e34f93be8dabc6fab78050c8->enter($__internal_f9d46a615df93ee9cea5b51ccce80349f19f93e6e34f93be8dabc6fab78050c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f9d46a615df93ee9cea5b51ccce80349f19f93e6e34f93be8dabc6fab78050c8->leave($__internal_f9d46a615df93ee9cea5b51ccce80349f19f93e6e34f93be8dabc6fab78050c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
