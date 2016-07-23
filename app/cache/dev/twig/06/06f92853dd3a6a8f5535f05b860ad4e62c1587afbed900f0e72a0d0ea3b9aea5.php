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
        $__internal_81b9e846f5abee5caf615a4b5b40e7d6829f56935cff15fdad2683f8227243d2 = $this->env->getExtension("native_profiler");
        $__internal_81b9e846f5abee5caf615a4b5b40e7d6829f56935cff15fdad2683f8227243d2->enter($__internal_81b9e846f5abee5caf615a4b5b40e7d6829f56935cff15fdad2683f8227243d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_81b9e846f5abee5caf615a4b5b40e7d6829f56935cff15fdad2683f8227243d2->leave($__internal_81b9e846f5abee5caf615a4b5b40e7d6829f56935cff15fdad2683f8227243d2_prof);

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
