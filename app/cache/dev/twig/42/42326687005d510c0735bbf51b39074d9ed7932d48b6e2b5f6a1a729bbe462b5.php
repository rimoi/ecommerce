<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_abd50b968fe73c0d1e46f573d6f0c18c2f1dab0b1a27edcfd6fc5132b114c051 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2152d2dda367a80a747b1292a7d2af72dbacce71ca0db712b3d1231cb7db0f0b = $this->env->getExtension("native_profiler");
        $__internal_2152d2dda367a80a747b1292a7d2af72dbacce71ca0db712b3d1231cb7db0f0b->enter($__internal_2152d2dda367a80a747b1292a7d2af72dbacce71ca0db712b3d1231cb7db0f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2152d2dda367a80a747b1292a7d2af72dbacce71ca0db712b3d1231cb7db0f0b->leave($__internal_2152d2dda367a80a747b1292a7d2af72dbacce71ca0db712b3d1231cb7db0f0b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa2d187c0442f92db92e41dcffd0c083f0625b3688c4b21dba32dbef9df062e8 = $this->env->getExtension("native_profiler");
        $__internal_aa2d187c0442f92db92e41dcffd0c083f0625b3688c4b21dba32dbef9df062e8->enter($__internal_aa2d187c0442f92db92e41dcffd0c083f0625b3688c4b21dba32dbef9df062e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_aa2d187c0442f92db92e41dcffd0c083f0625b3688c4b21dba32dbef9df062e8->leave($__internal_aa2d187c0442f92db92e41dcffd0c083f0625b3688c4b21dba32dbef9df062e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
