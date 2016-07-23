<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_053588cbb170fa751f965b489726f3af279a88b75ddfbd437200120e0f5508c0 extends Twig_Template
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
        $__internal_658ded73a31eda5dff37719d82435dda440db63a282c128ab325bf4c00cc6c9d = $this->env->getExtension("native_profiler");
        $__internal_658ded73a31eda5dff37719d82435dda440db63a282c128ab325bf4c00cc6c9d->enter($__internal_658ded73a31eda5dff37719d82435dda440db63a282c128ab325bf4c00cc6c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_658ded73a31eda5dff37719d82435dda440db63a282c128ab325bf4c00cc6c9d->leave($__internal_658ded73a31eda5dff37719d82435dda440db63a282c128ab325bf4c00cc6c9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
