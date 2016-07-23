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
        $__internal_45bb1a71f3703b41fe0c0287e08b4ce898ad9d5a40def056a52b7ae31933142f = $this->env->getExtension("native_profiler");
        $__internal_45bb1a71f3703b41fe0c0287e08b4ce898ad9d5a40def056a52b7ae31933142f->enter($__internal_45bb1a71f3703b41fe0c0287e08b4ce898ad9d5a40def056a52b7ae31933142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_45bb1a71f3703b41fe0c0287e08b4ce898ad9d5a40def056a52b7ae31933142f->leave($__internal_45bb1a71f3703b41fe0c0287e08b4ce898ad9d5a40def056a52b7ae31933142f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_583ed68feccc34ec8fc452e16032994f5f51ca42982c70a1fe11c94a72c31d9d = $this->env->getExtension("native_profiler");
        $__internal_583ed68feccc34ec8fc452e16032994f5f51ca42982c70a1fe11c94a72c31d9d->enter($__internal_583ed68feccc34ec8fc452e16032994f5f51ca42982c70a1fe11c94a72c31d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_583ed68feccc34ec8fc452e16032994f5f51ca42982c70a1fe11c94a72c31d9d->leave($__internal_583ed68feccc34ec8fc452e16032994f5f51ca42982c70a1fe11c94a72c31d9d_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6ba70b7033009fb50a0dbf39cd5c956f0a2646333687b1fe192f39b479f3f388 = $this->env->getExtension("native_profiler");
        $__internal_6ba70b7033009fb50a0dbf39cd5c956f0a2646333687b1fe192f39b479f3f388->enter($__internal_6ba70b7033009fb50a0dbf39cd5c956f0a2646333687b1fe192f39b479f3f388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6ba70b7033009fb50a0dbf39cd5c956f0a2646333687b1fe192f39b479f3f388->leave($__internal_6ba70b7033009fb50a0dbf39cd5c956f0a2646333687b1fe192f39b479f3f388_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4091831cac3b04ef682a06961557fcd605b22249685d40c53023899012c309e3 = $this->env->getExtension("native_profiler");
        $__internal_4091831cac3b04ef682a06961557fcd605b22249685d40c53023899012c309e3->enter($__internal_4091831cac3b04ef682a06961557fcd605b22249685d40c53023899012c309e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4091831cac3b04ef682a06961557fcd605b22249685d40c53023899012c309e3->leave($__internal_4091831cac3b04ef682a06961557fcd605b22249685d40c53023899012c309e3_prof);

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
