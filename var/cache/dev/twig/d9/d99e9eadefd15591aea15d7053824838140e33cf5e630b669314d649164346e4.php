<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ce46dc58006a5b294b5b8a45a9f3c9264c1c0c088d4df48097522865b9a6a172 extends Twig_Template
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
        $__internal_fb88317676e4d7de2e13cf4314af25f0de52be871f6fed3b8e2f2ef7e02b7879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb88317676e4d7de2e13cf4314af25f0de52be871f6fed3b8e2f2ef7e02b7879->enter($__internal_fb88317676e4d7de2e13cf4314af25f0de52be871f6fed3b8e2f2ef7e02b7879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fb88317676e4d7de2e13cf4314af25f0de52be871f6fed3b8e2f2ef7e02b7879->leave($__internal_fb88317676e4d7de2e13cf4314af25f0de52be871f6fed3b8e2f2ef7e02b7879_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple',  array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
