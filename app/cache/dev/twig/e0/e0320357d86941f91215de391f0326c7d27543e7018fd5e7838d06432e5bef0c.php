<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5e26a9ea80d851fb20fb94bf88e9ab99d5ed89400be40d7bb1956a3d11efb234 extends Twig_Template
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
        $__internal_d26d48db82ab262f0b3d385f21ce6b1660a05ab6a4a19c907758166b2a5094cd = $this->env->getExtension("native_profiler");
        $__internal_d26d48db82ab262f0b3d385f21ce6b1660a05ab6a4a19c907758166b2a5094cd->enter($__internal_d26d48db82ab262f0b3d385f21ce6b1660a05ab6a4a19c907758166b2a5094cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_d26d48db82ab262f0b3d385f21ce6b1660a05ab6a4a19c907758166b2a5094cd->leave($__internal_d26d48db82ab262f0b3d385f21ce6b1660a05ab6a4a19c907758166b2a5094cd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
