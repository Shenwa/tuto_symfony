<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_29de2978b219e75d318903685bf3105a489526c4976092ecd7975ad2e5de0c28 extends Twig_Template
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
        $__internal_ec56951cdcabd23a95aada07b7ba8b6f6c418fc2f1d17256d2d89917ae24ae42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec56951cdcabd23a95aada07b7ba8b6f6c418fc2f1d17256d2d89917ae24ae42->enter($__internal_ec56951cdcabd23a95aada07b7ba8b6f6c418fc2f1d17256d2d89917ae24ae42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ec56951cdcabd23a95aada07b7ba8b6f6c418fc2f1d17256d2d89917ae24ae42->leave($__internal_ec56951cdcabd23a95aada07b7ba8b6f6c418fc2f1d17256d2d89917ae24ae42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
