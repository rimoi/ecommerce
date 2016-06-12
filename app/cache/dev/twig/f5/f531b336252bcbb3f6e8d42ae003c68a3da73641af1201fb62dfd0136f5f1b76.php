<?php

/* EcommerceBundle:Default:produits.html.twig */
class __TwigTemplate_0555f7999e99d9f815e531b5a5c30de8b0a909f114820872d3e384171f06674e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:produits.html.twig", 1);
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
        $__internal_3f86d2d96e8fa1a3d50d3f436662c04e362f63da7e451f97ea86aca14441f204 = $this->env->getExtension("native_profiler");
        $__internal_3f86d2d96e8fa1a3d50d3f436662c04e362f63da7e451f97ea86aca14441f204->enter($__internal_3f86d2d96e8fa1a3d50d3f436662c04e362f63da7e451f97ea86aca14441f204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f86d2d96e8fa1a3d50d3f436662c04e362f63da7e451f97ea86aca14441f204->leave($__internal_3f86d2d96e8fa1a3d50d3f436662c04e362f63da7e451f97ea86aca14441f204_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cbbb35dcb6be73e96309228b1b66554e855c4038cc6efaac508268891954358 = $this->env->getExtension("native_profiler");
        $__internal_7cbbb35dcb6be73e96309228b1b66554e855c4038cc6efaac508268891954358->enter($__internal_7cbbb35dcb6be73e96309228b1b66554e855c4038cc6efaac508268891954358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                 ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span9\">

               ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 12
            echo "                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                            <img src=\"../img/holder.png\" alt=\"DevAndClick\" width=\"300\" height=\"300\">
                            <div class=\"caption\">
                                <h4>Thumbnail label</h4>
                                <p>100,00 €</p>
                                <a class=\"btn btn-primary\" href=\"produit.php\">Plus d'infos</a>
                                <a class=\"btn btn-success\" href=\"panier.php\">Ajouter au panier</a>
                            </div>
                        </div>
                    </li>
                </ul>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        
        $__internal_7cbbb35dcb6be73e96309228b1b66554e855c4038cc6efaac508268891954358->leave($__internal_7cbbb35dcb6be73e96309228b1b66554e855c4038cc6efaac508268891954358_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  57 => 12,  53 => 11,  48 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                  {%  include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/*             <div class="span9">*/
/* */
/*                {% for i in 1..10 %}*/
/*                     <li class="span3">*/
/*                         <div class="thumbnail">*/
/*                             <img src="../img/holder.png" alt="DevAndClick" width="300" height="300">*/
/*                             <div class="caption">*/
/*                                 <h4>Thumbnail label</h4>*/
/*                                 <p>100,00 €</p>*/
/*                                 <a class="btn btn-primary" href="produit.php">Plus d'infos</a>*/
/*                                 <a class="btn btn-success" href="panier.php">Ajouter au panier</a>*/
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
