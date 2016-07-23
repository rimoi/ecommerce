<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_114e7f8a111eff2e89a41635d63de22605ac5bb535f201106f8bff108c828491 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_c982225e4b1d6b24cdf648ddcca54c82938e991cda4d23eabc1967ed27dea13b = $this->env->getExtension("native_profiler");
        $__internal_c982225e4b1d6b24cdf648ddcca54c82938e991cda4d23eabc1967ed27dea13b->enter($__internal_c982225e4b1d6b24cdf648ddcca54c82938e991cda4d23eabc1967ed27dea13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c982225e4b1d6b24cdf648ddcca54c82938e991cda4d23eabc1967ed27dea13b->leave($__internal_c982225e4b1d6b24cdf648ddcca54c82938e991cda4d23eabc1967ed27dea13b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a01af5a6d59fc9609d3f4113c8515fe16c97a532e3e6e73f4fbecbf02973eac = $this->env->getExtension("native_profiler");
        $__internal_6a01af5a6d59fc9609d3f4113c8515fe16c97a532e3e6e73f4fbecbf02973eac->enter($__internal_6a01af5a6d59fc9609d3f4113c8515fe16c97a532e3e6e73f4fbecbf02973eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6a01af5a6d59fc9609d3f4113c8515fe16c97a532e3e6e73f4fbecbf02973eac->leave($__internal_6a01af5a6d59fc9609d3f4113c8515fe16c97a532e3e6e73f4fbecbf02973eac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
