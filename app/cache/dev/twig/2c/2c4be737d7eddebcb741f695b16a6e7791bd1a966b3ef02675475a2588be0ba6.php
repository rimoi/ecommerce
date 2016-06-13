<?php

/* EcommerceBundle:Default:test.html.twig */
class __TwigTemplate_b3064ba2bd73a70cc7833a16b1a238ff55754e94352c1325f4e56bedef1d8a96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:test.html.twig", 1);
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
        $__internal_de246578e860d42bf14c7a1d503233ee4b307983c630796a9657de9d6d453758 = $this->env->getExtension("native_profiler");
        $__internal_de246578e860d42bf14c7a1d503233ee4b307983c630796a9657de9d6d453758->enter($__internal_de246578e860d42bf14c7a1d503233ee4b307983c630796a9657de9d6d453758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de246578e860d42bf14c7a1d503233ee4b307983c630796a9657de9d6d453758->leave($__internal_de246578e860d42bf14c7a1d503233ee4b307983c630796a9657de9d6d453758_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eedeb55d2aa7cbe1ae30f50d6bac66719d579943f8bec871f0d730819d8ef7a1 = $this->env->getExtension("native_profiler");
        $__internal_eedeb55d2aa7cbe1ae30f50d6bac66719d579943f8bec871f0d730819d8ef7a1->enter($__internal_eedeb55d2aa7cbe1ae30f50d6bac66719d579943f8bec871f0d730819d8ef7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">
                <table>
                ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["key"] => $context["produit"]) {
            // line 8
            echo "                    <tr bgcolor =\"green\">
                        <td cols=\"4\">";
            // line 9
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</td> 
                         <td >";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                         <td >";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</td>
                         <td >";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
        </div>
    </div>


";
        
        $__internal_eedeb55d2aa7cbe1ae30f50d6bac66719d579943f8bec871f0d730819d8ef7a1->leave($__internal_eedeb55d2aa7cbe1ae30f50d6bac66719d579943f8bec871f0d730819d8ef7a1_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*                 <table>*/
/*                 {% for key, produit in produits %}*/
/*                     <tr bgcolor ="green">*/
/*                         <td cols="4">{{key}}</td> */
/*                          <td >{{produit.nom}}</td>*/
/*                          <td >{{produit.description}}</td>*/
/*                          <td >{{produit.prix}}</td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
