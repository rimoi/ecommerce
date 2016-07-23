<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_7c9ffef9f4411038e13e41c38fb659bdd5f165ecfd19c93f0d23da960ea157f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_94f3f7d95238d7501b3b1efea0555ea83bcd3ffd15a4faacab34cb1bda936c1d = $this->env->getExtension("native_profiler");
        $__internal_94f3f7d95238d7501b3b1efea0555ea83bcd3ffd15a4faacab34cb1bda936c1d->enter($__internal_94f3f7d95238d7501b3b1efea0555ea83bcd3ffd15a4faacab34cb1bda936c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94f3f7d95238d7501b3b1efea0555ea83bcd3ffd15a4faacab34cb1bda936c1d->leave($__internal_94f3f7d95238d7501b3b1efea0555ea83bcd3ffd15a4faacab34cb1bda936c1d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80bb1eda554e3406811e66b9f72277c3f1f426ce0fe713a68736927f9697d750 = $this->env->getExtension("native_profiler");
        $__internal_80bb1eda554e3406811e66b9f72277c3f1f426ce0fe713a68736927f9697d750->enter($__internal_80bb1eda554e3406811e66b9f72277c3f1f426ce0fe713a68736927f9697d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_80bb1eda554e3406811e66b9f72277c3f1f426ce0fe713a68736927f9697d750->leave($__internal_80bb1eda554e3406811e66b9f72277c3f1f426ce0fe713a68736927f9697d750_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
