<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_81e327201bf7c640d650fb2315259bddd078f67944ecc14941916c54a2093adf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_9552f1aba079393ae622401f53fdbd2e2e47dbfce632bf98714d65ba1ddc94c5 = $this->env->getExtension("native_profiler");
        $__internal_9552f1aba079393ae622401f53fdbd2e2e47dbfce632bf98714d65ba1ddc94c5->enter($__internal_9552f1aba079393ae622401f53fdbd2e2e47dbfce632bf98714d65ba1ddc94c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9552f1aba079393ae622401f53fdbd2e2e47dbfce632bf98714d65ba1ddc94c5->leave($__internal_9552f1aba079393ae622401f53fdbd2e2e47dbfce632bf98714d65ba1ddc94c5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_613cca3767d8c88bd9b1c997107bdd1f582f6aa5fed6c157c3d04acd025644d6 = $this->env->getExtension("native_profiler");
        $__internal_613cca3767d8c88bd9b1c997107bdd1f582f6aa5fed6c157c3d04acd025644d6->enter($__internal_613cca3767d8c88bd9b1c997107bdd1f582f6aa5fed6c157c3d04acd025644d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_613cca3767d8c88bd9b1c997107bdd1f582f6aa5fed6c157c3d04acd025644d6->leave($__internal_613cca3767d8c88bd9b1c997107bdd1f582f6aa5fed6c157c3d04acd025644d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
