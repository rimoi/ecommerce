<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d35e56b6aefdb555d05a635099fa4948640d877943a388d068fdfd70d5a06318 extends Twig_Template
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
        $__internal_5b5b1aef7d45524c528bc50fa4a19bb36a1b11a349b6e71945b1c0c0fee023bf = $this->env->getExtension("native_profiler");
        $__internal_5b5b1aef7d45524c528bc50fa4a19bb36a1b11a349b6e71945b1c0c0fee023bf->enter($__internal_5b5b1aef7d45524c528bc50fa4a19bb36a1b11a349b6e71945b1c0c0fee023bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5b5b1aef7d45524c528bc50fa4a19bb36a1b11a349b6e71945b1c0c0fee023bf->leave($__internal_5b5b1aef7d45524c528bc50fa4a19bb36a1b11a349b6e71945b1c0c0fee023bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
