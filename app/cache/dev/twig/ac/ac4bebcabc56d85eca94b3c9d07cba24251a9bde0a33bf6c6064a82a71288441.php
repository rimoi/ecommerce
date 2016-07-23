<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_140bcba0ddfb2e0818043e127b940451ff55e47d755354cd5c0e8072f3a087c1 extends Twig_Template
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
        $__internal_b4ffed83ce080d2e9dd9c68a0a254c2b2c2b5c447fb8bd25ee571c8c5bd2d95c = $this->env->getExtension("native_profiler");
        $__internal_b4ffed83ce080d2e9dd9c68a0a254c2b2c2b5c447fb8bd25ee571c8c5bd2d95c->enter($__internal_b4ffed83ce080d2e9dd9c68a0a254c2b2c2b5c447fb8bd25ee571c8c5bd2d95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b4ffed83ce080d2e9dd9c68a0a254c2b2c2b5c447fb8bd25ee571c8c5bd2d95c->leave($__internal_b4ffed83ce080d2e9dd9c68a0a254c2b2c2b5c447fb8bd25ee571c8c5bd2d95c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
