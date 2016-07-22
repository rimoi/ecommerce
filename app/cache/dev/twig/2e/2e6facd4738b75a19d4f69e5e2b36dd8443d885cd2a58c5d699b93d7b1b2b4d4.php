<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a25e7b7ff2cc47304eb012e08fb1222d01405d54b551c03bdf335699411c4e5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7e5991a47908c17839f91df68a3437032b7826d01c5103c87b339af954812366 = $this->env->getExtension("native_profiler");
        $__internal_7e5991a47908c17839f91df68a3437032b7826d01c5103c87b339af954812366->enter($__internal_7e5991a47908c17839f91df68a3437032b7826d01c5103c87b339af954812366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5991a47908c17839f91df68a3437032b7826d01c5103c87b339af954812366->leave($__internal_7e5991a47908c17839f91df68a3437032b7826d01c5103c87b339af954812366_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0df34a28aa3dc97f817725c0576396b28dd4e6231f262ecba629cad4b0b9359 = $this->env->getExtension("native_profiler");
        $__internal_d0df34a28aa3dc97f817725c0576396b28dd4e6231f262ecba629cad4b0b9359->enter($__internal_d0df34a28aa3dc97f817725c0576396b28dd4e6231f262ecba629cad4b0b9359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d0df34a28aa3dc97f817725c0576396b28dd4e6231f262ecba629cad4b0b9359->leave($__internal_d0df34a28aa3dc97f817725c0576396b28dd4e6231f262ecba629cad4b0b9359_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
