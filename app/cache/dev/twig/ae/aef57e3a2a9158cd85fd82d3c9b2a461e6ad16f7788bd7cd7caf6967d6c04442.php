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
        $__internal_d96823eee7fbba8b42a19245a202a438dd1c78f4ec51da5ff714c32bb08ce8ed = $this->env->getExtension("native_profiler");
        $__internal_d96823eee7fbba8b42a19245a202a438dd1c78f4ec51da5ff714c32bb08ce8ed->enter($__internal_d96823eee7fbba8b42a19245a202a438dd1c78f4ec51da5ff714c32bb08ce8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d96823eee7fbba8b42a19245a202a438dd1c78f4ec51da5ff714c32bb08ce8ed->leave($__internal_d96823eee7fbba8b42a19245a202a438dd1c78f4ec51da5ff714c32bb08ce8ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d8956036d97c69b1ea20c40378cdc395afe0803f646c5900d6fd27e731826a0 = $this->env->getExtension("native_profiler");
        $__internal_4d8956036d97c69b1ea20c40378cdc395afe0803f646c5900d6fd27e731826a0->enter($__internal_4d8956036d97c69b1ea20c40378cdc395afe0803f646c5900d6fd27e731826a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4d8956036d97c69b1ea20c40378cdc395afe0803f646c5900d6fd27e731826a0->leave($__internal_4d8956036d97c69b1ea20c40378cdc395afe0803f646c5900d6fd27e731826a0_prof);

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
