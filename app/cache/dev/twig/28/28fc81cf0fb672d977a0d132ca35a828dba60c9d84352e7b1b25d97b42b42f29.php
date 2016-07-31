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
        $__internal_25d78a5d30c9f0af192636fa74d55f208bd4e45bbc800d4a18e58e336420cb02 = $this->env->getExtension("native_profiler");
        $__internal_25d78a5d30c9f0af192636fa74d55f208bd4e45bbc800d4a18e58e336420cb02->enter($__internal_25d78a5d30c9f0af192636fa74d55f208bd4e45bbc800d4a18e58e336420cb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d78a5d30c9f0af192636fa74d55f208bd4e45bbc800d4a18e58e336420cb02->leave($__internal_25d78a5d30c9f0af192636fa74d55f208bd4e45bbc800d4a18e58e336420cb02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1ebf23012c94ddfa5b8278cf841c2756d056d289cc0eca7145480d48f60f63c = $this->env->getExtension("native_profiler");
        $__internal_b1ebf23012c94ddfa5b8278cf841c2756d056d289cc0eca7145480d48f60f63c->enter($__internal_b1ebf23012c94ddfa5b8278cf841c2756d056d289cc0eca7145480d48f60f63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1ebf23012c94ddfa5b8278cf841c2756d056d289cc0eca7145480d48f60f63c->leave($__internal_b1ebf23012c94ddfa5b8278cf841c2756d056d289cc0eca7145480d48f60f63c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cb66d275f1b4c5637458190486cc70a0f325dba78a79bc80e0508fccfa052cc = $this->env->getExtension("native_profiler");
        $__internal_7cb66d275f1b4c5637458190486cc70a0f325dba78a79bc80e0508fccfa052cc->enter($__internal_7cb66d275f1b4c5637458190486cc70a0f325dba78a79bc80e0508fccfa052cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cb66d275f1b4c5637458190486cc70a0f325dba78a79bc80e0508fccfa052cc->leave($__internal_7cb66d275f1b4c5637458190486cc70a0f325dba78a79bc80e0508fccfa052cc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_baa9e988a73c470932494d9d68933c353c9f1259bc220c0d6c472a895d586f85 = $this->env->getExtension("native_profiler");
        $__internal_baa9e988a73c470932494d9d68933c353c9f1259bc220c0d6c472a895d586f85->enter($__internal_baa9e988a73c470932494d9d68933c353c9f1259bc220c0d6c472a895d586f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_baa9e988a73c470932494d9d68933c353c9f1259bc220c0d6c472a895d586f85->leave($__internal_baa9e988a73c470932494d9d68933c353c9f1259bc220c0d6c472a895d586f85_prof);

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
