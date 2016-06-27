<?php

/* PagesBundle:Default:Pages/layout/pages.html.twig */
class __TwigTemplate_151949f2332f92afa5dcf0367760bbfe14a0fe76c79a4bb0f166ea5cd1f9ad53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default:Pages/layout/pages.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0412927b5b65cc6469213325667b3c501b48c3b3b711499048619fc85b04b6f0 = $this->env->getExtension("native_profiler");
        $__internal_0412927b5b65cc6469213325667b3c501b48c3b3b711499048619fc85b04b6f0->enter($__internal_0412927b5b65cc6469213325667b3c501b48c3b3b711499048619fc85b04b6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0412927b5b65cc6469213325667b3c501b48c3b3b711499048619fc85b04b6f0->leave($__internal_0412927b5b65cc6469213325667b3c501b48c3b3b711499048619fc85b04b6f0_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c6fbd976f2911842e422ae651db0acbbb775b46397acf467417e63e345dc83df = $this->env->getExtension("native_profiler");
        $__internal_c6fbd976f2911842e422ae651db0acbbb775b46397acf467417e63e345dc83df->enter($__internal_c6fbd976f2911842e422ae651db0acbbb775b46397acf467417e63e345dc83df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        
        $__internal_c6fbd976f2911842e422ae651db0acbbb775b46397acf467417e63e345dc83df->leave($__internal_c6fbd976f2911842e422ae651db0acbbb775b46397acf467417e63e345dc83df_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_03558f1712c49ae8899f6a02be5199691ea658562cb3ce12172bb1f5505fccb4 = $this->env->getExtension("native_profiler");
        $__internal_03558f1712c49ae8899f6a02be5199691ea658562cb3ce12172bb1f5505fccb4->enter($__internal_03558f1712c49ae8899f6a02be5199691ea658562cb3ce12172bb1f5505fccb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "        <div class=\"container\">
                <div class=\"row\">
                        <h1>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        echo "</h1>
                        <div class=\"span12\">
                                ";
        // line 12
        echo "                                 <p>";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contenu", array());
        echo "</p>
                        </div>
                </div>
        </div>
";
        
        $__internal_03558f1712c49ae8899f6a02be5199691ea658562cb3ce12172bb1f5505fccb4->leave($__internal_03558f1712c49ae8899f6a02be5199691ea658562cb3ce12172bb1f5505fccb4_prof);

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
        return array (  62 => 12,  57 => 9,  53 => 7,  47 => 6,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block titre %}{{ page.titre }}{% endblock %}*/
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
