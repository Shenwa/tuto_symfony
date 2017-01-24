<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1212adcb4e84c1cc76aaf4fe479547ab15a4d20d8b7fbf0aec0d317b0c5628ed extends Twig_Template
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
        $__internal_e5b9e5411765127207eb4ff35735fdd92e37e6372f474c4ca8cabc756b8c4006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5b9e5411765127207eb4ff35735fdd92e37e6372f474c4ca8cabc756b8c4006->enter($__internal_e5b9e5411765127207eb4ff35735fdd92e37e6372f474c4ca8cabc756b8c4006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_e5b9e5411765127207eb4ff35735fdd92e37e6372f474c4ca8cabc756b8c4006->leave($__internal_e5b9e5411765127207eb4ff35735fdd92e37e6372f474c4ca8cabc756b8c4006_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
