<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_9a3361009f7df16cd4393fa2d266c6e98bf30a5103a34c9ed88203b085035645 extends Twig_Template
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
        $__internal_9f3603cdb49fc783240ab7f56eb0bc32c2e5d5db398a33d5b17f50193ff2e96e = $this->env->getExtension("native_profiler");
        $__internal_9f3603cdb49fc783240ab7f56eb0bc32c2e5d5db398a33d5b17f50193ff2e96e->enter($__internal_9f3603cdb49fc783240ab7f56eb0bc32c2e5d5db398a33d5b17f50193ff2e96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"row\">
    <div class=\"span3\">
    ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 5)->display($context);
        // line 6
        echo "    </div>
    <div class=\"span9\">
        <h2>Mes informations</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">

                <div class=\"span4\">
                    <h4> Mes informations</h4>
                    <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=\"fos_user_user_show\">

</div>
";
        
        $__internal_9f3603cdb49fc783240ab7f56eb0bc32c2e5d5db398a33d5b17f50193ff2e96e->leave($__internal_9f3603cdb49fc783240ab7f56eb0bc32c2e5d5db398a33d5b17f50193ff2e96e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 15,  39 => 14,  29 => 6,  27 => 5,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*     <div class="span3">*/
/*     {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*     </div>*/
/*     <div class="span9">*/
/*         <h2>Mes informations</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/* */
/*                 <div class="span4">*/
/*                     <h4> Mes informations</h4>*/
/*                     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*                     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <div class="fos_user_user_show">*/
/* */
/* </div>*/
/* */
