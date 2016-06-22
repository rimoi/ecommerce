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
        $__internal_21498b2d8f6ca0187df4e6ab7ae2038c188db3882750e5bcd2d1a2d492d78fb8 = $this->env->getExtension("native_profiler");
        $__internal_21498b2d8f6ca0187df4e6ab7ae2038c188db3882750e5bcd2d1a2d492d78fb8->enter($__internal_21498b2d8f6ca0187df4e6ab7ae2038c188db3882750e5bcd2d1a2d492d78fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21498b2d8f6ca0187df4e6ab7ae2038c188db3882750e5bcd2d1a2d492d78fb8->leave($__internal_21498b2d8f6ca0187df4e6ab7ae2038c188db3882750e5bcd2d1a2d492d78fb8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32d9055f166a1b343a988d52302104c7bfab967454a2048e9ba45b3914fc465c = $this->env->getExtension("native_profiler");
        $__internal_32d9055f166a1b343a988d52302104c7bfab967454a2048e9ba45b3914fc465c->enter($__internal_32d9055f166a1b343a988d52302104c7bfab967454a2048e9ba45b3914fc465c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_32d9055f166a1b343a988d52302104c7bfab967454a2048e9ba45b3914fc465c->leave($__internal_32d9055f166a1b343a988d52302104c7bfab967454a2048e9ba45b3914fc465c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7d5113ce7180dce0019f7f51b3a623257d9d8fda5f4ea5af642c2561f3a799e = $this->env->getExtension("native_profiler");
        $__internal_b7d5113ce7180dce0019f7f51b3a623257d9d8fda5f4ea5af642c2561f3a799e->enter($__internal_b7d5113ce7180dce0019f7f51b3a623257d9d8fda5f4ea5af642c2561f3a799e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b7d5113ce7180dce0019f7f51b3a623257d9d8fda5f4ea5af642c2561f3a799e->leave($__internal_b7d5113ce7180dce0019f7f51b3a623257d9d8fda5f4ea5af642c2561f3a799e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fa93195352839decf8f88ca6c44bd649bc0c167c030530c392f596f6c981276 = $this->env->getExtension("native_profiler");
        $__internal_8fa93195352839decf8f88ca6c44bd649bc0c167c030530c392f596f6c981276->enter($__internal_8fa93195352839decf8f88ca6c44bd649bc0c167c030530c392f596f6c981276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8fa93195352839decf8f88ca6c44bd649bc0c167c030530c392f596f6c981276->leave($__internal_8fa93195352839decf8f88ca6c44bd649bc0c167c030530c392f596f6c981276_prof);

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
