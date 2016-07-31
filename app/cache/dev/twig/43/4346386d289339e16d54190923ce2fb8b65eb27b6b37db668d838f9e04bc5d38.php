<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_f4c6f8d946adfce5ad889d389970a1062701d481871efb586de02033a4cadbb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_0f4a2c276946099d47f98b58dbe760bd02ed11e7bcac7ce4a2bd64c9160bfd31 = $this->env->getExtension("native_profiler");
        $__internal_0f4a2c276946099d47f98b58dbe760bd02ed11e7bcac7ce4a2bd64c9160bfd31->enter($__internal_0f4a2c276946099d47f98b58dbe760bd02ed11e7bcac7ce4a2bd64c9160bfd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f4a2c276946099d47f98b58dbe760bd02ed11e7bcac7ce4a2bd64c9160bfd31->leave($__internal_0f4a2c276946099d47f98b58dbe760bd02ed11e7bcac7ce4a2bd64c9160bfd31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7dd060010220f67426cbc5b3fa122c8721d58a3344dfe8e23dd31c75bee66be = $this->env->getExtension("native_profiler");
        $__internal_f7dd060010220f67426cbc5b3fa122c8721d58a3344dfe8e23dd31c75bee66be->enter($__internal_f7dd060010220f67426cbc5b3fa122c8721d58a3344dfe8e23dd31c75bee66be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f7dd060010220f67426cbc5b3fa122c8721d58a3344dfe8e23dd31c75bee66be->leave($__internal_f7dd060010220f67426cbc5b3fa122c8721d58a3344dfe8e23dd31c75bee66be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
