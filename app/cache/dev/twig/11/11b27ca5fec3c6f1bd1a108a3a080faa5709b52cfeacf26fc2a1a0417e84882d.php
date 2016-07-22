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
        $__internal_9e23ea899fad9f8fb03cb2450a5c491f4234f8ebf570d89d8624586aca4374c4 = $this->env->getExtension("native_profiler");
        $__internal_9e23ea899fad9f8fb03cb2450a5c491f4234f8ebf570d89d8624586aca4374c4->enter($__internal_9e23ea899fad9f8fb03cb2450a5c491f4234f8ebf570d89d8624586aca4374c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_9e23ea899fad9f8fb03cb2450a5c491f4234f8ebf570d89d8624586aca4374c4->leave($__internal_9e23ea899fad9f8fb03cb2450a5c491f4234f8ebf570d89d8624586aca4374c4_prof);

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
