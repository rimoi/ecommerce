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
        $__internal_95382d3c9eb3e9b11bbb364195fd2cfa020328e1f27f1601f0c3ef2eb62c55c9 = $this->env->getExtension("native_profiler");
        $__internal_95382d3c9eb3e9b11bbb364195fd2cfa020328e1f27f1601f0c3ef2eb62c55c9->enter($__internal_95382d3c9eb3e9b11bbb364195fd2cfa020328e1f27f1601f0c3ef2eb62c55c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95382d3c9eb3e9b11bbb364195fd2cfa020328e1f27f1601f0c3ef2eb62c55c9->leave($__internal_95382d3c9eb3e9b11bbb364195fd2cfa020328e1f27f1601f0c3ef2eb62c55c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ce4eb352470f8c334f0115989b35d41687b102b749fd89eef541530f325f2d3 = $this->env->getExtension("native_profiler");
        $__internal_4ce4eb352470f8c334f0115989b35d41687b102b749fd89eef541530f325f2d3->enter($__internal_4ce4eb352470f8c334f0115989b35d41687b102b749fd89eef541530f325f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4ce4eb352470f8c334f0115989b35d41687b102b749fd89eef541530f325f2d3->leave($__internal_4ce4eb352470f8c334f0115989b35d41687b102b749fd89eef541530f325f2d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1ee35e86920447b6dac69e6f81bc8ec41daceb0f21425fab789aa2f5b415eee6 = $this->env->getExtension("native_profiler");
        $__internal_1ee35e86920447b6dac69e6f81bc8ec41daceb0f21425fab789aa2f5b415eee6->enter($__internal_1ee35e86920447b6dac69e6f81bc8ec41daceb0f21425fab789aa2f5b415eee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1ee35e86920447b6dac69e6f81bc8ec41daceb0f21425fab789aa2f5b415eee6->leave($__internal_1ee35e86920447b6dac69e6f81bc8ec41daceb0f21425fab789aa2f5b415eee6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_df046c3aa66d38a18dc59812c8d90f88c254e3a9ac37ea5f87a92a7d6d16db49 = $this->env->getExtension("native_profiler");
        $__internal_df046c3aa66d38a18dc59812c8d90f88c254e3a9ac37ea5f87a92a7d6d16db49->enter($__internal_df046c3aa66d38a18dc59812c8d90f88c254e3a9ac37ea5f87a92a7d6d16db49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_df046c3aa66d38a18dc59812c8d90f88c254e3a9ac37ea5f87a92a7d6d16db49->leave($__internal_df046c3aa66d38a18dc59812c8d90f88c254e3a9ac37ea5f87a92a7d6d16db49_prof);

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
