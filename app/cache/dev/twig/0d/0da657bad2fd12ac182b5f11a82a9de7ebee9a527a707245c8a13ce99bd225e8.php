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
        $__internal_53f9091d00cf51214ad893ebfac71a1ae24261413c6687edecd93717d27eac28 = $this->env->getExtension("native_profiler");
        $__internal_53f9091d00cf51214ad893ebfac71a1ae24261413c6687edecd93717d27eac28->enter($__internal_53f9091d00cf51214ad893ebfac71a1ae24261413c6687edecd93717d27eac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53f9091d00cf51214ad893ebfac71a1ae24261413c6687edecd93717d27eac28->leave($__internal_53f9091d00cf51214ad893ebfac71a1ae24261413c6687edecd93717d27eac28_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_7b7da49bf4c479b05ee140a91900e9ab2865fda565a7be76c52e8249f696baf8 = $this->env->getExtension("native_profiler");
        $__internal_7b7da49bf4c479b05ee140a91900e9ab2865fda565a7be76c52e8249f696baf8->enter($__internal_7b7da49bf4c479b05ee140a91900e9ab2865fda565a7be76c52e8249f696baf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_7b7da49bf4c479b05ee140a91900e9ab2865fda565a7be76c52e8249f696baf8->leave($__internal_7b7da49bf4c479b05ee140a91900e9ab2865fda565a7be76c52e8249f696baf8_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_5f85d430512112881885b218e5868512c2bb1e9b0bf9b6492dacf4c40d68e4ec = $this->env->getExtension("native_profiler");
        $__internal_5f85d430512112881885b218e5868512c2bb1e9b0bf9b6492dacf4c40d68e4ec->enter($__internal_5f85d430512112881885b218e5868512c2bb1e9b0bf9b6492dacf4c40d68e4ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo " ";
        
        $__internal_5f85d430512112881885b218e5868512c2bb1e9b0bf9b6492dacf4c40d68e4ec->leave($__internal_5f85d430512112881885b218e5868512c2bb1e9b0bf9b6492dacf4c40d68e4ec_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4053cb3a0850b780c5418e436d7e0a3b1c6955cfa98510e8f588fb6479f4f5f1 = $this->env->getExtension("native_profiler");
        $__internal_4053cb3a0850b780c5418e436d7e0a3b1c6955cfa98510e8f588fb6479f4f5f1->enter($__internal_4053cb3a0850b780c5418e436d7e0a3b1c6955cfa98510e8f588fb6479f4f5f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4053cb3a0850b780c5418e436d7e0a3b1c6955cfa98510e8f588fb6479f4f5f1->leave($__internal_4053cb3a0850b780c5418e436d7e0a3b1c6955cfa98510e8f588fb6479f4f5f1_prof);

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
