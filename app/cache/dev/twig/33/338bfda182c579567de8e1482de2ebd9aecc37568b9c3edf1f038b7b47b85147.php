<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_8ece41584639eab10539a32669105389800b4e9e5abce29189b0d286a3461d5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 1);
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
        $__internal_06a3a1c46c6273f81fabe09b05437870d8933a79628aa33175f1452f4b4cbe69 = $this->env->getExtension("native_profiler");
        $__internal_06a3a1c46c6273f81fabe09b05437870d8933a79628aa33175f1452f4b4cbe69->enter($__internal_06a3a1c46c6273f81fabe09b05437870d8933a79628aa33175f1452f4b4cbe69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06a3a1c46c6273f81fabe09b05437870d8933a79628aa33175f1452f4b4cbe69->leave($__internal_06a3a1c46c6273f81fabe09b05437870d8933a79628aa33175f1452f4b4cbe69_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_49516b33b82a6dd79bd68ba523da4c417dfceba43ceb8049dc7b635daacce42d = $this->env->getExtension("native_profiler");
        $__internal_49516b33b82a6dd79bd68ba523da4c417dfceba43ceb8049dc7b635daacce42d->enter($__internal_49516b33b82a6dd79bd68ba523da4c417dfceba43ceb8049dc7b635daacce42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "


    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\" align=\"left\">
                ";
        // line 13
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 13)->display($context);
        // line 14
        echo "                ";
        // line 15
        echo "                ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 16)->display($context);
            // line 17
            echo "                ";
        } else {
            // line 18
            echo "                    ";
            $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 18)->display($context);
            // line 19
            echo "                ";
        }
        // line 20
        echo "            </div>

            <div class=\"span9\">
                ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 24
            echo "
                    <ul class=\"thumbnails\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 27
                echo "                        <li class=\"span3\">
                            <div class=\"thumbnail\">
                                <img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
                echo "\" alt=\"Zemenak\" width=\"300\" height=\"150\">
                                <div class=\"caption\">
                                    <h4>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
                echo "</h4>
                                    <p>";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute($context["produit"], "prix", array()), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())), "html", null, true);
                echo " £</p>
                                    <a class=\"btn btn-primary\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
                echo "\">Plus d'infos</a>
                                    <a class=\"btn btn-success\" href=\"";
                // line 34
                echo $this->env->getExtension('routing')->getPath("panier");
                echo "\">Ajouter au panier</a>
                                </div>
                            </div>
                        </li>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
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
            // line 54
            echo "                    Aucun produit Correspond à votre recherche
                ";
        }
        // line 56
        echo "            </div>
        </div>
    </div>


";
        
        $__internal_49516b33b82a6dd79bd68ba523da4c417dfceba43ceb8049dc7b635daacce42d->leave($__internal_49516b33b82a6dd79bd68ba523da4c417dfceba43ceb8049dc7b635daacce42d_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 56,  132 => 54,  116 => 40,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  87 => 29,  83 => 27,  79 => 26,  75 => 24,  73 => 23,  68 => 20,  65 => 19,  62 => 18,  59 => 17,  56 => 16,  53 => 15,  51 => 14,  49 => 13,  40 => 6,  34 => 5,  11 => 1,);
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
/*                                     <a class="btn btn-success" href="{{path('panier')}}">Ajouter au panier</a>*/
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
