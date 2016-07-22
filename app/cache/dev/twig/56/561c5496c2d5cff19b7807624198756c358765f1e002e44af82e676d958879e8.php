<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_baa2a77bcd8d07a7ba7fa112c33cc4e69dae77b88bcc646621818fe29c375f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_30f4fefab09eb2501eedade2351338b92777360d46cd62772355c3175dcdb45c = $this->env->getExtension("native_profiler");
        $__internal_30f4fefab09eb2501eedade2351338b92777360d46cd62772355c3175dcdb45c->enter($__internal_30f4fefab09eb2501eedade2351338b92777360d46cd62772355c3175dcdb45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f4fefab09eb2501eedade2351338b92777360d46cd62772355c3175dcdb45c->leave($__internal_30f4fefab09eb2501eedade2351338b92777360d46cd62772355c3175dcdb45c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60bdd3df30ebb2ad24ca0dc3b3d8bd895095349599253efcddd1772bb2a6e8fb = $this->env->getExtension("native_profiler");
        $__internal_60bdd3df30ebb2ad24ca0dc3b3d8bd895095349599253efcddd1772bb2a6e8fb->enter($__internal_60bdd3df30ebb2ad24ca0dc3b3d8bd895095349599253efcddd1772bb2a6e8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_60bdd3df30ebb2ad24ca0dc3b3d8bd895095349599253efcddd1772bb2a6e8fb->leave($__internal_60bdd3df30ebb2ad24ca0dc3b3d8bd895095349599253efcddd1772bb2a6e8fb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
