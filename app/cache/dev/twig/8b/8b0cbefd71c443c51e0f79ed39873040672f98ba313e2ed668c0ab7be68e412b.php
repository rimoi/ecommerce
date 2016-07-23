<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82477fd840894548ed63b45e4c778dda224cd4b989863ad6458b743399312cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a71aed3e5e2f76198d5292fb78f42b9c65234b332b02f17608a5da404883c05 = $this->env->getExtension("native_profiler");
        $__internal_2a71aed3e5e2f76198d5292fb78f42b9c65234b332b02f17608a5da404883c05->enter($__internal_2a71aed3e5e2f76198d5292fb78f42b9c65234b332b02f17608a5da404883c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a71aed3e5e2f76198d5292fb78f42b9c65234b332b02f17608a5da404883c05->leave($__internal_2a71aed3e5e2f76198d5292fb78f42b9c65234b332b02f17608a5da404883c05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dead9879414358053768ed1e14a7eec9c86beb20f3c32a8a29b134f99ac51a6 = $this->env->getExtension("native_profiler");
        $__internal_6dead9879414358053768ed1e14a7eec9c86beb20f3c32a8a29b134f99ac51a6->enter($__internal_6dead9879414358053768ed1e14a7eec9c86beb20f3c32a8a29b134f99ac51a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6dead9879414358053768ed1e14a7eec9c86beb20f3c32a8a29b134f99ac51a6->leave($__internal_6dead9879414358053768ed1e14a7eec9c86beb20f3c32a8a29b134f99ac51a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_181d26abacaa5908d84b017dd2ce5f63e7f06ddcaf50cd0166046ab6d01dea7b = $this->env->getExtension("native_profiler");
        $__internal_181d26abacaa5908d84b017dd2ce5f63e7f06ddcaf50cd0166046ab6d01dea7b->enter($__internal_181d26abacaa5908d84b017dd2ce5f63e7f06ddcaf50cd0166046ab6d01dea7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_181d26abacaa5908d84b017dd2ce5f63e7f06ddcaf50cd0166046ab6d01dea7b->leave($__internal_181d26abacaa5908d84b017dd2ce5f63e7f06ddcaf50cd0166046ab6d01dea7b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a272319e5192283a4a523360ac6e8c4be159e022a026c129b22dd7a4f08ca4b = $this->env->getExtension("native_profiler");
        $__internal_2a272319e5192283a4a523360ac6e8c4be159e022a026c129b22dd7a4f08ca4b->enter($__internal_2a272319e5192283a4a523360ac6e8c4be159e022a026c129b22dd7a4f08ca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2a272319e5192283a4a523360ac6e8c4be159e022a026c129b22dd7a4f08ca4b->leave($__internal_2a272319e5192283a4a523360ac6e8c4be159e022a026c129b22dd7a4f08ca4b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
