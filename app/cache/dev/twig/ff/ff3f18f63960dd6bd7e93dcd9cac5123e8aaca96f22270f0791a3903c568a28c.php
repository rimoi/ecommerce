<?php

/* @Ecommerce/Default/Recherche/layout/presentation.html.twig */
class __TwigTemplate_72f628b0b05ac5920c8bba7b0d42fccc3b3b0ca148eb1d6f3bc9b777958f78aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/Recherche/layout/presentation.html.twig", 1);
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
        $__internal_a6285f27fd66477d45e392edf0a47dbeaaf08a619b227cfc54b8f283b3332840 = $this->env->getExtension("native_profiler");
        $__internal_a6285f27fd66477d45e392edf0a47dbeaaf08a619b227cfc54b8f283b3332840->enter($__internal_a6285f27fd66477d45e392edf0a47dbeaaf08a619b227cfc54b8f283b3332840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/Recherche/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6285f27fd66477d45e392edf0a47dbeaaf08a619b227cfc54b8f283b3332840->leave($__internal_a6285f27fd66477d45e392edf0a47dbeaaf08a619b227cfc54b8f283b3332840_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2704bdb5d4aa119f8bf681c7808eecdd4a2995522cf74bb811c3b13c956167c = $this->env->getExtension("native_profiler");
        $__internal_f2704bdb5d4aa119f8bf681c7808eecdd4a2995522cf74bb811c3b13c956167c->enter($__internal_f2704bdb5d4aa119f8bf681c7808eecdd4a2995522cf74bb811c3b13c956167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        \t<div class=\"row\">
                     <div class=\"span3\">
                             ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/Recherche/layout/presentation.html.twig", 7)->display($context);
        // line 8
        echo "                    </div>
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span5\">
\t\t\t\t\t\t<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image", array()), "path", array()), "html", null, true);
        echo "\" alt=\"Zemenak\" width=\"470\" height=\"310\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h4>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t<h5>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "categorie", array()), "nom", array()), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t<p>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix", array()), "html", null, true);
        echo " €</h4>

\t\t\t\t\t\t<form action=\"panier.php\">
\t\t\t\t\t

\t\t\t\t\t\t\t<select name=\"qte\" class=\"span1\">
\t\t\t\t\t\t\t\t<option>1</option>
\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t    <button class=\"btn btn-primary\">Ajouter au panier</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
    </div>


";
        
        $__internal_f2704bdb5d4aa119f8bf681c7808eecdd4a2995522cf74bb811c3b13c956167c->leave($__internal_f2704bdb5d4aa119f8bf681c7808eecdd4a2995522cf74bb811c3b13c956167c_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/Recherche/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  69 => 18,  65 => 17,  61 => 16,  54 => 12,  48 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
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
/* 						<h4>{{ produit.prix }} €</h4>*/
/* */
/* 						<form action="panier.php">*/
/* 					*/
/* */
/* 							<select name="qte" class="span1">*/
/* 								<option>1</option>*/
/* 							</select>*/
/* */
/* 							<div>*/
/* 							    <button class="btn btn-primary">Ajouter au panier</button>*/
/* 							</div>*/
/* 						</form>*/
/* 						*/
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
