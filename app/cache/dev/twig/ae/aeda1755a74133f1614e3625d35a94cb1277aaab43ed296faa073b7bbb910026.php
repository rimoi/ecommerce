<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_1d11b8f42467be9ee67b1086d1b1186fcef10b9792ea4081f157f1cb1ffb04a8 extends Twig_Template
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
        $__internal_69d4bdf0dbf1523d5dd92c335e7c534a525f6de91a04bb23776b45fa53be3544 = $this->env->getExtension("native_profiler");
        $__internal_69d4bdf0dbf1523d5dd92c335e7c534a525f6de91a04bb23776b45fa53be3544->enter($__internal_69d4bdf0dbf1523d5dd92c335e7c534a525f6de91a04bb23776b45fa53be3544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_69d4bdf0dbf1523d5dd92c335e7c534a525f6de91a04bb23776b45fa53be3544->leave($__internal_69d4bdf0dbf1523d5dd92c335e7c534a525f6de91a04bb23776b45fa53be3544_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
