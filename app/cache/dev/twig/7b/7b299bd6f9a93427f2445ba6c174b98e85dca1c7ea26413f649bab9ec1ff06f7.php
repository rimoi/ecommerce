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
        $__internal_c07eada8a3763358ccc621dc485d19e042f6f4a0d5ccc31771d115263f235f2d = $this->env->getExtension("native_profiler");
        $__internal_c07eada8a3763358ccc621dc485d19e042f6f4a0d5ccc31771d115263f235f2d->enter($__internal_c07eada8a3763358ccc621dc485d19e042f6f4a0d5ccc31771d115263f235f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_c07eada8a3763358ccc621dc485d19e042f6f4a0d5ccc31771d115263f235f2d->leave($__internal_c07eada8a3763358ccc621dc485d19e042f6f4a0d5ccc31771d115263f235f2d_prof);

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
