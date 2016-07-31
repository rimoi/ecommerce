<?php

/* EcommerceBundle:Default/Recherche/layout:produit.html.twig */
class __TwigTemplate_5acf853b18864798cbfaa0f201f9bc2614d6f2a65a2624f27ef98f78f8a13661 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default/Recherche/layout:produit.html.twig", 1);
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
        $__internal_6f4e10bc5af67de48a50d7d46149181c8e919648b5f17f65af623a2239fc7ef2 = $this->env->getExtension("native_profiler");
        $__internal_6f4e10bc5af67de48a50d7d46149181c8e919648b5f17f65af623a2239fc7ef2->enter($__internal_6f4e10bc5af67de48a50d7d46149181c8e919648b5f17f65af623a2239fc7ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/Recherche/layout:produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f4e10bc5af67de48a50d7d46149181c8e919648b5f17f65af623a2239fc7ef2->leave($__internal_6f4e10bc5af67de48a50d7d46149181c8e919648b5f17f65af623a2239fc7ef2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_204ce9013392037f47bc55fa45371edb609f7338633dbfec53d7b3d3d82c0387 = $this->env->getExtension("native_profiler");
        $__internal_204ce9013392037f47bc55fa45371edb609f7338633dbfec53d7b3d3d82c0387->enter($__internal_204ce9013392037f47bc55fa45371edb609f7338633dbfec53d7b3d3d82c0387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\" align=\"left\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/Recherche/layout:produit.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "EcommerceBundle:Default/Recherche/layout:produit.html.twig", 9)->display($context);
        // line 10
        echo "            </div>



            <div class=\"span9\">
                <ul class=\"thumbnails\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 17
            echo "
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"Zemenak\" width=\"300\" height=\"150\">
                            <div class=\"caption\">
                                <h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "description", array()), "html", null, true);
            echo "</h4>
                                <p>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " £</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 25
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
        // line 31
        echo "                </ul>
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

            </div>
        </div>
    </div>


";
        
        $__internal_204ce9013392037f47bc55fa45371edb609f7338633dbfec53d7b3d3d82c0387->leave($__internal_204ce9013392037f47bc55fa45371edb609f7338633dbfec53d7b3d3d82c0387_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/Recherche/layout:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  69 => 20,  64 => 17,  60 => 16,  52 => 10,  49 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span3" align="left">*/
/*                 {%  include '::modulesUsed/navigation.html.twig' %}*/
/*                 {%  include '::modulesUsed/utilisateur.html.twig' %}*/
/*             </div>*/
/* */
/* */
/* */
/*             <div class="span9">*/
/*                 <ul class="thumbnails">*/
/*                 {% for produit in produits %}*/
/* */
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ produit.image.path }}" alt="Zemenak" width="300" height="150">*/
/*                             <div class="caption">*/
/*                                 <h4>{{ produit.description }}</h4>*/
/*                                 <p>{{ produit.prix }} £</p>*/
/*                                 <a class="btn btn-primary" href="{{path('presentation', {'id': produit.id})}}">Plus d'infos</a>*/
/*                                 <a class="btn btn-success" href="{{path('panier')}}">Ajouter au panier</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/* */
/*                 {% endfor %}*/
/*                 </ul>*/
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
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
