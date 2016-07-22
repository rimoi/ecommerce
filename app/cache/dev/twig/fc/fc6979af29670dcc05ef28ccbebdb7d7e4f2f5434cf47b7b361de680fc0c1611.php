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
        $__internal_1c39f53193b07b2249f60f53ae92b42e82ff97d4612ee68ca49def2c3e8a5702 = $this->env->getExtension("native_profiler");
        $__internal_1c39f53193b07b2249f60f53ae92b42e82ff97d4612ee68ca49def2c3e8a5702->enter($__internal_1c39f53193b07b2249f60f53ae92b42e82ff97d4612ee68ca49def2c3e8a5702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/Pages/layout/pages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c39f53193b07b2249f60f53ae92b42e82ff97d4612ee68ca49def2c3e8a5702->leave($__internal_1c39f53193b07b2249f60f53ae92b42e82ff97d4612ee68ca49def2c3e8a5702_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_1b5e6dafb8ac39d6f9b78509d2cdfaa404a4f1c67624c02663fde4ab335b07ac = $this->env->getExtension("native_profiler");
        $__internal_1b5e6dafb8ac39d6f9b78509d2cdfaa404a4f1c67624c02663fde4ab335b07ac->enter($__internal_1b5e6dafb8ac39d6f9b78509d2cdfaa404a4f1c67624c02663fde4ab335b07ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "titre", array()), "html", null, true);
        
        $__internal_1b5e6dafb8ac39d6f9b78509d2cdfaa404a4f1c67624c02663fde4ab335b07ac->leave($__internal_1b5e6dafb8ac39d6f9b78509d2cdfaa404a4f1c67624c02663fde4ab335b07ac_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fdeac70d7948bacc561806c8ea04109edd231a82f84cefc136ece1aa3510f79 = $this->env->getExtension("native_profiler");
        $__internal_3fdeac70d7948bacc561806c8ea04109edd231a82f84cefc136ece1aa3510f79->enter($__internal_3fdeac70d7948bacc561806c8ea04109edd231a82f84cefc136ece1aa3510f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3fdeac70d7948bacc561806c8ea04109edd231a82f84cefc136ece1aa3510f79->leave($__internal_3fdeac70d7948bacc561806c8ea04109edd231a82f84cefc136ece1aa3510f79_prof);

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
