<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_e4dc5f4d7590229e45b0153e2a9c853b374325006a5293543bbcde35599324e8 extends Twig_Template
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
        $__internal_50bc2d0d6e9fb890dd7d5cc1c90cf5c1b4737ac973c486e5231f3ecb6e46f98b = $this->env->getExtension("native_profiler");
        $__internal_50bc2d0d6e9fb890dd7d5cc1c90cf5c1b4737ac973c486e5231f3ecb6e46f98b->enter($__internal_50bc2d0d6e9fb890dd7d5cc1c90cf5c1b4737ac973c486e5231f3ecb6e46f98b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

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
        
        $__internal_50bc2d0d6e9fb890dd7d5cc1c90cf5c1b4737ac973c486e5231f3ecb6e46f98b->leave($__internal_50bc2d0d6e9fb890dd7d5cc1c90cf5c1b4737ac973c486e5231f3ecb6e46f98b_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
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
