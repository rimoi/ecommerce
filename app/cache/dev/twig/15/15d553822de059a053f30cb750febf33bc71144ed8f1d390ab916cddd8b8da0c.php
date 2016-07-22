<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_295e8e5a579d072a7a16b24510aa13e64a52eb1c9e194d4d6bb5749130e180fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_21a205184eb210965367a7413ae7166ec1f29e3d46495713bed4a0bb1ba5df63 = $this->env->getExtension("native_profiler");
        $__internal_21a205184eb210965367a7413ae7166ec1f29e3d46495713bed4a0bb1ba5df63->enter($__internal_21a205184eb210965367a7413ae7166ec1f29e3d46495713bed4a0bb1ba5df63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a205184eb210965367a7413ae7166ec1f29e3d46495713bed4a0bb1ba5df63->leave($__internal_21a205184eb210965367a7413ae7166ec1f29e3d46495713bed4a0bb1ba5df63_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a3d052cae59d4b81e51f8c3ed88460d34e6029ae0c18787c07889164bff0214 = $this->env->getExtension("native_profiler");
        $__internal_1a3d052cae59d4b81e51f8c3ed88460d34e6029ae0c18787c07889164bff0214->enter($__internal_1a3d052cae59d4b81e51f8c3ed88460d34e6029ae0c18787c07889164bff0214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1a3d052cae59d4b81e51f8c3ed88460d34e6029ae0c18787c07889164bff0214->leave($__internal_1a3d052cae59d4b81e51f8c3ed88460d34e6029ae0c18787c07889164bff0214_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
