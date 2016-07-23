<?php

/* @Ecommerce/Default/produits/layout/presentation.html.twig */
class __TwigTemplate_571ead6f679b43144d39237bdb18dda3af2f6242e8ff6e61c3a16b826552fba1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/produits/layout/presentation.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46ed56c05f10de1329fc6fc58338b8e9e84801d9c910b2744f7d666918cac36a = $this->env->getExtension("native_profiler");
        $__internal_46ed56c05f10de1329fc6fc58338b8e9e84801d9c910b2744f7d666918cac36a->enter($__internal_46ed56c05f10de1329fc6fc58338b8e9e84801d9c910b2744f7d666918cac36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46ed56c05f10de1329fc6fc58338b8e9e84801d9c910b2744f7d666918cac36a->leave($__internal_46ed56c05f10de1329fc6fc58338b8e9e84801d9c910b2744f7d666918cac36a_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_c410aa3b20f5fe0c4773c931867493447b861db56836d587f826fc86494b2fd4 = $this->env->getExtension("native_profiler");
        $__internal_c410aa3b20f5fe0c4773c931867493447b861db56836d587f826fc86494b2fd4->enter($__internal_c410aa3b20f5fe0c4773c931867493447b861db56836d587f826fc86494b2fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_c410aa3b20f5fe0c4773c931867493447b861db56836d587f826fc86494b2fd4->leave($__internal_c410aa3b20f5fe0c4773c931867493447b861db56836d587f826fc86494b2fd4_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_667b06fd69a8ae2a37c3a00bd897f1b42a372c8602d4b137df27ca1944a25188 = $this->env->getExtension("native_profiler");
        $__internal_667b06fd69a8ae2a37c3a00bd897f1b42a372c8602d4b137df27ca1944a25188->enter($__internal_667b06fd69a8ae2a37c3a00bd897f1b42a372c8602d4b137df27ca1944a25188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo " ";
        
        $__internal_667b06fd69a8ae2a37c3a00bd897f1b42a372c8602d4b137df27ca1944a25188->leave($__internal_667b06fd69a8ae2a37c3a00bd897f1b42a372c8602d4b137df27ca1944a25188_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e73255ffd3b21b50ccada2538b7149b04ff62adc77f25b4f9cc17e59d0b1264 = $this->env->getExtension("native_profiler");
        $__internal_2e73255ffd3b21b50ccada2538b7149b04ff62adc77f25b4f9cc17e59d0b1264->enter($__internal_2e73255ffd3b21b50ccada2538b7149b04ff62adc77f25b4f9cc17e59d0b1264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container\">
        \t<div class=\"row\">
                     <div class=\"span3\">
                             ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/produits/layout/presentation.html.twig", 11)->display($context);
        // line 12
        echo "                    </div>
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span5\">
\t\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"Zemenak\" width=\"470\" height=\"310\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h4>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<h5>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo " €</h4>
\t\t\t\t\t\t";
        // line 24
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()), array(), "array", true, true)) {
            // line 25
            echo "
\t\t\t\t\t\t<form action=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
            echo "\" method=\"get\">
\t\t\t\t\t

\t\t\t\t\t\t\t<select name=\"qte\" class=\"span1\">
\t\t\t\t\t\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<div>

\t\t\t\t\t\t\t    <button class=\"btn btn-primary\">Ajouter au panier</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
        } else {
            // line 41
            echo "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\" class=\"btn btn-danger\">Désolé, Le produit existe déjà dans le panier</a>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 46
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
    </div>


";
        
        $__internal_2e73255ffd3b21b50ccada2538b7149b04ff62adc77f25b4f9cc17e59d0b1264->leave($__internal_2e73255ffd3b21b50ccada2538b7149b04ff62adc77f25b4f9cc17e59d0b1264_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  145 => 42,  142 => 41,  132 => 33,  121 => 31,  117 => 30,  110 => 26,  107 => 25,  105 => 24,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  82 => 16,  76 => 12,  74 => 11,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* */
/* {% block titre %}{{ produit.nom }}{% endblock %}*/
/* {% block description %} {{ produit.description }} {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         	<div class="row">*/
/*                      <div class="span3">*/
/*                              {%  include '::modulesUsed/navigation.html.twig' %}*/
/*                     </div>*/
/* 			<div class="span9">*/
/* 				<div class="row">*/
/* 					<div class="span5">*/
/* 						<img src="{{ produit.image.path }}" alt="Zemenak" width="470" height="310">*/
/* 					</div>*/
/* */
/* 					<div class="span4">*/
/* 						<h4>{{ produit.nom }}</h4>*/
/* 						<h5>{{ produit.categorie.nom }}</h5>*/
/* 						<p>{{ produit.description }}</p>*/
/* 						<h4>{{ produit.prix|tva(produit.tva.multiplicate) }} €</h4>*/
/* 						{% if panier[produit.id] is not defined %}*/
/* */
/* 						<form action="{{ path('ajouter', {'id': produit.id}) }}" method="get">*/
/* 					*/
/* */
/* 							<select name="qte" class="span1">*/
/* 								{% for i in 1..10 %}*/
/* 									<option value="{{ i }}">{{ i }}</option>*/
/* 								{% endfor %}*/
/* 							</select>*/
/* */
/* 							<div>*/
/* */
/* 							    <button class="btn btn-primary">Ajouter au panier</button>*/
/* 							</div>*/
/* 						</form>*/
/* 						{% else %}*/
/* 								<div>*/
/* 										<a href="{{ path('panier') }}" class="btn btn-danger">Désolé, Le produit existe déjà dans le panier</a>*/
/* */
/* 								</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 				</div>*/
/* */
/* */
/* 			</div>*/
/* 		</div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
