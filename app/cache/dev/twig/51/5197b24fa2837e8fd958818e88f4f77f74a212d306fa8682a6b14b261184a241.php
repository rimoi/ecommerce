<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_96c72f45929081f1168decef98b5c7633253842903429599614224bd24cadadd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb9236c66c346cddd14ffe1e892232cc0359fa9f08c27d3cc247b93b32487220 = $this->env->getExtension("native_profiler");
        $__internal_cb9236c66c346cddd14ffe1e892232cc0359fa9f08c27d3cc247b93b32487220->enter($__internal_cb9236c66c346cddd14ffe1e892232cc0359fa9f08c27d3cc247b93b32487220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cb9236c66c346cddd14ffe1e892232cc0359fa9f08c27d3cc247b93b32487220->leave($__internal_cb9236c66c346cddd14ffe1e892232cc0359fa9f08c27d3cc247b93b32487220_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_26c048dca2f108a6cc4277c071a16e232d53527235f25aecea5349af57e8be89 = $this->env->getExtension("native_profiler");
        $__internal_26c048dca2f108a6cc4277c071a16e232d53527235f25aecea5349af57e8be89->enter($__internal_26c048dca2f108a6cc4277c071a16e232d53527235f25aecea5349af57e8be89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_26c048dca2f108a6cc4277c071a16e232d53527235f25aecea5349af57e8be89->leave($__internal_26c048dca2f108a6cc4277c071a16e232d53527235f25aecea5349af57e8be89_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
