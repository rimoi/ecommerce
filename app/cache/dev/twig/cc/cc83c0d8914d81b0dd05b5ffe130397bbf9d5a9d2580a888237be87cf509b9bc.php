<?php

/* @Ecommerce/Default/panier/layout/livraison.html.twig */
class __TwigTemplate_f1b225266aadf1ce613757730b6e7744422ab4779215837fa6ba69cb81f5c795 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "@Ecommerce/Default/panier/layout/livraison.html.twig", 1);
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
        $__internal_ffd3ebba778e76470ad192c10a72d234975f59e477e1e9306df5fc4f18d163c3 = $this->env->getExtension("native_profiler");
        $__internal_ffd3ebba778e76470ad192c10a72d234975f59e477e1e9306df5fc4f18d163c3->enter($__internal_ffd3ebba778e76470ad192c10a72d234975f59e477e1e9306df5fc4f18d163c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ecommerce/Default/panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffd3ebba778e76470ad192c10a72d234975f59e477e1e9306df5fc4f18d163c3->leave($__internal_ffd3ebba778e76470ad192c10a72d234975f59e477e1e9306df5fc4f18d163c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_02d8b8eb2a71b9336e28818e0d2ec09d57cf8af41e6dffc6eb69cda8603e1e95 = $this->env->getExtension("native_profiler");
        $__internal_02d8b8eb2a71b9336e28818e0d2ec09d57cf8af41e6dffc6eb69cda8603e1e95->enter($__internal_02d8b8eb2a71b9336e28818e0d2ec09d57cf8af41e6dffc6eb69cda8603e1e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <h2>Livraison</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                        <div class=\"span4\">
                            <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("validation");
        echo "\">
                                <h4>Adresse de livraison</h4>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>

                                <br /><br />

                                <h4>Adresse de facturation</h4>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    3b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    4b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios2\" id=\"optionsRadios1\" value=\"option1\" checked=\"\">
                                    5b rue jules paulo, 75 000 Paris <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                </label>
                                <button class=\"btn btn-primary\">Valider mon adresse de livraison</button>
                            </form>
                        </div>


                        <div class=\"span4 offset2\">
                            <h4>Ajouter une nouvelle adresse</h4>
                            <form>
                                <label>Nom</label>
                                <input type=\"text\">

                                <label>Prénom</label>
                                <input type=\"text\">

                                <label>Adresse</label>
                                <input type=\"text\">

                                <label>Ville</label>
                                <input type=\"text\">

                                <label>Code postal</label>
                                <input type=\"text\">

                                <label>Ville</label>
                                <input type=\"text\">

                                <label>Téléphone</label>
                                <input type=\"text\">                                        

                                <br />
                                <button class=\"btn btn-primary\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

";
        
        $__internal_02d8b8eb2a71b9336e28818e0d2ec09d57cf8af41e6dffc6eb69cda8603e1e95->leave($__internal_02d8b8eb2a71b9336e28818e0d2ec09d57cf8af41e6dffc6eb69cda8603e1e95_prof);

    }

    public function getTemplateName()
    {
        return "@Ecommerce/Default/panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span12">*/
/*                 <h2>Livraison</h2>*/
/*                 <div id="collapseOne" class="accordion-body collapse in">*/
/*                     <div class="accordion-inner">*/
/*                         <div class="span4">*/
/*                             <form action="{{path('validation')}}">*/
/*                                 <h4>Adresse de livraison</h4>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                     3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                     4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">*/
/*                                     5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </label>*/
/* */
/*                                 <br /><br />*/
/* */
/*                                 <h4>Adresse de facturation</h4>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                     3b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                     4b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </label>*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked="">*/
/*                                     5b rue jules paulo, 75 000 Paris <a href="#"><i class="icon-trash"></i></a>*/
/*                                 </label>*/
/*                                 <button class="btn btn-primary">Valider mon adresse de livraison</button>*/
/*                             </form>*/
/*                         </div>*/
/* */
/* */
/*                         <div class="span4 offset2">*/
/*                             <h4>Ajouter une nouvelle adresse</h4>*/
/*                             <form>*/
/*                                 <label>Nom</label>*/
/*                                 <input type="text">*/
/* */
/*                                 <label>Prénom</label>*/
/*                                 <input type="text">*/
/* */
/*                                 <label>Adresse</label>*/
/*                                 <input type="text">*/
/* */
/*                                 <label>Ville</label>*/
/*                                 <input type="text">*/
/* */
/*                                 <label>Code postal</label>*/
/*                                 <input type="text">*/
/* */
/*                                 <label>Ville</label>*/
/*                                 <input type="text">*/
/* */
/*                                 <label>Téléphone</label>*/
/*                                 <input type="text">                                        */
/* */
/*                                 <br />*/
/*                                 <button class="btn btn-primary">Ajouter</button>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
