<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c2b5aba33110783deb30e1097d83cf9a4191f36f9bdcff75f9e11da40a389dc5 extends Twig_Template
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
        $__internal_e57ae4ff11065dd0817e82c384f2173f1c4ae8e033b7e0732607c438bda78f4d = $this->env->getExtension("native_profiler");
        $__internal_e57ae4ff11065dd0817e82c384f2173f1c4ae8e033b7e0732607c438bda78f4d->enter($__internal_e57ae4ff11065dd0817e82c384f2173f1c4ae8e033b7e0732607c438bda78f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e57ae4ff11065dd0817e82c384f2173f1c4ae8e033b7e0732607c438bda78f4d->leave($__internal_e57ae4ff11065dd0817e82c384f2173f1c4ae8e033b7e0732607c438bda78f4d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
