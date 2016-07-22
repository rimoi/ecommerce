<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_100e1407edd70e09bfc92c6ca79aff77bddbe71f2049d14c2c0d57aad656ca09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_564a959deeb67a4f176cdcce8122dfb51ae7c70bb7ea3d176f27038e2184a735 = $this->env->getExtension("native_profiler");
        $__internal_564a959deeb67a4f176cdcce8122dfb51ae7c70bb7ea3d176f27038e2184a735->enter($__internal_564a959deeb67a4f176cdcce8122dfb51ae7c70bb7ea3d176f27038e2184a735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564a959deeb67a4f176cdcce8122dfb51ae7c70bb7ea3d176f27038e2184a735->leave($__internal_564a959deeb67a4f176cdcce8122dfb51ae7c70bb7ea3d176f27038e2184a735_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6dbc4f032f1bc99dca65b00fff947ed86dd519176e89a6edd19954e19a87bed = $this->env->getExtension("native_profiler");
        $__internal_a6dbc4f032f1bc99dca65b00fff947ed86dd519176e89a6edd19954e19a87bed->enter($__internal_a6dbc4f032f1bc99dca65b00fff947ed86dd519176e89a6edd19954e19a87bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a6dbc4f032f1bc99dca65b00fff947ed86dd519176e89a6edd19954e19a87bed->leave($__internal_a6dbc4f032f1bc99dca65b00fff947ed86dd519176e89a6edd19954e19a87bed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
