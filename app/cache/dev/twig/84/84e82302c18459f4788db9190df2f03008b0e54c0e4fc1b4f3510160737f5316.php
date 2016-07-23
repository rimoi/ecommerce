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
        $__internal_8a46306f1a8632cd863f22b928e50c836b8030d529df969d634ca0772ab81d58 = $this->env->getExtension("native_profiler");
        $__internal_8a46306f1a8632cd863f22b928e50c836b8030d529df969d634ca0772ab81d58->enter($__internal_8a46306f1a8632cd863f22b928e50c836b8030d529df969d634ca0772ab81d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a46306f1a8632cd863f22b928e50c836b8030d529df969d634ca0772ab81d58->leave($__internal_8a46306f1a8632cd863f22b928e50c836b8030d529df969d634ca0772ab81d58_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_07f194c07bd75725130ef53c945b0f6aa00d9dfc7d4b0d36f036fd2e5206bed9 = $this->env->getExtension("native_profiler");
        $__internal_07f194c07bd75725130ef53c945b0f6aa00d9dfc7d4b0d36f036fd2e5206bed9->enter($__internal_07f194c07bd75725130ef53c945b0f6aa00d9dfc7d4b0d36f036fd2e5206bed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_07f194c07bd75725130ef53c945b0f6aa00d9dfc7d4b0d36f036fd2e5206bed9->leave($__internal_07f194c07bd75725130ef53c945b0f6aa00d9dfc7d4b0d36f036fd2e5206bed9_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cb825ef47fb2b50b540ce3da3af907a3a06033afa399411b9e91d7f5df1ed8c = $this->env->getExtension("native_profiler");
        $__internal_2cb825ef47fb2b50b540ce3da3af907a3a06033afa399411b9e91d7f5df1ed8c->enter($__internal_2cb825ef47fb2b50b540ce3da3af907a3a06033afa399411b9e91d7f5df1ed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "                    ";
        
        $__internal_2cb825ef47fb2b50b540ce3da3af907a3a06033afa399411b9e91d7f5df1ed8c->leave($__internal_2cb825ef47fb2b50b540ce3da3af907a3a06033afa399411b9e91d7f5df1ed8c_prof);

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
