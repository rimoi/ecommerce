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
        $__internal_a5d43677d4d98aa8df0ecd21aea8dd4094232ec8b3d97ab5b11a5a1a8fe25210 = $this->env->getExtension("native_profiler");
        $__internal_a5d43677d4d98aa8df0ecd21aea8dd4094232ec8b3d97ab5b11a5a1a8fe25210->enter($__internal_a5d43677d4d98aa8df0ecd21aea8dd4094232ec8b3d97ab5b11a5a1a8fe25210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a5d43677d4d98aa8df0ecd21aea8dd4094232ec8b3d97ab5b11a5a1a8fe25210->leave($__internal_a5d43677d4d98aa8df0ecd21aea8dd4094232ec8b3d97ab5b11a5a1a8fe25210_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f021b2bfca1f1088135093669bfc69b54be6fcdf66df2725572c3f06b87fc468 = $this->env->getExtension("native_profiler");
        $__internal_f021b2bfca1f1088135093669bfc69b54be6fcdf66df2725572c3f06b87fc468->enter($__internal_f021b2bfca1f1088135093669bfc69b54be6fcdf66df2725572c3f06b87fc468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f021b2bfca1f1088135093669bfc69b54be6fcdf66df2725572c3f06b87fc468->leave($__internal_f021b2bfca1f1088135093669bfc69b54be6fcdf66df2725572c3f06b87fc468_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d4a312c13399484cf72286303fa2969e1aac400bd8230d7038ad1955d5ca92d = $this->env->getExtension("native_profiler");
        $__internal_0d4a312c13399484cf72286303fa2969e1aac400bd8230d7038ad1955d5ca92d->enter($__internal_0d4a312c13399484cf72286303fa2969e1aac400bd8230d7038ad1955d5ca92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d4a312c13399484cf72286303fa2969e1aac400bd8230d7038ad1955d5ca92d->leave($__internal_0d4a312c13399484cf72286303fa2969e1aac400bd8230d7038ad1955d5ca92d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a86f1bc628daec9529e526618ca5144036231b22e48df7daf12f1d1030c7c13f = $this->env->getExtension("native_profiler");
        $__internal_a86f1bc628daec9529e526618ca5144036231b22e48df7daf12f1d1030c7c13f->enter($__internal_a86f1bc628daec9529e526618ca5144036231b22e48df7daf12f1d1030c7c13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a86f1bc628daec9529e526618ca5144036231b22e48df7daf12f1d1030c7c13f->leave($__internal_a86f1bc628daec9529e526618ca5144036231b22e48df7daf12f1d1030c7c13f_prof);

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
