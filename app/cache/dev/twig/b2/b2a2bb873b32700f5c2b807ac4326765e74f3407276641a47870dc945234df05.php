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
        $__internal_b93094b7c100c731db350552063767f600ecb7de706d4ad1ab9265db78c14e3e = $this->env->getExtension("native_profiler");
        $__internal_b93094b7c100c731db350552063767f600ecb7de706d4ad1ab9265db78c14e3e->enter($__internal_b93094b7c100c731db350552063767f600ecb7de706d4ad1ab9265db78c14e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b93094b7c100c731db350552063767f600ecb7de706d4ad1ab9265db78c14e3e->leave($__internal_b93094b7c100c731db350552063767f600ecb7de706d4ad1ab9265db78c14e3e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80b49c08399bd0b49f565b46f4330e5b455e5ebfe846462ffea9f94c5881bb9c = $this->env->getExtension("native_profiler");
        $__internal_80b49c08399bd0b49f565b46f4330e5b455e5ebfe846462ffea9f94c5881bb9c->enter($__internal_80b49c08399bd0b49f565b46f4330e5b455e5ebfe846462ffea9f94c5881bb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_80b49c08399bd0b49f565b46f4330e5b455e5ebfe846462ffea9f94c5881bb9c->leave($__internal_80b49c08399bd0b49f565b46f4330e5b455e5ebfe846462ffea9f94c5881bb9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e5d314c6230b7be8ac5f149b87ffd2c2dd14300076abd1ed36d4a33154c4f7c = $this->env->getExtension("native_profiler");
        $__internal_5e5d314c6230b7be8ac5f149b87ffd2c2dd14300076abd1ed36d4a33154c4f7c->enter($__internal_5e5d314c6230b7be8ac5f149b87ffd2c2dd14300076abd1ed36d4a33154c4f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e5d314c6230b7be8ac5f149b87ffd2c2dd14300076abd1ed36d4a33154c4f7c->leave($__internal_5e5d314c6230b7be8ac5f149b87ffd2c2dd14300076abd1ed36d4a33154c4f7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_841d2b69e1d1a01f428feadbc3261b8b227eaa52eef76fe58a5d5e00da9b6201 = $this->env->getExtension("native_profiler");
        $__internal_841d2b69e1d1a01f428feadbc3261b8b227eaa52eef76fe58a5d5e00da9b6201->enter($__internal_841d2b69e1d1a01f428feadbc3261b8b227eaa52eef76fe58a5d5e00da9b6201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_841d2b69e1d1a01f428feadbc3261b8b227eaa52eef76fe58a5d5e00da9b6201->leave($__internal_841d2b69e1d1a01f428feadbc3261b8b227eaa52eef76fe58a5d5e00da9b6201_prof);

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
