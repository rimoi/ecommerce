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
        $__internal_10015c20b7f09212b2b9258525d30b6f967fde7dc2e3279e58de8569c69db0b1 = $this->env->getExtension("native_profiler");
        $__internal_10015c20b7f09212b2b9258525d30b6f967fde7dc2e3279e58de8569c69db0b1->enter($__internal_10015c20b7f09212b2b9258525d30b6f967fde7dc2e3279e58de8569c69db0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:produits/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10015c20b7f09212b2b9258525d30b6f967fde7dc2e3279e58de8569c69db0b1->leave($__internal_10015c20b7f09212b2b9258525d30b6f967fde7dc2e3279e58de8569c69db0b1_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_7cfebb0b9d480fb79593e7d2c8dbdda0bba53ac4b9dac4e95c950884fe8b46fb = $this->env->getExtension("native_profiler");
        $__internal_7cfebb0b9d480fb79593e7d2c8dbdda0bba53ac4b9dac4e95c950884fe8b46fb->enter($__internal_7cfebb0b9d480fb79593e7d2c8dbdda0bba53ac4b9dac4e95c950884fe8b46fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom", array()), "html", null, true);
        
        $__internal_7cfebb0b9d480fb79593e7d2c8dbdda0bba53ac4b9dac4e95c950884fe8b46fb->leave($__internal_7cfebb0b9d480fb79593e7d2c8dbdda0bba53ac4b9dac4e95c950884fe8b46fb_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_f3913c2f06b485f8ef2415e153f642ea7e7594a12a5e3d4103c51fdfaddc1b84 = $this->env->getExtension("native_profiler");
        $__internal_f3913c2f06b485f8ef2415e153f642ea7e7594a12a5e3d4103c51fdfaddc1b84->enter($__internal_f3913c2f06b485f8ef2415e153f642ea7e7594a12a5e3d4103c51fdfaddc1b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description", array()), "html", null, true);
        echo " ";
        
        $__internal_f3913c2f06b485f8ef2415e153f642ea7e7594a12a5e3d4103c51fdfaddc1b84->leave($__internal_f3913c2f06b485f8ef2415e153f642ea7e7594a12a5e3d4103c51fdfaddc1b84_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_df1ef1019b7f5ea6c0fac441f1d495b3781942f17fca1b8ff881eab913593031 = $this->env->getExtension("native_profiler");
        $__internal_df1ef1019b7f5ea6c0fac441f1d495b3781942f17fca1b8ff881eab913593031->enter($__internal_df1ef1019b7f5ea6c0fac441f1d495b3781942f17fca1b8ff881eab913593031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

\t\t\t\t\t\t<form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "id", array()))), "html", null, true);
        echo "\" method=\"get\">
\t\t\t\t\t

\t\t\t\t\t\t\t<select name=\"qte\" class=\"span1\">
\t\t\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 30
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
        // line 32
        echo "\t\t\t\t\t\t\t</select>

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
        
        $__internal_df1ef1019b7f5ea6c0fac441f1d495b3781942f17fca1b8ff881eab913593031->leave($__internal_df1ef1019b7f5ea6c0fac441f1d495b3781942f17fca1b8ff881eab913593031_prof);

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
        return array (  128 => 32,  117 => 30,  113 => 29,  106 => 25,  101 => 23,  97 => 22,  93 => 21,  89 => 20,  82 => 16,  76 => 12,  74 => 11,  68 => 7,  62 => 6,  48 => 4,  36 => 3,  11 => 1,);
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
