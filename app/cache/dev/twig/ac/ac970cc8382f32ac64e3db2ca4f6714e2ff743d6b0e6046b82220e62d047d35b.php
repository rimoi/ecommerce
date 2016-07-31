<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_60a0dffc01da501ed46d9b25657d18711a761d6b565eebbbb7bc5c342afdf837 extends Twig_Template
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
        $__internal_d221b19dc1dd1f0c12329960e4f19578062ac32d088499afc923f1508e5dd592 = $this->env->getExtension("native_profiler");
        $__internal_d221b19dc1dd1f0c12329960e4f19578062ac32d088499afc923f1508e5dd592->enter($__internal_d221b19dc1dd1f0c12329960e4f19578062ac32d088499afc923f1508e5dd592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d221b19dc1dd1f0c12329960e4f19578062ac32d088499afc923f1508e5dd592->leave($__internal_d221b19dc1dd1f0c12329960e4f19578062ac32d088499afc923f1508e5dd592_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3f750150476fdcd64866a42acdfe05ea7dd2c0a759a2064aa8c7126d81271f13 = $this->env->getExtension("native_profiler");
        $__internal_3f750150476fdcd64866a42acdfe05ea7dd2c0a759a2064aa8c7126d81271f13->enter($__internal_3f750150476fdcd64866a42acdfe05ea7dd2c0a759a2064aa8c7126d81271f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_3f750150476fdcd64866a42acdfe05ea7dd2c0a759a2064aa8c7126d81271f13->leave($__internal_3f750150476fdcd64866a42acdfe05ea7dd2c0a759a2064aa8c7126d81271f13_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_303bb6f2cd115ba4e2fc42d932c16848441bfcb1bd79dd70444c46974aa64806 = $this->env->getExtension("native_profiler");
        $__internal_303bb6f2cd115ba4e2fc42d932c16848441bfcb1bd79dd70444c46974aa64806->enter($__internal_303bb6f2cd115ba4e2fc42d932c16848441bfcb1bd79dd70444c46974aa64806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_303bb6f2cd115ba4e2fc42d932c16848441bfcb1bd79dd70444c46974aa64806->leave($__internal_303bb6f2cd115ba4e2fc42d932c16848441bfcb1bd79dd70444c46974aa64806_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_2a74720f6cea84ed8e6f0eb2354d2fdc7124f0de68a0b3ee9c69c47f19eae2fd = $this->env->getExtension("native_profiler");
        $__internal_2a74720f6cea84ed8e6f0eb2354d2fdc7124f0de68a0b3ee9c69c47f19eae2fd->enter($__internal_2a74720f6cea84ed8e6f0eb2354d2fdc7124f0de68a0b3ee9c69c47f19eae2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_2a74720f6cea84ed8e6f0eb2354d2fdc7124f0de68a0b3ee9c69c47f19eae2fd->leave($__internal_2a74720f6cea84ed8e6f0eb2354d2fdc7124f0de68a0b3ee9c69c47f19eae2fd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
