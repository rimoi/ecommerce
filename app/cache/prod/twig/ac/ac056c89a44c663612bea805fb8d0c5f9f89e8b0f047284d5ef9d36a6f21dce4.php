<?php

/* PagesBundle:Default:Pages/modulesUsed/menu.html.twig */
class __TwigTemplate_8fe5b84e354666ee6225387ff58e054da33b80c96b2188c532cfe9e81ce8d25c extends Twig_Template
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
        // line 1
        echo "<html>

<body>

        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page"]) ? $context["page"] : null));
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
        return array (  41 => 9,  29 => 6,  25 => 5,  19 => 1,);
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
