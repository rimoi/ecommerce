<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_368373cbe009b145644d418e95303f5ef1d3d7568989b3c3d735bd40437bfbab extends Twig_Template
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
        $__internal_c52531fe89ac07842dddf77d35cd7ba86e0f535d98e24859fb9291e526ad0d95 = $this->env->getExtension("native_profiler");
        $__internal_c52531fe89ac07842dddf77d35cd7ba86e0f535d98e24859fb9291e526ad0d95->enter($__internal_c52531fe89ac07842dddf77d35cd7ba86e0f535d98e24859fb9291e526ad0d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_c52531fe89ac07842dddf77d35cd7ba86e0f535d98e24859fb9291e526ad0d95->leave($__internal_c52531fe89ac07842dddf77d35cd7ba86e0f535d98e24859fb9291e526ad0d95_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
