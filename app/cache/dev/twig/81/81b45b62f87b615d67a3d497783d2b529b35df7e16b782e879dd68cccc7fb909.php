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
        $__internal_fbc50346083d6c21c20830db38e215daf1664aa01522cdc6c0b48472d1a02631 = $this->env->getExtension("native_profiler");
        $__internal_fbc50346083d6c21c20830db38e215daf1664aa01522cdc6c0b48472d1a02631->enter($__internal_fbc50346083d6c21c20830db38e215daf1664aa01522cdc6c0b48472d1a02631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc50346083d6c21c20830db38e215daf1664aa01522cdc6c0b48472d1a02631->leave($__internal_fbc50346083d6c21c20830db38e215daf1664aa01522cdc6c0b48472d1a02631_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7e7773ee6337b30779e7de61c69aff3ac626868f0091630e190a17f85ae30d7 = $this->env->getExtension("native_profiler");
        $__internal_f7e7773ee6337b30779e7de61c69aff3ac626868f0091630e190a17f85ae30d7->enter($__internal_f7e7773ee6337b30779e7de61c69aff3ac626868f0091630e190a17f85ae30d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f7e7773ee6337b30779e7de61c69aff3ac626868f0091630e190a17f85ae30d7->leave($__internal_f7e7773ee6337b30779e7de61c69aff3ac626868f0091630e190a17f85ae30d7_prof);

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
