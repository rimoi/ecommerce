<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ffa15fd04381ef4d8781f39d106669b706636a35b7b77db365932930b42621f9 extends Twig_Template
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
        $__internal_0df5210ee6a14f780663713408fd5363b32b75e6b4f2ab593cb35915bb2b6b88 = $this->env->getExtension("native_profiler");
        $__internal_0df5210ee6a14f780663713408fd5363b32b75e6b4f2ab593cb35915bb2b6b88->enter($__internal_0df5210ee6a14f780663713408fd5363b32b75e6b4f2ab593cb35915bb2b6b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0df5210ee6a14f780663713408fd5363b32b75e6b4f2ab593cb35915bb2b6b88->leave($__internal_0df5210ee6a14f780663713408fd5363b32b75e6b4f2ab593cb35915bb2b6b88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
