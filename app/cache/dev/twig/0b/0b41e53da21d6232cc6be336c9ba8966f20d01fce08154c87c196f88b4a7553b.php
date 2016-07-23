<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a37605df09e5ec98f87f8af11c064ddd50c143269bbe2c4daf7bf19bb7cc0863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_2b7ed8b71ca19d7a3c37efb940019ec8635201b1c3ab60df427e68eb9a87f87b = $this->env->getExtension("native_profiler");
        $__internal_2b7ed8b71ca19d7a3c37efb940019ec8635201b1c3ab60df427e68eb9a87f87b->enter($__internal_2b7ed8b71ca19d7a3c37efb940019ec8635201b1c3ab60df427e68eb9a87f87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b7ed8b71ca19d7a3c37efb940019ec8635201b1c3ab60df427e68eb9a87f87b->leave($__internal_2b7ed8b71ca19d7a3c37efb940019ec8635201b1c3ab60df427e68eb9a87f87b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2331483dcae117faabfb15c387db7680d90496655249512606e9bc9ebb4f4f78 = $this->env->getExtension("native_profiler");
        $__internal_2331483dcae117faabfb15c387db7680d90496655249512606e9bc9ebb4f4f78->enter($__internal_2331483dcae117faabfb15c387db7680d90496655249512606e9bc9ebb4f4f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2331483dcae117faabfb15c387db7680d90496655249512606e9bc9ebb4f4f78->leave($__internal_2331483dcae117faabfb15c387db7680d90496655249512606e9bc9ebb4f4f78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
