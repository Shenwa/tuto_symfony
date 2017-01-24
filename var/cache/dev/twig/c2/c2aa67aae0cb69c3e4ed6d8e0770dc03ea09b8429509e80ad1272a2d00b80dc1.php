<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e0d04408e97147b05eb81f622eeeefafb4e6ff808307ee56d50fea6d10f3e5c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f645fd980e274a793e9222e006737f956779153bbda741dbf6a286ae12e6541f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f645fd980e274a793e9222e006737f956779153bbda741dbf6a286ae12e6541f->enter($__internal_f645fd980e274a793e9222e006737f956779153bbda741dbf6a286ae12e6541f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f645fd980e274a793e9222e006737f956779153bbda741dbf6a286ae12e6541f->leave($__internal_f645fd980e274a793e9222e006737f956779153bbda741dbf6a286ae12e6541f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7339347b64c6ad816b941179527941a9f18b0b372ccb8e5382ee72d14d8ee70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7339347b64c6ad816b941179527941a9f18b0b372ccb8e5382ee72d14d8ee70b->enter($__internal_7339347b64c6ad816b941179527941a9f18b0b372ccb8e5382ee72d14d8ee70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7339347b64c6ad816b941179527941a9f18b0b372ccb8e5382ee72d14d8ee70b->leave($__internal_7339347b64c6ad816b941179527941a9f18b0b372ccb8e5382ee72d14d8ee70b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0594d25fcd7d677f42085da6a569a22f8a48c66eb44b9c5775cf3bc25bcab760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0594d25fcd7d677f42085da6a569a22f8a48c66eb44b9c5775cf3bc25bcab760->enter($__internal_0594d25fcd7d677f42085da6a569a22f8a48c66eb44b9c5775cf3bc25bcab760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0594d25fcd7d677f42085da6a569a22f8a48c66eb44b9c5775cf3bc25bcab760->leave($__internal_0594d25fcd7d677f42085da6a569a22f8a48c66eb44b9c5775cf3bc25bcab760_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_020fde591ed5a908b7989b0e1f2e46e58d570054596e1f61d3c4f843cb2f933a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020fde591ed5a908b7989b0e1f2e46e58d570054596e1f61d3c4f843cb2f933a->enter($__internal_020fde591ed5a908b7989b0e1f2e46e58d570054596e1f61d3c4f843cb2f933a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_020fde591ed5a908b7989b0e1f2e46e58d570054596e1f61d3c4f843cb2f933a->leave($__internal_020fde591ed5a908b7989b0e1f2e46e58d570054596e1f61d3c4f843cb2f933a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
