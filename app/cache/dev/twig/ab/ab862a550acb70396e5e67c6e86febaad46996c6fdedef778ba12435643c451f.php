<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_8b4bf976fb849fa5c5435289b890ecdb5fa8c0d8f3c0b3cda750594d9886a7a0 extends Twig_Template
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
        $__internal_6598e90401f3379dab9f4f927e8a2fa0e2a1ab904b7dcf1ae5bd1b015e336602 = $this->env->getExtension("native_profiler");
        $__internal_6598e90401f3379dab9f4f927e8a2fa0e2a1ab904b7dcf1ae5bd1b015e336602->enter($__internal_6598e90401f3379dab9f4f927e8a2fa0e2a1ab904b7dcf1ae5bd1b015e336602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6598e90401f3379dab9f4f927e8a2fa0e2a1ab904b7dcf1ae5bd1b015e336602->leave($__internal_6598e90401f3379dab9f4f927e8a2fa0e2a1ab904b7dcf1ae5bd1b015e336602_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_116837cff540fbef24d6c2df87fd632eef9f1586697588e812f4602509385479 = $this->env->getExtension("native_profiler");
        $__internal_116837cff540fbef24d6c2df87fd632eef9f1586697588e812f4602509385479->enter($__internal_116837cff540fbef24d6c2df87fd632eef9f1586697588e812f4602509385479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_116837cff540fbef24d6c2df87fd632eef9f1586697588e812f4602509385479->leave($__internal_116837cff540fbef24d6c2df87fd632eef9f1586697588e812f4602509385479_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_25d31386df2291298615c10243bbe6071453d51fbced219cfbfd7622cb8c561a = $this->env->getExtension("native_profiler");
        $__internal_25d31386df2291298615c10243bbe6071453d51fbced219cfbfd7622cb8c561a->enter($__internal_25d31386df2291298615c10243bbe6071453d51fbced219cfbfd7622cb8c561a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_25d31386df2291298615c10243bbe6071453d51fbced219cfbfd7622cb8c561a->leave($__internal_25d31386df2291298615c10243bbe6071453d51fbced219cfbfd7622cb8c561a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ba494605dfd9c60d97dbbd58b15975b09549122c9dd19408ce2e0c155fe24aec = $this->env->getExtension("native_profiler");
        $__internal_ba494605dfd9c60d97dbbd58b15975b09549122c9dd19408ce2e0c155fe24aec->enter($__internal_ba494605dfd9c60d97dbbd58b15975b09549122c9dd19408ce2e0c155fe24aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ba494605dfd9c60d97dbbd58b15975b09549122c9dd19408ce2e0c155fe24aec->leave($__internal_ba494605dfd9c60d97dbbd58b15975b09549122c9dd19408ce2e0c155fe24aec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
