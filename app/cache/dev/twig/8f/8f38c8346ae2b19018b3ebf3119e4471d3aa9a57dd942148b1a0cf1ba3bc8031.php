<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_95c01631c3059a6e22d6dec8c12c8f72966bb45ef5d9eb0f0ea99b3230e0d23f extends Twig_Template
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
        $__internal_1da655e96085660f1cce8533698aff820ff1ef4ffec3ff5590597f854b7cae17 = $this->env->getExtension("native_profiler");
        $__internal_1da655e96085660f1cce8533698aff820ff1ef4ffec3ff5590597f854b7cae17->enter($__internal_1da655e96085660f1cce8533698aff820ff1ef4ffec3ff5590597f854b7cae17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1da655e96085660f1cce8533698aff820ff1ef4ffec3ff5590597f854b7cae17->leave($__internal_1da655e96085660f1cce8533698aff820ff1ef4ffec3ff5590597f854b7cae17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
