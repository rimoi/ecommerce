<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_baa2a77bcd8d07a7ba7fa112c33cc4e69dae77b88bcc646621818fe29c375f90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_09d3ec517940d951ed09cfcb44a30276b583b518335de9041434daa2b0408782 = $this->env->getExtension("native_profiler");
        $__internal_09d3ec517940d951ed09cfcb44a30276b583b518335de9041434daa2b0408782->enter($__internal_09d3ec517940d951ed09cfcb44a30276b583b518335de9041434daa2b0408782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d3ec517940d951ed09cfcb44a30276b583b518335de9041434daa2b0408782->leave($__internal_09d3ec517940d951ed09cfcb44a30276b583b518335de9041434daa2b0408782_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eba26911f1d4a26df36a5eafb03aee2c1c372d18953379e5d9c1a4d7cff08d5e = $this->env->getExtension("native_profiler");
        $__internal_eba26911f1d4a26df36a5eafb03aee2c1c372d18953379e5d9c1a4d7cff08d5e->enter($__internal_eba26911f1d4a26df36a5eafb03aee2c1c372d18953379e5d9c1a4d7cff08d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_eba26911f1d4a26df36a5eafb03aee2c1c372d18953379e5d9c1a4d7cff08d5e->leave($__internal_eba26911f1d4a26df36a5eafb03aee2c1c372d18953379e5d9c1a4d7cff08d5e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
