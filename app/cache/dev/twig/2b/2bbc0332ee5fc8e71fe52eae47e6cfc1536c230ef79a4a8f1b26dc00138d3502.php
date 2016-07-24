<?php

/* EcommerceBundle:Default:panier/layout/validation.html.twig */
class __TwigTemplate_f9da50a733f843671ef9ed5f2f0c1e936cd64aefcbd9edd18ebfe1b410b94b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 1);
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
        $__internal_5754492f1181b6b33953f00015c877377255c5ecec19249bb4ec6e97dc8d8c2c = $this->env->getExtension("native_profiler");
        $__internal_5754492f1181b6b33953f00015c877377255c5ecec19249bb4ec6e97dc8d8c2c->enter($__internal_5754492f1181b6b33953f00015c877377255c5ecec19249bb4ec6e97dc8d8c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/validation.html.twig"));

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
        
        $__internal_5754492f1181b6b33953f00015c877377255c5ecec19249bb4ec6e97dc8d8c2c->leave($__internal_5754492f1181b6b33953f00015c877377255c5ecec19249bb4ec6e97dc8d8c2c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_37ded3d32005e7c212f0b8d50ac43902d1baff7ae868433d2aad23d88bedddbd = $this->env->getExtension("native_profiler");
        $__internal_37ded3d32005e7c212f0b8d50ac43902d1baff7ae868433d2aad23d88bedddbd->enter($__internal_37ded3d32005e7c212f0b8d50ac43902d1baff7ae868433d2aad23d88bedddbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 17
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 17)->display($context);
        // line 18
        echo "            </div>
            <div class=\"span9\">

                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 22
            echo "                    <div class=\"alert alert-success\">
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
                <h2>Valider mon parnier</h2>

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

                                       ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array"), "html", null, true);
            echo "


                                    </td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                                </form>
                            </tr>
                            ";
            // line 59
            $context["totalHT"] = ((isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")) + ($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")));
            // line 60
            echo "                            ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")) + $this->env->getExtension('tva_extension')->calculTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())));
            // line 61
            echo "                            ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), array(("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())) => ($this->getAttribute((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")), ("%" . $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->env->getExtension('montant_tva_extension')->montantTva(($this->getAttribute($context["produit"], "prix", array()) * $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), $this->getAttribute($context["produit"], "id", array()), array(), "array")), $this->getAttribute($this->getAttribute($context["produit"], "tva", array()), "multiplicate", array())))));
            // line 62
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                        </tbody>
                    </table>


                    <dl class=\"dl-horizontal pull-right\">
                        <dt>Total HT :</dt>
                        <dd>";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) ? $context["totalHT"] : $this->getContext($context, "totalHT")), "html", null, true);
        echo "€</dd>
                        ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) ? $context["refTva"] : $this->getContext($context, "refTva")));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 71
            echo "                            <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 72
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo "€</dd>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        <dt>Total TTC:</dt>
                        <dd>";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) ? $context["totalTTC"] : $this->getContext($context, "totalTTC")), "html", null, true);
        echo "€</dd>
                    </dl>

                <div class=\"span3 pull-left\">
                        <dl class=\"pull-left\">
                            <dt><h4>Adresse de Livraison</h4></dt>
                            <dt>";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "nom", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "adresse", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "complement", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["facturation"]) ? $context["facturation"] : $this->getContext($context, "facturation")), "pays", array()), "html", null, true);
        echo "</dt>
                        </dl>

                </div>
                <div class=\"span3 pull-left\">
                        <dl class=\"pull-left\">
                            <dt><h4>Adresse de Facturation</h4></dt>
                            <dt>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "nom", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "adresse", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "complement", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["livraison"]) ? $context["livraison"] : $this->getContext($context, "livraison")), "pays", array()), "html", null, true);
        echo "</dt>
                        </dl>

                </div>


                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Payer</a>

                <a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-primary \">Retour</a>
            </div>

        </div>
    </div>


