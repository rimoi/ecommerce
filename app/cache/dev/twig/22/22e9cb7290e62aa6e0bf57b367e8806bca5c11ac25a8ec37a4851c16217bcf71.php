<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fbb13f38befb19ace5d93926b11d7f40009b4e597da8029988d7094e583f7a4b extends Twig_Template
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
        $__internal_caee31520ccc4c18e475151cfd7d69a92e845069b41f36b88c1795dd030bd7ad = $this->env->getExtension("native_profiler");
        $__internal_caee31520ccc4c18e475151cfd7d69a92e845069b41f36b88c1795dd030bd7ad->enter($__internal_caee31520ccc4c18e475151cfd7d69a92e845069b41f36b88c1795dd030bd7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caee31520ccc4c18e475151cfd7d69a92e845069b41f36b88c1795dd030bd7ad->leave($__internal_caee31520ccc4c18e475151cfd7d69a92e845069b41f36b88c1795dd030bd7ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a45a197f0f685423f24a5be738b5cf144af73d057b9f64e7480a7c6b2de8a3ed = $this->env->getExtension("native_profiler");
        $__internal_a45a197f0f685423f24a5be738b5cf144af73d057b9f64e7480a7c6b2de8a3ed->enter($__internal_a45a197f0f685423f24a5be738b5cf144af73d057b9f64e7480a7c6b2de8a3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a45a197f0f685423f24a5be738b5cf144af73d057b9f64e7480a7c6b2de8a3ed->leave($__internal_a45a197f0f685423f24a5be738b5cf144af73d057b9f64e7480a7c6b2de8a3ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_88b553b629ba668147b8710b642980f0e7edad9bef8bf92bd46e60d3ea8fafab = $this->env->getExtension("native_profiler");
        $__internal_88b553b629ba668147b8710b642980f0e7edad9bef8bf92bd46e60d3ea8fafab->enter($__internal_88b553b629ba668147b8710b642980f0e7edad9bef8bf92bd46e60d3ea8fafab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_88b553b629ba668147b8710b642980f0e7edad9bef8bf92bd46e60d3ea8fafab->leave($__internal_88b553b629ba668147b8710b642980f0e7edad9bef8bf92bd46e60d3ea8fafab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47efb713d5129d8658cb6b81a2e87d91d390f9205834819772f34d209a789c96 = $this->env->getExtension("native_profiler");
        $__internal_47efb713d5129d8658cb6b81a2e87d91d390f9205834819772f34d209a789c96->enter($__internal_47efb713d5129d8658cb6b81a2e87d91d390f9205834819772f34d209a789c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_47efb713d5129d8658cb6b81a2e87d91d390f9205834819772f34d209a789c96->leave($__internal_47efb713d5129d8658cb6b81a2e87d91d390f9205834819772f34d209a789c96_prof);

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
