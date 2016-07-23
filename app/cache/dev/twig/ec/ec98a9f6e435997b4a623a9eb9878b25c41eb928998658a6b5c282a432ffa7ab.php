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
        $__internal_8fdd306465eaf14728a3cb279e1016110082684d249c9c6a8e920f1e31049b62 = $this->env->getExtension("native_profiler");
        $__internal_8fdd306465eaf14728a3cb279e1016110082684d249c9c6a8e920f1e31049b62->enter($__internal_8fdd306465eaf14728a3cb279e1016110082684d249c9c6a8e920f1e31049b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8fdd306465eaf14728a3cb279e1016110082684d249c9c6a8e920f1e31049b62->leave($__internal_8fdd306465eaf14728a3cb279e1016110082684d249c9c6a8e920f1e31049b62_prof);

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
