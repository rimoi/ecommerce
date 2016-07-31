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
        $__internal_73c2d027be5a4aff2409a60e18b1c19e64a192aee03f9de4d640fba9aaaa96c0 = $this->env->getExtension("native_profiler");
        $__internal_73c2d027be5a4aff2409a60e18b1c19e64a192aee03f9de4d640fba9aaaa96c0->enter($__internal_73c2d027be5a4aff2409a60e18b1c19e64a192aee03f9de4d640fba9aaaa96c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c2d027be5a4aff2409a60e18b1c19e64a192aee03f9de4d640fba9aaaa96c0->leave($__internal_73c2d027be5a4aff2409a60e18b1c19e64a192aee03f9de4d640fba9aaaa96c0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c13e22a2db781313ff0fc3a7c19753e317821c90e1c58e920f4198f52c61596 = $this->env->getExtension("native_profiler");
        $__internal_0c13e22a2db781313ff0fc3a7c19753e317821c90e1c58e920f4198f52c61596->enter($__internal_0c13e22a2db781313ff0fc3a7c19753e317821c90e1c58e920f4198f52c61596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0c13e22a2db781313ff0fc3a7c19753e317821c90e1c58e920f4198f52c61596->leave($__internal_0c13e22a2db781313ff0fc3a7c19753e317821c90e1c58e920f4198f52c61596_prof);

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
