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
        $__internal_4841b5c4692f98d1c0e09556ba9cb655aa18c0be6452cbcb8753310d4ccd0886 = $this->env->getExtension("native_profiler");
        $__internal_4841b5c4692f98d1c0e09556ba9cb655aa18c0be6452cbcb8753310d4ccd0886->enter($__internal_4841b5c4692f98d1c0e09556ba9cb655aa18c0be6452cbcb8753310d4ccd0886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4841b5c4692f98d1c0e09556ba9cb655aa18c0be6452cbcb8753310d4ccd0886->leave($__internal_4841b5c4692f98d1c0e09556ba9cb655aa18c0be6452cbcb8753310d4ccd0886_prof);

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
