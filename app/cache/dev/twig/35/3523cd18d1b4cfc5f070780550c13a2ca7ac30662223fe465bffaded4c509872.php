<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_143a5c53c256377bdc4b496771c7c344d8c598f100035f1cbf032568e67e9694 extends Twig_Template
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
        $__internal_7c11af572e3c2d703b6336b15ba31b767aed9afa9cdaa2c8f54b6c479ddf6c65 = $this->env->getExtension("native_profiler");
        $__internal_7c11af572e3c2d703b6336b15ba31b767aed9afa9cdaa2c8f54b6c479ddf6c65->enter($__internal_7c11af572e3c2d703b6336b15ba31b767aed9afa9cdaa2c8f54b6c479ddf6c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c11af572e3c2d703b6336b15ba31b767aed9afa9cdaa2c8f54b6c479ddf6c65->leave($__internal_7c11af572e3c2d703b6336b15ba31b767aed9afa9cdaa2c8f54b6c479ddf6c65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47046a631f3c9da2fdb10c41e9c0e367c290e32336dec10729011c337bc3e2be = $this->env->getExtension("native_profiler");
        $__internal_47046a631f3c9da2fdb10c41e9c0e367c290e32336dec10729011c337bc3e2be->enter($__internal_47046a631f3c9da2fdb10c41e9c0e367c290e32336dec10729011c337bc3e2be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_47046a631f3c9da2fdb10c41e9c0e367c290e32336dec10729011c337bc3e2be->leave($__internal_47046a631f3c9da2fdb10c41e9c0e367c290e32336dec10729011c337bc3e2be_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d930bc97b49cfc3f11c5c2d614b9c927ddf2907c2500216d9fcd03ee28cc9fcf = $this->env->getExtension("native_profiler");
        $__internal_d930bc97b49cfc3f11c5c2d614b9c927ddf2907c2500216d9fcd03ee28cc9fcf->enter($__internal_d930bc97b49cfc3f11c5c2d614b9c927ddf2907c2500216d9fcd03ee28cc9fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d930bc97b49cfc3f11c5c2d614b9c927ddf2907c2500216d9fcd03ee28cc9fcf->leave($__internal_d930bc97b49cfc3f11c5c2d614b9c927ddf2907c2500216d9fcd03ee28cc9fcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b4e916c387a0cf4d08378910f8272bfce83802bc48c61bae0d5e2b15dfa10151 = $this->env->getExtension("native_profiler");
        $__internal_b4e916c387a0cf4d08378910f8272bfce83802bc48c61bae0d5e2b15dfa10151->enter($__internal_b4e916c387a0cf4d08378910f8272bfce83802bc48c61bae0d5e2b15dfa10151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b4e916c387a0cf4d08378910f8272bfce83802bc48c61bae0d5e2b15dfa10151->leave($__internal_b4e916c387a0cf4d08378910f8272bfce83802bc48c61bae0d5e2b15dfa10151_prof);

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
