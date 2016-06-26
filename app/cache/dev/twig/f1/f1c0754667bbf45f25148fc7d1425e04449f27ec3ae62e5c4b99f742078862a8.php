<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5582e261188d0d06b8e105124c5d736e80ac87e3f946225c5fea8b4f42c88c69 extends Twig_Template
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
        $__internal_d24c25d906960ebfd4c9df4d895e9d10f945ad1e818542c514f9381a3da7ec7b = $this->env->getExtension("native_profiler");
        $__internal_d24c25d906960ebfd4c9df4d895e9d10f945ad1e818542c514f9381a3da7ec7b->enter($__internal_d24c25d906960ebfd4c9df4d895e9d10f945ad1e818542c514f9381a3da7ec7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d24c25d906960ebfd4c9df4d895e9d10f945ad1e818542c514f9381a3da7ec7b->leave($__internal_d24c25d906960ebfd4c9df4d895e9d10f945ad1e818542c514f9381a3da7ec7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3424495c40ca637a4852f23ca367553b88fd6526a75e1c5ac2bfffa788a83844 = $this->env->getExtension("native_profiler");
        $__internal_3424495c40ca637a4852f23ca367553b88fd6526a75e1c5ac2bfffa788a83844->enter($__internal_3424495c40ca637a4852f23ca367553b88fd6526a75e1c5ac2bfffa788a83844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3424495c40ca637a4852f23ca367553b88fd6526a75e1c5ac2bfffa788a83844->leave($__internal_3424495c40ca637a4852f23ca367553b88fd6526a75e1c5ac2bfffa788a83844_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebc10b55c3243c0c6edc4b63b849fa63a9cfad29f0a531754640575a907489ae = $this->env->getExtension("native_profiler");
        $__internal_ebc10b55c3243c0c6edc4b63b849fa63a9cfad29f0a531754640575a907489ae->enter($__internal_ebc10b55c3243c0c6edc4b63b849fa63a9cfad29f0a531754640575a907489ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ebc10b55c3243c0c6edc4b63b849fa63a9cfad29f0a531754640575a907489ae->leave($__internal_ebc10b55c3243c0c6edc4b63b849fa63a9cfad29f0a531754640575a907489ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57580532f81216beb73416d818ccbeca715a8a332437fd4880c62e3cf7b8b976 = $this->env->getExtension("native_profiler");
        $__internal_57580532f81216beb73416d818ccbeca715a8a332437fd4880c62e3cf7b8b976->enter($__internal_57580532f81216beb73416d818ccbeca715a8a332437fd4880c62e3cf7b8b976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57580532f81216beb73416d818ccbeca715a8a332437fd4880c62e3cf7b8b976->leave($__internal_57580532f81216beb73416d818ccbeca715a8a332437fd4880c62e3cf7b8b976_prof);

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
