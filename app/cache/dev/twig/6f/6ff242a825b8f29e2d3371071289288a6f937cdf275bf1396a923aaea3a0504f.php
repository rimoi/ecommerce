<?php

/* @Ecommerce/Default/panier/layout/panier.html.twig */
class __TwigTemplate_411fc0200911bd6b9dd0a97abc082c165462d649624af431ade0254ef361ca5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/panier/layout/panier.html.twig", 1);
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
        $__internal_8c6d26d4482b264ff6ee706334cb1cc4024419b24b678721b2740f1a5099158d = $this->env->getExtension("native_profiler");
        $__internal_8c6d26d4482b264ff6ee706334cb1cc4024419b24b678721b2740f1a5099158d->enter($__internal_8c6d26d4482b264ff6ee706334cb1cc4024419b24b678721b2740f1a5099158d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/panier/layout/panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c6d26d4482b264ff6ee706334cb1cc4024419b24b678721b2740f1a5099158d->leave($__internal_8c6d26d4482b264ff6ee706334cb1cc4024419b24b678721b2740f1a5099158d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_59f69b3729352ceeacec2fd6cf3e464c56e38a246bd30d4dabba235b1afa3ba4 = $this->env->getExtension("native_profiler");
        $__internal_59f69b3729352ceeacec2fd6cf3e464c56e38a246bd30d4dabba235b1afa3ba4->enter($__internal_59f69b3729352ceeacec2fd6cf3e464c56e38a246bd30d4dabba235b1afa3ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 17
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/panier/layout/panier.html.twig", 17)->display($context);
        // line 18
        echo "            </div>
            <div class=\"span9\">

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 22
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 23
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
                        </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
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
        // line 39
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) == 0)) {
            // line 40
            echo "                            <tr>
                                <td colspan=\"4\"><center>Aucun Articles dans votre panier</center></td>

                            </tr>
                            ";
        }
        // line 45
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 46
            echo "                            <tr>
                                <form action=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <select name=\"qte\" class=\"span1\" onchange=\"this.form.submit()\">
                                                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 52
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
            // line 54
            echo "                                            </select>&nbsp;
                                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer", array("id" => $this->getAttribute($context["produit"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>

                                        </td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                                </form>
                            </tr>
                            ";
            // line 62
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 63
            echo "                            ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 64
            echo "                            ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            // line 65
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </tbody>
                    </table>
                </form>
                ";
        // line 69
        if ((twig_length_filter($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits"))) != 0)) {
            // line 70
            echo "                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
            echo "€</dd>
                    ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 74
                echo "                    <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt>
                    <dd>";
                // line 75
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo "€</dd>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                    <dt>Total TTC:</dt>
                    <dd>";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
            echo "€</dd>
                </dl>
                ";
        }
        // line 81
        echo "                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>

                <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>


";
        
        $__internal_59f69b3729352ceeacec2fd6cf3e464c56e38a246bd30d4dabba235b1afa3ba4->leave($__internal_59f69b3729352ceeacec2fd6cf3e464c56e38a246bd30d4dabba235b1afa3ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 84,  224 => 82,  221 => 81,  215 => 78,  212 => 77,  204 => 75,  199 => 74,  195 => 73,  191 => 72,  187 => 70,  185 => 69,  180 => 66,  174 => 65,  171 => 64,  168 => 63,  166 => 62,  160 => 59,  156 => 58,  150 => 55,  147 => 54,  132 => 52,  128 => 51,  122 => 48,  118 => 47,  115 => 46,  110 => 45,  103 => 40,  101 => 39,  86 => 26,  77 => 23,  74 => 22,  70 => 21,  65 => 18,  63 => 17,  57 => 13,  51 => 12,  44 => 1,  38 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* */
/* {% set totalHT = 0 %}*/
/* {% set totalTTC = 0 %}*/
/* {% set refTva = {} %}*/
/* {% for produit in produits %}*/
/*     {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur ) : 0 }) %}*/
/* {% endfor %}*/
/* */
/* */
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/*             <div class="span9">*/
/* */
/*                 {% for flash in app.session.flashbag.get('success') %}*/
/*                         <div class="alert alert-success">*/
/*                             {{ flash }}*/
/*                         </div>*/
/*                 {% endfor %}*/
/* */
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
/*                         {% if produits|length == 0 %}*/
/*                             <tr>*/
/*                                 <td colspan="4"><center>Aucun Articles dans votre panier</center></td>*/
/* */
/*                             </tr>*/
/*                             {% endif %}*/
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
/*                             {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}*/
/*                             {% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}*/
/*                             {% set refTva = refTva|merge({( '%' ~ produit.tva.valeur ) : refTva['%' ~produit.tva.valeur] + (produit.prix * panier[produit.id])|montantTva(produit.tva.multiplicate)}) %}*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/*                 {% if produits|length != 0 %}*/
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>{{ totalHT }}€</dd>*/
/*                     {% for key,tva in refTva %}*/
/*                     <dt>TVA {{ key }} :</dt>*/
/*                     <dd>{{ tva }}€</dd>*/
/*                     {% endfor %}*/
/*                     <dt>Total TTC:</dt>*/
/*                     <dd>{{ totalTTC }}€</dd>*/
/*                 </dl>*/
/*                 {% endif %}*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="{{path('livraison')}}" class="btn btn-success pull-right">Valider mon panier</a>*/
/* */
/*                 <a href="{{path('produits')}}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
