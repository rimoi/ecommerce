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
        $__internal_d0d5761bb5d2dd5899dac2d9210bf7e722e389350e2d3adfba9ee7e21637e5b5 = $this->env->getExtension("native_profiler");
        $__internal_d0d5761bb5d2dd5899dac2d9210bf7e722e389350e2d3adfba9ee7e21637e5b5->enter($__internal_d0d5761bb5d2dd5899dac2d9210bf7e722e389350e2d3adfba9ee7e21637e5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d0d5761bb5d2dd5899dac2d9210bf7e722e389350e2d3adfba9ee7e21637e5b5->leave($__internal_d0d5761bb5d2dd5899dac2d9210bf7e722e389350e2d3adfba9ee7e21637e5b5_prof);

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
