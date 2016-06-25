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
        $__internal_031c95ac79fef987d81de7b24633db27e62031d5cb3f963db46c141b046fa601 = $this->env->getExtension("native_profiler");
        $__internal_031c95ac79fef987d81de7b24633db27e62031d5cb3f963db46c141b046fa601->enter($__internal_031c95ac79fef987d81de7b24633db27e62031d5cb3f963db46c141b046fa601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031c95ac79fef987d81de7b24633db27e62031d5cb3f963db46c141b046fa601->leave($__internal_031c95ac79fef987d81de7b24633db27e62031d5cb3f963db46c141b046fa601_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_67b6410266f8e3b95c07bcfd0d6c9649836bd3d08d824ad4c52b392a58dbe10f = $this->env->getExtension("native_profiler");
        $__internal_67b6410266f8e3b95c07bcfd0d6c9649836bd3d08d824ad4c52b392a58dbe10f->enter($__internal_67b6410266f8e3b95c07bcfd0d6c9649836bd3d08d824ad4c52b392a58dbe10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_67b6410266f8e3b95c07bcfd0d6c9649836bd3d08d824ad4c52b392a58dbe10f->leave($__internal_67b6410266f8e3b95c07bcfd0d6c9649836bd3d08d824ad4c52b392a58dbe10f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69ff6621de3ad47d2b03083ba115cc000d5d4e5ded51311a0dd799e5f22637c5 = $this->env->getExtension("native_profiler");
        $__internal_69ff6621de3ad47d2b03083ba115cc000d5d4e5ded51311a0dd799e5f22637c5->enter($__internal_69ff6621de3ad47d2b03083ba115cc000d5d4e5ded51311a0dd799e5f22637c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69ff6621de3ad47d2b03083ba115cc000d5d4e5ded51311a0dd799e5f22637c5->leave($__internal_69ff6621de3ad47d2b03083ba115cc000d5d4e5ded51311a0dd799e5f22637c5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_79429951bc394c0e18473ec4bf38c6f86dbd5931c2e3ac8a21a24f8edea9a6fd = $this->env->getExtension("native_profiler");
        $__internal_79429951bc394c0e18473ec4bf38c6f86dbd5931c2e3ac8a21a24f8edea9a6fd->enter($__internal_79429951bc394c0e18473ec4bf38c6f86dbd5931c2e3ac8a21a24f8edea9a6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_79429951bc394c0e18473ec4bf38c6f86dbd5931c2e3ac8a21a24f8edea9a6fd->leave($__internal_79429951bc394c0e18473ec4bf38c6f86dbd5931c2e3ac8a21a24f8edea9a6fd_prof);

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
