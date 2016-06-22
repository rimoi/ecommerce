<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_98a4e980a29742d42514c060076a9b08a2fea9905450260e16ce7820dc9687a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_c0a782fe1b2b92f614597c9f5450aa0b21b8b56f3690c9015d83a2fbb01241eb = $this->env->getExtension("native_profiler");
        $__internal_c0a782fe1b2b92f614597c9f5450aa0b21b8b56f3690c9015d83a2fbb01241eb->enter($__internal_c0a782fe1b2b92f614597c9f5450aa0b21b8b56f3690c9015d83a2fbb01241eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0a782fe1b2b92f614597c9f5450aa0b21b8b56f3690c9015d83a2fbb01241eb->leave($__internal_c0a782fe1b2b92f614597c9f5450aa0b21b8b56f3690c9015d83a2fbb01241eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06eeb46647160c95fa637d8e508b7c06295a5bf6bc214e686007f457a7ec4673 = $this->env->getExtension("native_profiler");
        $__internal_06eeb46647160c95fa637d8e508b7c06295a5bf6bc214e686007f457a7ec4673->enter($__internal_06eeb46647160c95fa637d8e508b7c06295a5bf6bc214e686007f457a7ec4673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_06eeb46647160c95fa637d8e508b7c06295a5bf6bc214e686007f457a7ec4673->leave($__internal_06eeb46647160c95fa637d8e508b7c06295a5bf6bc214e686007f457a7ec4673_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
