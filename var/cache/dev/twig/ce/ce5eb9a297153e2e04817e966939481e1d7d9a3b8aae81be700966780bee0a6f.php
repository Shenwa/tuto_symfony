<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_add9f1d47ea747285d1e87692f33b67202f8124b6875eac1dba41f17d8ebf1b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e7c432baf930d8233cfa63c28b3f9b598d7fc5000f6a028299bc7b0ebb55eec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c432baf930d8233cfa63c28b3f9b598d7fc5000f6a028299bc7b0ebb55eec6->enter($__internal_e7c432baf930d8233cfa63c28b3f9b598d7fc5000f6a028299bc7b0ebb55eec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c432baf930d8233cfa63c28b3f9b598d7fc5000f6a028299bc7b0ebb55eec6->leave($__internal_e7c432baf930d8233cfa63c28b3f9b598d7fc5000f6a028299bc7b0ebb55eec6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c3e92d970d810065e3aa7415d1550b15632a9000e30807b7314a49ea456e1aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e92d970d810065e3aa7415d1550b15632a9000e30807b7314a49ea456e1aa4->enter($__internal_c3e92d970d810065e3aa7415d1550b15632a9000e30807b7314a49ea456e1aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        
        $__internal_c3e92d970d810065e3aa7415d1550b15632a9000e30807b7314a49ea456e1aa4->leave($__internal_c3e92d970d810065e3aa7415d1550b15632a9000e30807b7314a49ea456e1aa4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d58180293911fe09c7e8a78965dda16ae50e76cc75334e4b36c723726a19a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d58180293911fe09c7e8a78965dda16ae50e76cc75334e4b36c723726a19a73->enter($__internal_3d58180293911fe09c7e8a78965dda16ae50e76cc75334e4b36c723726a19a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d58180293911fe09c7e8a78965dda16ae50e76cc75334e4b36c723726a19a73->leave($__internal_3d58180293911fe09c7e8a78965dda16ae50e76cc75334e4b36c723726a19a73_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c94cca1452f1b1c1492a07bbdc6973ca381c0b11d2e59da61f0b5488a38de6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94cca1452f1b1c1492a07bbdc6973ca381c0b11d2e59da61f0b5488a38de6d9->enter($__internal_c94cca1452f1b1c1492a07bbdc6973ca381c0b11d2e59da61f0b5488a38de6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "WebProfilerBundle:Collector:router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c94cca1452f1b1c1492a07bbdc6973ca381c0b11d2e59da61f0b5488a38de6d9->leave($__internal_c94cca1452f1b1c1492a07bbdc6973ca381c0b11d2e59da61f0b5488a38de6d9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
