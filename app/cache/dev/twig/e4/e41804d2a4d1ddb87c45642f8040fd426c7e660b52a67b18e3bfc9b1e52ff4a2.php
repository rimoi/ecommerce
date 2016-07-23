<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_65ed040e9932abb2cd48168f1b72d67908dd7fa1379d38297d176cd3f2f140c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_e63d7ea28e14b82b0297748b5caeac542bf075d4b164affe797036ba7e814448 = $this->env->getExtension("native_profiler");
        $__internal_e63d7ea28e14b82b0297748b5caeac542bf075d4b164affe797036ba7e814448->enter($__internal_e63d7ea28e14b82b0297748b5caeac542bf075d4b164affe797036ba7e814448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63d7ea28e14b82b0297748b5caeac542bf075d4b164affe797036ba7e814448->leave($__internal_e63d7ea28e14b82b0297748b5caeac542bf075d4b164affe797036ba7e814448_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a6224c264af07fc4df7254b9ef580df3a3af33b0d7078033644cfa5143b8c30 = $this->env->getExtension("native_profiler");
        $__internal_5a6224c264af07fc4df7254b9ef580df3a3af33b0d7078033644cfa5143b8c30->enter($__internal_5a6224c264af07fc4df7254b9ef580df3a3af33b0d7078033644cfa5143b8c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5a6224c264af07fc4df7254b9ef580df3a3af33b0d7078033644cfa5143b8c30->leave($__internal_5a6224c264af07fc4df7254b9ef580df3a3af33b0d7078033644cfa5143b8c30_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
