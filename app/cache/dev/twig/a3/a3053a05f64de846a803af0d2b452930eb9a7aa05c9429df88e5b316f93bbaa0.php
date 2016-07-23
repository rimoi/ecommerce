<?php

/* EcommerceBundle:Default:categories/modulesUsed/menu.html.twig */
class __TwigTemplate_bb48f442d0360e0b5523eb42abab1588b9538640e2752c35f5d768285da2ae1b extends Twig_Template
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
        $__internal_04cd3ded1fbb1e97ee2cda1425d467689b4019d9d19bfa6a0f4c38ed8dae8b1a = $this->env->getExtension("native_profiler");
        $__internal_04cd3ded1fbb1e97ee2cda1425d467689b4019d9d19bfa6a0f4c38ed8dae8b1a->enter($__internal_04cd3ded1fbb1e97ee2cda1425d467689b4019d9d19bfa6a0f4c38ed8dae8b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/modulesUsed/menu.html.twig"));

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
        
        $__internal_04cd3ded1fbb1e97ee2cda1425d467689b4019d9d19bfa6a0f4c38ed8dae8b1a->leave($__internal_04cd3ded1fbb1e97ee2cda1425d467689b4019d9d19bfa6a0f4c38ed8dae8b1a_prof);

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
