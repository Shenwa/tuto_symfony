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
        $__internal_b5585180dd4cc171eaa00e48329603a6addcbd3b9551e09e3f7101c56895450f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5585180dd4cc171eaa00e48329603a6addcbd3b9551e09e3f7101c56895450f->enter($__internal_b5585180dd4cc171eaa00e48329603a6addcbd3b9551e09e3f7101c56895450f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5585180dd4cc171eaa00e48329603a6addcbd3b9551e09e3f7101c56895450f->leave($__internal_b5585180dd4cc171eaa00e48329603a6addcbd3b9551e09e3f7101c56895450f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a4f1d2b2b7bdff3d1d3b4e06179ed42008740289f02c1981fc159f88a2663426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4f1d2b2b7bdff3d1d3b4e06179ed42008740289f02c1981fc159f88a2663426->enter($__internal_a4f1d2b2b7bdff3d1d3b4e06179ed42008740289f02c1981fc159f88a2663426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_a4f1d2b2b7bdff3d1d3b4e06179ed42008740289f02c1981fc159f88a2663426->leave($__internal_a4f1d2b2b7bdff3d1d3b4e06179ed42008740289f02c1981fc159f88a2663426_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_51aa4cca41df8a458a081e00f616dff9ff71b44f14d39a03f3857f0cc5d696eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51aa4cca41df8a458a081e00f616dff9ff71b44f14d39a03f3857f0cc5d696eb->enter($__internal_51aa4cca41df8a458a081e00f616dff9ff71b44f14d39a03f3857f0cc5d696eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_51aa4cca41df8a458a081e00f616dff9ff71b44f14d39a03f3857f0cc5d696eb->leave($__internal_51aa4cca41df8a458a081e00f616dff9ff71b44f14d39a03f3857f0cc5d696eb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_353f50f6ec16629b670eceff83609f691174d1783909bd6988ace44b07a101ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_353f50f6ec16629b670eceff83609f691174d1783909bd6988ace44b07a101ca->enter($__internal_353f50f6ec16629b670eceff83609f691174d1783909bd6988ace44b07a101ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_353f50f6ec16629b670eceff83609f691174d1783909bd6988ace44b07a101ca->leave($__internal_353f50f6ec16629b670eceff83609f691174d1783909bd6988ace44b07a101ca_prof);

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
