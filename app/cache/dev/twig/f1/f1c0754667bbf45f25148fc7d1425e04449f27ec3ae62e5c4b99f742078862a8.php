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
        $__internal_9cb91efd660d8e7a4a670a2af427161fb002d7d0fd4ef72c7453801ed559d900 = $this->env->getExtension("native_profiler");
        $__internal_9cb91efd660d8e7a4a670a2af427161fb002d7d0fd4ef72c7453801ed559d900->enter($__internal_9cb91efd660d8e7a4a670a2af427161fb002d7d0fd4ef72c7453801ed559d900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb91efd660d8e7a4a670a2af427161fb002d7d0fd4ef72c7453801ed559d900->leave($__internal_9cb91efd660d8e7a4a670a2af427161fb002d7d0fd4ef72c7453801ed559d900_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_430931dd209d8f96a96b589529f8249f776fcec4acfb45c3c0de38bca09d9c2d = $this->env->getExtension("native_profiler");
        $__internal_430931dd209d8f96a96b589529f8249f776fcec4acfb45c3c0de38bca09d9c2d->enter($__internal_430931dd209d8f96a96b589529f8249f776fcec4acfb45c3c0de38bca09d9c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_430931dd209d8f96a96b589529f8249f776fcec4acfb45c3c0de38bca09d9c2d->leave($__internal_430931dd209d8f96a96b589529f8249f776fcec4acfb45c3c0de38bca09d9c2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce6b42b641973f68f37fa7b62831fb676b6680db8ea1a49a79c8f8cbd3050c7c = $this->env->getExtension("native_profiler");
        $__internal_ce6b42b641973f68f37fa7b62831fb676b6680db8ea1a49a79c8f8cbd3050c7c->enter($__internal_ce6b42b641973f68f37fa7b62831fb676b6680db8ea1a49a79c8f8cbd3050c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce6b42b641973f68f37fa7b62831fb676b6680db8ea1a49a79c8f8cbd3050c7c->leave($__internal_ce6b42b641973f68f37fa7b62831fb676b6680db8ea1a49a79c8f8cbd3050c7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2312cb3ecca341100a5d683bc38d2b9636b5418e2fd78d19c8d9b08c5aa5d6dd = $this->env->getExtension("native_profiler");
        $__internal_2312cb3ecca341100a5d683bc38d2b9636b5418e2fd78d19c8d9b08c5aa5d6dd->enter($__internal_2312cb3ecca341100a5d683bc38d2b9636b5418e2fd78d19c8d9b08c5aa5d6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2312cb3ecca341100a5d683bc38d2b9636b5418e2fd78d19c8d9b08c5aa5d6dd->leave($__internal_2312cb3ecca341100a5d683bc38d2b9636b5418e2fd78d19c8d9b08c5aa5d6dd_prof);

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
