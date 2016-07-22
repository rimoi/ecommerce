<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7c9ffef9f4411038e13e41c38fb659bdd5f165ecfd19c93f0d23da960ea157f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ad0185f0ac10f7b2de47186b266560b98482cbb55edbc2e863e781bb180ae2c = $this->env->getExtension("native_profiler");
        $__internal_7ad0185f0ac10f7b2de47186b266560b98482cbb55edbc2e863e781bb180ae2c->enter($__internal_7ad0185f0ac10f7b2de47186b266560b98482cbb55edbc2e863e781bb180ae2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ad0185f0ac10f7b2de47186b266560b98482cbb55edbc2e863e781bb180ae2c->leave($__internal_7ad0185f0ac10f7b2de47186b266560b98482cbb55edbc2e863e781bb180ae2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4aadd9baeee2f3311bf6acccb560a19bd517ffb436b2424e9be9a7459fb2aaea = $this->env->getExtension("native_profiler");
        $__internal_4aadd9baeee2f3311bf6acccb560a19bd517ffb436b2424e9be9a7459fb2aaea->enter($__internal_4aadd9baeee2f3311bf6acccb560a19bd517ffb436b2424e9be9a7459fb2aaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_4aadd9baeee2f3311bf6acccb560a19bd517ffb436b2424e9be9a7459fb2aaea->leave($__internal_4aadd9baeee2f3311bf6acccb560a19bd517ffb436b2424e9be9a7459fb2aaea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
