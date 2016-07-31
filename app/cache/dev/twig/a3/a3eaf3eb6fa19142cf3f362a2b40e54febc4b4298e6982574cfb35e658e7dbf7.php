<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7726f0ce6d6c97e1bcdb0f20b19898cfa5bb1b68fadba180674ebdcc31197120 extends Twig_Template
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
        $__internal_e6ead11edf948e25e717ac4e05a8a01ad7a2a9efdbb9fce9e455d02394f9d7fd = $this->env->getExtension("native_profiler");
        $__internal_e6ead11edf948e25e717ac4e05a8a01ad7a2a9efdbb9fce9e455d02394f9d7fd->enter($__internal_e6ead11edf948e25e717ac4e05a8a01ad7a2a9efdbb9fce9e455d02394f9d7fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e6ead11edf948e25e717ac4e05a8a01ad7a2a9efdbb9fce9e455d02394f9d7fd->leave($__internal_e6ead11edf948e25e717ac4e05a8a01ad7a2a9efdbb9fce9e455d02394f9d7fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
