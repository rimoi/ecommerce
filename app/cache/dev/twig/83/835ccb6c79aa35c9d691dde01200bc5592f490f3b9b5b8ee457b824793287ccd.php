<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e8382bb6a61dbfd1fd1321b03d9f6a7f9256f9cf85a413387a5468fd9be90d8c extends Twig_Template
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
        $__internal_6f13abb6145286fdb553904a378c2ed0e9197a3075f3bcadda029d8fb81d3702 = $this->env->getExtension("native_profiler");
        $__internal_6f13abb6145286fdb553904a378c2ed0e9197a3075f3bcadda029d8fb81d3702->enter($__internal_6f13abb6145286fdb553904a378c2ed0e9197a3075f3bcadda029d8fb81d3702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f13abb6145286fdb553904a378c2ed0e9197a3075f3bcadda029d8fb81d3702->leave($__internal_6f13abb6145286fdb553904a378c2ed0e9197a3075f3bcadda029d8fb81d3702_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5451260f3c6ed0a945520f93861b450b9f622e10e3ebccc3a728c8cfcdff5abc = $this->env->getExtension("native_profiler");
        $__internal_5451260f3c6ed0a945520f93861b450b9f622e10e3ebccc3a728c8cfcdff5abc->enter($__internal_5451260f3c6ed0a945520f93861b450b9f622e10e3ebccc3a728c8cfcdff5abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_5451260f3c6ed0a945520f93861b450b9f622e10e3ebccc3a728c8cfcdff5abc->leave($__internal_5451260f3c6ed0a945520f93861b450b9f622e10e3ebccc3a728c8cfcdff5abc_prof);

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
