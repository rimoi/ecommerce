<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_a68490ab1b4fadc0bba9d3dadcdf969451a129473655bcd5472a574ac7b56530 extends Twig_Template
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
        $__internal_29c32ee9ad6e16d3fe0c79dc695b92f8458a1833b32521100c80b61e81b07e6e = $this->env->getExtension("native_profiler");
        $__internal_29c32ee9ad6e16d3fe0c79dc695b92f8458a1833b32521100c80b61e81b07e6e->enter($__internal_29c32ee9ad6e16d3fe0c79dc695b92f8458a1833b32521100c80b61e81b07e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, un email vous seras envoyé.<br />
                        Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <label for=\"username\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                        <br />
                        <input type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_29c32ee9ad6e16d3fe0c79dc695b92f8458a1833b32521100c80b61e81b07e6e->leave($__internal_29c32ee9ad6e16d3fe0c79dc695b92f8458a1833b32521100c80b61e81b07e6e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 21,  43 => 18,  39 => 17,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Mot de passe perdu</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Vous avez perdu votre mot de passe ?</h4>*/
/*                     <em>*/
/*                         Compléter le formulaire, un email vous seras envoyé.<br />*/
/*                         Il contiendra la procèdure à suivre pour récupérer votre mot de passe.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                         <label for="username">{{ 'resetting.request.username'|trans }}</label>*/
/*                         <input type="text" id="username" name="username" required="required" />*/
/*                         <br />*/
/*                         <input type="submit" value="{{ 'resetting.request.submit'|trans }}" class="btn btn-primary" />*/
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
