<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_b6eff76dd6e49eed9707aef9aaf17eeed4c81be457a873a898ac5e56dc03e5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3b9338db6276a92f19b7f983acbe16c9488726f10d1d7e526633eb98039559af = $this->env->getExtension("native_profiler");
        $__internal_3b9338db6276a92f19b7f983acbe16c9488726f10d1d7e526633eb98039559af->enter($__internal_3b9338db6276a92f19b7f983acbe16c9488726f10d1d7e526633eb98039559af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b9338db6276a92f19b7f983acbe16c9488726f10d1d7e526633eb98039559af->leave($__internal_3b9338db6276a92f19b7f983acbe16c9488726f10d1d7e526633eb98039559af_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58c451833b4716c9a70b4c214ea5c33b9006c94ece5e37702227f1bd7642a2b8 = $this->env->getExtension("native_profiler");
        $__internal_58c451833b4716c9a70b4c214ea5c33b9006c94ece5e37702227f1bd7642a2b8->enter($__internal_58c451833b4716c9a70b4c214ea5c33b9006c94ece5e37702227f1bd7642a2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_58c451833b4716c9a70b4c214ea5c33b9006c94ece5e37702227f1bd7642a2b8->leave($__internal_58c451833b4716c9a70b4c214ea5c33b9006c94ece5e37702227f1bd7642a2b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
