<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_366c851efde4e324e2e65e1067c430ab45a1343bee5aba969efa18a37d105b1d extends Twig_Template
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
        $__internal_a7609b5e31de799676e91ac85ef0861235b92f1efebb3d5ef7c2396464e14665 = $this->env->getExtension("native_profiler");
        $__internal_a7609b5e31de799676e91ac85ef0861235b92f1efebb3d5ef7c2396464e14665->enter($__internal_a7609b5e31de799676e91ac85ef0861235b92f1efebb3d5ef7c2396464e14665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

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
        
        $__internal_a7609b5e31de799676e91ac85ef0861235b92f1efebb3d5ef7c2396464e14665->leave($__internal_a7609b5e31de799676e91ac85ef0861235b92f1efebb3d5ef7c2396464e14665_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
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
