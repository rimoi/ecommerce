<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_44e8b2f0ced05ceb2767569be3662487d203f9e574c541d2d543ca8e2d41753e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_d1834d1ebd0ba43539812f1700f36f0d2d6edbcfcfa615ba357148d16bb8557b = $this->env->getExtension("native_profiler");
        $__internal_d1834d1ebd0ba43539812f1700f36f0d2d6edbcfcfa615ba357148d16bb8557b->enter($__internal_d1834d1ebd0ba43539812f1700f36f0d2d6edbcfcfa615ba357148d16bb8557b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1834d1ebd0ba43539812f1700f36f0d2d6edbcfcfa615ba357148d16bb8557b->leave($__internal_d1834d1ebd0ba43539812f1700f36f0d2d6edbcfcfa615ba357148d16bb8557b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_15a5415693ce7737891f0db0b300d3a0fa2511cc8a2d6660760c831444238b0c = $this->env->getExtension("native_profiler");
        $__internal_15a5415693ce7737891f0db0b300d3a0fa2511cc8a2d6660760c831444238b0c->enter($__internal_15a5415693ce7737891f0db0b300d3a0fa2511cc8a2d6660760c831444238b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_15a5415693ce7737891f0db0b300d3a0fa2511cc8a2d6660760c831444238b0c->leave($__internal_15a5415693ce7737891f0db0b300d3a0fa2511cc8a2d6660760c831444238b0c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
