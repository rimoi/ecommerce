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
        $__internal_317dfaede75266c61d936b8119a6f342ba68da160658635429be795d6c3c131b = $this->env->getExtension("native_profiler");
        $__internal_317dfaede75266c61d936b8119a6f342ba68da160658635429be795d6c3c131b->enter($__internal_317dfaede75266c61d936b8119a6f342ba68da160658635429be795d6c3c131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317dfaede75266c61d936b8119a6f342ba68da160658635429be795d6c3c131b->leave($__internal_317dfaede75266c61d936b8119a6f342ba68da160658635429be795d6c3c131b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dc6260b23ea264700b534512808c24e9c18757b19cf8d94b37781666e6d4ded7 = $this->env->getExtension("native_profiler");
        $__internal_dc6260b23ea264700b534512808c24e9c18757b19cf8d94b37781666e6d4ded7->enter($__internal_dc6260b23ea264700b534512808c24e9c18757b19cf8d94b37781666e6d4ded7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_dc6260b23ea264700b534512808c24e9c18757b19cf8d94b37781666e6d4ded7->leave($__internal_dc6260b23ea264700b534512808c24e9c18757b19cf8d94b37781666e6d4ded7_prof);

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
