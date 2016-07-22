<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4f6379a32249d8b9e39cfc24f0d0d730126975d0b2c7afd7cc8f618a64ca26d0 extends Twig_Template
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
        $__internal_6bf7c8f23be28982b5908256707191b141a7067959db55b438c74a63c2ca5042 = $this->env->getExtension("native_profiler");
        $__internal_6bf7c8f23be28982b5908256707191b141a7067959db55b438c74a63c2ca5042->enter($__internal_6bf7c8f23be28982b5908256707191b141a7067959db55b438c74a63c2ca5042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6bf7c8f23be28982b5908256707191b141a7067959db55b438c74a63c2ca5042->leave($__internal_6bf7c8f23be28982b5908256707191b141a7067959db55b438c74a63c2ca5042_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
