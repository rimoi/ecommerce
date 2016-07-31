<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_7c6ec3acbbb7258b9f35d7b36b22526dfffc227555673f0ae8116becc29a75fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_750a08d0c120f3d45b67fe1cf6e8f90f18dec545ce4e4c0629725d8f7851b995 = $this->env->getExtension("native_profiler");
        $__internal_750a08d0c120f3d45b67fe1cf6e8f90f18dec545ce4e4c0629725d8f7851b995->enter($__internal_750a08d0c120f3d45b67fe1cf6e8f90f18dec545ce4e4c0629725d8f7851b995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_750a08d0c120f3d45b67fe1cf6e8f90f18dec545ce4e4c0629725d8f7851b995->leave($__internal_750a08d0c120f3d45b67fe1cf6e8f90f18dec545ce4e4c0629725d8f7851b995_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a51e5283a0779a2f27031c689f478fd2878067865c64c88d6b04d906269fa4b9 = $this->env->getExtension("native_profiler");
        $__internal_a51e5283a0779a2f27031c689f478fd2878067865c64c88d6b04d906269fa4b9->enter($__internal_a51e5283a0779a2f27031c689f478fd2878067865c64c88d6b04d906269fa4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a51e5283a0779a2f27031c689f478fd2878067865c64c88d6b04d906269fa4b9->leave($__internal_a51e5283a0779a2f27031c689f478fd2878067865c64c88d6b04d906269fa4b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bda9544cf153b23b4197ea0a59d28f3bc60fdd0a34c22486791a9229caec356 = $this->env->getExtension("native_profiler");
        $__internal_3bda9544cf153b23b4197ea0a59d28f3bc60fdd0a34c22486791a9229caec356->enter($__internal_3bda9544cf153b23b4197ea0a59d28f3bc60fdd0a34c22486791a9229caec356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3bda9544cf153b23b4197ea0a59d28f3bc60fdd0a34c22486791a9229caec356->leave($__internal_3bda9544cf153b23b4197ea0a59d28f3bc60fdd0a34c22486791a9229caec356_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
