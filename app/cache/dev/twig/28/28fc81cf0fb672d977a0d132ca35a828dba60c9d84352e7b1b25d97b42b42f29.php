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
        $__internal_098a9d125b31d873f5f6421c9fdee907372a89a6d9d245f4d359002acb18734a = $this->env->getExtension("native_profiler");
        $__internal_098a9d125b31d873f5f6421c9fdee907372a89a6d9d245f4d359002acb18734a->enter($__internal_098a9d125b31d873f5f6421c9fdee907372a89a6d9d245f4d359002acb18734a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_098a9d125b31d873f5f6421c9fdee907372a89a6d9d245f4d359002acb18734a->leave($__internal_098a9d125b31d873f5f6421c9fdee907372a89a6d9d245f4d359002acb18734a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cada3c9f320dd35141481e5d67ae272bd3f3d30808a42d1012626ae8a6f2b31f = $this->env->getExtension("native_profiler");
        $__internal_cada3c9f320dd35141481e5d67ae272bd3f3d30808a42d1012626ae8a6f2b31f->enter($__internal_cada3c9f320dd35141481e5d67ae272bd3f3d30808a42d1012626ae8a6f2b31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_cada3c9f320dd35141481e5d67ae272bd3f3d30808a42d1012626ae8a6f2b31f->leave($__internal_cada3c9f320dd35141481e5d67ae272bd3f3d30808a42d1012626ae8a6f2b31f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78219354d8f09a1e1afb54eac00c401b2aba7d827fcf600456e8c4d5729ef5f1 = $this->env->getExtension("native_profiler");
        $__internal_78219354d8f09a1e1afb54eac00c401b2aba7d827fcf600456e8c4d5729ef5f1->enter($__internal_78219354d8f09a1e1afb54eac00c401b2aba7d827fcf600456e8c4d5729ef5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_78219354d8f09a1e1afb54eac00c401b2aba7d827fcf600456e8c4d5729ef5f1->leave($__internal_78219354d8f09a1e1afb54eac00c401b2aba7d827fcf600456e8c4d5729ef5f1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e522854ee319fac7cfc8d4503c833d485490defd799a1a967a72d9ea2879522a = $this->env->getExtension("native_profiler");
        $__internal_e522854ee319fac7cfc8d4503c833d485490defd799a1a967a72d9ea2879522a->enter($__internal_e522854ee319fac7cfc8d4503c833d485490defd799a1a967a72d9ea2879522a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e522854ee319fac7cfc8d4503c833d485490defd799a1a967a72d9ea2879522a->leave($__internal_e522854ee319fac7cfc8d4503c833d485490defd799a1a967a72d9ea2879522a_prof);

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
