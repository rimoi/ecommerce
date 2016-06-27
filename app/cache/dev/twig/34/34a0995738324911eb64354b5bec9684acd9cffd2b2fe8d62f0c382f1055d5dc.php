<?php

/* ::modulesUsed/utilisateur.html.twig */
class __TwigTemplate_9bd5dba0799368ec1363b332d4454890488c9c02438c69afb81a83329f619099 extends Twig_Template
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
        $__internal_52569483e34316b1c46697418932279a5c2d30c718f1a9f896d55cb28108cc06 = $this->env->getExtension("native_profiler");
        $__internal_52569483e34316b1c46697418932279a5c2d30c718f1a9f896d55cb28108cc06->enter($__internal_52569483e34316b1c46697418932279a5c2d30c718f1a9f896d55cb28108cc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/utilisateur.html.twig"));

        // line 1
        echo " <div class=\"well\">
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
    </div>
";
        
        $__internal_52569483e34316b1c46697418932279a5c2d30c718f1a9f896d55cb28108cc06->leave($__internal_52569483e34316b1c46697418932279a5c2d30c718f1a9f896d55cb28108cc06_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/utilisateur.html.twig";
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
/*  <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_registration_register') }}">S'inscrire</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* */
