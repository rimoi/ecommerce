<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_86dbc532963c763fee1166910e4f6c015fd252de49de549b66de5f3ce5963364 extends Twig_Template
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
        $__internal_a470667fcf74c7d22f3e60070cadc725a49ebba774a832b5d8e9a420a49b2094 = $this->env->getExtension("native_profiler");
        $__internal_a470667fcf74c7d22f3e60070cadc725a49ebba774a832b5d8e9a420a49b2094->enter($__internal_a470667fcf74c7d22f3e60070cadc725a49ebba774a832b5d8e9a420a49b2094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_a470667fcf74c7d22f3e60070cadc725a49ebba774a832b5d8e9a420a49b2094->leave($__internal_a470667fcf74c7d22f3e60070cadc725a49ebba774a832b5d8e9a420a49b2094_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
