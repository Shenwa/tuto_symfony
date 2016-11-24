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
        $__internal_8de567c85ce08914fa25f3396ff3dc4036070b210ee4f4c5800d2872256bbc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de567c85ce08914fa25f3396ff3dc4036070b210ee4f4c5800d2872256bbc3e->enter($__internal_8de567c85ce08914fa25f3396ff3dc4036070b210ee4f4c5800d2872256bbc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8de567c85ce08914fa25f3396ff3dc4036070b210ee4f4c5800d2872256bbc3e->leave($__internal_8de567c85ce08914fa25f3396ff3dc4036070b210ee4f4c5800d2872256bbc3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51a117e1a14836a1b4423a92e739f3bba0fe25ff3e052e5b2345465d018735bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a117e1a14836a1b4423a92e739f3bba0fe25ff3e052e5b2345465d018735bf->enter($__internal_51a117e1a14836a1b4423a92e739f3bba0fe25ff3e052e5b2345465d018735bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51a117e1a14836a1b4423a92e739f3bba0fe25ff3e052e5b2345465d018735bf->leave($__internal_51a117e1a14836a1b4423a92e739f3bba0fe25ff3e052e5b2345465d018735bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_51a6c9c6020a2b300922d2659de286c2febaf631f7281590cded0eac28d2cd62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a6c9c6020a2b300922d2659de286c2febaf631f7281590cded0eac28d2cd62->enter($__internal_51a6c9c6020a2b300922d2659de286c2febaf631f7281590cded0eac28d2cd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_51a6c9c6020a2b300922d2659de286c2febaf631f7281590cded0eac28d2cd62->leave($__internal_51a6c9c6020a2b300922d2659de286c2febaf631f7281590cded0eac28d2cd62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e84a79c1af2b804b9df2f201e2df1ef3f9d164a48868a5f94ef7bdb33bbbd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e84a79c1af2b804b9df2f201e2df1ef3f9d164a48868a5f94ef7bdb33bbbd32->enter($__internal_5e84a79c1af2b804b9df2f201e2df1ef3f9d164a48868a5f94ef7bdb33bbbd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5e84a79c1af2b804b9df2f201e2df1ef3f9d164a48868a5f94ef7bdb33bbbd32->leave($__internal_5e84a79c1af2b804b9df2f201e2df1ef3f9d164a48868a5f94ef7bdb33bbbd32_prof);

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
