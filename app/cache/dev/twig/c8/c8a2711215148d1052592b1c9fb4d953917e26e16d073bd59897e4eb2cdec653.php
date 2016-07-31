<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0111151ff29afab10c4db139c9820c52d6b463a24982b49829a5e0d2e052fd37 extends Twig_Template
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
        $__internal_b18926fbc2b453e5f59b655df10196e92d33e96ac05f705678d52989a350f5ed = $this->env->getExtension("native_profiler");
        $__internal_b18926fbc2b453e5f59b655df10196e92d33e96ac05f705678d52989a350f5ed->enter($__internal_b18926fbc2b453e5f59b655df10196e92d33e96ac05f705678d52989a350f5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b18926fbc2b453e5f59b655df10196e92d33e96ac05f705678d52989a350f5ed->leave($__internal_b18926fbc2b453e5f59b655df10196e92d33e96ac05f705678d52989a350f5ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
