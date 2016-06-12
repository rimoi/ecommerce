<?php

/* @Ecommerce/Default/panier/layout/validation.html.twig */
class __TwigTemplate_5fdc3951aeb74a1b2b9f371d945a36202f06b2f9f8c67b368dcb20f04808e53d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/panier/layout/validation.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "@Ecommerce/Default/panier/layout/validation.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <div class=\"span9\">
                <h2>Valider mon parnier</h2>
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
                            <tr>
                                <td>AB29837</td>
                                <td>
                                    2
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    1
                                </td>                                
                                <td>333,33€</td>
                                <td>666,66€</td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€ TTC</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"#\" class=\"btn btn-success pull-right\">Payer</a>
            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/panier/layout/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                 {%  include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/*             <div class="span9">*/
/*                 <h2>Valider mon parnier</h2>*/
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
/*                             <tr>*/
/*                                 <td>AB29837</td>*/
/*                                 <td>*/
/*                                     2*/
/*                                 </td>*/
/*                                 <td>333,33€</td>*/
/*                                 <td>333,33€</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>AC34423</td>*/
/*                                 <td>*/
/*                                     1*/
/*                                 </td>                                */
/*                                 <td>333,33€</td>*/
/*                                 <td>666,66€</td>*/
/*                             </tr>*/
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
/*                     <dd>999,99€ TTC</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="#" class="btn btn-success pull-right">Payer</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
