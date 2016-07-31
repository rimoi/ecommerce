<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_aaf212a67000d6c5af78191d4bd590362f889077e92362591d83ae95b97ca814 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_76f5791eb02ea44e3960f05473184e2efa9ff03a5f960bb417790a3eb9c9ba52 = $this->env->getExtension("native_profiler");
        $__internal_76f5791eb02ea44e3960f05473184e2efa9ff03a5f960bb417790a3eb9c9ba52->enter($__internal_76f5791eb02ea44e3960f05473184e2efa9ff03a5f960bb417790a3eb9c9ba52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f5791eb02ea44e3960f05473184e2efa9ff03a5f960bb417790a3eb9c9ba52->leave($__internal_76f5791eb02ea44e3960f05473184e2efa9ff03a5f960bb417790a3eb9c9ba52_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a920bb3c7be8e70d4fce3ba57e2d9fd6cbcd30767a3bc7e5bceb7a7a7dbf98d = $this->env->getExtension("native_profiler");
        $__internal_3a920bb3c7be8e70d4fce3ba57e2d9fd6cbcd30767a3bc7e5bceb7a7a7dbf98d->enter($__internal_3a920bb3c7be8e70d4fce3ba57e2d9fd6cbcd30767a3bc7e5bceb7a7a7dbf98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_3a920bb3c7be8e70d4fce3ba57e2d9fd6cbcd30767a3bc7e5bceb7a7a7dbf98d->leave($__internal_3a920bb3c7be8e70d4fce3ba57e2d9fd6cbcd30767a3bc7e5bceb7a7a7dbf98d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
