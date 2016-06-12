<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7c58c73764be62890d783dc239ddc91e4279c34b1f1d208a0962ee936b38a3e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be7c34e4ce2d6aff6a56439deebbdb5c99694115a5b33c24d727e4ea6e5dd594 = $this->env->getExtension("native_profiler");
        $__internal_be7c34e4ce2d6aff6a56439deebbdb5c99694115a5b33c24d727e4ea6e5dd594->enter($__internal_be7c34e4ce2d6aff6a56439deebbdb5c99694115a5b33c24d727e4ea6e5dd594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be7c34e4ce2d6aff6a56439deebbdb5c99694115a5b33c24d727e4ea6e5dd594->leave($__internal_be7c34e4ce2d6aff6a56439deebbdb5c99694115a5b33c24d727e4ea6e5dd594_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_45ce92371888f6850351ec8969fcbeae3f031fc43f27f1d40c5e4c3bd34a94be = $this->env->getExtension("native_profiler");
        $__internal_45ce92371888f6850351ec8969fcbeae3f031fc43f27f1d40c5e4c3bd34a94be->enter($__internal_45ce92371888f6850351ec8969fcbeae3f031fc43f27f1d40c5e4c3bd34a94be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_45ce92371888f6850351ec8969fcbeae3f031fc43f27f1d40c5e4c3bd34a94be->leave($__internal_45ce92371888f6850351ec8969fcbeae3f031fc43f27f1d40c5e4c3bd34a94be_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_012337f9001bc2862605e78c26afa9adc4cf35e525fd143887d47ccce5054112 = $this->env->getExtension("native_profiler");
        $__internal_012337f9001bc2862605e78c26afa9adc4cf35e525fd143887d47ccce5054112->enter($__internal_012337f9001bc2862605e78c26afa9adc4cf35e525fd143887d47ccce5054112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_012337f9001bc2862605e78c26afa9adc4cf35e525fd143887d47ccce5054112->leave($__internal_012337f9001bc2862605e78c26afa9adc4cf35e525fd143887d47ccce5054112_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_547c687e14127e38825b0b3e0345378ae302ca1be185132637f1a826a5ff0a1f = $this->env->getExtension("native_profiler");
        $__internal_547c687e14127e38825b0b3e0345378ae302ca1be185132637f1a826a5ff0a1f->enter($__internal_547c687e14127e38825b0b3e0345378ae302ca1be185132637f1a826a5ff0a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_547c687e14127e38825b0b3e0345378ae302ca1be185132637f1a826a5ff0a1f->leave($__internal_547c687e14127e38825b0b3e0345378ae302ca1be185132637f1a826a5ff0a1f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
