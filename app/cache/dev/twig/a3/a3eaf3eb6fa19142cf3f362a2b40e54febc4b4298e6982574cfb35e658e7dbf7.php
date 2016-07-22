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
        $__internal_bc01d74ba0c546ae33754497962696e0108ad630107b1ee679858e0ea79c0df7 = $this->env->getExtension("native_profiler");
        $__internal_bc01d74ba0c546ae33754497962696e0108ad630107b1ee679858e0ea79c0df7->enter($__internal_bc01d74ba0c546ae33754497962696e0108ad630107b1ee679858e0ea79c0df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_bc01d74ba0c546ae33754497962696e0108ad630107b1ee679858e0ea79c0df7->leave($__internal_bc01d74ba0c546ae33754497962696e0108ad630107b1ee679858e0ea79c0df7_prof);

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
