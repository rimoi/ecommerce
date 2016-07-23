<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_d9ceb6b2d3831897f1f9a98e87cb56ef4f37deadaf2b0f490afaf8fe2ad544a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3217d257f9772c77071f488cb57f3e79555c0876129c2ad3ea0fae131b67f9d5 = $this->env->getExtension("native_profiler");
        $__internal_3217d257f9772c77071f488cb57f3e79555c0876129c2ad3ea0fae131b67f9d5->enter($__internal_3217d257f9772c77071f488cb57f3e79555c0876129c2ad3ea0fae131b67f9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3217d257f9772c77071f488cb57f3e79555c0876129c2ad3ea0fae131b67f9d5->leave($__internal_3217d257f9772c77071f488cb57f3e79555c0876129c2ad3ea0fae131b67f9d5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fa7e70cbea44dbc6762186a4544264b6109a8e60ff6a2b14f740d3d40461bba = $this->env->getExtension("native_profiler");
        $__internal_8fa7e70cbea44dbc6762186a4544264b6109a8e60ff6a2b14f740d3d40461bba->enter($__internal_8fa7e70cbea44dbc6762186a4544264b6109a8e60ff6a2b14f740d3d40461bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "        <div class=\"container\">

                    ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "                    ";
        }
        // line 14
        echo "
                    ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "        </div>
   ";
        
        $__internal_8fa7e70cbea44dbc6762186a4544264b6109a8e60ff6a2b14f740d3d40461bba->leave($__internal_8fa7e70cbea44dbc6762186a4544264b6109a8e60ff6a2b14f740d3d40461bba_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c2bb671392cf484b61028300a4cf92342b796e193e0a371aacfd8d1ceca0884 = $this->env->getExtension("native_profiler");
        $__internal_0c2bb671392cf484b61028300a4cf92342b796e193e0a371aacfd8d1ceca0884->enter($__internal_0c2bb671392cf484b61028300a4cf92342b796e193e0a371aacfd8d1ceca0884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "                    ";
        
        $__internal_0c2bb671392cf484b61028300a4cf92342b796e193e0a371aacfd8d1ceca0884->leave($__internal_0c2bb671392cf484b61028300a4cf92342b796e193e0a371aacfd8d1ceca0884_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 16,  93 => 15,  85 => 17,  83 => 15,  80 => 14,  77 => 13,  71 => 12,  62 => 9,  57 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/*     {% extends "::layout/layout.html.twig" %}*/
/*     {% block body %}*/
/*         <div class="container">*/
/* */
/*                     {% if app.request.hasPreviousSession %}*/
/*                         {% for type, messages in app.session.flashbag.all() %}*/
/*                             {% for message in messages %}*/
/*                                 <div class="flash-{{ type }}">*/
/*                                     {{ message }}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {% block fos_user_content %}*/
/*                     {% endblock fos_user_content %}*/
/*         </div>*/
/*    {% endblock %}*/
/* */
/* */
