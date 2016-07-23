<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_e83a186a24697cccff519056db8b3352c77eca204623d62aa4aaf5dd44d4588c extends Twig_Template
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
        $__internal_dcb45b9091cb171127cf11c438266947c1849ba3f7ae4b03554488ca2c42cc2b = $this->env->getExtension("native_profiler");
        $__internal_dcb45b9091cb171127cf11c438266947c1849ba3f7ae4b03554488ca2c42cc2b->enter($__internal_dcb45b9091cb171127cf11c438266947c1849ba3f7ae4b03554488ca2c42cc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">

    <div class=\"span3\">
        ";
        // line 6
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 6)->display($context);
        // line 7
        echo "    </div>

    <div class=\"span9\">
        <h2>Changement de mot de passe</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">

                    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('routing')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <br />
                      <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


";
        
        $__internal_dcb45b9091cb171127cf11c438266947c1849ba3f7ae4b03554488ca2c42cc2b->leave($__internal_dcb45b9091cb171127cf11c438266947c1849ba3f7ae4b03554488ca2c42cc2b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  45 => 17,  41 => 16,  30 => 7,  28 => 6,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/* */
/*     <div class="span3">*/
/*         {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*     </div>*/
/* */
/*     <div class="span9">*/
/*         <h2>Changement de mot de passe</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/* */
/*                 <div class="span4">*/
/* */
/*                     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <br />*/
/*                       <input type="submit" class="btn btn-primary" value="{{ 'change_password.submit'|trans }}" />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
