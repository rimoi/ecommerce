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
        $__internal_39508d36787b9146d41668b5d445f3ce8901f1535adeb6984600cce76e17de89 = $this->env->getExtension("native_profiler");
        $__internal_39508d36787b9146d41668b5d445f3ce8901f1535adeb6984600cce76e17de89->enter($__internal_39508d36787b9146d41668b5d445f3ce8901f1535adeb6984600cce76e17de89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39508d36787b9146d41668b5d445f3ce8901f1535adeb6984600cce76e17de89->leave($__internal_39508d36787b9146d41668b5d445f3ce8901f1535adeb6984600cce76e17de89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec858335f01cbe0f8b7505b4be4519aa19c74f0b9614eda731e99a11cbed1529 = $this->env->getExtension("native_profiler");
        $__internal_ec858335f01cbe0f8b7505b4be4519aa19c74f0b9614eda731e99a11cbed1529->enter($__internal_ec858335f01cbe0f8b7505b4be4519aa19c74f0b9614eda731e99a11cbed1529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ec858335f01cbe0f8b7505b4be4519aa19c74f0b9614eda731e99a11cbed1529->leave($__internal_ec858335f01cbe0f8b7505b4be4519aa19c74f0b9614eda731e99a11cbed1529_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ff45983562ff935a5145353280e608f328ffc95e9cc357e7d6de6ddeb867f80 = $this->env->getExtension("native_profiler");
        $__internal_1ff45983562ff935a5145353280e608f328ffc95e9cc357e7d6de6ddeb867f80->enter($__internal_1ff45983562ff935a5145353280e608f328ffc95e9cc357e7d6de6ddeb867f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1ff45983562ff935a5145353280e608f328ffc95e9cc357e7d6de6ddeb867f80->leave($__internal_1ff45983562ff935a5145353280e608f328ffc95e9cc357e7d6de6ddeb867f80_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_36f061761d6e878ecdd3197a367a2cea31c727720293b2bf620daa8261cff2fd = $this->env->getExtension("native_profiler");
        $__internal_36f061761d6e878ecdd3197a367a2cea31c727720293b2bf620daa8261cff2fd->enter($__internal_36f061761d6e878ecdd3197a367a2cea31c727720293b2bf620daa8261cff2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_36f061761d6e878ecdd3197a367a2cea31c727720293b2bf620daa8261cff2fd->leave($__internal_36f061761d6e878ecdd3197a367a2cea31c727720293b2bf620daa8261cff2fd_prof);

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
