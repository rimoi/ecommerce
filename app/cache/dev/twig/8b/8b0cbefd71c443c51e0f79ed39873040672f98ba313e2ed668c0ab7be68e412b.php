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
        $__internal_7c725eb847b1d3000a32e16019b82f90039e0cbc16c71835499141ed5829b8d2 = $this->env->getExtension("native_profiler");
        $__internal_7c725eb847b1d3000a32e16019b82f90039e0cbc16c71835499141ed5829b8d2->enter($__internal_7c725eb847b1d3000a32e16019b82f90039e0cbc16c71835499141ed5829b8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c725eb847b1d3000a32e16019b82f90039e0cbc16c71835499141ed5829b8d2->leave($__internal_7c725eb847b1d3000a32e16019b82f90039e0cbc16c71835499141ed5829b8d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f366e2cbde0371665f38b21a78b360c207b32079f737f692a246a4b59a77c915 = $this->env->getExtension("native_profiler");
        $__internal_f366e2cbde0371665f38b21a78b360c207b32079f737f692a246a4b59a77c915->enter($__internal_f366e2cbde0371665f38b21a78b360c207b32079f737f692a246a4b59a77c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f366e2cbde0371665f38b21a78b360c207b32079f737f692a246a4b59a77c915->leave($__internal_f366e2cbde0371665f38b21a78b360c207b32079f737f692a246a4b59a77c915_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbccf6e963fe84e2fc46d1422cfc38c153a5fd43c7c5eb8ffb6a2261af5369e7 = $this->env->getExtension("native_profiler");
        $__internal_bbccf6e963fe84e2fc46d1422cfc38c153a5fd43c7c5eb8ffb6a2261af5369e7->enter($__internal_bbccf6e963fe84e2fc46d1422cfc38c153a5fd43c7c5eb8ffb6a2261af5369e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbccf6e963fe84e2fc46d1422cfc38c153a5fd43c7c5eb8ffb6a2261af5369e7->leave($__internal_bbccf6e963fe84e2fc46d1422cfc38c153a5fd43c7c5eb8ffb6a2261af5369e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26696358a00227c550f83f2f1653ee8ee097ce55a005a06215ce66951ab34060 = $this->env->getExtension("native_profiler");
        $__internal_26696358a00227c550f83f2f1653ee8ee097ce55a005a06215ce66951ab34060->enter($__internal_26696358a00227c550f83f2f1653ee8ee097ce55a005a06215ce66951ab34060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26696358a00227c550f83f2f1653ee8ee097ce55a005a06215ce66951ab34060->leave($__internal_26696358a00227c550f83f2f1653ee8ee097ce55a005a06215ce66951ab34060_prof);

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
