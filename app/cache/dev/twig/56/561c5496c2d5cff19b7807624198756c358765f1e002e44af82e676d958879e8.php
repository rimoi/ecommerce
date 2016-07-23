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
        $__internal_83bbfd58bc5f948752ee8efa1f3036282b794a8228f667dfd4455ea9a39c3f77 = $this->env->getExtension("native_profiler");
        $__internal_83bbfd58bc5f948752ee8efa1f3036282b794a8228f667dfd4455ea9a39c3f77->enter($__internal_83bbfd58bc5f948752ee8efa1f3036282b794a8228f667dfd4455ea9a39c3f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83bbfd58bc5f948752ee8efa1f3036282b794a8228f667dfd4455ea9a39c3f77->leave($__internal_83bbfd58bc5f948752ee8efa1f3036282b794a8228f667dfd4455ea9a39c3f77_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d873934da2a436ad11678234dcb5a21c54f7bd8e0268973f6d0cf0e47eea961b = $this->env->getExtension("native_profiler");
        $__internal_d873934da2a436ad11678234dcb5a21c54f7bd8e0268973f6d0cf0e47eea961b->enter($__internal_d873934da2a436ad11678234dcb5a21c54f7bd8e0268973f6d0cf0e47eea961b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_d873934da2a436ad11678234dcb5a21c54f7bd8e0268973f6d0cf0e47eea961b->leave($__internal_d873934da2a436ad11678234dcb5a21c54f7bd8e0268973f6d0cf0e47eea961b_prof);

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
