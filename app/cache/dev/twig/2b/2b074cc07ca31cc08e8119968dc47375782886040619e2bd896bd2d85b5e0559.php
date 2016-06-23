<?php

/* EcommerceBundle:Default:test.html.twig */
class __TwigTemplate_a41a0de4a7d113ecdd5f37b3bb11ce89f78fa5ab3d7599e5766c7085f3275f99 extends Twig_Template
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
        $__internal_d8be7ae4d2cd811179441cd629dc954072f7c32a1da4da175853e232ad44d94b = $this->env->getExtension("native_profiler");
        $__internal_d8be7ae4d2cd811179441cd629dc954072f7c32a1da4da175853e232ad44d94b->enter($__internal_d8be7ae4d2cd811179441cd629dc954072f7c32a1da4da175853e232ad44d94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:test.html.twig"));

        // line 21
        echo "<html>
<body>

Formulaire :

<form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("test");
        echo "\" method=\"post\">
        ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</form>

</body>
</html>";
        
        $__internal_d8be7ae4d2cd811179441cd629dc954072f7c32a1da4da175853e232ad44d94b->leave($__internal_d8be7ae4d2cd811179441cd629dc954072f7c32a1da4da175853e232ad44d94b_prof);

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
        return array (  33 => 27,  29 => 26,  22 => 21,);
    }
}
/* {#{% extends "::layout/layout.html.twig" %}*/
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
/* {% endblock %}#}*/
/* <html>*/
/* <body>*/
/* */
/* Formulaire :*/
/* */
/* <form action="{{ path('test') }}" method="post">*/
/*         {{ form(form) }}*/
/* </form>*/
/* */
/* </body>*/
/* </html>*/
