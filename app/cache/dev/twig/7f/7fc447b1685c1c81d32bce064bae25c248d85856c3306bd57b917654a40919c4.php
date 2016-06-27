<?php

/* EcommerceBundle:Default:produits/layout/presentation.html.twig */
class __TwigTemplate_79abf6ac40bcf438c05708fa47df87c3571764001a784f2ecfb5a9df315b9191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 1);
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
        $__internal_c4fb81918dd50239d14df12930f24e1be2ae2961d01be8fa7469a7248db6f495 = $this->env->getExtension("native_profiler");
        $__internal_c4fb81918dd50239d14df12930f24e1be2ae2961d01be8fa7469a7248db6f495->enter($__internal_c4fb81918dd50239d14df12930f24e1be2ae2961d01be8fa7469a7248db6f495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4fb81918dd50239d14df12930f24e1be2ae2961d01be8fa7469a7248db6f495->leave($__internal_c4fb81918dd50239d14df12930f24e1be2ae2961d01be8fa7469a7248db6f495_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_cc530b0584ede76c84f16c7fcda039978dd3b323e5d7605ad431aad526dbe0d3 = $this->env->getExtension("native_profiler");
        $__internal_cc530b0584ede76c84f16c7fcda039978dd3b323e5d7605ad431aad526dbe0d3->enter($__internal_cc530b0584ede76c84f16c7fcda039978dd3b323e5d7605ad431aad526dbe0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_cc530b0584ede76c84f16c7fcda039978dd3b323e5d7605ad431aad526dbe0d3->leave($__internal_cc530b0584ede76c84f16c7fcda039978dd3b323e5d7605ad431aad526dbe0d3_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_8d2270946ec7e9be3ff82c532e866a7c18582d9786f27c896d3915ae0b973811 = $this->env->getExtension("native_profiler");
        $__internal_8d2270946ec7e9be3ff82c532e866a7c18582d9786f27c896d3915ae0b973811->enter($__internal_8d2270946ec7e9be3ff82c532e866a7c18582d9786f27c896d3915ae0b973811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo " ";
        
        $__internal_8d2270946ec7e9be3ff82c532e866a7c18582d9786f27c896d3915ae0b973811->leave($__internal_8d2270946ec7e9be3ff82c532e866a7c18582d9786f27c896d3915ae0b973811_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_150e6c5e24021bb44d72c281fd9f78abb87f47dd7d806c48260e60fab2472234 = $this->env->getExtension("native_profiler");
        $__internal_150e6c5e24021bb44d72c281fd9f78abb87f47dd7d806c48260e60fab2472234->enter($__internal_150e6c5e24021bb44d72c281fd9f78abb87f47dd7d806c48260e60fab2472234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <div class=\"container\">
        \t<div class=\"row\">
                     <div class=\"span3\">
                             ";
        // line 11
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:produits/layout/presentation.html.twig", 11)->display($context);
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
        
        $__internal_150e6c5e24021bb44d72c281fd9f78abb87f47dd7d806c48260e60fab2472234->leave($__internal_150e6c5e24021bb44d72c281fd9f78abb87f47dd7d806c48260e60fab2472234_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:produits/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  97 => 22,  93 => 21,  89 => 20,  82 => 16,  76 => 12,  74 => 11,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
