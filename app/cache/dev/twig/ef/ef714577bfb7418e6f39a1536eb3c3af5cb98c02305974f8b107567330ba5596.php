<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_16d12bdd2b7208537235df3499c65f62de01e344f389166e0d07515db6bb3b32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2e5d2b9eda2dd0e2b8aba69f71b892a0f7d8e21f0793e0f4b94f1d90d6eef357 = $this->env->getExtension("native_profiler");
        $__internal_2e5d2b9eda2dd0e2b8aba69f71b892a0f7d8e21f0793e0f4b94f1d90d6eef357->enter($__internal_2e5d2b9eda2dd0e2b8aba69f71b892a0f7d8e21f0793e0f4b94f1d90d6eef357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5d2b9eda2dd0e2b8aba69f71b892a0f7d8e21f0793e0f4b94f1d90d6eef357->leave($__internal_2e5d2b9eda2dd0e2b8aba69f71b892a0f7d8e21f0793e0f4b94f1d90d6eef357_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1e1198f2f16ebd6042ee592ce00cf7ffc0cd864f2932798f002484bf36c223f4 = $this->env->getExtension("native_profiler");
        $__internal_1e1198f2f16ebd6042ee592ce00cf7ffc0cd864f2932798f002484bf36c223f4->enter($__internal_1e1198f2f16ebd6042ee592ce00cf7ffc0cd864f2932798f002484bf36c223f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1e1198f2f16ebd6042ee592ce00cf7ffc0cd864f2932798f002484bf36c223f4->leave($__internal_1e1198f2f16ebd6042ee592ce00cf7ffc0cd864f2932798f002484bf36c223f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89c803290f9f970f518f00e6577d728326ab85c469056639468cb93826710692 = $this->env->getExtension("native_profiler");
        $__internal_89c803290f9f970f518f00e6577d728326ab85c469056639468cb93826710692->enter($__internal_89c803290f9f970f518f00e6577d728326ab85c469056639468cb93826710692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89c803290f9f970f518f00e6577d728326ab85c469056639468cb93826710692->leave($__internal_89c803290f9f970f518f00e6577d728326ab85c469056639468cb93826710692_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_50714f92657f0edf21625f78f49d5d45b91cc9fbb01fcf3156e0aa05358e6ec4 = $this->env->getExtension("native_profiler");
        $__internal_50714f92657f0edf21625f78f49d5d45b91cc9fbb01fcf3156e0aa05358e6ec4->enter($__internal_50714f92657f0edf21625f78f49d5d45b91cc9fbb01fcf3156e0aa05358e6ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_50714f92657f0edf21625f78f49d5d45b91cc9fbb01fcf3156e0aa05358e6ec4->leave($__internal_50714f92657f0edf21625f78f49d5d45b91cc9fbb01fcf3156e0aa05358e6ec4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
