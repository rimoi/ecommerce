<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_0e067501e202b04f49c95573300ed08b09fb6aefd0787be30df2a478fbf3ac75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_2063849c8622d7dbe595bffd01c875541278028bb584467b2a0941fa08a165bb = $this->env->getExtension("native_profiler");
        $__internal_2063849c8622d7dbe595bffd01c875541278028bb584467b2a0941fa08a165bb->enter($__internal_2063849c8622d7dbe595bffd01c875541278028bb584467b2a0941fa08a165bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2063849c8622d7dbe595bffd01c875541278028bb584467b2a0941fa08a165bb->leave($__internal_2063849c8622d7dbe595bffd01c875541278028bb584467b2a0941fa08a165bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea29972535ef91b79424db73f3b354c04fa5262811ac7a5848c57cf46a00d2d7 = $this->env->getExtension("native_profiler");
        $__internal_ea29972535ef91b79424db73f3b354c04fa5262811ac7a5848c57cf46a00d2d7->enter($__internal_ea29972535ef91b79424db73f3b354c04fa5262811ac7a5848c57cf46a00d2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ea29972535ef91b79424db73f3b354c04fa5262811ac7a5848c57cf46a00d2d7->leave($__internal_ea29972535ef91b79424db73f3b354c04fa5262811ac7a5848c57cf46a00d2d7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
