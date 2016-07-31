<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_05d7d9fa012294cb775cd333c452a32bccfdf5fbff6d9b9f9008d0e8febd0dc7 extends Twig_Template
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
        $__internal_8d823d76eefe72e5af51b5bd9b67b9a6bdd7694ea523aedc014a8fd1c3f84e1f = $this->env->getExtension("native_profiler");
        $__internal_8d823d76eefe72e5af51b5bd9b67b9a6bdd7694ea523aedc014a8fd1c3f84e1f->enter($__internal_8d823d76eefe72e5af51b5bd9b67b9a6bdd7694ea523aedc014a8fd1c3f84e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8d823d76eefe72e5af51b5bd9b67b9a6bdd7694ea523aedc014a8fd1c3f84e1f->leave($__internal_8d823d76eefe72e5af51b5bd9b67b9a6bdd7694ea523aedc014a8fd1c3f84e1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
