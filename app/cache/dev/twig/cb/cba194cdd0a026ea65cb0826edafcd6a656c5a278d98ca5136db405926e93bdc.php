<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_f9e8769bb437a486f1c43d06180b1995dd1dfa56350d2e46796ddf730e107cd7 extends Twig_Template
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
        $__internal_d6f14147ca4ecf0c855789a5ef09d78bff83da7b412cef70bc14962ce7292e93 = $this->env->getExtension("native_profiler");
        $__internal_d6f14147ca4ecf0c855789a5ef09d78bff83da7b412cef70bc14962ce7292e93->enter($__internal_d6f14147ca4ecf0c855789a5ef09d78bff83da7b412cef70bc14962ce7292e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Récupération du mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                        Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                    </em>
                </div>

                <div class=\"span4 offset2\">
                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

                        <br />
                         <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

  ";
        
        $__internal_d6f14147ca4ecf0c855789a5ef09d78bff83da7b412cef70bc14962ce7292e93->leave($__internal_d6f14147ca4ecf0c855789a5ef09d78bff83da7b412cef70bc14962ce7292e93_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  42 => 17,  38 => 16,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Mot de passe perdu</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Récupération du mot de passe ?</h4>*/
/*                     <em>*/
/*                         Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />*/
/*                         Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.*/
/*                     </em>*/
/*                 </div>*/
/* */
/*                 <div class="span4 offset2">*/
/*                     {{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}*/
/*                     {{ form_widget(form) }}*/
/* */
/*                         <br />*/
/*                          <input class="btn btn-primary" type="submit" value="{{ 'resetting.reset.submit'|trans }}" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/*   */