";
        
        $__internal_37ded3d32005e7c212f0b8d50ac43902d1baff7ae868433d2aad23d88bedddbd->leave($__internal_37ded3d32005e7c212f0b8d50ac43902d1baff7ae868433d2aad23d88bedddbd_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 101,  252 => 99,  236 => 92,  232 => 91,  226 => 90,  210 => 83,  206 => 82,  200 => 81,  191 => 75,  188 => 74,  180 => 72,  175 => 71,  171 => 70,  167 => 69,  159 => 63,  153 => 62,  150 => 61,  147 => 60,  145 => 59,  139 => 56,  135 => 55,  128 => 51,  122 => 48,  118 => 47,  115 => 46,  110 => 45,  103 => 40,  101 => 39,  86 => 26,  77 => 23,  74 => 22,  70 => 21,  65 => 18,  63 => 17,  57 => 13,  51 => 12,  44 => 1,  38 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  11 => 1,);
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
/*                     <div class="alert alert-success">*/
/*                         {{ flash }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/*                 <h2>Valider mon parnier</h2>*/
/* */
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>Références</th>*/
/*                             <th>Quantité</th>*/
/*                             <th>Prix unitaire</th>*/
/*                             <th>Total HT</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% if produits|length == 0 %}*/
/*                             <tr>*/
/*                                 <td colspan="4"><center>Aucun Articles dans votre panier</center></td>*/
/* */
/*                             </tr>*/
/*                         {% endif %}*/
/*                         {% for produit in produits %}*/
/*                             <tr>*/
/*                                 <form action="{{ path('ajouter', {'id':produit.id}) }}" method="get">*/
/*                                     <td>{{ produit.nom }}</td>*/
/*                                     <td>*/
/* */
/*                                        {{  panier[produit.id] }}*/
/* */
/* */
/*                                     </td>*/
/*                                     <td>{{ produit.prix }} €</td>*/
/*                                     <td>{{ produit.prix * panier[produit.id] }} €</td>*/
/*                                 </form>*/
/*                             </tr>*/
/*                             {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}*/
/*                             {% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|tva(produit.tva.multiplicate) %}*/
/*                             {% set refTva = refTva|merge({( '%' ~ produit.tva.valeur ) : refTva['%' ~produit.tva.valeur] + (produit.prix * panier[produit.id])|montantTva(produit.tva.multiplicate)}) %}*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/* */
/*                     <dl class="dl-horizontal pull-right">*/
/*                         <dt>Total HT :</dt>*/
/*                         <dd>{{ totalHT }}€</dd>*/
/*                         {% for key,tva in refTva %}*/
/*                             <dt>TVA {{ key }} :</dt>*/
/*                             <dd>{{ tva }}€</dd>*/
/*                         {% endfor %}*/
/*                         <dt>Total TTC:</dt>*/
/*                         <dd>{{ totalTTC }}€</dd>*/
/*                     </dl>*/
/* */
/*                 <div class="span3 pull-left">*/
/*                         <dl class="pull-left">*/
/*                             <dt><h4>Adresse de Livraison</h4></dt>*/
/*                             <dt>{{ facturation.prenom }} {{ facturation.nom }}</dt>*/
/*                             <dt>{{ facturation.adresse }}</dt>*/
/*                             <dt>{{ facturation.cp }} {{ facturation.complement }}, {{ facturation.ville }} - {{ facturation.pays }}</dt>*/
/*                         </dl>*/
/* */
/*                 </div>*/
/*                 <div class="span3 pull-left">*/
/*                         <dl class="pull-left">*/
/*                             <dt><h4>Adresse de Facturation</h4></dt>*/
/*                             <dt>{{ livraison.prenom }} {{ livraison.nom }}</dt>*/
/*                             <dt>{{ livraison.adresse }}</dt>*/
/*                             <dt>{{ livraison.cp }} {{ livraison.complement }}, {{ livraison.ville }} - {{ livraison.pays }}</dt>*/
/*                         </dl>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <div class="clearfix"></div>*/
/*                 <a href="{{path('livraison')}}" class="btn btn-success pull-right">Payer</a>*/
/* */
/*                 <a href="{{path('livraison')}}" class="btn btn-primary ">Retour</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
