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
        $__internal_5e2f7f251fd7bdc79bb0ffdf38cfeaff62814a9ddc6439859032c37833ba85e3 = $this->env->getExtension("native_profiler");
        $__internal_5e2f7f251fd7bdc79bb0ffdf38cfeaff62814a9ddc6439859032c37833ba85e3->enter($__internal_5e2f7f251fd7bdc79bb0ffdf38cfeaff62814a9ddc6439859032c37833ba85e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e2f7f251fd7bdc79bb0ffdf38cfeaff62814a9ddc6439859032c37833ba85e3->leave($__internal_5e2f7f251fd7bdc79bb0ffdf38cfeaff62814a9ddc6439859032c37833ba85e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_91f5a7f5d121f51f6c7f164a113b198649615934dad67d7b4e5b5ee065d6f7e8 = $this->env->getExtension("native_profiler");
        $__internal_91f5a7f5d121f51f6c7f164a113b198649615934dad67d7b4e5b5ee065d6f7e8->enter($__internal_91f5a7f5d121f51f6c7f164a113b198649615934dad67d7b4e5b5ee065d6f7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_91f5a7f5d121f51f6c7f164a113b198649615934dad67d7b4e5b5ee065d6f7e8->leave($__internal_91f5a7f5d121f51f6c7f164a113b198649615934dad67d7b4e5b5ee065d6f7e8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18182feee9a5de1d55435ac4bc572337452954b43f47301471ce9781408aba12 = $this->env->getExtension("native_profiler");
        $__internal_18182feee9a5de1d55435ac4bc572337452954b43f47301471ce9781408aba12->enter($__internal_18182feee9a5de1d55435ac4bc572337452954b43f47301471ce9781408aba12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18182feee9a5de1d55435ac4bc572337452954b43f47301471ce9781408aba12->leave($__internal_18182feee9a5de1d55435ac4bc572337452954b43f47301471ce9781408aba12_prof);

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
