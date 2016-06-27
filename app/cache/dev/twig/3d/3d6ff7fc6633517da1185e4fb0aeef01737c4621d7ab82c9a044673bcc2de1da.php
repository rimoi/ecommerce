<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_20a994d4aabbdd14df800a68f97991525d9be538b5ce27ed08fc5a8466add707 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_aecf2a73ed1716603472d9faf1d2c6f18fed2f75661931144d05c0279508bff2 = $this->env->getExtension("native_profiler");
        $__internal_aecf2a73ed1716603472d9faf1d2c6f18fed2f75661931144d05c0279508bff2->enter($__internal_aecf2a73ed1716603472d9faf1d2c6f18fed2f75661931144d05c0279508bff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aecf2a73ed1716603472d9faf1d2c6f18fed2f75661931144d05c0279508bff2->leave($__internal_aecf2a73ed1716603472d9faf1d2c6f18fed2f75661931144d05c0279508bff2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf0683519eef8a97ad2f600bb201bfa7c7a9adf00d5904ab9d0b62fe0423b6bc = $this->env->getExtension("native_profiler");
        $__internal_bf0683519eef8a97ad2f600bb201bfa7c7a9adf00d5904ab9d0b62fe0423b6bc->enter($__internal_bf0683519eef8a97ad2f600bb201bfa7c7a9adf00d5904ab9d0b62fe0423b6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de changer de T-shirt.
                        </em>
                        <br /><br />
                        <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>

                    </div>

                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                            <label for=\"username\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                            <label for=\"password\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                            <br>

                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />


                        </form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



";
        
        $__internal_bf0683519eef8a97ad2f600bb201bfa7c7a9adf00d5904ab9d0b62fe0423b6bc->leave($__internal_bf0683519eef8a97ad2f600bb201bfa7c7a9adf00d5904ab9d0b62fe0423b6bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 44,  97 => 38,  90 => 34,  85 => 32,  81 => 31,  76 => 29,  72 => 28,  63 => 22,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Connexion</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <h4>Pas encore inscrit ?</h4>*/
/*                         <em>*/
/*                             nous vous invitons à vous inscrire<br />*/
/*                             afin de passer votre commande et de changer de T-shirt.*/
/*                         </em>*/
/*                         <br /><br />*/
/*                         <a href="{{ path('fos_user_registration_register') }}" class="btn btn-primary">S'inscrire</a>*/
/* */
/*                     </div>*/
/* */
/*                     <div class="span4 offset2">*/
/*                         <h4>Connexion</h4>*/
/*                         <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                             <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                             <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*                             <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                             <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*                             <input type="password" id="password" name="_password" required="required" />*/
/*                             <br>*/
/* */
/*                             <input class="btn btn-primary" type="submit" value="{{ 'security.login.submit'|trans }}" />*/
/* */
/* */
/*                         </form>*/
/*                     </div>*/
/*                     <div class="span10">*/
/*                         <a href="{{ path('fos_user_resetting_request') }}">Mot de passe perdu ?</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* {% endblock fos_user_content %}*/
/* */
