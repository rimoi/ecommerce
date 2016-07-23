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
        $__internal_4dbe7ac1652f7cf7bbf752cbc529861d9f288629ed8331db7caeea2bed2cadf0 = $this->env->getExtension("native_profiler");
        $__internal_4dbe7ac1652f7cf7bbf752cbc529861d9f288629ed8331db7caeea2bed2cadf0->enter($__internal_4dbe7ac1652f7cf7bbf752cbc529861d9f288629ed8331db7caeea2bed2cadf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbe7ac1652f7cf7bbf752cbc529861d9f288629ed8331db7caeea2bed2cadf0->leave($__internal_4dbe7ac1652f7cf7bbf752cbc529861d9f288629ed8331db7caeea2bed2cadf0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0242b940ce882125200582525b8688bb1528bf13828dd6d76b841822a73fd33d = $this->env->getExtension("native_profiler");
        $__internal_0242b940ce882125200582525b8688bb1528bf13828dd6d76b841822a73fd33d->enter($__internal_0242b940ce882125200582525b8688bb1528bf13828dd6d76b841822a73fd33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0242b940ce882125200582525b8688bb1528bf13828dd6d76b841822a73fd33d->leave($__internal_0242b940ce882125200582525b8688bb1528bf13828dd6d76b841822a73fd33d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae84cd6e817a767a9e94a953519301287cb637d27e9474b286082ae3c1950fce = $this->env->getExtension("native_profiler");
        $__internal_ae84cd6e817a767a9e94a953519301287cb637d27e9474b286082ae3c1950fce->enter($__internal_ae84cd6e817a767a9e94a953519301287cb637d27e9474b286082ae3c1950fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ae84cd6e817a767a9e94a953519301287cb637d27e9474b286082ae3c1950fce->leave($__internal_ae84cd6e817a767a9e94a953519301287cb637d27e9474b286082ae3c1950fce_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_80bdfb047c7ee5e7d3a9b9961bf5ba978c484552ed455771f399e4f452d4b623 = $this->env->getExtension("native_profiler");
        $__internal_80bdfb047c7ee5e7d3a9b9961bf5ba978c484552ed455771f399e4f452d4b623->enter($__internal_80bdfb047c7ee5e7d3a9b9961bf5ba978c484552ed455771f399e4f452d4b623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_80bdfb047c7ee5e7d3a9b9961bf5ba978c484552ed455771f399e4f452d4b623->leave($__internal_80bdfb047c7ee5e7d3a9b9961bf5ba978c484552ed455771f399e4f452d4b623_prof);

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
