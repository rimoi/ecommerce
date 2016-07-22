<?php

/* @Ecommerce/Default/produits/layout/produits.html.twig */
class __TwigTemplate_20b7e67eb42607cd90bb5d8b738e03ad347733f4d0ead453409ad4a865d2d5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/produits/layout/produits.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f64f0480d0dc4712b4c994809b489e7667cfa49a2d7beae39b12e3d85a8a9f1 = $this->env->getExtension("native_profiler");
        $__internal_3f64f0480d0dc4712b4c994809b489e7667cfa49a2d7beae39b12e3d85a8a9f1->enter($__internal_3f64f0480d0dc4712b4c994809b489e7667cfa49a2d7beae39b12e3d85a8a9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f64f0480d0dc4712b4c994809b489e7667cfa49a2d7beae39b12e3d85a8a9f1->leave($__internal_3f64f0480d0dc4712b4c994809b489e7667cfa49a2d7beae39b12e3d85a8a9f1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72aeb22eb4175b4323003b63db324563ee121efca7c5cc43ff1029f65e8596c0 = $this->env->getExtension("native_profiler");
        $__internal_72aeb22eb4175b4323003b63db324563ee121efca7c5cc43ff1029f65e8596c0->enter($__internal_72aeb22eb4175b4323003b63db324563ee121efca7c5cc43ff1029f65e8596c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\" align=\"left\">
                ";
        // line 13
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/produits/layout/produits.html.twig", 13)->display($context);
        // line 14
        echo "                ";
        // line 15
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "@Ecommerce/Default/produits/layout/produits.html.twig", 16)->display($context);
            // line 17
            echo "                ";
        } else {
            // line 18
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "@Ecommerce/Default/produits/layout/produits.html.twig", 18)->display($context);
            // line 19
            echo "                ";
        }
        // line 20
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Panier:menu"), array());
        // line 21
        echo "            </div>

            <div class=\"span9\">
                ";
        // line 24
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 25
            echo "
                    <ul class=\"thumbnails\">
                    ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 28
                echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"Zemenak\" width=\"300\" height=\"150\">
                                <div class=\"caption\">
                                    <h4>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                    <p>";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " £</p>
                                    <a class=\"btn btn-primary\" href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                    ";
                // line 35
                if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute($context["produit"], "id", array()), array(), "array", true, true)) {
                    // line 36
                    echo "                                        <a class=\"btn btn-success\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                    echo "\">Ajouter au panier</a>
                                    ";
                }
                // line 38
                echo "                                </div>
                            </div>
                        </li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                    </ul>

                <div class=\"pagination\">
                    <ul>
                        <li class=\"disabled\"><span>Précédent</span></li>
                        <li class=\"disabled\"><span>1</span></li>
                        <li><a href=\"#\">2</a></li>
                        <li><a href=\"#\">3</a></li>
                        <li><a href=\"#\">4</a></li>
                        <li><a href=\"#\">5</a></li>
                        <li><a href=\"#\">Suivant</a></li>
                    </ul>
                </div>
                ";
        } else {
            // line 57
            echo "                    Aucun produit Correspond à votre recherche
                ";
        }
        // line 59
        echo "            </div>
        </div>
    </div>


";
        
        $__internal_72aeb22eb4175b4323003b63db324563ee121efca7c5cc43ff1029f65e8596c0->leave($__internal_72aeb22eb4175b4323003b63db324563ee121efca7c5cc43ff1029f65e8596c0_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  141 => 57,  125 => 43,  115 => 38,  109 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  90 => 30,  86 => 28,  82 => 27,  78 => 25,  76 => 24,  71 => 21,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  51 => 14,  49 => 13,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span3" align="left">*/
/*                 {%  include '::modulesUsed/navigation.html.twig' %}*/
/*                 {# Vérification si l'utilisateur est identifié #}*/
/*                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                     {%  include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*                 {% else %}*/
/*                     {%  include 'UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig' %}*/
/*                 {% endif %}*/
/*                 {% render(controller('EcommerceBundle:Panier:menu')) %}*/
/*             </div>*/
/* */
/*             <div class="span9">*/
/*                 {% if produits|length != 0 %}*/
/* */
/*                     <ul class="thumbnails">*/
/*                     {% for produit in produits %}*/
/*                         <li class="span3">*/
/*                             <div class="thumbnail">*/
/*                                 <img src="{{ produit.image.path }}" alt="Zemenak" width="300" height="150">*/
/*                                 <div class="caption">*/
/*                                     <h4>{{ produit.nom }}</h4>*/
/*                                     <p>{{ produit.prix|tva(produit.tva.multiplicate) }} £</p>*/
/*                                     <a class="btn btn-primary" href="{{path('presentation', {'id': produit.id})}}">Plus d'infos</a>*/
/*                                     {% if panier[produit.id] is not defined %}*/
/*                                         <a class="btn btn-success" href="{{path('ajouter', {'id':produit.id})}}">Ajouter au panier</a>*/
/*                                     {% endif %}*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/* */
/*                     {% endfor %}*/
/*                     </ul>*/
/* */
/*                 <div class="pagination">*/
/*                     <ul>*/
/*                         <li class="disabled"><span>Précédent</span></li>*/
/*                         <li class="disabled"><span>1</span></li>*/
/*                         <li><a href="#">2</a></li>*/
/*                         <li><a href="#">3</a></li>*/
/*                         <li><a href="#">4</a></li>*/
/*                         <li><a href="#">5</a></li>*/
/*                         <li><a href="#">Suivant</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 {% else %}*/
/*                     Aucun produit Correspond à votre recherche*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
