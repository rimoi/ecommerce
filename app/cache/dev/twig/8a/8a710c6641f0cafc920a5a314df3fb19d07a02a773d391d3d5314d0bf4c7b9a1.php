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
        $__internal_4172d9560b18306c0d9a168e1ed6d6a8bd9085fbba857eac8405839e3bd1097e = $this->env->getExtension("native_profiler");
        $__internal_4172d9560b18306c0d9a168e1ed6d6a8bd9085fbba857eac8405839e3bd1097e->enter($__internal_4172d9560b18306c0d9a168e1ed6d6a8bd9085fbba857eac8405839e3bd1097e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4172d9560b18306c0d9a168e1ed6d6a8bd9085fbba857eac8405839e3bd1097e->leave($__internal_4172d9560b18306c0d9a168e1ed6d6a8bd9085fbba857eac8405839e3bd1097e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ecf48b4b1b6aff7ff9db89a1c320e70e467a37f79693af42386d9d77f60d496b = $this->env->getExtension("native_profiler");
        $__internal_ecf48b4b1b6aff7ff9db89a1c320e70e467a37f79693af42386d9d77f60d496b->enter($__internal_ecf48b4b1b6aff7ff9db89a1c320e70e467a37f79693af42386d9d77f60d496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ecf48b4b1b6aff7ff9db89a1c320e70e467a37f79693af42386d9d77f60d496b->leave($__internal_ecf48b4b1b6aff7ff9db89a1c320e70e467a37f79693af42386d9d77f60d496b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4620143e082dac2f007386173d60b7a7abd2c0e628bbf1e057c025bb41ce078d = $this->env->getExtension("native_profiler");
        $__internal_4620143e082dac2f007386173d60b7a7abd2c0e628bbf1e057c025bb41ce078d->enter($__internal_4620143e082dac2f007386173d60b7a7abd2c0e628bbf1e057c025bb41ce078d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4620143e082dac2f007386173d60b7a7abd2c0e628bbf1e057c025bb41ce078d->leave($__internal_4620143e082dac2f007386173d60b7a7abd2c0e628bbf1e057c025bb41ce078d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7a84fb603ee7192e8ac1fda9b8769f4408e708ffc1d3a017546094d6c2b823cd = $this->env->getExtension("native_profiler");
        $__internal_7a84fb603ee7192e8ac1fda9b8769f4408e708ffc1d3a017546094d6c2b823cd->enter($__internal_7a84fb603ee7192e8ac1fda9b8769f4408e708ffc1d3a017546094d6c2b823cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7a84fb603ee7192e8ac1fda9b8769f4408e708ffc1d3a017546094d6c2b823cd->leave($__internal_7a84fb603ee7192e8ac1fda9b8769f4408e708ffc1d3a017546094d6c2b823cd_prof);

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
