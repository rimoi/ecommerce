<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d35e56b6aefdb555d05a635099fa4948640d877943a388d068fdfd70d5a06318 extends Twig_Template
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
        $__internal_692cf42a866df44ab4eb497ca5054ad14224d4e498782c6f84529c81de8eb266 = $this->env->getExtension("native_profiler");
        $__internal_692cf42a866df44ab4eb497ca5054ad14224d4e498782c6f84529c81de8eb266->enter($__internal_692cf42a866df44ab4eb497ca5054ad14224d4e498782c6f84529c81de8eb266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_692cf42a866df44ab4eb497ca5054ad14224d4e498782c6f84529c81de8eb266->leave($__internal_692cf42a866df44ab4eb497ca5054ad14224d4e498782c6f84529c81de8eb266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
