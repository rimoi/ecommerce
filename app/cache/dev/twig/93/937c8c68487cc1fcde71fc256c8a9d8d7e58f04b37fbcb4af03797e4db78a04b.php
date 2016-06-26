<?php

/* ::modulesUsed/utilisateur.html.twig */
class __TwigTemplate_7f8169592d7587f13576afc50e842a524c9254811ae7281645f895a7ac2391c7 extends Twig_Template
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
        $__internal_1cab5f34b952a3f9624e42392eaebe2506ffc81fa7a25fab56b3e7c9de0b8561 = $this->env->getExtension("native_profiler");
        $__internal_1cab5f34b952a3f9624e42392eaebe2506ffc81fa7a25fab56b3e7c9de0b8561->enter($__internal_1cab5f34b952a3f9624e42392eaebe2506ffc81fa7a25fab56b3e7c9de0b8561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/utilisateur.html.twig"));

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
        
        $__internal_1cab5f34b952a3f9624e42392eaebe2506ffc81fa7a25fab56b3e7c9de0b8561->leave($__internal_1cab5f34b952a3f9624e42392eaebe2506ffc81fa7a25fab56b3e7c9de0b8561_prof);

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
