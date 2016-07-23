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
        $__internal_63ebc174cd5fa44d6a127df6771268ede1ccf5a599e69d4d9148a2d4a1c18435 = $this->env->getExtension("native_profiler");
        $__internal_63ebc174cd5fa44d6a127df6771268ede1ccf5a599e69d4d9148a2d4a1c18435->enter($__internal_63ebc174cd5fa44d6a127df6771268ede1ccf5a599e69d4d9148a2d4a1c18435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63ebc174cd5fa44d6a127df6771268ede1ccf5a599e69d4d9148a2d4a1c18435->leave($__internal_63ebc174cd5fa44d6a127df6771268ede1ccf5a599e69d4d9148a2d4a1c18435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62b457cc5fb2658c48626b04b2faeccebaa5bfc55d59ca5eb99975f39539b748 = $this->env->getExtension("native_profiler");
        $__internal_62b457cc5fb2658c48626b04b2faeccebaa5bfc55d59ca5eb99975f39539b748->enter($__internal_62b457cc5fb2658c48626b04b2faeccebaa5bfc55d59ca5eb99975f39539b748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_62b457cc5fb2658c48626b04b2faeccebaa5bfc55d59ca5eb99975f39539b748->leave($__internal_62b457cc5fb2658c48626b04b2faeccebaa5bfc55d59ca5eb99975f39539b748_prof);

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
