<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6af2cfeb574044da4300e0b4bcd4223212862cfe4ad45fb95bea007372cc66c5 extends Twig_Template
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
        $__internal_2083bc5f672fded19f682a367cf16120ef7e647d697ab82d2f4b3576988fe543 = $this->env->getExtension("native_profiler");
        $__internal_2083bc5f672fded19f682a367cf16120ef7e647d697ab82d2f4b3576988fe543->enter($__internal_2083bc5f672fded19f682a367cf16120ef7e647d697ab82d2f4b3576988fe543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2083bc5f672fded19f682a367cf16120ef7e647d697ab82d2f4b3576988fe543->leave($__internal_2083bc5f672fded19f682a367cf16120ef7e647d697ab82d2f4b3576988fe543_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed96338bd814bb159b484f33c7e9d33e65628d6c36cd1a4c8dedb2a492ab3bfa = $this->env->getExtension("native_profiler");
        $__internal_ed96338bd814bb159b484f33c7e9d33e65628d6c36cd1a4c8dedb2a492ab3bfa->enter($__internal_ed96338bd814bb159b484f33c7e9d33e65628d6c36cd1a4c8dedb2a492ab3bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ed96338bd814bb159b484f33c7e9d33e65628d6c36cd1a4c8dedb2a492ab3bfa->leave($__internal_ed96338bd814bb159b484f33c7e9d33e65628d6c36cd1a4c8dedb2a492ab3bfa_prof);

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
