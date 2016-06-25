<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_5028adb309ebd3dee106f00339f7b8f420a59cb19259d5f1bb99705234cecd1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c66f40ccf04e981cc184cb1874cdc1e434f03b9310da4e0b3a19299f92041f58 = $this->env->getExtension("native_profiler");
        $__internal_c66f40ccf04e981cc184cb1874cdc1e434f03b9310da4e0b3a19299f92041f58->enter($__internal_c66f40ccf04e981cc184cb1874cdc1e434f03b9310da4e0b3a19299f92041f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Connexion</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Pas encore inscrit ?</h4>
                    <em>
                        nous vous invitons à vous inscrire<br />
                        afin de passer votre commande.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <h4>Inscription</h4>
                    ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        <br />
                    <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




";
        
        $__internal_c66f40ccf04e981cc184cb1874cdc1e434f03b9310da4e0b3a19299f92041f58->leave($__internal_c66f40ccf04e981cc184cb1874cdc1e434f03b9310da4e0b3a19299f92041f58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  44 => 19,  40 => 18,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Connexion</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Pas encore inscrit ?</h4>*/
/*                     <em>*/
/*                         nous vous invitons à vous inscrire<br />*/
/*                         afin de passer votre commande.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     <h4>Inscription</h4>*/
/*                     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*                     {{ form_widget(form) }}*/
/*                         <br />*/
/*                     <input class="btn btn-primary" type="submit" value="{{ 'registration.submit'|trans }}" />*/
/* */
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
/* */
