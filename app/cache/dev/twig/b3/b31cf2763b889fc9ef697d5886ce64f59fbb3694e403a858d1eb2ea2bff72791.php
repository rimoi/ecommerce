<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3c3d7f68e1da3e8a205887913ac05c4c562cab597dfa892919b1de8eefa0a287 extends Twig_Template
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
        $__internal_8d76873d8fd0557ba8c3080731256b00b20c57f27f4e56de80a4eb420f7504b0 = $this->env->getExtension("native_profiler");
        $__internal_8d76873d8fd0557ba8c3080731256b00b20c57f27f4e56de80a4eb420f7504b0->enter($__internal_8d76873d8fd0557ba8c3080731256b00b20c57f27f4e56de80a4eb420f7504b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8d76873d8fd0557ba8c3080731256b00b20c57f27f4e56de80a4eb420f7504b0->leave($__internal_8d76873d8fd0557ba8c3080731256b00b20c57f27f4e56de80a4eb420f7504b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
