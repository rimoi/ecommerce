<?php

/* EcommerceBundle:Default/panier/layout:validation.html.twig */
class __TwigTemplate_f9da50a733f843671ef9ed5f2f0c1e936cd64aefcbd9edd18ebfe1b410b94b41 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default/panier/layout:validation.html.twig", 1);
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
        $__internal_6d4dc9cee27f422e5a14f5f32d9bbe1440dd74e96d1711bbfa9997517371543f = $this->env->getExtension("native_profiler");
        $__internal_6d4dc9cee27f422e5a14f5f32d9bbe1440dd74e96d1711bbfa9997517371543f->enter($__internal_6d4dc9cee27f422e5a14f5f32d9bbe1440dd74e96d1711bbfa9997517371543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default/panier/layout:validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4dc9cee27f422e5a14f5f32d9bbe1440dd74e96d1711bbfa9997517371543f->leave($__internal_6d4dc9cee27f422e5a14f5f32d9bbe1440dd74e96d1711bbfa9997517371543f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68e4f1cfc1c6fb3fdca3366a7af7c0d3da0f9b30c6b7f6a06cc583ed18ec84ee = $this->env->getExtension("native_profiler");
        $__internal_68e4f1cfc1c6fb3fdca3366a7af7c0d3da0f9b30c6b7f6a06cc583ed18ec84ee->enter($__internal_68e4f1cfc1c6fb3fdca3366a7af7c0d3da0f9b30c6b7f6a06cc583ed18ec84ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span3\">
                ";
        // line 8
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default/panier/layout:validation.html.twig", 8)->display($context);
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
        
        $__internal_68e4f1cfc1c6fb3fdca3366a7af7c0d3da0f9b30c6b7f6a06cc583ed18ec84ee->leave($__internal_68e4f1cfc1c6fb3fdca3366a7af7c0d3da0f9b30c6b7f6a06cc583ed18ec84ee_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default/panier/layout:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
