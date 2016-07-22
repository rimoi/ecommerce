<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fc53d6816cd67c84a60f347a24a25da2f8575315c3ae45aaac00e35fcaf1284c extends Twig_Template
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
        $__internal_1766fb2c56a69940145c2cd0128b1f0779dc8f541e0a55b9d2a7c7edb84f19fb = $this->env->getExtension("native_profiler");
        $__internal_1766fb2c56a69940145c2cd0128b1f0779dc8f541e0a55b9d2a7c7edb84f19fb->enter($__internal_1766fb2c56a69940145c2cd0128b1f0779dc8f541e0a55b9d2a7c7edb84f19fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1766fb2c56a69940145c2cd0128b1f0779dc8f541e0a55b9d2a7c7edb84f19fb->leave($__internal_1766fb2c56a69940145c2cd0128b1f0779dc8f541e0a55b9d2a7c7edb84f19fb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
