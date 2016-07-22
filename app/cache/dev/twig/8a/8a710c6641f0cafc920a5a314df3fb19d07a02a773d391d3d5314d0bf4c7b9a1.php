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
        $__internal_d5c2418c02257f5761dbedc9ca543a38eac0a58f4b9bfeb551cb3fe6eef42a2e = $this->env->getExtension("native_profiler");
        $__internal_d5c2418c02257f5761dbedc9ca543a38eac0a58f4b9bfeb551cb3fe6eef42a2e->enter($__internal_d5c2418c02257f5761dbedc9ca543a38eac0a58f4b9bfeb551cb3fe6eef42a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d5c2418c02257f5761dbedc9ca543a38eac0a58f4b9bfeb551cb3fe6eef42a2e->leave($__internal_d5c2418c02257f5761dbedc9ca543a38eac0a58f4b9bfeb551cb3fe6eef42a2e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b1feed0a95b6caf0847e3433a8cc063742112d2b8136f13df03c5c6393bb731f = $this->env->getExtension("native_profiler");
        $__internal_b1feed0a95b6caf0847e3433a8cc063742112d2b8136f13df03c5c6393bb731f->enter($__internal_b1feed0a95b6caf0847e3433a8cc063742112d2b8136f13df03c5c6393bb731f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b1feed0a95b6caf0847e3433a8cc063742112d2b8136f13df03c5c6393bb731f->leave($__internal_b1feed0a95b6caf0847e3433a8cc063742112d2b8136f13df03c5c6393bb731f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_235d03b09eac39525dd397375d3d2c4c39767c3be2b289e2d1f3725e6d154807 = $this->env->getExtension("native_profiler");
        $__internal_235d03b09eac39525dd397375d3d2c4c39767c3be2b289e2d1f3725e6d154807->enter($__internal_235d03b09eac39525dd397375d3d2c4c39767c3be2b289e2d1f3725e6d154807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_235d03b09eac39525dd397375d3d2c4c39767c3be2b289e2d1f3725e6d154807->leave($__internal_235d03b09eac39525dd397375d3d2c4c39767c3be2b289e2d1f3725e6d154807_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_99ded8fc8438ab7ea792f007c75664471c33a3e5caf0d15fd0939f6af7d65a2e = $this->env->getExtension("native_profiler");
        $__internal_99ded8fc8438ab7ea792f007c75664471c33a3e5caf0d15fd0939f6af7d65a2e->enter($__internal_99ded8fc8438ab7ea792f007c75664471c33a3e5caf0d15fd0939f6af7d65a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_99ded8fc8438ab7ea792f007c75664471c33a3e5caf0d15fd0939f6af7d65a2e->leave($__internal_99ded8fc8438ab7ea792f007c75664471c33a3e5caf0d15fd0939f6af7d65a2e_prof);

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
