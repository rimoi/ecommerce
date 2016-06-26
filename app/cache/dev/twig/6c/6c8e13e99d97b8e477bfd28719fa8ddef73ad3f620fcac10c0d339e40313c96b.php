<?php

/* PagesBundle:Default:Pages/layout/pages.html.twig */
class __TwigTemplate_1f0a1c03f37e99460b2300e7e3ed8d5b36d04a0b72a858e533751cbe0eeb5fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:Pages/layout/pages.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f08ac6162eda6f37cf3def9624150341a2da6e1c78548c53bd7f87bfee6b9b6 = $this->env->getExtension("native_profiler");
        $__internal_5f08ac6162eda6f37cf3def9624150341a2da6e1c78548c53bd7f87bfee6b9b6->enter($__internal_5f08ac6162eda6f37cf3def9624150341a2da6e1c78548c53bd7f87bfee6b9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f08ac6162eda6f37cf3def9624150341a2da6e1c78548c53bd7f87bfee6b9b6->leave($__internal_5f08ac6162eda6f37cf3def9624150341a2da6e1c78548c53bd7f87bfee6b9b6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_833ba1020caf3059c43a930b2a51c27d5c8e315b1f21a0c803817fede2e10cfa = $this->env->getExtension("native_profiler");
        $__internal_833ba1020caf3059c43a930b2a51c27d5c8e315b1f21a0c803817fede2e10cfa->enter($__internal_833ba1020caf3059c43a930b2a51c27d5c8e315b1f21a0c803817fede2e10cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"container\">
                <div class=\"row\">
                        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
                        <div class=\"span12\">
                                 <p>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array()), "html", null, true);
        echo "</p>
                        </div>
                </div>
        </div>
";
        
        $__internal_833ba1020caf3059c43a930b2a51c27d5c8e315b1f21a0c803817fede2e10cfa->leave($__internal_833ba1020caf3059c43a930b2a51c27d5c8e315b1f21a0c803817fede2e10cfa_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:Pages/layout/pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 9,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*         <div class="container">*/
/*                 <div class="row">*/
/*                         <h1>{{ page.titre }}</h1>*/
/*                         <div class="span12">*/
/*                                  <p>{{ page.contenu }}</p>*/
/*                         </div>*/
/*                 </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
