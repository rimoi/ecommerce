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
        $__internal_971c1e1e8f8add40c8268cca1099a809dbd990747ab78ce7f71f72acf35b6f76 = $this->env->getExtension("native_profiler");
        $__internal_971c1e1e8f8add40c8268cca1099a809dbd990747ab78ce7f71f72acf35b6f76->enter($__internal_971c1e1e8f8add40c8268cca1099a809dbd990747ab78ce7f71f72acf35b6f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_971c1e1e8f8add40c8268cca1099a809dbd990747ab78ce7f71f72acf35b6f76->leave($__internal_971c1e1e8f8add40c8268cca1099a809dbd990747ab78ce7f71f72acf35b6f76_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a3ed72e757fd53fd55fff84fac7f57f93f02a480367c2947857ee8d3f539390e = $this->env->getExtension("native_profiler");
        $__internal_a3ed72e757fd53fd55fff84fac7f57f93f02a480367c2947857ee8d3f539390e->enter($__internal_a3ed72e757fd53fd55fff84fac7f57f93f02a480367c2947857ee8d3f539390e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a3ed72e757fd53fd55fff84fac7f57f93f02a480367c2947857ee8d3f539390e->leave($__internal_a3ed72e757fd53fd55fff84fac7f57f93f02a480367c2947857ee8d3f539390e_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_657b7f8f533415c0e0675aa7444f6273ac2ccfa90108a09f819e18bd2c2f9eae = $this->env->getExtension("native_profiler");
        $__internal_657b7f8f533415c0e0675aa7444f6273ac2ccfa90108a09f819e18bd2c2f9eae->enter($__internal_657b7f8f533415c0e0675aa7444f6273ac2ccfa90108a09f819e18bd2c2f9eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_657b7f8f533415c0e0675aa7444f6273ac2ccfa90108a09f819e18bd2c2f9eae->leave($__internal_657b7f8f533415c0e0675aa7444f6273ac2ccfa90108a09f819e18bd2c2f9eae_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_94998130621c4633df7c45d24bec7dd79b6978efba1713cc59bb4b7e7bf7a0a8 = $this->env->getExtension("native_profiler");
        $__internal_94998130621c4633df7c45d24bec7dd79b6978efba1713cc59bb4b7e7bf7a0a8->enter($__internal_94998130621c4633df7c45d24bec7dd79b6978efba1713cc59bb4b7e7bf7a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_94998130621c4633df7c45d24bec7dd79b6978efba1713cc59bb4b7e7bf7a0a8->leave($__internal_94998130621c4633df7c45d24bec7dd79b6978efba1713cc59bb4b7e7bf7a0a8_prof);

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
