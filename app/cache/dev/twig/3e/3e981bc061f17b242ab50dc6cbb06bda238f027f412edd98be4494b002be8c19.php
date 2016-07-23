<?php

/* @Ecommerce/Default/Recherche/layout/produit.html.twig */
class __TwigTemplate_6b6ca8f4322633f459c7475f161ff509987c981a7993a64bb75d6ab6eef23b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/Recherche/layout/produit.html.twig", 1);
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
        $__internal_e589bc91dee7a78e2dca4634ecf601092c9b6a5b7f6bc63285c182ed61a9bb79 = $this->env->getExtension("native_profiler");
        $__internal_e589bc91dee7a78e2dca4634ecf601092c9b6a5b7f6bc63285c182ed61a9bb79->enter($__internal_e589bc91dee7a78e2dca4634ecf601092c9b6a5b7f6bc63285c182ed61a9bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Recherche/layout/produit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e589bc91dee7a78e2dca4634ecf601092c9b6a5b7f6bc63285c182ed61a9bb79->leave($__internal_e589bc91dee7a78e2dca4634ecf601092c9b6a5b7f6bc63285c182ed61a9bb79_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d5658b0f3330c547bb8ef1d8092b2e015e447bd7136583951325d22c08fb41f = $this->env->getExtension("native_profiler");
        $__internal_1d5658b0f3330c547bb8ef1d8092b2e015e447bd7136583951325d22c08fb41f->enter($__internal_1d5658b0f3330c547bb8ef1d8092b2e015e447bd7136583951325d22c08fb41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\" align=\"left\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/Recherche/layout/produit.html.twig", 8)->display($context);
        // line 9
        echo "                ";
        $this->loadTemplate("::modulesUsed/utilisateur.html.twig", "@Ecommerce/Default/Recherche/layout/produit.html.twig", 9)->display($context);
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
        
        $__internal_1d5658b0f3330c547bb8ef1d8092b2e015e447bd7136583951325d22c08fb41f->leave($__internal_1d5658b0f3330c547bb8ef1d8092b2e015e447bd7136583951325d22c08fb41f_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Recherche/layout/produit.html.twig";
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
