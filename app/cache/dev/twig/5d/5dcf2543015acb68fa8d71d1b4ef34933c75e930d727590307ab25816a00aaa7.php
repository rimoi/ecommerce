<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_100e1407edd70e09bfc92c6ca79aff77bddbe71f2049d14c2c0d57aad656ca09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c719d685e453520a4f7493c8cdc98676dad7860ba65f70518a2fcb5346a5da83 = $this->env->getExtension("native_profiler");
        $__internal_c719d685e453520a4f7493c8cdc98676dad7860ba65f70518a2fcb5346a5da83->enter($__internal_c719d685e453520a4f7493c8cdc98676dad7860ba65f70518a2fcb5346a5da83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c719d685e453520a4f7493c8cdc98676dad7860ba65f70518a2fcb5346a5da83->leave($__internal_c719d685e453520a4f7493c8cdc98676dad7860ba65f70518a2fcb5346a5da83_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_424bfb364ae4130c89bdc43008502623fc059b59dcafba77cf2196ab4c315ace = $this->env->getExtension("native_profiler");
        $__internal_424bfb364ae4130c89bdc43008502623fc059b59dcafba77cf2196ab4c315ace->enter($__internal_424bfb364ae4130c89bdc43008502623fc059b59dcafba77cf2196ab4c315ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_424bfb364ae4130c89bdc43008502623fc059b59dcafba77cf2196ab4c315ace->leave($__internal_424bfb364ae4130c89bdc43008502623fc059b59dcafba77cf2196ab4c315ace_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
