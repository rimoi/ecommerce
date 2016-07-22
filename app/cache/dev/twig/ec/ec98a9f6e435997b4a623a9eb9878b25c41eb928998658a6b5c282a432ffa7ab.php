<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3da1cc0fd0c1693acf13c38202d441f8e83bb9443e67a17e7a410cb61f655522 extends Twig_Template
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
        $__internal_b8a88b010b11d16591ad70af59a4894f8ea6706d626931a56d5740de5217bf0e = $this->env->getExtension("native_profiler");
        $__internal_b8a88b010b11d16591ad70af59a4894f8ea6706d626931a56d5740de5217bf0e->enter($__internal_b8a88b010b11d16591ad70af59a4894f8ea6706d626931a56d5740de5217bf0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b8a88b010b11d16591ad70af59a4894f8ea6706d626931a56d5740de5217bf0e->leave($__internal_b8a88b010b11d16591ad70af59a4894f8ea6706d626931a56d5740de5217bf0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
