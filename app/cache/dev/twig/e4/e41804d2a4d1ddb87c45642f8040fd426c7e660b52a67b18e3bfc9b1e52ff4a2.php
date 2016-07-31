<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_65ed040e9932abb2cd48168f1b72d67908dd7fa1379d38297d176cd3f2f140c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_5f2271bc6bb02ef6174f0ba6f3d26635e4c785229f4c0b62e7a659d6c51e12a0 = $this->env->getExtension("native_profiler");
        $__internal_5f2271bc6bb02ef6174f0ba6f3d26635e4c785229f4c0b62e7a659d6c51e12a0->enter($__internal_5f2271bc6bb02ef6174f0ba6f3d26635e4c785229f4c0b62e7a659d6c51e12a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f2271bc6bb02ef6174f0ba6f3d26635e4c785229f4c0b62e7a659d6c51e12a0->leave($__internal_5f2271bc6bb02ef6174f0ba6f3d26635e4c785229f4c0b62e7a659d6c51e12a0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4d0f0e56e1be5f2c71d0ceccf0c1852142dfe0dce05f96b389df3a10adcd02f = $this->env->getExtension("native_profiler");
        $__internal_a4d0f0e56e1be5f2c71d0ceccf0c1852142dfe0dce05f96b389df3a10adcd02f->enter($__internal_a4d0f0e56e1be5f2c71d0ceccf0c1852142dfe0dce05f96b389df3a10adcd02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a4d0f0e56e1be5f2c71d0ceccf0c1852142dfe0dce05f96b389df3a10adcd02f->leave($__internal_a4d0f0e56e1be5f2c71d0ceccf0c1852142dfe0dce05f96b389df3a10adcd02f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
