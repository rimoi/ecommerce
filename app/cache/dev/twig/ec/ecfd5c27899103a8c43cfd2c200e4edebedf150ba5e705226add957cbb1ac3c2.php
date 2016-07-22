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
        $__internal_d12dcdf163d1fe3ef5f932ff692dc7ca4bb1ceaad725b7c149522a5dda5f40db = $this->env->getExtension("native_profiler");
        $__internal_d12dcdf163d1fe3ef5f932ff692dc7ca4bb1ceaad725b7c149522a5dda5f40db->enter($__internal_d12dcdf163d1fe3ef5f932ff692dc7ca4bb1ceaad725b7c149522a5dda5f40db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d12dcdf163d1fe3ef5f932ff692dc7ca4bb1ceaad725b7c149522a5dda5f40db->leave($__internal_d12dcdf163d1fe3ef5f932ff692dc7ca4bb1ceaad725b7c149522a5dda5f40db_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_63390ce77dde6ee2431de5c7bb8ed20a420d832a5c484a3acc234cb177853221 = $this->env->getExtension("native_profiler");
        $__internal_63390ce77dde6ee2431de5c7bb8ed20a420d832a5c484a3acc234cb177853221->enter($__internal_63390ce77dde6ee2431de5c7bb8ed20a420d832a5c484a3acc234cb177853221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_63390ce77dde6ee2431de5c7bb8ed20a420d832a5c484a3acc234cb177853221->leave($__internal_63390ce77dde6ee2431de5c7bb8ed20a420d832a5c484a3acc234cb177853221_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_52ddce27ecc9261843a6851531c317d1beee957b5429f9157aa4189494600807 = $this->env->getExtension("native_profiler");
        $__internal_52ddce27ecc9261843a6851531c317d1beee957b5429f9157aa4189494600807->enter($__internal_52ddce27ecc9261843a6851531c317d1beee957b5429f9157aa4189494600807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_52ddce27ecc9261843a6851531c317d1beee957b5429f9157aa4189494600807->leave($__internal_52ddce27ecc9261843a6851531c317d1beee957b5429f9157aa4189494600807_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ea556881a948da3ac772b52f5908ac7612c78708a7afa9eff326882cbacb251 = $this->env->getExtension("native_profiler");
        $__internal_7ea556881a948da3ac772b52f5908ac7612c78708a7afa9eff326882cbacb251->enter($__internal_7ea556881a948da3ac772b52f5908ac7612c78708a7afa9eff326882cbacb251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7ea556881a948da3ac772b52f5908ac7612c78708a7afa9eff326882cbacb251->leave($__internal_7ea556881a948da3ac772b52f5908ac7612c78708a7afa9eff326882cbacb251_prof);

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
