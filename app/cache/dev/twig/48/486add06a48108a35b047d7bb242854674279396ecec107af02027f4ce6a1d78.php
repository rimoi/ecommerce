<?php

/* @Utilisateurs/Default/modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_4b6846188f713f943f5c9179905a01decf1c8c5ef5f4835cfc060c5fd76f937e extends Twig_Template
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
        $__internal_843977b4dcb687f8670b32fab787ba1768fed18441c50e76b6fd4baafdfb7798 = $this->env->getExtension("native_profiler");
        $__internal_843977b4dcb687f8670b32fab787ba1768fed18441c50e76b6fd4baafdfb7798->enter($__internal_843977b4dcb687f8670b32fab787ba1768fed18441c50e76b6fd4baafdfb7798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Utilisateurs/Default/modulesUsed/utilisateurs.html.twig"));

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
        
        $__internal_843977b4dcb687f8670b32fab787ba1768fed18441c50e76b6fd4baafdfb7798->leave($__internal_843977b4dcb687f8670b32fab787ba1768fed18441c50e76b6fd4baafdfb7798_prof);

    }

    public function getTemplateName()
    {
        return "@Utilisateurs/Default/modulesUsed/utilisateurs.html.twig";
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
