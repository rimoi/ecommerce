<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_7bf4740b5e967aac34b3fca040eb357156ac80737aa17c6dbead4dc23c02ec22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e373859d33c3455ea245b910dbcd9e4650d5a25afda6f8d77c890b158d2dc909 = $this->env->getExtension("native_profiler");
        $__internal_e373859d33c3455ea245b910dbcd9e4650d5a25afda6f8d77c890b158d2dc909->enter($__internal_e373859d33c3455ea245b910dbcd9e4650d5a25afda6f8d77c890b158d2dc909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e373859d33c3455ea245b910dbcd9e4650d5a25afda6f8d77c890b158d2dc909->leave($__internal_e373859d33c3455ea245b910dbcd9e4650d5a25afda6f8d77c890b158d2dc909_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c6aa3a16c561423050d64636907ae13b4479e3d7a68887380d24861a6b7127b = $this->env->getExtension("native_profiler");
        $__internal_5c6aa3a16c561423050d64636907ae13b4479e3d7a68887380d24861a6b7127b->enter($__internal_5c6aa3a16c561423050d64636907ae13b4479e3d7a68887380d24861a6b7127b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_5c6aa3a16c561423050d64636907ae13b4479e3d7a68887380d24861a6b7127b->leave($__internal_5c6aa3a16c561423050d64636907ae13b4479e3d7a68887380d24861a6b7127b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
