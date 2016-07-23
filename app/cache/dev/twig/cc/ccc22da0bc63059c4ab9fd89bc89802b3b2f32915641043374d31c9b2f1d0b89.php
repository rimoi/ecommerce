<?php

/* UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig */
class __TwigTemplate_7e408f56fea4031a9b6bbb89ffb96f97c7cd581fbaaea004989372ccbaf69a97 extends Twig_Template
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
        $__internal_5b70458e8382dddd95f46419f6422fc8ac457fec36ded26469b8826899cfdf28 = $this->env->getExtension("native_profiler");
        $__internal_5b70458e8382dddd95f46419f6422fc8ac457fec36ded26469b8826899cfdf28->enter($__internal_5b70458e8382dddd95f46419f6422fc8ac457fec36ded26469b8826899cfdf28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li>
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
        </li>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
        </li>
    </ul>
</div>";
        
        $__internal_5b70458e8382dddd95f46419f6422fc8ac457fec36ded26469b8826899cfdf28->leave($__internal_5b70458e8382dddd95f46419f6422fc8ac457fec36ded26469b8826899cfdf28_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default/modulesUsed:utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li>*/
/*             <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
