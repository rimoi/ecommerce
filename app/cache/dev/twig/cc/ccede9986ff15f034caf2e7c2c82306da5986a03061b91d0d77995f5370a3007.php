<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e8c413950aef40ae9555fa0bafd49ec253a72acbfd4e3a4c0e2cf832d6ae5cab extends Twig_Template
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
        $__internal_6e87aa9fde1af481fe254210c08a2fb2ddb18a0226432f9838679c4bf4551c8a = $this->env->getExtension("native_profiler");
        $__internal_6e87aa9fde1af481fe254210c08a2fb2ddb18a0226432f9838679c4bf4551c8a->enter($__internal_6e87aa9fde1af481fe254210c08a2fb2ddb18a0226432f9838679c4bf4551c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6e87aa9fde1af481fe254210c08a2fb2ddb18a0226432f9838679c4bf4551c8a->leave($__internal_6e87aa9fde1af481fe254210c08a2fb2ddb18a0226432f9838679c4bf4551c8a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
