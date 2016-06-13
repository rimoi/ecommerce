<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_075539e0652fea3bffe8e51694db7085d72af59eba6891a6024faa04f6e86a09 extends Twig_Template
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
        $__internal_03b916dcb15532a1b9dac885c3b55ea22cba72b58836e8a00382d9e41efc4afc = $this->env->getExtension("native_profiler");
        $__internal_03b916dcb15532a1b9dac885c3b55ea22cba72b58836e8a00382d9e41efc4afc->enter($__internal_03b916dcb15532a1b9dac885c3b55ea22cba72b58836e8a00382d9e41efc4afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03b916dcb15532a1b9dac885c3b55ea22cba72b58836e8a00382d9e41efc4afc->leave($__internal_03b916dcb15532a1b9dac885c3b55ea22cba72b58836e8a00382d9e41efc4afc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_253adb3868bc42f14fc6c482216d6ada992bf2959465936dfca86e199ed9c623 = $this->env->getExtension("native_profiler");
        $__internal_253adb3868bc42f14fc6c482216d6ada992bf2959465936dfca86e199ed9c623->enter($__internal_253adb3868bc42f14fc6c482216d6ada992bf2959465936dfca86e199ed9c623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_253adb3868bc42f14fc6c482216d6ada992bf2959465936dfca86e199ed9c623->leave($__internal_253adb3868bc42f14fc6c482216d6ada992bf2959465936dfca86e199ed9c623_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_782feaaafe287bedc3d6c4243c9a4a38946164c5d7e93d14d660836d825db26e = $this->env->getExtension("native_profiler");
        $__internal_782feaaafe287bedc3d6c4243c9a4a38946164c5d7e93d14d660836d825db26e->enter($__internal_782feaaafe287bedc3d6c4243c9a4a38946164c5d7e93d14d660836d825db26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_782feaaafe287bedc3d6c4243c9a4a38946164c5d7e93d14d660836d825db26e->leave($__internal_782feaaafe287bedc3d6c4243c9a4a38946164c5d7e93d14d660836d825db26e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2776419f6fa089e66c1f9201e482a650080645942e3e4362a1c88994159554e = $this->env->getExtension("native_profiler");
        $__internal_a2776419f6fa089e66c1f9201e482a650080645942e3e4362a1c88994159554e->enter($__internal_a2776419f6fa089e66c1f9201e482a650080645942e3e4362a1c88994159554e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2776419f6fa089e66c1f9201e482a650080645942e3e4362a1c88994159554e->leave($__internal_a2776419f6fa089e66c1f9201e482a650080645942e3e4362a1c88994159554e_prof);

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
