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
        $__internal_3bd0d48a8c9e9aab704c0bd4dfab015e1ce32abf1d02d4db99d2387c85cb53f3 = $this->env->getExtension("native_profiler");
        $__internal_3bd0d48a8c9e9aab704c0bd4dfab015e1ce32abf1d02d4db99d2387c85cb53f3->enter($__internal_3bd0d48a8c9e9aab704c0bd4dfab015e1ce32abf1d02d4db99d2387c85cb53f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3bd0d48a8c9e9aab704c0bd4dfab015e1ce32abf1d02d4db99d2387c85cb53f3->leave($__internal_3bd0d48a8c9e9aab704c0bd4dfab015e1ce32abf1d02d4db99d2387c85cb53f3_prof);

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
