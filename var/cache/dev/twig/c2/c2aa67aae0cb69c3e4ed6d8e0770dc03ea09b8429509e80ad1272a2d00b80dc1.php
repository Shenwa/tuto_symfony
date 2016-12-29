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
        $__internal_f95f85b6b92af5dbddb38a9378af5e404dfcb46910281afbe0df55f8401fbe4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95f85b6b92af5dbddb38a9378af5e404dfcb46910281afbe0df55f8401fbe4a->enter($__internal_f95f85b6b92af5dbddb38a9378af5e404dfcb46910281afbe0df55f8401fbe4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95f85b6b92af5dbddb38a9378af5e404dfcb46910281afbe0df55f8401fbe4a->leave($__internal_f95f85b6b92af5dbddb38a9378af5e404dfcb46910281afbe0df55f8401fbe4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c348e45b233da506e69b1a57cf53957dafa3a0d01be954ff48d94f8eab37a1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c348e45b233da506e69b1a57cf53957dafa3a0d01be954ff48d94f8eab37a1bf->enter($__internal_c348e45b233da506e69b1a57cf53957dafa3a0d01be954ff48d94f8eab37a1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c348e45b233da506e69b1a57cf53957dafa3a0d01be954ff48d94f8eab37a1bf->leave($__internal_c348e45b233da506e69b1a57cf53957dafa3a0d01be954ff48d94f8eab37a1bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_65d54e230d3f6babd0020d23b63e03c671c9c52409196a2cc864873a0cebdd70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65d54e230d3f6babd0020d23b63e03c671c9c52409196a2cc864873a0cebdd70->enter($__internal_65d54e230d3f6babd0020d23b63e03c671c9c52409196a2cc864873a0cebdd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_65d54e230d3f6babd0020d23b63e03c671c9c52409196a2cc864873a0cebdd70->leave($__internal_65d54e230d3f6babd0020d23b63e03c671c9c52409196a2cc864873a0cebdd70_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8cf1d41d1696a7887ca4afab2b69b7d591d5bb94faf7d843852914616be8f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cf1d41d1696a7887ca4afab2b69b7d591d5bb94faf7d843852914616be8f57->enter($__internal_d8cf1d41d1696a7887ca4afab2b69b7d591d5bb94faf7d843852914616be8f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d8cf1d41d1696a7887ca4afab2b69b7d591d5bb94faf7d843852914616be8f57->leave($__internal_d8cf1d41d1696a7887ca4afab2b69b7d591d5bb94faf7d843852914616be8f57_prof);

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
