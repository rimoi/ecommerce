<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_12429ea42de50958f4b5a0978db3721f7b6cb8ccabaae25ec023d45753a9d761 extends Twig_Template
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
        $__internal_3721ebf25afb9d0710858875f44d7750b117caf12942f0b90fbd82f4c5bfeb32 = $this->env->getExtension("native_profiler");
        $__internal_3721ebf25afb9d0710858875f44d7750b117caf12942f0b90fbd82f4c5bfeb32->enter($__internal_3721ebf25afb9d0710858875f44d7750b117caf12942f0b90fbd82f4c5bfeb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_3721ebf25afb9d0710858875f44d7750b117caf12942f0b90fbd82f4c5bfeb32->leave($__internal_3721ebf25afb9d0710858875f44d7750b117caf12942f0b90fbd82f4c5bfeb32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
