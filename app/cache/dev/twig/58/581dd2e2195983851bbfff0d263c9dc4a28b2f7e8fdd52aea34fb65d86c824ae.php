<?php

/* @Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_eed7d20584fac66d4ce0d738c369c1cf1ca325462557519969af076defe2b089 extends Twig_Template
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
        $__internal_c7237c61e8f04313385628f5e5acb37d6d83dfa5b98048248732d941a877e7d4 = $this->env->getExtension("native_profiler");
        $__internal_c7237c61e8f04313385628f5e5acb37d6d83dfa5b98048248732d941a877e7d4->enter($__internal_c7237c61e8f04313385628f5e5acb37d6d83dfa5b98048248732d941a877e7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
        </li>
        <li>
            <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe </a>
        </li>
        <li>
            <a href=\"#\">Mes factures</a>
        </li>
        <li>
            <a href=\"#\">Mes adresses</a>
        </li>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><h6>D&eacute;connexion</h6></a>
        </li>
    </ul>
</div>";
        
        $__internal_c7237c61e8f04313385628f5e5acb37d6d83dfa5b98048248732d941a877e7d4->leave($__internal_c7237c61e8f04313385628f5e5acb37d6d83dfa5b98048248732d941a877e7d4_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 19,  39 => 10,  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_profile_edit') }}">Editer mes informations</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_change_password') }}">Changer mon mot de passe </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="#">Mes factures</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="#">Mes adresses</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_logout') }}"><h6>D&eacute;connexion</h6></a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
