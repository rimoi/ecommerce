<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e8c4591cff29f35b64fc996bf47a5592ca5025e81dc02b3737f15d6d71cf4f03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_d8f242cfcf23fc5024d3abaf44ab15b337fb58a1ecaeb0992668048b97b384a5 = $this->env->getExtension("native_profiler");
        $__internal_d8f242cfcf23fc5024d3abaf44ab15b337fb58a1ecaeb0992668048b97b384a5->enter($__internal_d8f242cfcf23fc5024d3abaf44ab15b337fb58a1ecaeb0992668048b97b384a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f242cfcf23fc5024d3abaf44ab15b337fb58a1ecaeb0992668048b97b384a5->leave($__internal_d8f242cfcf23fc5024d3abaf44ab15b337fb58a1ecaeb0992668048b97b384a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d57e1f4e7fa806cce90e07d04f615dafd71adba30cd0dcf76a0545d5604ad4b9 = $this->env->getExtension("native_profiler");
        $__internal_d57e1f4e7fa806cce90e07d04f615dafd71adba30cd0dcf76a0545d5604ad4b9->enter($__internal_d57e1f4e7fa806cce90e07d04f615dafd71adba30cd0dcf76a0545d5604ad4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d57e1f4e7fa806cce90e07d04f615dafd71adba30cd0dcf76a0545d5604ad4b9->leave($__internal_d57e1f4e7fa806cce90e07d04f615dafd71adba30cd0dcf76a0545d5604ad4b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
