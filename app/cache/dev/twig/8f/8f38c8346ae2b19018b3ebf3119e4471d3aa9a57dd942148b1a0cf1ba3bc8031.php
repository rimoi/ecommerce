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
        $__internal_4f870401081ea5daa138f46d66b99e5eddb91774648f73586e6a1dd339e88e55 = $this->env->getExtension("native_profiler");
        $__internal_4f870401081ea5daa138f46d66b99e5eddb91774648f73586e6a1dd339e88e55->enter($__internal_4f870401081ea5daa138f46d66b99e5eddb91774648f73586e6a1dd339e88e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4f870401081ea5daa138f46d66b99e5eddb91774648f73586e6a1dd339e88e55->leave($__internal_4f870401081ea5daa138f46d66b99e5eddb91774648f73586e6a1dd339e88e55_prof);

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
