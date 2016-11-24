<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c7fe702f70c2d48ce309963e27572e0ded3240b1d563b84e8bbe51291e701e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e436e97dbc23b28eb28a99a8920430c5e2b1e2dc2e27f100f9b77ae321c4209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e436e97dbc23b28eb28a99a8920430c5e2b1e2dc2e27f100f9b77ae321c4209->enter($__internal_7e436e97dbc23b28eb28a99a8920430c5e2b1e2dc2e27f100f9b77ae321c4209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e436e97dbc23b28eb28a99a8920430c5e2b1e2dc2e27f100f9b77ae321c4209->leave($__internal_7e436e97dbc23b28eb28a99a8920430c5e2b1e2dc2e27f100f9b77ae321c4209_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ecf2c0013784f131d298cd4e6bd3e10dcfd4420ac3c8da1fa4f8f412bfd9796b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecf2c0013784f131d298cd4e6bd3e10dcfd4420ac3c8da1fa4f8f412bfd9796b->enter($__internal_ecf2c0013784f131d298cd4e6bd3e10dcfd4420ac3c8da1fa4f8f412bfd9796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_ecf2c0013784f131d298cd4e6bd3e10dcfd4420ac3c8da1fa4f8f412bfd9796b->leave($__internal_ecf2c0013784f131d298cd4e6bd3e10dcfd4420ac3c8da1fa4f8f412bfd9796b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a5af2fb321333eb340e8716263bd57ebe2833382d5f112c486173293565344b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5af2fb321333eb340e8716263bd57ebe2833382d5f112c486173293565344b8->enter($__internal_a5af2fb321333eb340e8716263bd57ebe2833382d5f112c486173293565344b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a5af2fb321333eb340e8716263bd57ebe2833382d5f112c486173293565344b8->leave($__internal_a5af2fb321333eb340e8716263bd57ebe2833382d5f112c486173293565344b8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8799febd7929542ddca9ec091359a0860846fbbe656fcd2b83b6df3b24f7e074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8799febd7929542ddca9ec091359a0860846fbbe656fcd2b83b6df3b24f7e074->enter($__internal_8799febd7929542ddca9ec091359a0860846fbbe656fcd2b83b6df3b24f7e074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8799febd7929542ddca9ec091359a0860846fbbe656fcd2b83b6df3b24f7e074->leave($__internal_8799febd7929542ddca9ec091359a0860846fbbe656fcd2b83b6df3b24f7e074_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
