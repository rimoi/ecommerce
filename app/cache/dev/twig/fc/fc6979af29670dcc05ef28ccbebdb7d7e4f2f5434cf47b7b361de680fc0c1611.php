<?php

/* @Pages/Default/Pages/layout/pages.html.twig */
class __TwigTemplate_e1c030707b417c87297eff8a644d7424a825e4c4e5b6570db1d550a14c96d77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@Pages/Default/Pages/layout/pages.html.twig", 1);
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
        $__internal_9fdf5afd3f6a3a03edee308b1da78afd04b97c443853ea1e0df8933363782d9e = $this->env->getExtension("native_profiler");
        $__internal_9fdf5afd3f6a3a03edee308b1da78afd04b97c443853ea1e0df8933363782d9e->enter($__internal_9fdf5afd3f6a3a03edee308b1da78afd04b97c443853ea1e0df8933363782d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/Pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fdf5afd3f6a3a03edee308b1da78afd04b97c443853ea1e0df8933363782d9e->leave($__internal_9fdf5afd3f6a3a03edee308b1da78afd04b97c443853ea1e0df8933363782d9e_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_f8ae7ed0af266563c8a49b4422749db0b8af04e8f265002194a0330862e4be09 = $this->env->getExtension("native_profiler");
        $__internal_f8ae7ed0af266563c8a49b4422749db0b8af04e8f265002194a0330862e4be09->enter($__internal_f8ae7ed0af266563c8a49b4422749db0b8af04e8f265002194a0330862e4be09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        
        $__internal_f8ae7ed0af266563c8a49b4422749db0b8af04e8f265002194a0330862e4be09->leave($__internal_f8ae7ed0af266563c8a49b4422749db0b8af04e8f265002194a0330862e4be09_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ccf3c6f1c7385d2575a2df8cca023f3e705de232b6654e2ba98631a267afec1 = $this->env->getExtension("native_profiler");
        $__internal_7ccf3c6f1c7385d2575a2df8cca023f3e705de232b6654e2ba98631a267afec1->enter($__internal_7ccf3c6f1c7385d2575a2df8cca023f3e705de232b6654e2ba98631a267afec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7ccf3c6f1c7385d2575a2df8cca023f3e705de232b6654e2ba98631a267afec1->leave($__internal_7ccf3c6f1c7385d2575a2df8cca023f3e705de232b6654e2ba98631a267afec1_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/Pages/layout/pages.html.twig";
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
