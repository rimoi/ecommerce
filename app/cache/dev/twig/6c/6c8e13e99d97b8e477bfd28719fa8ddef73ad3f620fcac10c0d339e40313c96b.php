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
        $__internal_728084d2f2c1e6de8373bd074f2fc67e85a843b97c87e97dde0b8f299c89bbeb = $this->env->getExtension("native_profiler");
        $__internal_728084d2f2c1e6de8373bd074f2fc67e85a843b97c87e97dde0b8f299c89bbeb->enter($__internal_728084d2f2c1e6de8373bd074f2fc67e85a843b97c87e97dde0b8f299c89bbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_728084d2f2c1e6de8373bd074f2fc67e85a843b97c87e97dde0b8f299c89bbeb->leave($__internal_728084d2f2c1e6de8373bd074f2fc67e85a843b97c87e97dde0b8f299c89bbeb_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dda56c32f4d41cca5a25e740982192b7f10e10d01c9e150aa2c9bda4289bd376 = $this->env->getExtension("native_profiler");
        $__internal_dda56c32f4d41cca5a25e740982192b7f10e10d01c9e150aa2c9bda4289bd376->enter($__internal_dda56c32f4d41cca5a25e740982192b7f10e10d01c9e150aa2c9bda4289bd376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "        <div class=\"container\">
                <div class=\"row\">
                        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
                        <div class=\"span12\">
                                ";
        // line 10
        echo "                                 <p>";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "</p>
                        </div>
                </div>
        </div>
";
        
        $__internal_dda56c32f4d41cca5a25e740982192b7f10e10d01c9e150aa2c9bda4289bd376->leave($__internal_dda56c32f4d41cca5a25e740982192b7f10e10d01c9e150aa2c9bda4289bd376_prof);

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
        return array (  49 => 10,  44 => 7,  40 => 5,  34 => 4,  11 => 1,);
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
/*                                 {# par défault twig n'interprete pas le code html ci il est dans la base du coup pour l'interpreter il faut utiliser le filtre raw#}*/
/*                                  <p>{{ page.contenu|raw }}</p>*/
/*                         </div>*/
/*                 </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */
