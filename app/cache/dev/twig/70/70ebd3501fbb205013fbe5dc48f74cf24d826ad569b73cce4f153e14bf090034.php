<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_6e545c9a2d5bdbee7bbb2bc2142ceefc0a3897f49ca36d8fd6b7fcc81c65fe0b extends Twig_Template
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
        $__internal_ce26fe54b6ceceaaef43ddd2682a1ef7005741f99ebda8dec0c583595f481a12 = $this->env->getExtension("native_profiler");
        $__internal_ce26fe54b6ceceaaef43ddd2682a1ef7005741f99ebda8dec0c583595f481a12->enter($__internal_ce26fe54b6ceceaaef43ddd2682a1ef7005741f99ebda8dec0c583595f481a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ce26fe54b6ceceaaef43ddd2682a1ef7005741f99ebda8dec0c583595f481a12->leave($__internal_ce26fe54b6ceceaaef43ddd2682a1ef7005741f99ebda8dec0c583595f481a12_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */