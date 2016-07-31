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
        $__internal_863a920137eaa1265a59f13c2dba505985d52ff227fd40a6436d1c0a7fedefbf = $this->env->getExtension("native_profiler");
        $__internal_863a920137eaa1265a59f13c2dba505985d52ff227fd40a6436d1c0a7fedefbf->enter($__internal_863a920137eaa1265a59f13c2dba505985d52ff227fd40a6436d1c0a7fedefbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_863a920137eaa1265a59f13c2dba505985d52ff227fd40a6436d1c0a7fedefbf->leave($__internal_863a920137eaa1265a59f13c2dba505985d52ff227fd40a6436d1c0a7fedefbf_prof);

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
