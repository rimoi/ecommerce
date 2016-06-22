<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_ef872c917549ce22a89a0ea7d13db46e318f697c505159c90729de444a94b6c1 extends Twig_Template
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
        $__internal_d51c8ee5f8a82672beadf98ca7e6fb6122b22ecfd762e33efd37df33793c0143 = $this->env->getExtension("native_profiler");
        $__internal_d51c8ee5f8a82672beadf98ca7e6fb6122b22ecfd762e33efd37df33793c0143->enter($__internal_d51c8ee5f8a82672beadf98ca7e6fb6122b22ecfd762e33efd37df33793c0143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d51c8ee5f8a82672beadf98ca7e6fb6122b22ecfd762e33efd37df33793c0143->leave($__internal_d51c8ee5f8a82672beadf98ca7e6fb6122b22ecfd762e33efd37df33793c0143_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5b8f418911fead35b465fa0a454dfa9466a9e637bfaf9bf3691317061586ae0 = $this->env->getExtension("native_profiler");
        $__internal_a5b8f418911fead35b465fa0a454dfa9466a9e637bfaf9bf3691317061586ae0->enter($__internal_a5b8f418911fead35b465fa0a454dfa9466a9e637bfaf9bf3691317061586ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_a5b8f418911fead35b465fa0a454dfa9466a9e637bfaf9bf3691317061586ae0->leave($__internal_a5b8f418911fead35b465fa0a454dfa9466a9e637bfaf9bf3691317061586ae0_prof);

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
