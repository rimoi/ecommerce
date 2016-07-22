<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_a27d5c26c89b6abf51e61e0ec0dc908b809e511e55f28e6b3c4abac8c8fbb28d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_06fc161e388cf3886426987df03947f145f08a10d869fb3f9aa63b8c43acabba = $this->env->getExtension("native_profiler");
        $__internal_06fc161e388cf3886426987df03947f145f08a10d869fb3f9aa63b8c43acabba->enter($__internal_06fc161e388cf3886426987df03947f145f08a10d869fb3f9aa63b8c43acabba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06fc161e388cf3886426987df03947f145f08a10d869fb3f9aa63b8c43acabba->leave($__internal_06fc161e388cf3886426987df03947f145f08a10d869fb3f9aa63b8c43acabba_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ef91f83b8bb43ca403bcb6ea37044ea54fe5dc26591c8e1cf64dc85746976ef = $this->env->getExtension("native_profiler");
        $__internal_2ef91f83b8bb43ca403bcb6ea37044ea54fe5dc26591c8e1cf64dc85746976ef->enter($__internal_2ef91f83b8bb43ca403bcb6ea37044ea54fe5dc26591c8e1cf64dc85746976ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_2ef91f83b8bb43ca403bcb6ea37044ea54fe5dc26591c8e1cf64dc85746976ef->leave($__internal_2ef91f83b8bb43ca403bcb6ea37044ea54fe5dc26591c8e1cf64dc85746976ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
