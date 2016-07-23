<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e20765995fa48f6e901a3a09df30cd7991972e069cb49daf95899fb1cd57a96d extends Twig_Template
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
        $__internal_25aeacba31bd004db2df8ded82dc87d14447adc0243295db1bada56aeef7b6e7 = $this->env->getExtension("native_profiler");
        $__internal_25aeacba31bd004db2df8ded82dc87d14447adc0243295db1bada56aeef7b6e7->enter($__internal_25aeacba31bd004db2df8ded82dc87d14447adc0243295db1bada56aeef7b6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_25aeacba31bd004db2df8ded82dc87d14447adc0243295db1bada56aeef7b6e7->leave($__internal_25aeacba31bd004db2df8ded82dc87d14447adc0243295db1bada56aeef7b6e7_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_991c98b5958a04fdea8471c29e7a3803662e34947ff12b6b90515a71464ed9dc = $this->env->getExtension("native_profiler");
        $__internal_991c98b5958a04fdea8471c29e7a3803662e34947ff12b6b90515a71464ed9dc->enter($__internal_991c98b5958a04fdea8471c29e7a3803662e34947ff12b6b90515a71464ed9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_991c98b5958a04fdea8471c29e7a3803662e34947ff12b6b90515a71464ed9dc->leave($__internal_991c98b5958a04fdea8471c29e7a3803662e34947ff12b6b90515a71464ed9dc_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e9de1c8daaac2e24fde8dd188984ce9de272933768576dee144037d7962d768f = $this->env->getExtension("native_profiler");
        $__internal_e9de1c8daaac2e24fde8dd188984ce9de272933768576dee144037d7962d768f->enter($__internal_e9de1c8daaac2e24fde8dd188984ce9de272933768576dee144037d7962d768f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e9de1c8daaac2e24fde8dd188984ce9de272933768576dee144037d7962d768f->leave($__internal_e9de1c8daaac2e24fde8dd188984ce9de272933768576dee144037d7962d768f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c346e19675795aca585a652758e7674ca1f1b7612de62872c047f0ea93ff713d = $this->env->getExtension("native_profiler");
        $__internal_c346e19675795aca585a652758e7674ca1f1b7612de62872c047f0ea93ff713d->enter($__internal_c346e19675795aca585a652758e7674ca1f1b7612de62872c047f0ea93ff713d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c346e19675795aca585a652758e7674ca1f1b7612de62872c047f0ea93ff713d->leave($__internal_c346e19675795aca585a652758e7674ca1f1b7612de62872c047f0ea93ff713d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
