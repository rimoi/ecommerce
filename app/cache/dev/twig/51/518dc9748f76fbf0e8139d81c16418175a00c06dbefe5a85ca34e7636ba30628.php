<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_623194257ce17d854d62bf16c87ec92aa66499f570409b9e159c93c27cba6e77 extends Twig_Template
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
        $__internal_99ca55b73937879ef87f12add9cd3ea3a2eb07b004d3ac3e26f1aff2d73a4a4a = $this->env->getExtension("native_profiler");
        $__internal_99ca55b73937879ef87f12add9cd3ea3a2eb07b004d3ac3e26f1aff2d73a4a4a->enter($__internal_99ca55b73937879ef87f12add9cd3ea3a2eb07b004d3ac3e26f1aff2d73a4a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_99ca55b73937879ef87f12add9cd3ea3a2eb07b004d3ac3e26f1aff2d73a4a4a->leave($__internal_99ca55b73937879ef87f12add9cd3ea3a2eb07b004d3ac3e26f1aff2d73a4a4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
