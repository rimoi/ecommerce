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
        $__internal_b69274e3633d9897da23ce3dc578a02fa697ea85437a256b854c3f3ac43ae6e2 = $this->env->getExtension("native_profiler");
        $__internal_b69274e3633d9897da23ce3dc578a02fa697ea85437a256b854c3f3ac43ae6e2->enter($__internal_b69274e3633d9897da23ce3dc578a02fa697ea85437a256b854c3f3ac43ae6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_b69274e3633d9897da23ce3dc578a02fa697ea85437a256b854c3f3ac43ae6e2->leave($__internal_b69274e3633d9897da23ce3dc578a02fa697ea85437a256b854c3f3ac43ae6e2_prof);

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
