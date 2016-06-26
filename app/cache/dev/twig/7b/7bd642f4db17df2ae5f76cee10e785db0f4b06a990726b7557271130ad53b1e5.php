<?php

/* EcommerceBundle:Default:categories/layout/categorie.html.twig */
class __TwigTemplate_5c4e658909eebeebfc668691f099b756e6ab3a343992ad83a91ad08b8d03d966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:categories/layout/categorie.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::/layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aec2229a227491c5541a35c9416529e30777fcf3eaa5db6f123b84600c6cb9f = $this->env->getExtension("native_profiler");
        $__internal_4aec2229a227491c5541a35c9416529e30777fcf3eaa5db6f123b84600c6cb9f->enter($__internal_4aec2229a227491c5541a35c9416529e30777fcf3eaa5db6f123b84600c6cb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:categories/layout/categorie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aec2229a227491c5541a35c9416529e30777fcf3eaa5db6f123b84600c6cb9f->leave($__internal_4aec2229a227491c5541a35c9416529e30777fcf3eaa5db6f123b84600c6cb9f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_55d6b4b382762a17dc68229c03ad904cbbc1adb2178e2f5fcd9008475027edb8 = $this->env->getExtension("native_profiler");
        $__internal_55d6b4b382762a17dc68229c03ad904cbbc1adb2178e2f5fcd9008475027edb8->enter($__internal_55d6b4b382762a17dc68229c03ad904cbbc1adb2178e2f5fcd9008475027edb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1> Vous êtes bien sur les categories</h1>
";
        
        $__internal_55d6b4b382762a17dc68229c03ad904cbbc1adb2178e2f5fcd9008475027edb8->leave($__internal_55d6b4b382762a17dc68229c03ad904cbbc1adb2178e2f5fcd9008475027edb8_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:categories/layout/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* {% block body %}*/
/* <h1> Vous êtes bien sur les categories</h1>*/
/* {% endblock %}*/
