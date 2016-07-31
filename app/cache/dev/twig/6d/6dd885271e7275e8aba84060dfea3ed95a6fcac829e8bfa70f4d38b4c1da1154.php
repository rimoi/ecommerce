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
        $__internal_024e0b43187a47359e400757c96e512d01dcf6873344f4f9c13abcf585a543e9 = $this->env->getExtension("native_profiler");
        $__internal_024e0b43187a47359e400757c96e512d01dcf6873344f4f9c13abcf585a543e9->enter($__internal_024e0b43187a47359e400757c96e512d01dcf6873344f4f9c13abcf585a543e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_024e0b43187a47359e400757c96e512d01dcf6873344f4f9c13abcf585a543e9->leave($__internal_024e0b43187a47359e400757c96e512d01dcf6873344f4f9c13abcf585a543e9_prof);

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
