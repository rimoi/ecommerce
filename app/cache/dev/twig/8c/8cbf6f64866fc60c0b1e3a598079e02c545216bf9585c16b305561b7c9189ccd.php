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
        $__internal_2b82f908c823b90661545bacf53a19084486e2b60e3f1a42e250a1c9778ee533 = $this->env->getExtension("native_profiler");
        $__internal_2b82f908c823b90661545bacf53a19084486e2b60e3f1a42e250a1c9778ee533->enter($__internal_2b82f908c823b90661545bacf53a19084486e2b60e3f1a42e250a1c9778ee533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2b82f908c823b90661545bacf53a19084486e2b60e3f1a42e250a1c9778ee533->leave($__internal_2b82f908c823b90661545bacf53a19084486e2b60e3f1a42e250a1c9778ee533_prof);

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
