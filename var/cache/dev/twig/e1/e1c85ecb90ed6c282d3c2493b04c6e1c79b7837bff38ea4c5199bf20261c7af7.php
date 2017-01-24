<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_4853e9fcca2ac6dc884b1247156e5bd916021fc8f867739055541b5f46855069 extends Twig_Template
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
        $__internal_2c633e26c945fff8eeeb6fccbaf15a53b4ff1edd1d044f2d3882bd1e8ef49b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c633e26c945fff8eeeb6fccbaf15a53b4ff1edd1d044f2d3882bd1e8ef49b27->enter($__internal_2c633e26c945fff8eeeb6fccbaf15a53b4ff1edd1d044f2d3882bd1e8ef49b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2c633e26c945fff8eeeb6fccbaf15a53b4ff1edd1d044f2d3882bd1e8ef49b27->leave($__internal_2c633e26c945fff8eeeb6fccbaf15a53b4ff1edd1d044f2d3882bd1e8ef49b27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
