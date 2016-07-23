<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_aaf212a67000d6c5af78191d4bd590362f889077e92362591d83ae95b97ca814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_ceb656786276452bdec4d4bbae09bf6aff772cc0c51ceccfd450142207fe7972 = $this->env->getExtension("native_profiler");
        $__internal_ceb656786276452bdec4d4bbae09bf6aff772cc0c51ceccfd450142207fe7972->enter($__internal_ceb656786276452bdec4d4bbae09bf6aff772cc0c51ceccfd450142207fe7972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceb656786276452bdec4d4bbae09bf6aff772cc0c51ceccfd450142207fe7972->leave($__internal_ceb656786276452bdec4d4bbae09bf6aff772cc0c51ceccfd450142207fe7972_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb3dd6d32d0913f21d3a2cec5247f5c80f92e8fb6371ab3e89e359597e7ff4d6 = $this->env->getExtension("native_profiler");
        $__internal_eb3dd6d32d0913f21d3a2cec5247f5c80f92e8fb6371ab3e89e359597e7ff4d6->enter($__internal_eb3dd6d32d0913f21d3a2cec5247f5c80f92e8fb6371ab3e89e359597e7ff4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_eb3dd6d32d0913f21d3a2cec5247f5c80f92e8fb6371ab3e89e359597e7ff4d6->leave($__internal_eb3dd6d32d0913f21d3a2cec5247f5c80f92e8fb6371ab3e89e359597e7ff4d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
