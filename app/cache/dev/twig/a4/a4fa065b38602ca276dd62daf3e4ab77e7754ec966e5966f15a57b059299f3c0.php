<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_98ef588abea8f53c17c481c95b71d548b707fb29c8dd897b0a5e2389d55a90df extends Twig_Template
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
        $__internal_d4cf95bee2b3853ccd8c56652e4fcb7c423b3fe6a4b9d25ee82a2cda7620991e = $this->env->getExtension("native_profiler");
        $__internal_d4cf95bee2b3853ccd8c56652e4fcb7c423b3fe6a4b9d25ee82a2cda7620991e->enter($__internal_d4cf95bee2b3853ccd8c56652e4fcb7c423b3fe6a4b9d25ee82a2cda7620991e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

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
        
        $__internal_d4cf95bee2b3853ccd8c56652e4fcb7c423b3fe6a4b9d25ee82a2cda7620991e->leave($__internal_d4cf95bee2b3853ccd8c56652e4fcb7c423b3fe6a4b9d25ee82a2cda7620991e_prof);

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
