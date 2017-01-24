<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_81a05c8d8ad0cfd7c967d70aac8cb705573e2edb1e5596dea0a220793e69a718 extends Twig_Template
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
        $__internal_5498646e46bfde5ac6d2ec615c86aaaaa493377758ad65984b458bc94afc74bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5498646e46bfde5ac6d2ec615c86aaaaa493377758ad65984b458bc94afc74bd->enter($__internal_5498646e46bfde5ac6d2ec615c86aaaaa493377758ad65984b458bc94afc74bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5498646e46bfde5ac6d2ec615c86aaaaa493377758ad65984b458bc94afc74bd->leave($__internal_5498646e46bfde5ac6d2ec615c86aaaaa493377758ad65984b458bc94afc74bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1a7e8424fb5454f3dc7044fe9682b62831655d591d24a258d54e0a47163e2f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7e8424fb5454f3dc7044fe9682b62831655d591d24a258d54e0a47163e2f18->enter($__internal_1a7e8424fb5454f3dc7044fe9682b62831655d591d24a258d54e0a47163e2f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_1a7e8424fb5454f3dc7044fe9682b62831655d591d24a258d54e0a47163e2f18->leave($__internal_1a7e8424fb5454f3dc7044fe9682b62831655d591d24a258d54e0a47163e2f18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fa93209eb6e9eaa489f17d3d4f867f7d90b354e91f06b71d7fd5f431378a6e16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa93209eb6e9eaa489f17d3d4f867f7d90b354e91f06b71d7fd5f431378a6e16->enter($__internal_fa93209eb6e9eaa489f17d3d4f867f7d90b354e91f06b71d7fd5f431378a6e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fa93209eb6e9eaa489f17d3d4f867f7d90b354e91f06b71d7fd5f431378a6e16->leave($__internal_fa93209eb6e9eaa489f17d3d4f867f7d90b354e91f06b71d7fd5f431378a6e16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd4971c15f3e5f2102d2d21db8e5de0fb08a996d52aa3122cb30d5f31f03c240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4971c15f3e5f2102d2d21db8e5de0fb08a996d52aa3122cb30d5f31f03c240->enter($__internal_fd4971c15f3e5f2102d2d21db8e5de0fb08a996d52aa3122cb30d5f31f03c240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd4971c15f3e5f2102d2d21db8e5de0fb08a996d52aa3122cb30d5f31f03c240->leave($__internal_fd4971c15f3e5f2102d2d21db8e5de0fb08a996d52aa3122cb30d5f31f03c240_prof);

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
