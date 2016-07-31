<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_7ceb54f2520e21cc9e00652dd34797930f7fbee482b20d15e402d5e95385b885 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
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
        $__internal_a509d948eeaf9f85fcc50f61859f6f87693a62d2b11d920a0bc404d5a3d80a6e = $this->env->getExtension("native_profiler");
        $__internal_a509d948eeaf9f85fcc50f61859f6f87693a62d2b11d920a0bc404d5a3d80a6e->enter($__internal_a509d948eeaf9f85fcc50f61859f6f87693a62d2b11d920a0bc404d5a3d80a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a509d948eeaf9f85fcc50f61859f6f87693a62d2b11d920a0bc404d5a3d80a6e->leave($__internal_a509d948eeaf9f85fcc50f61859f6f87693a62d2b11d920a0bc404d5a3d80a6e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_74e489fee8bd97ae98b7a957f6b780e41e70cc980ee52240f594cd4b11c78ac7 = $this->env->getExtension("native_profiler");
        $__internal_74e489fee8bd97ae98b7a957f6b780e41e70cc980ee52240f594cd4b11c78ac7->enter($__internal_74e489fee8bd97ae98b7a957f6b780e41e70cc980ee52240f594cd4b11c78ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_74e489fee8bd97ae98b7a957f6b780e41e70cc980ee52240f594cd4b11c78ac7->leave($__internal_74e489fee8bd97ae98b7a957f6b780e41e70cc980ee52240f594cd4b11c78ac7_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_79fbc5c4dd8940ca68eafc8c2ddcdb77bcf5c11fc02a5b71241f1dcc1bae79dd = $this->env->getExtension("native_profiler");
        $__internal_79fbc5c4dd8940ca68eafc8c2ddcdb77bcf5c11fc02a5b71241f1dcc1bae79dd->enter($__internal_79fbc5c4dd8940ca68eafc8c2ddcdb77bcf5c11fc02a5b71241f1dcc1bae79dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "                    ";
        
        $__internal_79fbc5c4dd8940ca68eafc8c2ddcdb77bcf5c11fc02a5b71241f1dcc1bae79dd->leave($__internal_79fbc5c4dd8940ca68eafc8c2ddcdb77bcf5c11fc02a5b71241f1dcc1bae79dd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
