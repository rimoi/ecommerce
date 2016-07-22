<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_49cb05e29c24f328f7a5d78bdb626661fcac31035f9945c4902fca48fdf543e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_508a88cfe1a94f479436f7dfbe32ce5c4c2188827c53bdc1c3b8ce2de4343890 = $this->env->getExtension("native_profiler");
        $__internal_508a88cfe1a94f479436f7dfbe32ce5c4c2188827c53bdc1c3b8ce2de4343890->enter($__internal_508a88cfe1a94f479436f7dfbe32ce5c4c2188827c53bdc1c3b8ce2de4343890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_508a88cfe1a94f479436f7dfbe32ce5c4c2188827c53bdc1c3b8ce2de4343890->leave($__internal_508a88cfe1a94f479436f7dfbe32ce5c4c2188827c53bdc1c3b8ce2de4343890_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d47438229c15445c7089fa70eaf4693d3afeb48355c68856acd84febed7aec7 = $this->env->getExtension("native_profiler");
        $__internal_2d47438229c15445c7089fa70eaf4693d3afeb48355c68856acd84febed7aec7->enter($__internal_2d47438229c15445c7089fa70eaf4693d3afeb48355c68856acd84febed7aec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d47438229c15445c7089fa70eaf4693d3afeb48355c68856acd84febed7aec7->leave($__internal_2d47438229c15445c7089fa70eaf4693d3afeb48355c68856acd84febed7aec7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79da48a461c4a688f4086c6a11ce0f7dc29be2e1ef270379c3233a8bec82662a = $this->env->getExtension("native_profiler");
        $__internal_79da48a461c4a688f4086c6a11ce0f7dc29be2e1ef270379c3233a8bec82662a->enter($__internal_79da48a461c4a688f4086c6a11ce0f7dc29be2e1ef270379c3233a8bec82662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_79da48a461c4a688f4086c6a11ce0f7dc29be2e1ef270379c3233a8bec82662a->leave($__internal_79da48a461c4a688f4086c6a11ce0f7dc29be2e1ef270379c3233a8bec82662a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c27a7e750c3472be9057932fe5b94a4fbcbab1a160004a494c4c22fda6052b3e = $this->env->getExtension("native_profiler");
        $__internal_c27a7e750c3472be9057932fe5b94a4fbcbab1a160004a494c4c22fda6052b3e->enter($__internal_c27a7e750c3472be9057932fe5b94a4fbcbab1a160004a494c4c22fda6052b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c27a7e750c3472be9057932fe5b94a4fbcbab1a160004a494c4c22fda6052b3e->leave($__internal_c27a7e750c3472be9057932fe5b94a4fbcbab1a160004a494c4c22fda6052b3e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
