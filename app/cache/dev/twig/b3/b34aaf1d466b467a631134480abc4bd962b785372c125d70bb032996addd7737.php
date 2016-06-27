<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1bf4cfdc3af600d8b42ba4842971d287652cb3f99b0b69f44636e7968e4bda4e extends Twig_Template
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
        $__internal_6024839830d4e402debce692516d624a7623d082f985139a4b2245ee72b8de89 = $this->env->getExtension("native_profiler");
        $__internal_6024839830d4e402debce692516d624a7623d082f985139a4b2245ee72b8de89->enter($__internal_6024839830d4e402debce692516d624a7623d082f985139a4b2245ee72b8de89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6024839830d4e402debce692516d624a7623d082f985139a4b2245ee72b8de89->leave($__internal_6024839830d4e402debce692516d624a7623d082f985139a4b2245ee72b8de89_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c417e40e7fe6bd4e2125456bf242d086588591e472e4628011e9ef8579bd5fa = $this->env->getExtension("native_profiler");
        $__internal_6c417e40e7fe6bd4e2125456bf242d086588591e472e4628011e9ef8579bd5fa->enter($__internal_6c417e40e7fe6bd4e2125456bf242d086588591e472e4628011e9ef8579bd5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c417e40e7fe6bd4e2125456bf242d086588591e472e4628011e9ef8579bd5fa->leave($__internal_6c417e40e7fe6bd4e2125456bf242d086588591e472e4628011e9ef8579bd5fa_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3723007ad141e91b31b108df556878bf46047bbe20c51f4b62b1b5342456a154 = $this->env->getExtension("native_profiler");
        $__internal_3723007ad141e91b31b108df556878bf46047bbe20c51f4b62b1b5342456a154->enter($__internal_3723007ad141e91b31b108df556878bf46047bbe20c51f4b62b1b5342456a154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "                    ";
        
        $__internal_3723007ad141e91b31b108df556878bf46047bbe20c51f4b62b1b5342456a154->leave($__internal_3723007ad141e91b31b108df556878bf46047bbe20c51f4b62b1b5342456a154_prof);

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
