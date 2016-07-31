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
        $__internal_03d86075647f8c39f3cd56507bb7ba02fc32154832f792416867239101711167 = $this->env->getExtension("native_profiler");
        $__internal_03d86075647f8c39f3cd56507bb7ba02fc32154832f792416867239101711167->enter($__internal_03d86075647f8c39f3cd56507bb7ba02fc32154832f792416867239101711167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_03d86075647f8c39f3cd56507bb7ba02fc32154832f792416867239101711167->leave($__internal_03d86075647f8c39f3cd56507bb7ba02fc32154832f792416867239101711167_prof);

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
