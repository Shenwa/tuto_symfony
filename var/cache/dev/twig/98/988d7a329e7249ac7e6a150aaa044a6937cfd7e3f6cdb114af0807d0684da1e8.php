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
        $__internal_e111f86074c8bde71f6e4b25bd00f4d8723eab3d4b4d9170643d0f03da2b652b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e111f86074c8bde71f6e4b25bd00f4d8723eab3d4b4d9170643d0f03da2b652b->enter($__internal_e111f86074c8bde71f6e4b25bd00f4d8723eab3d4b4d9170643d0f03da2b652b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e111f86074c8bde71f6e4b25bd00f4d8723eab3d4b4d9170643d0f03da2b652b->leave($__internal_e111f86074c8bde71f6e4b25bd00f4d8723eab3d4b4d9170643d0f03da2b652b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dc15555f1626a8d901451771099d541707db675a59d6707574ed151f92b8139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc15555f1626a8d901451771099d541707db675a59d6707574ed151f92b8139->enter($__internal_6dc15555f1626a8d901451771099d541707db675a59d6707574ed151f92b8139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_6dc15555f1626a8d901451771099d541707db675a59d6707574ed151f92b8139->leave($__internal_6dc15555f1626a8d901451771099d541707db675a59d6707574ed151f92b8139_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce5e3a1f00369613e8ff469691853096b85700d66b187c74aeecc110bc94b544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce5e3a1f00369613e8ff469691853096b85700d66b187c74aeecc110bc94b544->enter($__internal_ce5e3a1f00369613e8ff469691853096b85700d66b187c74aeecc110bc94b544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ce5e3a1f00369613e8ff469691853096b85700d66b187c74aeecc110bc94b544->leave($__internal_ce5e3a1f00369613e8ff469691853096b85700d66b187c74aeecc110bc94b544_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a603e28d98a7a22ad04a7ce7d5319b5cdf1e11820bb71ce296d952a63b371ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a603e28d98a7a22ad04a7ce7d5319b5cdf1e11820bb71ce296d952a63b371ce6->enter($__internal_a603e28d98a7a22ad04a7ce7d5319b5cdf1e11820bb71ce296d952a63b371ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a603e28d98a7a22ad04a7ce7d5319b5cdf1e11820bb71ce296d952a63b371ce6->leave($__internal_a603e28d98a7a22ad04a7ce7d5319b5cdf1e11820bb71ce296d952a63b371ce6_prof);

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
