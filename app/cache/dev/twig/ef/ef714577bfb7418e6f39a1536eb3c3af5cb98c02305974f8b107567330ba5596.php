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
        $__internal_14cda3e2ad7fe9bd905d658ff4e1091d9cf89bb522424b543723553e34d92876 = $this->env->getExtension("native_profiler");
        $__internal_14cda3e2ad7fe9bd905d658ff4e1091d9cf89bb522424b543723553e34d92876->enter($__internal_14cda3e2ad7fe9bd905d658ff4e1091d9cf89bb522424b543723553e34d92876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14cda3e2ad7fe9bd905d658ff4e1091d9cf89bb522424b543723553e34d92876->leave($__internal_14cda3e2ad7fe9bd905d658ff4e1091d9cf89bb522424b543723553e34d92876_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_40436438fe5e5346886d5375d26ff604defa6499ab323e2f4aea8670b89b2fe7 = $this->env->getExtension("native_profiler");
        $__internal_40436438fe5e5346886d5375d26ff604defa6499ab323e2f4aea8670b89b2fe7->enter($__internal_40436438fe5e5346886d5375d26ff604defa6499ab323e2f4aea8670b89b2fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_40436438fe5e5346886d5375d26ff604defa6499ab323e2f4aea8670b89b2fe7->leave($__internal_40436438fe5e5346886d5375d26ff604defa6499ab323e2f4aea8670b89b2fe7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_078a2ded0ef745d2a88856eb8cf7b06f3d0085786b39658577436de7bab7c811 = $this->env->getExtension("native_profiler");
        $__internal_078a2ded0ef745d2a88856eb8cf7b06f3d0085786b39658577436de7bab7c811->enter($__internal_078a2ded0ef745d2a88856eb8cf7b06f3d0085786b39658577436de7bab7c811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_078a2ded0ef745d2a88856eb8cf7b06f3d0085786b39658577436de7bab7c811->leave($__internal_078a2ded0ef745d2a88856eb8cf7b06f3d0085786b39658577436de7bab7c811_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e6bf63d2f4b82cf1375cf5f611b182c05808a53b0b011b754806d3fb6c31368 = $this->env->getExtension("native_profiler");
        $__internal_0e6bf63d2f4b82cf1375cf5f611b182c05808a53b0b011b754806d3fb6c31368->enter($__internal_0e6bf63d2f4b82cf1375cf5f611b182c05808a53b0b011b754806d3fb6c31368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0e6bf63d2f4b82cf1375cf5f611b182c05808a53b0b011b754806d3fb6c31368->leave($__internal_0e6bf63d2f4b82cf1375cf5f611b182c05808a53b0b011b754806d3fb6c31368_prof);

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
