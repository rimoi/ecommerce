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
        $__internal_342274452f63ef820a3a48701cbf4c97c63266db865e11e68744924e7717f0ac = $this->env->getExtension("native_profiler");
        $__internal_342274452f63ef820a3a48701cbf4c97c63266db865e11e68744924e7717f0ac->enter($__internal_342274452f63ef820a3a48701cbf4c97c63266db865e11e68744924e7717f0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_342274452f63ef820a3a48701cbf4c97c63266db865e11e68744924e7717f0ac->leave($__internal_342274452f63ef820a3a48701cbf4c97c63266db865e11e68744924e7717f0ac_prof);

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
