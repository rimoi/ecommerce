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
        $__internal_2a76110aa0095e74509223ac083cda40fc07ff6e30fa1c5296de377f4fb619b9 = $this->env->getExtension("native_profiler");
        $__internal_2a76110aa0095e74509223ac083cda40fc07ff6e30fa1c5296de377f4fb619b9->enter($__internal_2a76110aa0095e74509223ac083cda40fc07ff6e30fa1c5296de377f4fb619b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a76110aa0095e74509223ac083cda40fc07ff6e30fa1c5296de377f4fb619b9->leave($__internal_2a76110aa0095e74509223ac083cda40fc07ff6e30fa1c5296de377f4fb619b9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d66b1021cf205b15eea136ba2ad0fc26cc3f80be4158dc2a527b05db240b80d2 = $this->env->getExtension("native_profiler");
        $__internal_d66b1021cf205b15eea136ba2ad0fc26cc3f80be4158dc2a527b05db240b80d2->enter($__internal_d66b1021cf205b15eea136ba2ad0fc26cc3f80be4158dc2a527b05db240b80d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_d66b1021cf205b15eea136ba2ad0fc26cc3f80be4158dc2a527b05db240b80d2->leave($__internal_d66b1021cf205b15eea136ba2ad0fc26cc3f80be4158dc2a527b05db240b80d2_prof);

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
