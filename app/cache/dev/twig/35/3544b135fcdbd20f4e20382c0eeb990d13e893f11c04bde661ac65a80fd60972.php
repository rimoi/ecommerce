<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_54cc09e5c90a07fd783b9707f227980239a691c575283eaf19ffee2be69ea953 extends Twig_Template
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
        $__internal_1c5ecfdd42b61d5bd761cb725bd8e043bf7518e3a6bae4843e89c4ccc08118fb = $this->env->getExtension("native_profiler");
        $__internal_1c5ecfdd42b61d5bd761cb725bd8e043bf7518e3a6bae4843e89c4ccc08118fb->enter($__internal_1c5ecfdd42b61d5bd761cb725bd8e043bf7518e3a6bae4843e89c4ccc08118fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c5ecfdd42b61d5bd761cb725bd8e043bf7518e3a6bae4843e89c4ccc08118fb->leave($__internal_1c5ecfdd42b61d5bd761cb725bd8e043bf7518e3a6bae4843e89c4ccc08118fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_386bae0622be27922adb5955ebb6f29664ba5ffd5c78c7886ed5257a833e5ebf = $this->env->getExtension("native_profiler");
        $__internal_386bae0622be27922adb5955ebb6f29664ba5ffd5c78c7886ed5257a833e5ebf->enter($__internal_386bae0622be27922adb5955ebb6f29664ba5ffd5c78c7886ed5257a833e5ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_386bae0622be27922adb5955ebb6f29664ba5ffd5c78c7886ed5257a833e5ebf->leave($__internal_386bae0622be27922adb5955ebb6f29664ba5ffd5c78c7886ed5257a833e5ebf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d03482b1cc02ff262c3c93958a294c40a16c5f81d672060367441d665768ff1d = $this->env->getExtension("native_profiler");
        $__internal_d03482b1cc02ff262c3c93958a294c40a16c5f81d672060367441d665768ff1d->enter($__internal_d03482b1cc02ff262c3c93958a294c40a16c5f81d672060367441d665768ff1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d03482b1cc02ff262c3c93958a294c40a16c5f81d672060367441d665768ff1d->leave($__internal_d03482b1cc02ff262c3c93958a294c40a16c5f81d672060367441d665768ff1d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5214bba71bcd939d8db22459397e31f81cb5885a75b697f594c9e0bcf832b55 = $this->env->getExtension("native_profiler");
        $__internal_f5214bba71bcd939d8db22459397e31f81cb5885a75b697f594c9e0bcf832b55->enter($__internal_f5214bba71bcd939d8db22459397e31f81cb5885a75b697f594c9e0bcf832b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f5214bba71bcd939d8db22459397e31f81cb5885a75b697f594c9e0bcf832b55->leave($__internal_f5214bba71bcd939d8db22459397e31f81cb5885a75b697f594c9e0bcf832b55_prof);

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
