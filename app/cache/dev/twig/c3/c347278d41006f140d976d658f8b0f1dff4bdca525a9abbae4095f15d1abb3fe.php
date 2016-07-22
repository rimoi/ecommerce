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
        $__internal_74d5403546a3ed7068368457fbdff92f971fb64db649ca66c5fde2d5b127ecc9 = $this->env->getExtension("native_profiler");
        $__internal_74d5403546a3ed7068368457fbdff92f971fb64db649ca66c5fde2d5b127ecc9->enter($__internal_74d5403546a3ed7068368457fbdff92f971fb64db649ca66c5fde2d5b127ecc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74d5403546a3ed7068368457fbdff92f971fb64db649ca66c5fde2d5b127ecc9->leave($__internal_74d5403546a3ed7068368457fbdff92f971fb64db649ca66c5fde2d5b127ecc9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa0d94e0281700e3bc41a71acb60883d2585e1d52a4e8ac9e7373551c6d9226b = $this->env->getExtension("native_profiler");
        $__internal_aa0d94e0281700e3bc41a71acb60883d2585e1d52a4e8ac9e7373551c6d9226b->enter($__internal_aa0d94e0281700e3bc41a71acb60883d2585e1d52a4e8ac9e7373551c6d9226b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_aa0d94e0281700e3bc41a71acb60883d2585e1d52a4e8ac9e7373551c6d9226b->leave($__internal_aa0d94e0281700e3bc41a71acb60883d2585e1d52a4e8ac9e7373551c6d9226b_prof);

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
