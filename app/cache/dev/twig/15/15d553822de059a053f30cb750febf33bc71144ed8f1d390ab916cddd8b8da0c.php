<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_295e8e5a579d072a7a16b24510aa13e64a52eb1c9e194d4d6bb5749130e180fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_9d10d608f2fb9fabdc21ee7e710219c5fd10064dfa696e2865375524ca78c198 = $this->env->getExtension("native_profiler");
        $__internal_9d10d608f2fb9fabdc21ee7e710219c5fd10064dfa696e2865375524ca78c198->enter($__internal_9d10d608f2fb9fabdc21ee7e710219c5fd10064dfa696e2865375524ca78c198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d10d608f2fb9fabdc21ee7e710219c5fd10064dfa696e2865375524ca78c198->leave($__internal_9d10d608f2fb9fabdc21ee7e710219c5fd10064dfa696e2865375524ca78c198_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_edd6f71f26822af5fd039527f6598c59aa4dbb29b48108a437a0ac623171b869 = $this->env->getExtension("native_profiler");
        $__internal_edd6f71f26822af5fd039527f6598c59aa4dbb29b48108a437a0ac623171b869->enter($__internal_edd6f71f26822af5fd039527f6598c59aa4dbb29b48108a437a0ac623171b869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_edd6f71f26822af5fd039527f6598c59aa4dbb29b48108a437a0ac623171b869->leave($__internal_edd6f71f26822af5fd039527f6598c59aa4dbb29b48108a437a0ac623171b869_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
