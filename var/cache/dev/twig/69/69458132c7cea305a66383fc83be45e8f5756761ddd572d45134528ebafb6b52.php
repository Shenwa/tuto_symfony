<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_421b22585b21d4441b6dc8893513221f3087c5be7e9ba642fece04666c3403dd extends Twig_Template
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
        $__internal_86a1416d51635055dc2b97d70939e5a1b9c9968658bf64d615702660b721a2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a1416d51635055dc2b97d70939e5a1b9c9968658bf64d615702660b721a2d3->enter($__internal_86a1416d51635055dc2b97d70939e5a1b9c9968658bf64d615702660b721a2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_86a1416d51635055dc2b97d70939e5a1b9c9968658bf64d615702660b721a2d3->leave($__internal_86a1416d51635055dc2b97d70939e5a1b9c9968658bf64d615702660b721a2d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
