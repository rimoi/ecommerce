<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_3d258bd0a49d33c11aae77be78824277b476333b1f8cc32dec2848eb996fcf07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_6e0c65bd3aa24b5743a395a6c434ee34e06ae2961b10db644f86bd66abeb504a = $this->env->getExtension("native_profiler");
        $__internal_6e0c65bd3aa24b5743a395a6c434ee34e06ae2961b10db644f86bd66abeb504a->enter($__internal_6e0c65bd3aa24b5743a395a6c434ee34e06ae2961b10db644f86bd66abeb504a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0c65bd3aa24b5743a395a6c434ee34e06ae2961b10db644f86bd66abeb504a->leave($__internal_6e0c65bd3aa24b5743a395a6c434ee34e06ae2961b10db644f86bd66abeb504a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_aeb447b2f7a2886fcffa6e4c4ea9e799de6dd36ccf2be225b2a3e10c25fc9a15 = $this->env->getExtension("native_profiler");
        $__internal_aeb447b2f7a2886fcffa6e4c4ea9e799de6dd36ccf2be225b2a3e10c25fc9a15->enter($__internal_aeb447b2f7a2886fcffa6e4c4ea9e799de6dd36ccf2be225b2a3e10c25fc9a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span9\">
                <h2>Votre panier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 23
            echo "                            <tr>
                                <form action=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                        <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
                                                ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                                                    <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"))) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                                            </select>&nbsp;
                                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>

                                        </td>
                                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                                </form>
                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>


";
        
        $__internal_aeb447b2f7a2886fcffa6e4c4ea9e799de6dd36ccf2be225b2a3e10c25fc9a15->leave($__internal_aeb447b2f7a2886fcffa6e4c4ea9e799de6dd36ccf2be225b2a3e10c25fc9a15_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 56,  140 => 55,  123 => 40,  113 => 36,  109 => 35,  103 => 32,  100 => 31,  85 => 29,  81 => 28,  75 => 25,  71 => 24,  68 => 23,  64 => 22,  48 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/*             <div class="span9">*/
/*                 <h2>Votre panier</h2>*/
/*                 <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>Références</th>*/
/*                                 <th>Quantité</th>*/
/*                                 <th>Prix unitaire</th>*/
/*                                 <th>Total HT</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for produit in produits %}*/
/*                             <tr>*/
/*                                 <form action="{{ path('ajouter', {'id':produit.id}) }}" method="get">*/
/*                                         <td>{{ produit.nom }}</td>*/
/*                                         <td>*/
/*                                             <select name="qte" class="span1" onchange="this.form.submit()">*/
/*                                                 {% for i in 1..10 %}*/
/*                                                     <option value="{{ i }}" {% if i == panier[produit.id] %} selected="selected" {% endif %}>{{ i }}</option>*/
/*                                                 {% endfor %}*/
/*                                             </select>&nbsp;*/
/*                                             <a href="{{ path('supprimer', {'id':produit.id}) }}"><i class="icon-trash"></i></a>*/
/* */
/*                                         </td>*/
/*                                         <td>{{ produit.prix }} €</td>*/
/*                                         <td>{{ produit.prix * panier[produit.id] }} €</td>*/
/*                                 </form>*/
/*                             </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>799,99€</dd>*/
/* */
/*                     <dt>TVA :</dt>*/
/*                     <dd>200€</dd>*/
/* */
/*                     <dt>Total:</dt>*/
/*                     <dd>999,99€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="{{path('livraison')}}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 <a href="{{path('produits')}}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
