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
        $__internal_c90064ef4d97f1d6908250d3519e071fdd030ecb8fd40212acec901b181e7933 = $this->env->getExtension("native_profiler");
        $__internal_c90064ef4d97f1d6908250d3519e071fdd030ecb8fd40212acec901b181e7933->enter($__internal_c90064ef4d97f1d6908250d3519e071fdd030ecb8fd40212acec901b181e7933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90064ef4d97f1d6908250d3519e071fdd030ecb8fd40212acec901b181e7933->leave($__internal_c90064ef4d97f1d6908250d3519e071fdd030ecb8fd40212acec901b181e7933_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df62132dfc735a77616dbf99acd39f977afdd96976930ad5eac7cc5aa4247493 = $this->env->getExtension("native_profiler");
        $__internal_df62132dfc735a77616dbf99acd39f977afdd96976930ad5eac7cc5aa4247493->enter($__internal_df62132dfc735a77616dbf99acd39f977afdd96976930ad5eac7cc5aa4247493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_df62132dfc735a77616dbf99acd39f977afdd96976930ad5eac7cc5aa4247493->leave($__internal_df62132dfc735a77616dbf99acd39f977afdd96976930ad5eac7cc5aa4247493_prof);

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
