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
        $__internal_e4f343c66742346298b1eac88df4fd473346589280106e4764238bb15e1d8022 = $this->env->getExtension("native_profiler");
        $__internal_e4f343c66742346298b1eac88df4fd473346589280106e4764238bb15e1d8022->enter($__internal_e4f343c66742346298b1eac88df4fd473346589280106e4764238bb15e1d8022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e4f343c66742346298b1eac88df4fd473346589280106e4764238bb15e1d8022->leave($__internal_e4f343c66742346298b1eac88df4fd473346589280106e4764238bb15e1d8022_prof);

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
