<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_828450cb86cb8cc9d0efe67a9c2306c139a145be77fd522dfc427c14cf711d2f extends Twig_Template
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
        $__internal_b0f6688fc9e45471c15eaea89cdc86bd97dba6f00d184d78a3167a3da58e8ac0 = $this->env->getExtension("native_profiler");
        $__internal_b0f6688fc9e45471c15eaea89cdc86bd97dba6f00d184d78a3167a3da58e8ac0->enter($__internal_b0f6688fc9e45471c15eaea89cdc86bd97dba6f00d184d78a3167a3da58e8ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b0f6688fc9e45471c15eaea89cdc86bd97dba6f00d184d78a3167a3da58e8ac0->leave($__internal_b0f6688fc9e45471c15eaea89cdc86bd97dba6f00d184d78a3167a3da58e8ac0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
