<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e09bd2b58f3289b56063fc755a56c6b79ca2e2187ee623db01ace3e9c6cc31bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f7464b1cbeed1a4ad3b1936f3617a0fab735efe8a6ad98cd198258e05f7e6f6 = $this->env->getExtension("native_profiler");
        $__internal_4f7464b1cbeed1a4ad3b1936f3617a0fab735efe8a6ad98cd198258e05f7e6f6->enter($__internal_4f7464b1cbeed1a4ad3b1936f3617a0fab735efe8a6ad98cd198258e05f7e6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4f7464b1cbeed1a4ad3b1936f3617a0fab735efe8a6ad98cd198258e05f7e6f6->leave($__internal_4f7464b1cbeed1a4ad3b1936f3617a0fab735efe8a6ad98cd198258e05f7e6f6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */
