<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_519403bd46a1b2f8edde98d8ca45606f2c2ac80fdfb47863066840b9fc71dfe7 extends Twig_Template
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
        $__internal_93fbe3ade9fde1f77a1913d3c3d2b621ab7b9c7b1bff1f18d5ac7a9e6ea17779 = $this->env->getExtension("native_profiler");
        $__internal_93fbe3ade9fde1f77a1913d3c3d2b621ab7b9c7b1bff1f18d5ac7a9e6ea17779->enter($__internal_93fbe3ade9fde1f77a1913d3c3d2b621ab7b9c7b1bff1f18d5ac7a9e6ea17779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_93fbe3ade9fde1f77a1913d3c3d2b621ab7b9c7b1bff1f18d5ac7a9e6ea17779->leave($__internal_93fbe3ade9fde1f77a1913d3c3d2b621ab7b9c7b1bff1f18d5ac7a9e6ea17779_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
