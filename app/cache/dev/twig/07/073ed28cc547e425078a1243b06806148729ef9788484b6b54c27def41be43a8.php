<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_103bb0f1f3c46ea8bf8a3c7575bf774ee86a6d3ce527c63a85df18f2b3e067f3 extends Twig_Template
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
        $__internal_3be38eb00311eefc7a0baf35690c92a9751ee4b5a0606428015c91bf490732f3 = $this->env->getExtension("native_profiler");
        $__internal_3be38eb00311eefc7a0baf35690c92a9751ee4b5a0606428015c91bf490732f3->enter($__internal_3be38eb00311eefc7a0baf35690c92a9751ee4b5a0606428015c91bf490732f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

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
        
        $__internal_3be38eb00311eefc7a0baf35690c92a9751ee4b5a0606428015c91bf490732f3->leave($__internal_3be38eb00311eefc7a0baf35690c92a9751ee4b5a0606428015c91bf490732f3_prof);

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
