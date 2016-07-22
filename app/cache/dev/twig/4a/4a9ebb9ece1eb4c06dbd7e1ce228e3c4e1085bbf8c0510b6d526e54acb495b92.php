<?php

/* @Ecommerce/Default/categories/modulesUsed/menu.html.twig */
class __TwigTemplate_d5fda375b10066519515bca8ce0fef21db958aa7a0766732ae629649fea1f1c8 extends Twig_Template
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
        $__internal_e61813f66d690130df62850623dc4fb0bc9b1b68bfa0391e085aced0dd046752 = $this->env->getExtension("native_profiler");
        $__internal_e61813f66d690130df62850623dc4fb0bc9b1b68bfa0391e085aced0dd046752->enter($__internal_e61813f66d690130df62850623dc4fb0bc9b1b68bfa0391e085aced0dd046752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/categories/modulesUsed/menu.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 3
            echo "    ";
            // line 4
            echo "    <li ><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e61813f66d690130df62850623dc4fb0bc9b1b68bfa0391e085aced0dd046752->leave($__internal_e61813f66d690130df62850623dc4fb0bc9b1b68bfa0391e085aced0dd046752_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/categories/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* */
/* {% for categorie in categories %}*/
/*     {# attention toujours avec  le path, ça définition n'est pas aléatoires , c-à-d : premiere argument correspond à la route et le deuxieme le nom de la variable de URL #}*/
/*     <li ><a href="{{ path('categorie', {'categorie':categorie.id}) }}">{{ categorie.nom }}</a></li>*/
/* {% endfor %}*/
