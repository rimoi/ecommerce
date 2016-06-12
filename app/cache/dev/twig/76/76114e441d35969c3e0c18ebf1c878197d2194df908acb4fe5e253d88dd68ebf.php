<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_8138268ed594d7b8a90e1595ffc4b001056661b90f705ecabaddbd2e0851f127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 1);
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
        $__internal_1d67bda4fb66e0c144a7db378e4bc94ecd11b99d206134f9f1fc5c564897b0db = $this->env->getExtension("native_profiler");
        $__internal_1d67bda4fb66e0c144a7db378e4bc94ecd11b99d206134f9f1fc5c564897b0db->enter($__internal_1d67bda4fb66e0c144a7db378e4bc94ecd11b99d206134f9f1fc5c564897b0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d67bda4fb66e0c144a7db378e4bc94ecd11b99d206134f9f1fc5c564897b0db->leave($__internal_1d67bda4fb66e0c144a7db378e4bc94ecd11b99d206134f9f1fc5c564897b0db_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a52fce95ce4c893d3361193bbc2c0e2370ba337a9945db0b108b31fde83ed1f7 = $this->env->getExtension("native_profiler");
        $__internal_a52fce95ce4c893d3361193bbc2c0e2370ba337a9945db0b108b31fde83ed1f7->enter($__internal_a52fce95ce4c893d3361193bbc2c0e2370ba337a9945db0b108b31fde83ed1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 7
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 7)->display($context);
        // line 8
        echo "            </div>
            <div class=\"span9\">
                <h2>Votre parnier</h2>
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
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </td>
                                <td>333,33€</td>
                                <td>333,33€</td>
                            </tr>
                            <tr>
                                <td>AC34423</td>
                                <td>
                                    <select class=\"span1\"><option>1</option></select>&nbsp;
                                    <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                    <a href=\"#\"><i class=\"icon-trash\"></i></a>
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
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("produits");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>


";
        
        $__internal_a52fce95ce4c893d3361193bbc2c0e2370ba337a9945db0b108b31fde83ed1f7->leave($__internal_a52fce95ce4c893d3361193bbc2c0e2370ba337a9945db0b108b31fde83ed1f7_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 58,  99 => 57,  48 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/*             <div class="span9">*/
/*                 <h2>Votre parnier</h2>*/
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
/*                                     <select class="span1"><option>1</option></select>&nbsp;*/
/*                                     <a href="#"><i class="icon-refresh"></i></a>*/
/*                                     <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </td>*/
/*                                 <td>333,33€</td>*/
/*                                 <td>333,33€</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>AC34423</td>*/
/*                                 <td>*/
/*                                     <select class="span1"><option>1</option></select>&nbsp;*/
/*                                     <a href="#"><i class="icon-refresh"></i></a>*/
/*                                     <a href="#"><i class="icon-trash"></i></a>*/
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
/*                     <dd>999,99€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="{{path('livraison')}}" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 <a href="{{path('produits')}}" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
