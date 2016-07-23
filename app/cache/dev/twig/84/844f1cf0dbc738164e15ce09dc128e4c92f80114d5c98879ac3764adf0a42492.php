<?php

/* PagesBundle:Default:Pages/modulesUsed/menu.html.twig */
class __TwigTemplate_67210520c11ca692a5d600d0ba876e5b0c4844f88173c04933bc5b4a654888a4 extends Twig_Template
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
        $__internal_d2c65ac134a5f605d6c540a923eeeacd476db7d0228187cf87e9cb8aa530134e = $this->env->getExtension("native_profiler");
        $__internal_d2c65ac134a5f605d6c540a923eeeacd476db7d0228187cf87e9cb8aa530134e->enter($__internal_d2c65ac134a5f605d6c540a923eeeacd476db7d0228187cf87e9cb8aa530134e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages/modulesUsed/menu.html.twig"));

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
        
        $__internal_d2c65ac134a5f605d6c540a923eeeacd476db7d0228187cf87e9cb8aa530134e->leave($__internal_d2c65ac134a5f605d6c540a923eeeacd476db7d0228187cf87e9cb8aa530134e_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:Pages/modulesUsed/menu.html.twig";
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
