<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_1df3dea384389c3299145896be8e50ac235c14f323ed24b8d51dbb5ebab4620a extends Twig_Template
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
        $__internal_26108a73ec351a83c15f3141d307197423c9b851c4836e33da0166aac0aeedb8 = $this->env->getExtension("native_profiler");
        $__internal_26108a73ec351a83c15f3141d307197423c9b851c4836e33da0166aac0aeedb8->enter($__internal_26108a73ec351a83c15f3141d307197423c9b851c4836e33da0166aac0aeedb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_26108a73ec351a83c15f3141d307197423c9b851c4836e33da0166aac0aeedb8->leave($__internal_26108a73ec351a83c15f3141d307197423c9b851c4836e33da0166aac0aeedb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(*/
/*             $view['form']->widget($form['year']),*/
/*             $view['form']->widget($form['month']),*/
/*             $view['form']->widget($form['day']),*/
/*         ), $date_pattern) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
