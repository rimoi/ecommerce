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
        $__internal_4e2a2ff3ddb019fefb4d36437ddc5dafc476633c02e4a2705a49e644c346310d = $this->env->getExtension("native_profiler");
        $__internal_4e2a2ff3ddb019fefb4d36437ddc5dafc476633c02e4a2705a49e644c346310d->enter($__internal_4e2a2ff3ddb019fefb4d36437ddc5dafc476633c02e4a2705a49e644c346310d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_4e2a2ff3ddb019fefb4d36437ddc5dafc476633c02e4a2705a49e644c346310d->leave($__internal_4e2a2ff3ddb019fefb4d36437ddc5dafc476633c02e4a2705a49e644c346310d_prof);

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
