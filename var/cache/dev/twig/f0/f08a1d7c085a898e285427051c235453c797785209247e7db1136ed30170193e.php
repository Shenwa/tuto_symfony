<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ed214f45f1d528b6bfa6924068cd14cffee23397767a6a229285fe75d473c4f7 extends Twig_Template
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
        $__internal_fa597a72619fdb4593ab726ea02852c7cc109dc768bb2bc6a00bc68a6ae3b0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa597a72619fdb4593ab726ea02852c7cc109dc768bb2bc6a00bc68a6ae3b0d6->enter($__internal_fa597a72619fdb4593ab726ea02852c7cc109dc768bb2bc6a00bc68a6ae3b0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_fa597a72619fdb4593ab726ea02852c7cc109dc768bb2bc6a00bc68a6ae3b0d6->leave($__internal_fa597a72619fdb4593ab726ea02852c7cc109dc768bb2bc6a00bc68a6ae3b0d6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0cc66851de5e8ebe5bb0351238714cecfe37e8cdca0944b51f4d5456e076a501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc66851de5e8ebe5bb0351238714cecfe37e8cdca0944b51f4d5456e076a501->enter($__internal_0cc66851de5e8ebe5bb0351238714cecfe37e8cdca0944b51f4d5456e076a501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        echo "";
        
        $__internal_0cc66851de5e8ebe5bb0351238714cecfe37e8cdca0944b51f4d5456e076a501->leave($__internal_0cc66851de5e8ebe5bb0351238714cecfe37e8cdca0944b51f4d5456e076a501_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
