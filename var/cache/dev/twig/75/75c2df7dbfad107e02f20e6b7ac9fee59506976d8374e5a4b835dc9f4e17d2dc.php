<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ad85feb09d8780ed2c06759a6f4d8e921db60342140164caa03155f427b34193 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a68153f49490870f6df9973f90893fbd61f555df527ad99ae08fc33643af5991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68153f49490870f6df9973f90893fbd61f555df527ad99ae08fc33643af5991->enter($__internal_a68153f49490870f6df9973f90893fbd61f555df527ad99ae08fc33643af5991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a68153f49490870f6df9973f90893fbd61f555df527ad99ae08fc33643af5991->leave($__internal_a68153f49490870f6df9973f90893fbd61f555df527ad99ae08fc33643af5991_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_67fcc11cc7116e5b66efb60f1222ddad515df642fc0e51751decc8034e490ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67fcc11cc7116e5b66efb60f1222ddad515df642fc0e51751decc8034e490ea6->enter($__internal_67fcc11cc7116e5b66efb60f1222ddad515df642fc0e51751decc8034e490ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        echo "";
        
        $__internal_67fcc11cc7116e5b66efb60f1222ddad515df642fc0e51751decc8034e490ea6->leave($__internal_67fcc11cc7116e5b66efb60f1222ddad515df642fc0e51751decc8034e490ea6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
