<?php

/* EcommerceBundle:Default:produits/layout/produits.html.twig */
class __TwigTemplate_d00d47ac2ab620cd6b93dd91d4f7e995a67b7e47219b253b5a5be4b0fc860c32 extends Twig_Template
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
        $__internal_02b5b9b446fc0ad75b9304e4da2ec1e2a0cd689a4ba58be92b986a2eebececb4 = $this->env->getExtension("native_profiler");
        $__internal_02b5b9b446fc0ad75b9304e4da2ec1e2a0cd689a4ba58be92b986a2eebececb4->enter($__internal_02b5b9b446fc0ad75b9304e4da2ec1e2a0cd689a4ba58be92b986a2eebececb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/produits.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b5b9b446fc0ad75b9304e4da2ec1e2a0cd689a4ba58be92b986a2eebececb4->leave($__internal_02b5b9b446fc0ad75b9304e4da2ec1e2a0cd689a4ba58be92b986a2eebececb4_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_23d327dd0853f147f2ae227e74bc8734de2e5223e448f5ac560bef2ad204b993 = $this->env->getExtension("native_profiler");
        $__internal_23d327dd0853f147f2ae227e74bc8734de2e5223e448f5ac560bef2ad204b993->enter($__internal_23d327dd0853f147f2ae227e74bc8734de2e5223e448f5ac560bef2ad204b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">
           
             <div class=\"span3\">
                 ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/produits.html.twig", 8)->display($context);
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
                            <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/holder.jpg"), "html", null, true);
            echo "\" alt=\"Zemenak\" width=\"300\" height=\"300\">
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
        
        $__internal_23d327dd0853f147f2ae227e74bc8734de2e5223e448f5ac560bef2ad204b993->leave($__internal_23d327dd0853f147f2ae227e74bc8734de2e5223e448f5ac560bef2ad204b993_prof);

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
        return array (  85 => 26,  73 => 20,  69 => 19,  62 => 15,  58 => 13,  54 => 12,  49 => 9,  47 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
/*                             <img src="{{ asset('img/holder.jpg')}}" alt="Zemenak" width="300" height="300">*/
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
