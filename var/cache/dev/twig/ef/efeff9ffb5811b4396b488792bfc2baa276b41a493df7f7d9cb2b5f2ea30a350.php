<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_645884d331d6ee18cc048c35278eb66b115cc4a89fe683d6c06c7a0e2411ef32 extends Twig_Template
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
        $__internal_430a0adc2298319036a7b08c3bfaf8c1048263f3b4e0c247ff81b1bb70e1345e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430a0adc2298319036a7b08c3bfaf8c1048263f3b4e0c247ff81b1bb70e1345e->enter($__internal_430a0adc2298319036a7b08c3bfaf8c1048263f3b4e0c247ff81b1bb70e1345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_430a0adc2298319036a7b08c3bfaf8c1048263f3b4e0c247ff81b1bb70e1345e->leave($__internal_430a0adc2298319036a7b08c3bfaf8c1048263f3b4e0c247ff81b1bb70e1345e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
