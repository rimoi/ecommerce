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
        $__internal_5bc41efaaffce518125ced6be447fb0a6378b1ecbafc702a562927fd6a9becfe = $this->env->getExtension("native_profiler");
        $__internal_5bc41efaaffce518125ced6be447fb0a6378b1ecbafc702a562927fd6a9becfe->enter($__internal_5bc41efaaffce518125ced6be447fb0a6378b1ecbafc702a562927fd6a9becfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_5bc41efaaffce518125ced6be447fb0a6378b1ecbafc702a562927fd6a9becfe->leave($__internal_5bc41efaaffce518125ced6be447fb0a6378b1ecbafc702a562927fd6a9becfe_prof);

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
