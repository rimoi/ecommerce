<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_f979061b043090bfc7ae5413287218f8784c18ea2a252da4c22996cde671582d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_3194b9e38ecf89addc75967406599d34b9fc673c3c87fb975ca41073cba762aa = $this->env->getExtension("native_profiler");
        $__internal_3194b9e38ecf89addc75967406599d34b9fc673c3c87fb975ca41073cba762aa->enter($__internal_3194b9e38ecf89addc75967406599d34b9fc673c3c87fb975ca41073cba762aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3194b9e38ecf89addc75967406599d34b9fc673c3c87fb975ca41073cba762aa->leave($__internal_3194b9e38ecf89addc75967406599d34b9fc673c3c87fb975ca41073cba762aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_963ba85239feed6d71d96924cf708dca9d4e5e33b5c9ae0f1fd69fc0962aea31 = $this->env->getExtension("native_profiler");
        $__internal_963ba85239feed6d71d96924cf708dca9d4e5e33b5c9ae0f1fd69fc0962aea31->enter($__internal_963ba85239feed6d71d96924cf708dca9d4e5e33b5c9ae0f1fd69fc0962aea31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_963ba85239feed6d71d96924cf708dca9d4e5e33b5c9ae0f1fd69fc0962aea31->leave($__internal_963ba85239feed6d71d96924cf708dca9d4e5e33b5c9ae0f1fd69fc0962aea31_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
