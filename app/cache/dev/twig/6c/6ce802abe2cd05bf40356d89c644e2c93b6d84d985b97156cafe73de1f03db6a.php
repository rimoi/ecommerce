<?php

/* PagesBundle:Default/Pages/layout:pages.html.twig */
class __TwigTemplate_5476cc0989a31dacae70a9c25cbf4cb54cdc424374a9a953819b47848c4f5480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "PagesBundle:Default/Pages/layout:pages.html.twig", 1);
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
        $__internal_934e13714778430c29a2477efa82beed9d46ff648d4434cae3b77c76956439ca = $this->env->getExtension("native_profiler");
        $__internal_934e13714778430c29a2477efa82beed9d46ff648d4434cae3b77c76956439ca->enter($__internal_934e13714778430c29a2477efa82beed9d46ff648d4434cae3b77c76956439ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/Pages/layout:pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934e13714778430c29a2477efa82beed9d46ff648d4434cae3b77c76956439ca->leave($__internal_934e13714778430c29a2477efa82beed9d46ff648d4434cae3b77c76956439ca_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c5c8bd4630fbd66b6f43ff26500f743937578f845d449bddd2e7cf204c8be7d2 = $this->env->getExtension("native_profiler");
        $__internal_c5c8bd4630fbd66b6f43ff26500f743937578f845d449bddd2e7cf204c8be7d2->enter($__internal_c5c8bd4630fbd66b6f43ff26500f743937578f845d449bddd2e7cf204c8be7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        
        $__internal_c5c8bd4630fbd66b6f43ff26500f743937578f845d449bddd2e7cf204c8be7d2->leave($__internal_c5c8bd4630fbd66b6f43ff26500f743937578f845d449bddd2e7cf204c8be7d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f29152ab7a6516acaede534aabea7bc2394f33db832fa9d361c35981937a942f = $this->env->getExtension("native_profiler");
        $__internal_f29152ab7a6516acaede534aabea7bc2394f33db832fa9d361c35981937a942f->enter($__internal_f29152ab7a6516acaede534aabea7bc2394f33db832fa9d361c35981937a942f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f29152ab7a6516acaede534aabea7bc2394f33db832fa9d361c35981937a942f->leave($__internal_f29152ab7a6516acaede534aabea7bc2394f33db832fa9d361c35981937a942f_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default/Pages/layout:pages.html.twig";
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
