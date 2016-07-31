<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_e09f89a39d4de32d5d488248a4a38cb87bebdcd4d94c3576ea68dadbaff5e348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_9a3757d1c2e8b69a9bdd2d38406b51d007c34656f7a5b03321b8f206d12f885f = $this->env->getExtension("native_profiler");
        $__internal_9a3757d1c2e8b69a9bdd2d38406b51d007c34656f7a5b03321b8f206d12f885f->enter($__internal_9a3757d1c2e8b69a9bdd2d38406b51d007c34656f7a5b03321b8f206d12f885f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a3757d1c2e8b69a9bdd2d38406b51d007c34656f7a5b03321b8f206d12f885f->leave($__internal_9a3757d1c2e8b69a9bdd2d38406b51d007c34656f7a5b03321b8f206d12f885f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_88887de4a8d75f7931fbc814f6498ff46c2163462e5b536445b705b745b7769c = $this->env->getExtension("native_profiler");
        $__internal_88887de4a8d75f7931fbc814f6498ff46c2163462e5b536445b705b745b7769c->enter($__internal_88887de4a8d75f7931fbc814f6498ff46c2163462e5b536445b705b745b7769c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_88887de4a8d75f7931fbc814f6498ff46c2163462e5b536445b705b745b7769c->leave($__internal_88887de4a8d75f7931fbc814f6498ff46c2163462e5b536445b705b745b7769c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
