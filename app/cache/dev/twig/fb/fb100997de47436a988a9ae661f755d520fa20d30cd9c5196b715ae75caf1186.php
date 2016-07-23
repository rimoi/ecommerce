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
        $__internal_ec3bc0943591aefc6544c3105ff20db3b08217e6fdbb67ce1a3db7b4bdf4afbf = $this->env->getExtension("native_profiler");
        $__internal_ec3bc0943591aefc6544c3105ff20db3b08217e6fdbb67ce1a3db7b4bdf4afbf->enter($__internal_ec3bc0943591aefc6544c3105ff20db3b08217e6fdbb67ce1a3db7b4bdf4afbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec3bc0943591aefc6544c3105ff20db3b08217e6fdbb67ce1a3db7b4bdf4afbf->leave($__internal_ec3bc0943591aefc6544c3105ff20db3b08217e6fdbb67ce1a3db7b4bdf4afbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_209dcb00a620997acf630e78770881acad2c73830b8f059cb0edbbc4b2e846b6 = $this->env->getExtension("native_profiler");
        $__internal_209dcb00a620997acf630e78770881acad2c73830b8f059cb0edbbc4b2e846b6->enter($__internal_209dcb00a620997acf630e78770881acad2c73830b8f059cb0edbbc4b2e846b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_209dcb00a620997acf630e78770881acad2c73830b8f059cb0edbbc4b2e846b6->leave($__internal_209dcb00a620997acf630e78770881acad2c73830b8f059cb0edbbc4b2e846b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7886ce3a5f20fad0a35ca556224055f2107935e7773ca30c0c6855038f7b7759 = $this->env->getExtension("native_profiler");
        $__internal_7886ce3a5f20fad0a35ca556224055f2107935e7773ca30c0c6855038f7b7759->enter($__internal_7886ce3a5f20fad0a35ca556224055f2107935e7773ca30c0c6855038f7b7759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7886ce3a5f20fad0a35ca556224055f2107935e7773ca30c0c6855038f7b7759->leave($__internal_7886ce3a5f20fad0a35ca556224055f2107935e7773ca30c0c6855038f7b7759_prof);

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
