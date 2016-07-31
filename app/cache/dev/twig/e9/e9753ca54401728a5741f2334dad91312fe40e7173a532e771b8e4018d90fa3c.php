<?php

/* @Ecommerce/Default/Recherche/layout/produits.html.twig */
class __TwigTemplate_b45ca311a62b508a768ad161569adde11a21d455af79147df8e5f7126cc092c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/Recherche/layout/produits.html.twig", 1);
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
        $__internal_2fc3404e2861c8a6bbb470f875115b1212055c7380bf4f92ac00c2fb84fb20e4 = $this->env->getExtension("native_profiler");
        $__internal_2fc3404e2861c8a6bbb470f875115b1212055c7380bf4f92ac00c2fb84fb20e4->enter($__internal_2fc3404e2861c8a6bbb470f875115b1212055c7380bf4f92ac00c2fb84fb20e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Recherche/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fc3404e2861c8a6bbb470f875115b1212055c7380bf4f92ac00c2fb84fb20e4->leave($__internal_2fc3404e2861c8a6bbb470f875115b1212055c7380bf4f92ac00c2fb84fb20e4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a1b86e797308af593389129c38978096781f7ba872e336604a8a5972942257 = $this->env->getExtension("native_profiler");
        $__internal_59a1b86e797308af593389129c38978096781f7ba872e336604a8a5972942257->enter($__internal_59a1b86e797308af593389129c38978096781f7ba872e336604a8a5972942257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\" align=\"left\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/Recherche/layout/produits.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "@Ecommerce/Default/Recherche/layout/produits.html.twig", 9)->display($context);
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
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "image", array()), "path", array()), "html", null, true);
            echo "\" alt=\"Zemenak\" width=\"300\" height=\"150\">
                            <div class=\"caption\">
                                <h4>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["produit"], "categorie", array()), "nom", array()), "html", null, true);
            echo "</h4>
                                <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " £</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("presentation", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 24
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
        // line 30
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
        
        $__internal_59a1b86e797308af593389129c38978096781f7ba872e336604a8a5972942257->leave($__internal_59a1b86e797308af593389129c38978096781f7ba872e336604a8a5972942257_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Recherche/layout/produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 30,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  68 => 19,  64 => 17,  60 => 16,  52 => 10,  49 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="{{ produit.image.path }}" alt="Zemenak" width="300" height="150">*/
/*                             <div class="caption">*/
/*                                 <h4>{{ produit.categorie.nom }}</h4>*/
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
