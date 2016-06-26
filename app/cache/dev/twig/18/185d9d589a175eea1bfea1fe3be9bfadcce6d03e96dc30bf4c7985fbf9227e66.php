<?php

/* PagesBundle:Default:Pages/index.html.twig */
class __TwigTemplate_ef3d465d2bd7d4503447bd5a01e6c5ead4c6e3d5a48afd148dab7ec8528a3df2 extends Twig_Template
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
        $__internal_f79f5a6df4a1456b485b377cf892b7e40b1edbfeee7b5cf9a37ce8bca3919c3c = $this->env->getExtension("native_profiler");
        $__internal_f79f5a6df4a1456b485b377cf892b7e40b1edbfeee7b5cf9a37ce8bca3919c3c->enter($__internal_f79f5a6df4a1456b485b377cf892b7e40b1edbfeee7b5cf9a37ce8bca3919c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:Pages/index.html.twig"));

        // line 1
        echo "<html>

<body>
    <h1>Bienvenu sur notre page</h1>

        ";
        // line 6
        echo twig_var_dump($this->env, $context, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
        echo "

</body>

</html>
";
        
        $__internal_f79f5a6df4a1456b485b377cf892b7e40b1edbfeee7b5cf9a37ce8bca3919c3c->leave($__internal_f79f5a6df4a1456b485b377cf892b7e40b1edbfeee7b5cf9a37ce8bca3919c3c_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:Pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* <html>*/
/* */
/* <body>*/
/*     <h1>Bienvenu sur notre page</h1>*/
/* */
/*         {{ dump(page) }}*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
