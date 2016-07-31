<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_114e7f8a111eff2e89a41635d63de22605ac5bb535f201106f8bff108c828491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_164123ef29a0d0eba9211e7451771d9c5b08c78b6f1fa9ab785b28d91497dcda = $this->env->getExtension("native_profiler");
        $__internal_164123ef29a0d0eba9211e7451771d9c5b08c78b6f1fa9ab785b28d91497dcda->enter($__internal_164123ef29a0d0eba9211e7451771d9c5b08c78b6f1fa9ab785b28d91497dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_164123ef29a0d0eba9211e7451771d9c5b08c78b6f1fa9ab785b28d91497dcda->leave($__internal_164123ef29a0d0eba9211e7451771d9c5b08c78b6f1fa9ab785b28d91497dcda_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59c8598ac59e82d11cb6e99fbb1a9625bd33cb0264b0504c682ac313ed39bb5a = $this->env->getExtension("native_profiler");
        $__internal_59c8598ac59e82d11cb6e99fbb1a9625bd33cb0264b0504c682ac313ed39bb5a->enter($__internal_59c8598ac59e82d11cb6e99fbb1a9625bd33cb0264b0504c682ac313ed39bb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_59c8598ac59e82d11cb6e99fbb1a9625bd33cb0264b0504c682ac313ed39bb5a->leave($__internal_59c8598ac59e82d11cb6e99fbb1a9625bd33cb0264b0504c682ac313ed39bb5a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
