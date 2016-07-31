<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_a37605df09e5ec98f87f8af11c064ddd50c143269bbe2c4daf7bf19bb7cc0863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_33095e62c4e7dedaf26c45d290118466536fb23ee19b4c6d9a36e57a83bd2799 = $this->env->getExtension("native_profiler");
        $__internal_33095e62c4e7dedaf26c45d290118466536fb23ee19b4c6d9a36e57a83bd2799->enter($__internal_33095e62c4e7dedaf26c45d290118466536fb23ee19b4c6d9a36e57a83bd2799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33095e62c4e7dedaf26c45d290118466536fb23ee19b4c6d9a36e57a83bd2799->leave($__internal_33095e62c4e7dedaf26c45d290118466536fb23ee19b4c6d9a36e57a83bd2799_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fd4c674bfc63ef2f4b02893da6d9cc12b253d387e90730bd3bb58a2b78fb0947 = $this->env->getExtension("native_profiler");
        $__internal_fd4c674bfc63ef2f4b02893da6d9cc12b253d387e90730bd3bb58a2b78fb0947->enter($__internal_fd4c674bfc63ef2f4b02893da6d9cc12b253d387e90730bd3bb58a2b78fb0947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_fd4c674bfc63ef2f4b02893da6d9cc12b253d387e90730bd3bb58a2b78fb0947->leave($__internal_fd4c674bfc63ef2f4b02893da6d9cc12b253d387e90730bd3bb58a2b78fb0947_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
