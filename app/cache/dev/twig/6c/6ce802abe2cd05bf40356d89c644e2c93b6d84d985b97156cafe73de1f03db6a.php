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
        $__internal_f8d71fb66ee3fb3da898830a036478a80a80eaa3e8fd07873a06d7be2d1d3b38 = $this->env->getExtension("native_profiler");
        $__internal_f8d71fb66ee3fb3da898830a036478a80a80eaa3e8fd07873a06d7be2d1d3b38->enter($__internal_f8d71fb66ee3fb3da898830a036478a80a80eaa3e8fd07873a06d7be2d1d3b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default/Pages/layout:pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d71fb66ee3fb3da898830a036478a80a80eaa3e8fd07873a06d7be2d1d3b38->leave($__internal_f8d71fb66ee3fb3da898830a036478a80a80eaa3e8fd07873a06d7be2d1d3b38_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_1f4c5bbe88e23810c3568d1eba318914131f1584a61b5fc4f7362aa2495d89b7 = $this->env->getExtension("native_profiler");
        $__internal_1f4c5bbe88e23810c3568d1eba318914131f1584a61b5fc4f7362aa2495d89b7->enter($__internal_1f4c5bbe88e23810c3568d1eba318914131f1584a61b5fc4f7362aa2495d89b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        
        $__internal_1f4c5bbe88e23810c3568d1eba318914131f1584a61b5fc4f7362aa2495d89b7->leave($__internal_1f4c5bbe88e23810c3568d1eba318914131f1584a61b5fc4f7362aa2495d89b7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6150817d39e8fe79f000922cdcd6a50e4fa6662b0c6a6f801dfdc77199a3033 = $this->env->getExtension("native_profiler");
        $__internal_f6150817d39e8fe79f000922cdcd6a50e4fa6662b0c6a6f801dfdc77199a3033->enter($__internal_f6150817d39e8fe79f000922cdcd6a50e4fa6662b0c6a6f801dfdc77199a3033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f6150817d39e8fe79f000922cdcd6a50e4fa6662b0c6a6f801dfdc77199a3033->leave($__internal_f6150817d39e8fe79f000922cdcd6a50e4fa6662b0c6a6f801dfdc77199a3033_prof);

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
