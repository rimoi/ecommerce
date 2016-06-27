<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fbb255dbeb359d009fd30125b201f1d4475f985d98593638e98e4795397d494 extends Twig_Template
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
        $__internal_e6bd083fbbf62f8069b83759a5da9e07338e51600f0b14628b687e6e05f16796 = $this->env->getExtension("native_profiler");
        $__internal_e6bd083fbbf62f8069b83759a5da9e07338e51600f0b14628b687e6e05f16796->enter($__internal_e6bd083fbbf62f8069b83759a5da9e07338e51600f0b14628b687e6e05f16796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6bd083fbbf62f8069b83759a5da9e07338e51600f0b14628b687e6e05f16796->leave($__internal_e6bd083fbbf62f8069b83759a5da9e07338e51600f0b14628b687e6e05f16796_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a19d92c03a6bbc3c5a5f336b4e04e15c7be3db33d37e11a5801205a7caa36c16 = $this->env->getExtension("native_profiler");
        $__internal_a19d92c03a6bbc3c5a5f336b4e04e15c7be3db33d37e11a5801205a7caa36c16->enter($__internal_a19d92c03a6bbc3c5a5f336b4e04e15c7be3db33d37e11a5801205a7caa36c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a19d92c03a6bbc3c5a5f336b4e04e15c7be3db33d37e11a5801205a7caa36c16->leave($__internal_a19d92c03a6bbc3c5a5f336b4e04e15c7be3db33d37e11a5801205a7caa36c16_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_97d1d0fded7ebe489a1e0fc37ef6d239d7f71c5602cc9cb0a5b8a0974c243307 = $this->env->getExtension("native_profiler");
        $__internal_97d1d0fded7ebe489a1e0fc37ef6d239d7f71c5602cc9cb0a5b8a0974c243307->enter($__internal_97d1d0fded7ebe489a1e0fc37ef6d239d7f71c5602cc9cb0a5b8a0974c243307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_97d1d0fded7ebe489a1e0fc37ef6d239d7f71c5602cc9cb0a5b8a0974c243307->leave($__internal_97d1d0fded7ebe489a1e0fc37ef6d239d7f71c5602cc9cb0a5b8a0974c243307_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5662c668980d213d3c01d1fe720ea1c9f0151a32eb7b35775ab30e38959d53d9 = $this->env->getExtension("native_profiler");
        $__internal_5662c668980d213d3c01d1fe720ea1c9f0151a32eb7b35775ab30e38959d53d9->enter($__internal_5662c668980d213d3c01d1fe720ea1c9f0151a32eb7b35775ab30e38959d53d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5662c668980d213d3c01d1fe720ea1c9f0151a32eb7b35775ab30e38959d53d9->leave($__internal_5662c668980d213d3c01d1fe720ea1c9f0151a32eb7b35775ab30e38959d53d9_prof);

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
