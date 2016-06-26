<?php

/* PagesBundle:Default:Pages/modulesUsed/menu.html.twig */
class __TwigTemplate_c61f68271a60d573a9a5374b362ebc8cdd7bed195a07a120b6ae1de5a061708c extends Twig_Template
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
        $__internal_e7fbfdf43a23964c7be387258136b5c8fb2c94cbc8d2cfe6f47d58cc05bef775 = $this->env->getExtension("native_profiler");
        $__internal_e7fbfdf43a23964c7be387258136b5c8fb2c94cbc8d2cfe6f47d58cc05bef775->enter($__internal_e7fbfdf43a23964c7be387258136b5c8fb2c94cbc8d2cfe6f47d58cc05bef775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages/modulesUsed/menu.html.twig"));

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
        
        $__internal_e7fbfdf43a23964c7be387258136b5c8fb2c94cbc8d2cfe6f47d58cc05bef775->leave($__internal_e7fbfdf43a23964c7be387258136b5c8fb2c94cbc8d2cfe6f47d58cc05bef775_prof);

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
