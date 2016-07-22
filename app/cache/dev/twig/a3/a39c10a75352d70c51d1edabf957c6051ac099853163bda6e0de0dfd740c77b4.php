<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_80e3f2dd895a1b989d5e4c182817354368b44f95cb1a1c194ebc7ab434cfd4ac extends Twig_Template
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
        $__internal_d75034675b9bd9ee0d54aec6e844b281c91394653dc5b0ecf67beaadc4cd7cc3 = $this->env->getExtension("native_profiler");
        $__internal_d75034675b9bd9ee0d54aec6e844b281c91394653dc5b0ecf67beaadc4cd7cc3->enter($__internal_d75034675b9bd9ee0d54aec6e844b281c91394653dc5b0ecf67beaadc4cd7cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_d75034675b9bd9ee0d54aec6e844b281c91394653dc5b0ecf67beaadc4cd7cc3->leave($__internal_d75034675b9bd9ee0d54aec6e844b281c91394653dc5b0ecf67beaadc4cd7cc3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
