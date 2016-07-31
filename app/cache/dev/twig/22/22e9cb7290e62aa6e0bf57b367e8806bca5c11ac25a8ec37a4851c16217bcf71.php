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
        $__internal_bfdacffc87a8c9137cd765294c7c6a9419abdbb58b70f1a539265e2c613d47fe = $this->env->getExtension("native_profiler");
        $__internal_bfdacffc87a8c9137cd765294c7c6a9419abdbb58b70f1a539265e2c613d47fe->enter($__internal_bfdacffc87a8c9137cd765294c7c6a9419abdbb58b70f1a539265e2c613d47fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfdacffc87a8c9137cd765294c7c6a9419abdbb58b70f1a539265e2c613d47fe->leave($__internal_bfdacffc87a8c9137cd765294c7c6a9419abdbb58b70f1a539265e2c613d47fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3167a0fb190329d2633fb6430920dea96f8966610428e368c0e373e2530b6cb4 = $this->env->getExtension("native_profiler");
        $__internal_3167a0fb190329d2633fb6430920dea96f8966610428e368c0e373e2530b6cb4->enter($__internal_3167a0fb190329d2633fb6430920dea96f8966610428e368c0e373e2530b6cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3167a0fb190329d2633fb6430920dea96f8966610428e368c0e373e2530b6cb4->leave($__internal_3167a0fb190329d2633fb6430920dea96f8966610428e368c0e373e2530b6cb4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b571708e3f618cb3573b6d0a6202ac48c2617e4950de078295ba19ddedf510e2 = $this->env->getExtension("native_profiler");
        $__internal_b571708e3f618cb3573b6d0a6202ac48c2617e4950de078295ba19ddedf510e2->enter($__internal_b571708e3f618cb3573b6d0a6202ac48c2617e4950de078295ba19ddedf510e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b571708e3f618cb3573b6d0a6202ac48c2617e4950de078295ba19ddedf510e2->leave($__internal_b571708e3f618cb3573b6d0a6202ac48c2617e4950de078295ba19ddedf510e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1663d50896c923616b22be0b178ca9cb213103b5acff019d8a68027e1051dbe3 = $this->env->getExtension("native_profiler");
        $__internal_1663d50896c923616b22be0b178ca9cb213103b5acff019d8a68027e1051dbe3->enter($__internal_1663d50896c923616b22be0b178ca9cb213103b5acff019d8a68027e1051dbe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1663d50896c923616b22be0b178ca9cb213103b5acff019d8a68027e1051dbe3->leave($__internal_1663d50896c923616b22be0b178ca9cb213103b5acff019d8a68027e1051dbe3_prof);

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
