<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_785b6f51498f232b4554c3386f6886a2ed901f147c08a93d87550d04ca5a1402 extends Twig_Template
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
        $__internal_4e71fb793b20f0679ea837f5208ea66087e7795d7b37407f6b0b71b949fcb582 = $this->env->getExtension("native_profiler");
        $__internal_4e71fb793b20f0679ea837f5208ea66087e7795d7b37407f6b0b71b949fcb582->enter($__internal_4e71fb793b20f0679ea837f5208ea66087e7795d7b37407f6b0b71b949fcb582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e71fb793b20f0679ea837f5208ea66087e7795d7b37407f6b0b71b949fcb582->leave($__internal_4e71fb793b20f0679ea837f5208ea66087e7795d7b37407f6b0b71b949fcb582_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fde9a48c40096bcedd2ab907fe2978c7290aaa2af000ac1aec1e14a767ea73b7 = $this->env->getExtension("native_profiler");
        $__internal_fde9a48c40096bcedd2ab907fe2978c7290aaa2af000ac1aec1e14a767ea73b7->enter($__internal_fde9a48c40096bcedd2ab907fe2978c7290aaa2af000ac1aec1e14a767ea73b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fde9a48c40096bcedd2ab907fe2978c7290aaa2af000ac1aec1e14a767ea73b7->leave($__internal_fde9a48c40096bcedd2ab907fe2978c7290aaa2af000ac1aec1e14a767ea73b7_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_038bf5afdfa220d517768948bae2e95978affb11d3b87f80f9dd196f0eca5dd4 = $this->env->getExtension("native_profiler");
        $__internal_038bf5afdfa220d517768948bae2e95978affb11d3b87f80f9dd196f0eca5dd4->enter($__internal_038bf5afdfa220d517768948bae2e95978affb11d3b87f80f9dd196f0eca5dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "                    ";
        
        $__internal_038bf5afdfa220d517768948bae2e95978affb11d3b87f80f9dd196f0eca5dd4->leave($__internal_038bf5afdfa220d517768948bae2e95978affb11d3b87f80f9dd196f0eca5dd4_prof);

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
