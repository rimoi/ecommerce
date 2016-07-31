<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e8adc25b0c7b5848b7bf5819a2562cb088857ab8b59f5861c8b9627d043c68b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce236f78ae008640e3069d43a2d129ea403a02f1db63e02c4e1c72d36c3e500e = $this->env->getExtension("native_profiler");
        $__internal_ce236f78ae008640e3069d43a2d129ea403a02f1db63e02c4e1c72d36c3e500e->enter($__internal_ce236f78ae008640e3069d43a2d129ea403a02f1db63e02c4e1c72d36c3e500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ce236f78ae008640e3069d43a2d129ea403a02f1db63e02c4e1c72d36c3e500e->leave($__internal_ce236f78ae008640e3069d43a2d129ea403a02f1db63e02c4e1c72d36c3e500e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6c8c9b19ad952fd83fef1575e6ac53fc7f2008996e16ed4f6bf79d899470bb51 = $this->env->getExtension("native_profiler");
        $__internal_6c8c9b19ad952fd83fef1575e6ac53fc7f2008996e16ed4f6bf79d899470bb51->enter($__internal_6c8c9b19ad952fd83fef1575e6ac53fc7f2008996e16ed4f6bf79d899470bb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6c8c9b19ad952fd83fef1575e6ac53fc7f2008996e16ed4f6bf79d899470bb51->leave($__internal_6c8c9b19ad952fd83fef1575e6ac53fc7f2008996e16ed4f6bf79d899470bb51_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1738a3b7bfd83e231bba23b668f26cdbc50b868653ff447b4a0316c41ed727b8 = $this->env->getExtension("native_profiler");
        $__internal_1738a3b7bfd83e231bba23b668f26cdbc50b868653ff447b4a0316c41ed727b8->enter($__internal_1738a3b7bfd83e231bba23b668f26cdbc50b868653ff447b4a0316c41ed727b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_1738a3b7bfd83e231bba23b668f26cdbc50b868653ff447b4a0316c41ed727b8->leave($__internal_1738a3b7bfd83e231bba23b668f26cdbc50b868653ff447b4a0316c41ed727b8_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5ebdd916ccc0a6303b8fbc0fba7407619596f57433a248b89760bc54e8782b72 = $this->env->getExtension("native_profiler");
        $__internal_5ebdd916ccc0a6303b8fbc0fba7407619596f57433a248b89760bc54e8782b72->enter($__internal_5ebdd916ccc0a6303b8fbc0fba7407619596f57433a248b89760bc54e8782b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5ebdd916ccc0a6303b8fbc0fba7407619596f57433a248b89760bc54e8782b72->leave($__internal_5ebdd916ccc0a6303b8fbc0fba7407619596f57433a248b89760bc54e8782b72_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
