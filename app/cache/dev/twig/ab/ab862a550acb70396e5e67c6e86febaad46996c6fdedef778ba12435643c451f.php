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
        $__internal_ec937a343a8b6dcec7c92109ba4177ede8f2d420a581376597bdb48820135f55 = $this->env->getExtension("native_profiler");
        $__internal_ec937a343a8b6dcec7c92109ba4177ede8f2d420a581376597bdb48820135f55->enter($__internal_ec937a343a8b6dcec7c92109ba4177ede8f2d420a581376597bdb48820135f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ec937a343a8b6dcec7c92109ba4177ede8f2d420a581376597bdb48820135f55->leave($__internal_ec937a343a8b6dcec7c92109ba4177ede8f2d420a581376597bdb48820135f55_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9cd568b4ebec554d81f33c8ac5c42ee77e5796014a26cccb2db3e1224c001a9b = $this->env->getExtension("native_profiler");
        $__internal_9cd568b4ebec554d81f33c8ac5c42ee77e5796014a26cccb2db3e1224c001a9b->enter($__internal_9cd568b4ebec554d81f33c8ac5c42ee77e5796014a26cccb2db3e1224c001a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_9cd568b4ebec554d81f33c8ac5c42ee77e5796014a26cccb2db3e1224c001a9b->leave($__internal_9cd568b4ebec554d81f33c8ac5c42ee77e5796014a26cccb2db3e1224c001a9b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7c14bb57f4b5fdbd09b0995c616838b0ecb0517c2d9f485aee68ada4609a67ab = $this->env->getExtension("native_profiler");
        $__internal_7c14bb57f4b5fdbd09b0995c616838b0ecb0517c2d9f485aee68ada4609a67ab->enter($__internal_7c14bb57f4b5fdbd09b0995c616838b0ecb0517c2d9f485aee68ada4609a67ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7c14bb57f4b5fdbd09b0995c616838b0ecb0517c2d9f485aee68ada4609a67ab->leave($__internal_7c14bb57f4b5fdbd09b0995c616838b0ecb0517c2d9f485aee68ada4609a67ab_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4c3f0e108329df80d1a4aa6e92cdaa0261622e146d0ab8504e79350183598e11 = $this->env->getExtension("native_profiler");
        $__internal_4c3f0e108329df80d1a4aa6e92cdaa0261622e146d0ab8504e79350183598e11->enter($__internal_4c3f0e108329df80d1a4aa6e92cdaa0261622e146d0ab8504e79350183598e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4c3f0e108329df80d1a4aa6e92cdaa0261622e146d0ab8504e79350183598e11->leave($__internal_4c3f0e108329df80d1a4aa6e92cdaa0261622e146d0ab8504e79350183598e11_prof);

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
