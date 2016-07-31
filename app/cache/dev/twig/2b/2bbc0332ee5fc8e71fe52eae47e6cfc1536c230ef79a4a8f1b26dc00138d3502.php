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
        $__internal_73fa9a41663c1104af3578edcf4c8699ebcd6de714476f2853978b5b0b4ad1d0 = $this->env->getExtension("native_profiler");
        $__internal_73fa9a41663c1104af3578edcf4c8699ebcd6de714476f2853978b5b0b4ad1d0->enter($__internal_73fa9a41663c1104af3578edcf4c8699ebcd6de714476f2853978b5b0b4ad1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73fa9a41663c1104af3578edcf4c8699ebcd6de714476f2853978b5b0b4ad1d0->leave($__internal_73fa9a41663c1104af3578edcf4c8699ebcd6de714476f2853978b5b0b4ad1d0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e541405d39a46d63f6c987fe7aec3d26fe9bd2d4381076c6d8d7d03185e72d1a = $this->env->getExtension("native_profiler");
        $__internal_e541405d39a46d63f6c987fe7aec3d26fe9bd2d4381076c6d8d7d03185e72d1a->enter($__internal_e541405d39a46d63f6c987fe7aec3d26fe9bd2d4381076c6d8d7d03185e72d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/validation.html.twig", 9)->display($context);
        // line 10
        echo "            </div>
            <div class=\"span9\">



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
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["key"] => $context["produit"]) {
            // line 29
            echo "                            <tr>
                                <form action=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $context["key"])), "html", null, true);
            echo "\" method=\"get\">
                                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                                    <td>

                                       ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "quantite", array()), "html", null, true);
            echo "


                                    </td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, ($this->getAttribute($context["produit"], "prixHT", array()) * $this->getAttribute($context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                                </form>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </tbody>
                    </table>


                    <dl class=\"dl-horizontal pull-right\">
                        <dt>Total HT :</dt>
                        <dd>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 51
            echo "                            <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt>
                            <dd>";
            // line 52
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo "€</dd>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                        <dt>Total TTC:</dt>
                        <dd>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "€</dd>
                    </dl>

                <div class=\"span3 pull-left\">
                        <dl class=\"pull-left\">
                            <dt><h4>Adresse de Livraison</h4></dt>
                            <dt>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "complement", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
                        </dl>

                </div>
                <div class=\"span3 pull-left\">
                        <dl class=\"pull-left\">
                            <dt><h4>Adresse de Facturation</h4></dt>
                            <dt>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
                            <dt>";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "complement", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
                        </dl>

                </div>
                <div class=\"clearfix\"></div>

                <form action=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("validationCommande", array("id" => $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">

                    <input name=\"token\" type=\"hidden\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "token", array()), "html", null, true);
        echo "\" />
                    <input name=\"prix\" type=\"hidden\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\" />
                    <input name=\"date\" type=\"hidden\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "date", array()), "dmyhms"), "html", null, true);
        echo "\" />
                    <button type=\"submit\" type=\"hidden\" href=\"";
        // line 83
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Payer</button>
                </form>

                <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-primary \">Retour</a>
            </div>

        </div>
    </div>


";
        
        $__internal_e541405d39a46d63f6c987fe7aec3d26fe9bd2d4381076c6d8d7d03185e72d1a->leave($__internal_e541405d39a46d63f6c987fe7aec3d26fe9bd2d4381076c6d8d7d03185e72d1a_prof);

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
        return array (  221 => 86,  215 => 83,  211 => 82,  207 => 81,  203 => 80,  198 => 78,  183 => 72,  179 => 71,  173 => 70,  157 => 63,  153 => 62,  147 => 61,  138 => 55,  135 => 54,  127 => 52,  122 => 51,  118 => 50,  114 => 49,  106 => 43,  96 => 39,  92 => 38,  85 => 34,  79 => 31,  75 => 30,  72 => 29,  68 => 28,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
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
/* */
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
/* */
/*                         {% for key, produit in commande.commande.produit %}*/
/*                             <tr>*/
/*                                 <form action="{{ path('ajouter', {'id':key}) }}" method="get">*/
/*                                     <td>{{ produit.reference }}</td>*/
/*                                     <td>*/
/* */
/*                                        {{  produit.quantite }}*/
/* */
/* */
/*                                     </td>*/
/*                                     <td>{{ produit.prixHT }} €</td>*/
/*                                     <td>{{ produit.prixHT * produit.quantite }} €</td>*/
/*                                 </form>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/* */
/*                     <dl class="dl-horizontal pull-right">*/
/*                         <dt>Total HT :</dt>*/
/*                         <dd>{{ commande.commande.prixHT }} €</dd>*/
/*                         {% for key,tva in commande.commande.tva %}*/
/*                             <dt>TVA {{ key }} :</dt>*/
/*                             <dd>{{ tva }}€</dd>*/
/*                         {% endfor %}*/
/*                         <dt>Total TTC:</dt>*/
/*                         <dd>{{ commande.commande.prixTTC }}€</dd>*/
/*                     </dl>*/
/* */
/*                 <div class="span3 pull-left">*/
/*                         <dl class="pull-left">*/
/*                             <dt><h4>Adresse de Livraison</h4></dt>*/
/*                             <dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>*/
/*                             <dt>{{ commande.commande.facturation.adresse }}</dt>*/
/*                             <dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.complement }}, {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>*/
/*                         </dl>*/
/* */
/*                 </div>*/
/*                 <div class="span3 pull-left">*/
/*                         <dl class="pull-left">*/
/*                             <dt><h4>Adresse de Facturation</h4></dt>*/
/*                             <dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>*/
/*                             <dt>{{ commande.commande.livraison.adresse }}</dt>*/
/*                             <dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.complement }}, {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>*/
/*                         </dl>*/
/* */
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/* */
/*                 <form action="{{ path('validationCommande', {'id':commande.id}) }}" method="post">*/
/* */
/*                     <input name="token" type="hidden" value="{{ commande.commande.token }}" />*/
/*                     <input name="prix" type="hidden" value="{{ commande.commande.prixTTC }}" />*/
/*                     <input name="date" type="hidden" value="{{ commande.date|date('dmyhms') }}" />*/
/*                     <button type="submit" type="hidden" href="{{path('livraison')}}" class="btn btn-success pull-right">Payer</button>*/
/*                 </form>*/
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
