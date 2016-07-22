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
        $__internal_0943ed43ae671430817b55078e0c4b8c9163b13a8152b75b647a7e1838cc9ba9 = $this->env->getExtension("native_profiler");
        $__internal_0943ed43ae671430817b55078e0c4b8c9163b13a8152b75b647a7e1838cc9ba9->enter($__internal_0943ed43ae671430817b55078e0c4b8c9163b13a8152b75b647a7e1838cc9ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0943ed43ae671430817b55078e0c4b8c9163b13a8152b75b647a7e1838cc9ba9->leave($__internal_0943ed43ae671430817b55078e0c4b8c9163b13a8152b75b647a7e1838cc9ba9_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cca8c226d67e96c8b45803b3e05fe5050768ddf1c2e6d22c563ba1166a2357f5 = $this->env->getExtension("native_profiler");
        $__internal_cca8c226d67e96c8b45803b3e05fe5050768ddf1c2e6d22c563ba1166a2357f5->enter($__internal_cca8c226d67e96c8b45803b3e05fe5050768ddf1c2e6d22c563ba1166a2357f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_cca8c226d67e96c8b45803b3e05fe5050768ddf1c2e6d22c563ba1166a2357f5->leave($__internal_cca8c226d67e96c8b45803b3e05fe5050768ddf1c2e6d22c563ba1166a2357f5_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e2674eb9436c24f7859f1779f4a7f2b60c468aa2fbf00287a10db4267f7bf229 = $this->env->getExtension("native_profiler");
        $__internal_e2674eb9436c24f7859f1779f4a7f2b60c468aa2fbf00287a10db4267f7bf229->enter($__internal_e2674eb9436c24f7859f1779f4a7f2b60c468aa2fbf00287a10db4267f7bf229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e2674eb9436c24f7859f1779f4a7f2b60c468aa2fbf00287a10db4267f7bf229->leave($__internal_e2674eb9436c24f7859f1779f4a7f2b60c468aa2fbf00287a10db4267f7bf229_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_651eabf76ca41e29c59aad562d1ced7935d929c4914e1149e647355590a3c8e0 = $this->env->getExtension("native_profiler");
        $__internal_651eabf76ca41e29c59aad562d1ced7935d929c4914e1149e647355590a3c8e0->enter($__internal_651eabf76ca41e29c59aad562d1ced7935d929c4914e1149e647355590a3c8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_651eabf76ca41e29c59aad562d1ced7935d929c4914e1149e647355590a3c8e0->leave($__internal_651eabf76ca41e29c59aad562d1ced7935d929c4914e1149e647355590a3c8e0_prof);

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
