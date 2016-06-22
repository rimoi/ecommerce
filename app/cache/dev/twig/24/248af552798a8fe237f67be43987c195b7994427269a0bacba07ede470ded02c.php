<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_4b46dc4d7bc5df703b870fd19160aa33777872b326493e68bdf2b888a84f4c79 extends Twig_Template
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
        $__internal_ac5ed625201b45f3235a0d670649c429012f7cd2f15384243ed96d8fc03f7df4 = $this->env->getExtension("native_profiler");
        $__internal_ac5ed625201b45f3235a0d670649c429012f7cd2f15384243ed96d8fc03f7df4->enter($__internal_ac5ed625201b45f3235a0d670649c429012f7cd2f15384243ed96d8fc03f7df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ac5ed625201b45f3235a0d670649c429012f7cd2f15384243ed96d8fc03f7df4->leave($__internal_ac5ed625201b45f3235a0d670649c429012f7cd2f15384243ed96d8fc03f7df4_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe29260c3442c457ad787c31b1b827a766b51deb23459b95aa69ea4119e25663 = $this->env->getExtension("native_profiler");
        $__internal_fe29260c3442c457ad787c31b1b827a766b51deb23459b95aa69ea4119e25663->enter($__internal_fe29260c3442c457ad787c31b1b827a766b51deb23459b95aa69ea4119e25663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fe29260c3442c457ad787c31b1b827a766b51deb23459b95aa69ea4119e25663->leave($__internal_fe29260c3442c457ad787c31b1b827a766b51deb23459b95aa69ea4119e25663_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b7e8131c40a1f29ddcc7046700d7bc177d2ab17d1dabcc46348a2af82bb01199 = $this->env->getExtension("native_profiler");
        $__internal_b7e8131c40a1f29ddcc7046700d7bc177d2ab17d1dabcc46348a2af82bb01199->enter($__internal_b7e8131c40a1f29ddcc7046700d7bc177d2ab17d1dabcc46348a2af82bb01199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b7e8131c40a1f29ddcc7046700d7bc177d2ab17d1dabcc46348a2af82bb01199->leave($__internal_b7e8131c40a1f29ddcc7046700d7bc177d2ab17d1dabcc46348a2af82bb01199_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ee5e518dae898ae4f9f3483f7720302309b1490f5aea9b61c698721b128f78f = $this->env->getExtension("native_profiler");
        $__internal_1ee5e518dae898ae4f9f3483f7720302309b1490f5aea9b61c698721b128f78f->enter($__internal_1ee5e518dae898ae4f9f3483f7720302309b1490f5aea9b61c698721b128f78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ee5e518dae898ae4f9f3483f7720302309b1490f5aea9b61c698721b128f78f->leave($__internal_1ee5e518dae898ae4f9f3483f7720302309b1490f5aea9b61c698721b128f78f_prof);

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
