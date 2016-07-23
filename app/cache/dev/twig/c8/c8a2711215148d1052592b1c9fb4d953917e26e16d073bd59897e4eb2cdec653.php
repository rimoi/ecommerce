<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0111151ff29afab10c4db139c9820c52d6b463a24982b49829a5e0d2e052fd37 extends Twig_Template
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
        $__internal_c935d0582f40d5a8f44771ea03b9e80a58aced5d816181706dc95b16fc19f5fa = $this->env->getExtension("native_profiler");
        $__internal_c935d0582f40d5a8f44771ea03b9e80a58aced5d816181706dc95b16fc19f5fa->enter($__internal_c935d0582f40d5a8f44771ea03b9e80a58aced5d816181706dc95b16fc19f5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c935d0582f40d5a8f44771ea03b9e80a58aced5d816181706dc95b16fc19f5fa->leave($__internal_c935d0582f40d5a8f44771ea03b9e80a58aced5d816181706dc95b16fc19f5fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
