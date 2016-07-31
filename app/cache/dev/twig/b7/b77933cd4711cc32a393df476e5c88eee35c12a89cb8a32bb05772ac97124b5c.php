<?php

/* EcommerceBundle:Default:panier/layout/livraison.html.twig */
class __TwigTemplate_3e4ea9a38cd654b43d3afbe6a2f73b6137aabd4d6f432f664c191b71d3f12ef4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::/layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/livraison.html.twig", 1);
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
        $__internal_a4dea43bcac6d90c8c697f34516ed2728d5f23942874c81e817c719c37536ae3 = $this->env->getExtension("native_profiler");
        $__internal_a4dea43bcac6d90c8c697f34516ed2728d5f23942874c81e817c719c37536ae3->enter($__internal_a4dea43bcac6d90c8c697f34516ed2728d5f23942874c81e817c719c37536ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/livraison.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4dea43bcac6d90c8c697f34516ed2728d5f23942874c81e817c719c37536ae3->leave($__internal_a4dea43bcac6d90c8c697f34516ed2728d5f23942874c81e817c719c37536ae3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67232ba5e57357af44c797c0aeec095bb14121bdd61f4ecd0bc800791ad14f0f = $this->env->getExtension("native_profiler");
        $__internal_67232ba5e57357af44c797c0aeec095bb14121bdd61f4ecd0bc800791ad14f0f->enter($__internal_67232ba5e57357af44c797c0aeec095bb14121bdd61f4ecd0bc800791ad14f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
            // line 5
            echo "        <div class=\"alert alert-success\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["flash"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span12\">
                <h2>Livraison</h2>
                <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                    <div class=\"accordion-inner\">
                        <div class=\"span4\">
                            ";
        // line 16
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array())) != 0)) {
            // line 17
            echo "                            <form action=\"";
            echo $this->env->getExtension('routing')->getPath("validation");
            echo "\" method=\"post\">

                                <h4>Adresse de livraison</h4>
                                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 21
                echo "                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"livraison\"  value=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                   ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                    <br>
                                    ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo "
                                </label>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "                                <br> <br> <br>
                                <h4>Adresse de facturation</h4>
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["utilisateur"]) ? $context["utilisateur"] : $this->getContext($context, "utilisateur")), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 31
                echo "                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"facturation\"  value=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\"";
                }
                echo ">
                                   ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("livraisonAdresseSuppression", array("id" => $this->getAttribute($context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                    <br>
                                    ";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "nom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["adresse"], "prenom", array()), "html", null, true);
                echo "
                                </label>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "                                <br>
                                <button class=\"btn btn-primary\">Valider mes Adresses</button>
                            </form>

                            ";
        }
        // line 43
        echo "                        </div>


                        <div class=\"span4 offset2\">
                            <h4>Ajouter une nouvelle adresse</h4>
                            <form action=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("livraison");
        echo "\" method=\"post\">
                               ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

";
        
        $__internal_67232ba5e57357af44c797c0aeec095bb14121bdd61f4ecd0bc800791ad14f0f->leave($__internal_67232ba5e57357af44c797c0aeec095bb14121bdd61f4ecd0bc800791ad14f0f_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 49,  209 => 48,  202 => 43,  195 => 38,  176 => 35,  165 => 33,  157 => 32,  154 => 31,  137 => 30,  133 => 28,  114 => 25,  103 => 23,  95 => 22,  92 => 21,  75 => 20,  68 => 17,  66 => 16,  57 => 9,  48 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "::/layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     {% for flash in app.session.flashbag.get('success') %}*/
/*         <div class="alert alert-success">*/
/*             {{ flash }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span12">*/
/*                 <h2>Livraison</h2>*/
/*                 <div id="collapseOne" class="accordion-body collapse in">*/
/*                     <div class="accordion-inner">*/
/*                         <div class="span4">*/
/*                             {% if utilisateur.adresses|length != 0 %}*/
/*                             <form action="{{path('validation')}}" method="post">*/
/* */
/*                                 <h4>Adresse de livraison</h4>*/
/*                                 {% for adresse in utilisateur.adresses %}*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="livraison"  value="{{ adresse.id }}" {%  if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/*                                    {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} <a href="{{ path('livraisonAdresseSuppression', {'id' : adresse.id}) }}"><i class="icon-trash"></i></a>*/
/*                                     <br>*/
/*                                     {{ adresse.nom }} {{ adresse.prenom }}*/
/*                                 </label>*/
/*                                 {% endfor %}*/
/*                                 <br> <br> <br>*/
/*                                 <h4>Adresse de facturation</h4>*/
/*                                 {% for adresse in utilisateur.adresses %}*/
/*                                 <label class="radio">*/
/*                                     <input type="radio" name="facturation"  value="{{ adresse.id }}" {%  if loop.index0 == 0 %}checked="checked"{% endif %}>*/
/*                                    {{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }} <a href="{{ path('livraisonAdresseSuppression', {'id': adresse.id}) }}"><i class="icon-trash"></i></a>*/
/*                                     <br>*/
/*                                     {{ adresse.nom }} {{ adresse.prenom }}*/
/*                                 </label>*/
/*                                 {% endfor %}*/
/*                                 <br>*/
/*                                 <button class="btn btn-primary">Valider mes Adresses</button>*/
/*                             </form>*/
/* */
/*                             {% endif %}*/
/*                         </div>*/
/* */
/* */
/*                         <div class="span4 offset2">*/
/*                             <h4>Ajouter une nouvelle adresse</h4>*/
/*                             <form action="{{ path('livraison') }}" method="post">*/
/*                                {{ form_widget(form) }}*/
/*                                 <button class="btn btn-primary" type="submit">Ajouter</button>*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
