<?php

/* @Pages/Default/Pages/modulesUsed/menu.html.twig */
class __TwigTemplate_782fcafd2164a2c797ab85d30cf637dcf390d8c40f787ba4412ae1dbe36612d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99384c43ab40e9f2e0d512679972cb32f88bf12a4afad37f6f51c03f2ef416de = $this->env->getExtension("native_profiler");
        $__internal_99384c43ab40e9f2e0d512679972cb32f88bf12a4afad37f6f51c03f2ef416de->enter($__internal_99384c43ab40e9f2e0d512679972cb32f88bf12a4afad37f6f51c03f2ef416de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Pages/Default/Pages/modulesUsed/menu.html.twig"));

        // line 1
        echo "<html>

<body>

        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
        foreach ($context['_seq'] as $context["_key"] => $context["mypage"]) {
            // line 6
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("page", array("id" => $this->getAttribute($context["mypage"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["mypage"], "titre", array()), "html", null, true);
            echo "</a>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mypage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "


</body>

</html>
";
        
        $__internal_99384c43ab40e9f2e0d512679972cb32f88bf12a4afad37f6f51c03f2ef416de->leave($__internal_99384c43ab40e9f2e0d512679972cb32f88bf12a4afad37f6f51c03f2ef416de_prof);

    }

    public function getTemplateName()
    {
        return "@Pages/Default/Pages/modulesUsed/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <html>*/
/* */
/* <body>*/
/* */
/*         {% for mypage in page %}*/
/*         <li><a href="{{path('page', {'id':mypage.id})}}">{{ mypage.titre }}</a>*/
/* */
/*         {% endfor %}*/
/* */
/* */
/* */
/* </body>*/
/* */
/* </html>*/
/* */
