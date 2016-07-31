<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_0ece2a5c67ee57d03d2468663bbf1bef82bdd9b273492dceaf279ca5e330cd4a extends Twig_Template
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
        $__internal_c94f9ec7dd6ec30d28dbf7e25ac8afc0aea5fca0cdd0b2d3c4c909391eb81870 = $this->env->getExtension("native_profiler");
        $__internal_c94f9ec7dd6ec30d28dbf7e25ac8afc0aea5fca0cdd0b2d3c4c909391eb81870->enter($__internal_c94f9ec7dd6ec30d28dbf7e25ac8afc0aea5fca0cdd0b2d3c4c909391eb81870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c94f9ec7dd6ec30d28dbf7e25ac8afc0aea5fca0cdd0b2d3c4c909391eb81870->leave($__internal_c94f9ec7dd6ec30d28dbf7e25ac8afc0aea5fca0cdd0b2d3c4c909391eb81870_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
