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
        $__internal_7d36eece9e9773684f5d226ad840a1a91277b7500460e15bf64a686c16787537 = $this->env->getExtension("native_profiler");
        $__internal_7d36eece9e9773684f5d226ad840a1a91277b7500460e15bf64a686c16787537->enter($__internal_7d36eece9e9773684f5d226ad840a1a91277b7500460e15bf64a686c16787537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7d36eece9e9773684f5d226ad840a1a91277b7500460e15bf64a686c16787537->leave($__internal_7d36eece9e9773684f5d226ad840a1a91277b7500460e15bf64a686c16787537_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ad21134292e34ab710501c73bccb4f52990bc0f473eb4db400dc140ac8fcc06 = $this->env->getExtension("native_profiler");
        $__internal_5ad21134292e34ab710501c73bccb4f52990bc0f473eb4db400dc140ac8fcc06->enter($__internal_5ad21134292e34ab710501c73bccb4f52990bc0f473eb4db400dc140ac8fcc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5ad21134292e34ab710501c73bccb4f52990bc0f473eb4db400dc140ac8fcc06->leave($__internal_5ad21134292e34ab710501c73bccb4f52990bc0f473eb4db400dc140ac8fcc06_prof);

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
