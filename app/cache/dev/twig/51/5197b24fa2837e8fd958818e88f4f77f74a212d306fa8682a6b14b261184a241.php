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
        $__internal_374c2d7da2d16df7b7e27456274c3f40a03f74c1a68be2e3d210af4c8478bfe3 = $this->env->getExtension("native_profiler");
        $__internal_374c2d7da2d16df7b7e27456274c3f40a03f74c1a68be2e3d210af4c8478bfe3->enter($__internal_374c2d7da2d16df7b7e27456274c3f40a03f74c1a68be2e3d210af4c8478bfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_374c2d7da2d16df7b7e27456274c3f40a03f74c1a68be2e3d210af4c8478bfe3->leave($__internal_374c2d7da2d16df7b7e27456274c3f40a03f74c1a68be2e3d210af4c8478bfe3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_35c7397acad1c6fd66191b272369af50199508be20cb390415037d51805adc97 = $this->env->getExtension("native_profiler");
        $__internal_35c7397acad1c6fd66191b272369af50199508be20cb390415037d51805adc97->enter($__internal_35c7397acad1c6fd66191b272369af50199508be20cb390415037d51805adc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_35c7397acad1c6fd66191b272369af50199508be20cb390415037d51805adc97->leave($__internal_35c7397acad1c6fd66191b272369af50199508be20cb390415037d51805adc97_prof);

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
