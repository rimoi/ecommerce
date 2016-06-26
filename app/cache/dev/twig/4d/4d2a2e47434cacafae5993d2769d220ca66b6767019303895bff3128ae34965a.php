<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_702e5e9fd59b7296f04cd025a6887c8046fdf95053bdd9745369cb0634787734 extends Twig_Template
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
        $__internal_26b548a0f5b133d6dd5ffe29a2cd6cc72a694cb5aa60de15d3a3429321002035 = $this->env->getExtension("native_profiler");
        $__internal_26b548a0f5b133d6dd5ffe29a2cd6cc72a694cb5aa60de15d3a3429321002035->enter($__internal_26b548a0f5b133d6dd5ffe29a2cd6cc72a694cb5aa60de15d3a3429321002035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

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
        
        $__internal_26b548a0f5b133d6dd5ffe29a2cd6cc72a694cb5aa60de15d3a3429321002035->leave($__internal_26b548a0f5b133d6dd5ffe29a2cd6cc72a694cb5aa60de15d3a3429321002035_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig";
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
