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
        $__internal_784842566605ed69fe7947434750c33f67d65da9a1323dfdbcddcb3fd22c593d = $this->env->getExtension("native_profiler");
        $__internal_784842566605ed69fe7947434750c33f67d65da9a1323dfdbcddcb3fd22c593d->enter($__internal_784842566605ed69fe7947434750c33f67d65da9a1323dfdbcddcb3fd22c593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_784842566605ed69fe7947434750c33f67d65da9a1323dfdbcddcb3fd22c593d->leave($__internal_784842566605ed69fe7947434750c33f67d65da9a1323dfdbcddcb3fd22c593d_prof);

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
