<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c2aa01019d43f095a6b0f615fce755f60d167f1b55cb9503e4ba3ce56f152005 extends Twig_Template
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
        $__internal_cfd0b6a5ff3ec353196e88bf78d0ce913eef433e33166119d4ea3f1ca7d091db = $this->env->getExtension("native_profiler");
        $__internal_cfd0b6a5ff3ec353196e88bf78d0ce913eef433e33166119d4ea3f1ca7d091db->enter($__internal_cfd0b6a5ff3ec353196e88bf78d0ce913eef433e33166119d4ea3f1ca7d091db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cfd0b6a5ff3ec353196e88bf78d0ce913eef433e33166119d4ea3f1ca7d091db->leave($__internal_cfd0b6a5ff3ec353196e88bf78d0ce913eef433e33166119d4ea3f1ca7d091db_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
