<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_8f922ac5a30a3e167da6097b3b1467fcd581fb7240f8eefa20df584a9d550615 extends Twig_Template
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
        $__internal_948426a188bb08671d91d72610b3317881e661b764814786a951b3a6d846076d = $this->env->getExtension("native_profiler");
        $__internal_948426a188bb08671d91d72610b3317881e661b764814786a951b3a6d846076d->enter($__internal_948426a188bb08671d91d72610b3317881e661b764814786a951b3a6d846076d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_948426a188bb08671d91d72610b3317881e661b764814786a951b3a6d846076d->leave($__internal_948426a188bb08671d91d72610b3317881e661b764814786a951b3a6d846076d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
