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
        $__internal_5998399922e38e31cba9e23a283e36113018ab5e43a8b58f183143dedaa42ebd = $this->env->getExtension("native_profiler");
        $__internal_5998399922e38e31cba9e23a283e36113018ab5e43a8b58f183143dedaa42ebd->enter($__internal_5998399922e38e31cba9e23a283e36113018ab5e43a8b58f183143dedaa42ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5998399922e38e31cba9e23a283e36113018ab5e43a8b58f183143dedaa42ebd->leave($__internal_5998399922e38e31cba9e23a283e36113018ab5e43a8b58f183143dedaa42ebd_prof);

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
