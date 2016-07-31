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
        $__internal_28805e52d2c29d71cc4226827d34a493adcaf8eed65658f8e3e3c5fe3de4869c = $this->env->getExtension("native_profiler");
        $__internal_28805e52d2c29d71cc4226827d34a493adcaf8eed65658f8e3e3c5fe3de4869c->enter($__internal_28805e52d2c29d71cc4226827d34a493adcaf8eed65658f8e3e3c5fe3de4869c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_28805e52d2c29d71cc4226827d34a493adcaf8eed65658f8e3e3c5fe3de4869c->leave($__internal_28805e52d2c29d71cc4226827d34a493adcaf8eed65658f8e3e3c5fe3de4869c_prof);

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
