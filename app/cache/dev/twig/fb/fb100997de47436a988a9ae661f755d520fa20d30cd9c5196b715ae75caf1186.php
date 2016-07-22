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
        $__internal_e644434f8fd19fcce25fe089f5b63d061ca7088c00049e16859e43195cdc7a6d = $this->env->getExtension("native_profiler");
        $__internal_e644434f8fd19fcce25fe089f5b63d061ca7088c00049e16859e43195cdc7a6d->enter($__internal_e644434f8fd19fcce25fe089f5b63d061ca7088c00049e16859e43195cdc7a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e644434f8fd19fcce25fe089f5b63d061ca7088c00049e16859e43195cdc7a6d->leave($__internal_e644434f8fd19fcce25fe089f5b63d061ca7088c00049e16859e43195cdc7a6d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18774a84dba38fc12f08e95da9eb52718138eb13391282c606476461048bd151 = $this->env->getExtension("native_profiler");
        $__internal_18774a84dba38fc12f08e95da9eb52718138eb13391282c606476461048bd151->enter($__internal_18774a84dba38fc12f08e95da9eb52718138eb13391282c606476461048bd151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_18774a84dba38fc12f08e95da9eb52718138eb13391282c606476461048bd151->leave($__internal_18774a84dba38fc12f08e95da9eb52718138eb13391282c606476461048bd151_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dc674a7d6365950704ee0778ec0da4a4086b99e3ff3a47158e4b2ece605bc95 = $this->env->getExtension("native_profiler");
        $__internal_2dc674a7d6365950704ee0778ec0da4a4086b99e3ff3a47158e4b2ece605bc95->enter($__internal_2dc674a7d6365950704ee0778ec0da4a4086b99e3ff3a47158e4b2ece605bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2dc674a7d6365950704ee0778ec0da4a4086b99e3ff3a47158e4b2ece605bc95->leave($__internal_2dc674a7d6365950704ee0778ec0da4a4086b99e3ff3a47158e4b2ece605bc95_prof);

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
