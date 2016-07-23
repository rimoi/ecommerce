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
        $__internal_a890b6f5cf75eb628e151a1099e99c5c076f36a86cd44994d0fcc1f655054628 = $this->env->getExtension("native_profiler");
        $__internal_a890b6f5cf75eb628e151a1099e99c5c076f36a86cd44994d0fcc1f655054628->enter($__internal_a890b6f5cf75eb628e151a1099e99c5c076f36a86cd44994d0fcc1f655054628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a890b6f5cf75eb628e151a1099e99c5c076f36a86cd44994d0fcc1f655054628->leave($__internal_a890b6f5cf75eb628e151a1099e99c5c076f36a86cd44994d0fcc1f655054628_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea31a72b216601f76b6b37da82e535c50e00856d51762335a8c4bce3dbacbe18 = $this->env->getExtension("native_profiler");
        $__internal_ea31a72b216601f76b6b37da82e535c50e00856d51762335a8c4bce3dbacbe18->enter($__internal_ea31a72b216601f76b6b37da82e535c50e00856d51762335a8c4bce3dbacbe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ea31a72b216601f76b6b37da82e535c50e00856d51762335a8c4bce3dbacbe18->leave($__internal_ea31a72b216601f76b6b37da82e535c50e00856d51762335a8c4bce3dbacbe18_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a16ef14e04b8314d826f6e3214c725bd6c2df3bab5a9ad6f0c766c85884290a = $this->env->getExtension("native_profiler");
        $__internal_8a16ef14e04b8314d826f6e3214c725bd6c2df3bab5a9ad6f0c766c85884290a->enter($__internal_8a16ef14e04b8314d826f6e3214c725bd6c2df3bab5a9ad6f0c766c85884290a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8a16ef14e04b8314d826f6e3214c725bd6c2df3bab5a9ad6f0c766c85884290a->leave($__internal_8a16ef14e04b8314d826f6e3214c725bd6c2df3bab5a9ad6f0c766c85884290a_prof);

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
