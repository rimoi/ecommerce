<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_4bde6ed84fbd055cc1c5d766d03f7cbdcd26f562c12c9156338533d22a95cfeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_1a5fa07566770268036b36c73e8ce53d3183601da6e1935db2120855b047fb1e = $this->env->getExtension("native_profiler");
        $__internal_1a5fa07566770268036b36c73e8ce53d3183601da6e1935db2120855b047fb1e->enter($__internal_1a5fa07566770268036b36c73e8ce53d3183601da6e1935db2120855b047fb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a5fa07566770268036b36c73e8ce53d3183601da6e1935db2120855b047fb1e->leave($__internal_1a5fa07566770268036b36c73e8ce53d3183601da6e1935db2120855b047fb1e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9e0eb7c8bc17f3aa158dcd3efe133eee7d022ec5f3b6173ae91dbfe4b65cc55 = $this->env->getExtension("native_profiler");
        $__internal_e9e0eb7c8bc17f3aa158dcd3efe133eee7d022ec5f3b6173ae91dbfe4b65cc55->enter($__internal_e9e0eb7c8bc17f3aa158dcd3efe133eee7d022ec5f3b6173ae91dbfe4b65cc55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e9e0eb7c8bc17f3aa158dcd3efe133eee7d022ec5f3b6173ae91dbfe4b65cc55->leave($__internal_e9e0eb7c8bc17f3aa158dcd3efe133eee7d022ec5f3b6173ae91dbfe4b65cc55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_321855b4df256a7a35e4f5a37bf6c3585e0478e61ec328f94b8afa28798dc855 = $this->env->getExtension("native_profiler");
        $__internal_321855b4df256a7a35e4f5a37bf6c3585e0478e61ec328f94b8afa28798dc855->enter($__internal_321855b4df256a7a35e4f5a37bf6c3585e0478e61ec328f94b8afa28798dc855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_321855b4df256a7a35e4f5a37bf6c3585e0478e61ec328f94b8afa28798dc855->leave($__internal_321855b4df256a7a35e4f5a37bf6c3585e0478e61ec328f94b8afa28798dc855_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
