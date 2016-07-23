<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_a7b56a1c0f84c7a3da45d8957af84463f2683f548f60726ef177bf1b5b69c1fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_fc34cc14386191c2bba89ab2fc7570f5218396c2e1e564002cf46a32fb293483 = $this->env->getExtension("native_profiler");
        $__internal_fc34cc14386191c2bba89ab2fc7570f5218396c2e1e564002cf46a32fb293483->enter($__internal_fc34cc14386191c2bba89ab2fc7570f5218396c2e1e564002cf46a32fb293483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc34cc14386191c2bba89ab2fc7570f5218396c2e1e564002cf46a32fb293483->leave($__internal_fc34cc14386191c2bba89ab2fc7570f5218396c2e1e564002cf46a32fb293483_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92aeb69c22664111df88e8cb84004606a8570f6fc78b2acebbd8f6911f2fbb40 = $this->env->getExtension("native_profiler");
        $__internal_92aeb69c22664111df88e8cb84004606a8570f6fc78b2acebbd8f6911f2fbb40->enter($__internal_92aeb69c22664111df88e8cb84004606a8570f6fc78b2acebbd8f6911f2fbb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_92aeb69c22664111df88e8cb84004606a8570f6fc78b2acebbd8f6911f2fbb40->leave($__internal_92aeb69c22664111df88e8cb84004606a8570f6fc78b2acebbd8f6911f2fbb40_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
