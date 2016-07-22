<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d9240c4bdaf3be6246676ae65d7f91afc898f353b64c372d5f853fbc33ead4a8 extends Twig_Template
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
        $__internal_962c4db9ff25111fe85286898ad70990c2d3f293a1a119d1dfc81fb6681b1848 = $this->env->getExtension("native_profiler");
        $__internal_962c4db9ff25111fe85286898ad70990c2d3f293a1a119d1dfc81fb6681b1848->enter($__internal_962c4db9ff25111fe85286898ad70990c2d3f293a1a119d1dfc81fb6681b1848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_962c4db9ff25111fe85286898ad70990c2d3f293a1a119d1dfc81fb6681b1848->leave($__internal_962c4db9ff25111fe85286898ad70990c2d3f293a1a119d1dfc81fb6681b1848_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
