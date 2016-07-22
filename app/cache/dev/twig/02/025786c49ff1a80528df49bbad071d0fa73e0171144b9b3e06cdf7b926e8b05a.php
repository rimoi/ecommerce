<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_f1513250f3ffe75244ab97e793654c536d69e25f3bdc167e734739996a5c991a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_9b244267c4c2ebd862ab5fc0f062bba938781999643270f6dde0baa4afeb3c65 = $this->env->getExtension("native_profiler");
        $__internal_9b244267c4c2ebd862ab5fc0f062bba938781999643270f6dde0baa4afeb3c65->enter($__internal_9b244267c4c2ebd862ab5fc0f062bba938781999643270f6dde0baa4afeb3c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b244267c4c2ebd862ab5fc0f062bba938781999643270f6dde0baa4afeb3c65->leave($__internal_9b244267c4c2ebd862ab5fc0f062bba938781999643270f6dde0baa4afeb3c65_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71566f3eae0f34ea37f5620324f255493436372c5b706cd3f0a9670663c0390c = $this->env->getExtension("native_profiler");
        $__internal_71566f3eae0f34ea37f5620324f255493436372c5b706cd3f0a9670663c0390c->enter($__internal_71566f3eae0f34ea37f5620324f255493436372c5b706cd3f0a9670663c0390c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_71566f3eae0f34ea37f5620324f255493436372c5b706cd3f0a9670663c0390c->leave($__internal_71566f3eae0f34ea37f5620324f255493436372c5b706cd3f0a9670663c0390c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
