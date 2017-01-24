<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ff4c1fef2613a6bf1a197e919980fc831b07cf9d91d0954bd02183640eee7755 extends Twig_Template
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
        $__internal_ff37f61bbb85788b7acf05bd9252dfea53d143c22005ef8d78fda9948ecdd4e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff37f61bbb85788b7acf05bd9252dfea53d143c22005ef8d78fda9948ecdd4e0->enter($__internal_ff37f61bbb85788b7acf05bd9252dfea53d143c22005ef8d78fda9948ecdd4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ff37f61bbb85788b7acf05bd9252dfea53d143c22005ef8d78fda9948ecdd4e0->leave($__internal_ff37f61bbb85788b7acf05bd9252dfea53d143c22005ef8d78fda9948ecdd4e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
