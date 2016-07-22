<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_569567c10048b6a85c6cc3393e1a3a95a95f03c6b0bd6caa9baed7dfe04d760c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_9c5a665aa00fa91a605cad0ee1b5f2ba3015dda8676a751b184dd582fcc87408 = $this->env->getExtension("native_profiler");
        $__internal_9c5a665aa00fa91a605cad0ee1b5f2ba3015dda8676a751b184dd582fcc87408->enter($__internal_9c5a665aa00fa91a605cad0ee1b5f2ba3015dda8676a751b184dd582fcc87408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c5a665aa00fa91a605cad0ee1b5f2ba3015dda8676a751b184dd582fcc87408->leave($__internal_9c5a665aa00fa91a605cad0ee1b5f2ba3015dda8676a751b184dd582fcc87408_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e34d624cb7a0458fffc042c75c6f11ae3d2595c23973cc95f001260dd6d7442a = $this->env->getExtension("native_profiler");
        $__internal_e34d624cb7a0458fffc042c75c6f11ae3d2595c23973cc95f001260dd6d7442a->enter($__internal_e34d624cb7a0458fffc042c75c6f11ae3d2595c23973cc95f001260dd6d7442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e34d624cb7a0458fffc042c75c6f11ae3d2595c23973cc95f001260dd6d7442a->leave($__internal_e34d624cb7a0458fffc042c75c6f11ae3d2595c23973cc95f001260dd6d7442a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
