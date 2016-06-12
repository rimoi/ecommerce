<?php

/* EcommerceBundle:Default/produits/layout:produits.html.twig */
class __TwigTemplate_44e41f2e931e28b70f57270be780c4b581207515d799926221912f658b371f24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">
           
             <div class=\"span3\">
                 ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/produits/layout:produits.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <div class=\"span9\">

               ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"../img/holder.png\" alt=\"Zemenak\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 £</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("presentation");
            echo "\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                <div class=\"pagination\">
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
    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/produits/layout:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  61 => 20,  57 => 19,  49 => 13,  45 => 12,  40 => 9,  38 => 8,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*            */
/*              <div class="span3">*/
/*                  {%  include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/*             <div class="span9">*/
/* */
/*                {% for i in 1..10 %}*/
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="../img/holder.png" alt="Zemenak" width="300" height="300">*/
/*                             <div class="caption">*/
/*                                 <h4>Thumbnail label</h4>*/
/*                                 <p>100,00 £</p>*/
/*                                 <a class="btn btn-primary" href="{{path('presentation')}}">Plus d'infos</a>*/
/*                                 <a class="btn btn-success" href="{{path('panier')}}">Ajouter au panier</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*                 {% endfor %}*/
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
