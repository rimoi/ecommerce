<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1fdaebf50806b5bea49d9c7cb611363202189dac91401bd9c46417812fbf6087 extends Twig_Template
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
        $__internal_ec3950c57bf60c068d94f6f618fb26cfc93ec11f53b71503721bbfb116bd96fd = $this->env->getExtension("native_profiler");
        $__internal_ec3950c57bf60c068d94f6f618fb26cfc93ec11f53b71503721bbfb116bd96fd->enter($__internal_ec3950c57bf60c068d94f6f618fb26cfc93ec11f53b71503721bbfb116bd96fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ec3950c57bf60c068d94f6f618fb26cfc93ec11f53b71503721bbfb116bd96fd->leave($__internal_ec3950c57bf60c068d94f6f618fb26cfc93ec11f53b71503721bbfb116bd96fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
