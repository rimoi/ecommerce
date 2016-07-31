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
        $__internal_511c81e4362c4a17a54c25280e08db9355f1dac2d0b24cecf04dcf59d997c560 = $this->env->getExtension("native_profiler");
        $__internal_511c81e4362c4a17a54c25280e08db9355f1dac2d0b24cecf04dcf59d997c560->enter($__internal_511c81e4362c4a17a54c25280e08db9355f1dac2d0b24cecf04dcf59d997c560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_511c81e4362c4a17a54c25280e08db9355f1dac2d0b24cecf04dcf59d997c560->leave($__internal_511c81e4362c4a17a54c25280e08db9355f1dac2d0b24cecf04dcf59d997c560_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd4ff65a7ac6ad1570f92312b67bb599d52d1956e9e6c8ab00ee4182a7747875 = $this->env->getExtension("native_profiler");
        $__internal_bd4ff65a7ac6ad1570f92312b67bb599d52d1956e9e6c8ab00ee4182a7747875->enter($__internal_bd4ff65a7ac6ad1570f92312b67bb599d52d1956e9e6c8ab00ee4182a7747875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd4ff65a7ac6ad1570f92312b67bb599d52d1956e9e6c8ab00ee4182a7747875->leave($__internal_bd4ff65a7ac6ad1570f92312b67bb599d52d1956e9e6c8ab00ee4182a7747875_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbfc23d049f0089646b0782c78d12dc27b3c3d504c4ff8616c9baefdcbad2bfa = $this->env->getExtension("native_profiler");
        $__internal_dbfc23d049f0089646b0782c78d12dc27b3c3d504c4ff8616c9baefdcbad2bfa->enter($__internal_dbfc23d049f0089646b0782c78d12dc27b3c3d504c4ff8616c9baefdcbad2bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dbfc23d049f0089646b0782c78d12dc27b3c3d504c4ff8616c9baefdcbad2bfa->leave($__internal_dbfc23d049f0089646b0782c78d12dc27b3c3d504c4ff8616c9baefdcbad2bfa_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e1d8fde443c4404a45654c565dbcf8fefc9cb9e869ba7485d2bf0bc1e3b35857 = $this->env->getExtension("native_profiler");
        $__internal_e1d8fde443c4404a45654c565dbcf8fefc9cb9e869ba7485d2bf0bc1e3b35857->enter($__internal_e1d8fde443c4404a45654c565dbcf8fefc9cb9e869ba7485d2bf0bc1e3b35857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e1d8fde443c4404a45654c565dbcf8fefc9cb9e869ba7485d2bf0bc1e3b35857->leave($__internal_e1d8fde443c4404a45654c565dbcf8fefc9cb9e869ba7485d2bf0bc1e3b35857_prof);

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
