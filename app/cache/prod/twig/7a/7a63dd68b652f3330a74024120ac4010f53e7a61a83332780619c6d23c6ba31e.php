<?php

/* @Ecommerce/Default/produits/layout/presentation.html.twig */
class __TwigTemplate_6335c73b2e4a3cf6ccddff683f38b895dc067000febe43806743037868025325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/produits/layout/presentation.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"container\">
        \t<div class=\"row\">
                     <div class=\"span3\">
                             ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/produits/layout/presentation.html.twig", 7)->display($context);
        // line 8
        echo "                    </div>
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span5\">
\t\t\t\t\t\t<img src=\"../img/holder.png\" alt=\"Zemenak\" width=\"470\" height=\"310\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h4>Veste</h4>
\t\t\t\t\t\t<h5>AB29837 Item Model</h5>
\t\t\t\t\t\t<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
\t\t\t\t\t\t<h4>100,00 €</h4>
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
        return array (  39 => 8,  37 => 7,  31 => 3,  28 => 2,  11 => 1,);
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
/* 						<img src="../img/holder.png" alt="Zemenak" width="470" height="310">*/
/* 					</div>*/
/* */
/* 					<div class="span4">*/
/* 						<h4>Veste</h4>*/
/* 						<h5>AB29837 Item Model</h5>*/
/* 						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>*/
/* 						<h4>100,00 €</h4>*/
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
