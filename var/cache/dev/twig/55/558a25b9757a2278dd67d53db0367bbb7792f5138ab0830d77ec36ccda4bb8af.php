<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_fd7e02f53b254ffec62b3ef2f49ebab6c372d2ebe92e841931e9401597155a86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_c954c1f400cf4c277560dccadffd31438cb9cd5a1e40f32883fc2908c257f571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c954c1f400cf4c277560dccadffd31438cb9cd5a1e40f32883fc2908c257f571->enter($__internal_c954c1f400cf4c277560dccadffd31438cb9cd5a1e40f32883fc2908c257f571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c954c1f400cf4c277560dccadffd31438cb9cd5a1e40f32883fc2908c257f571->leave($__internal_c954c1f400cf4c277560dccadffd31438cb9cd5a1e40f32883fc2908c257f571_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39d418fd46452fd3fea82469345849cbdb07720f0bcc5d6638da784aaea05e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d418fd46452fd3fea82469345849cbdb07720f0bcc5d6638da784aaea05e0d->enter($__internal_39d418fd46452fd3fea82469345849cbdb07720f0bcc5d6638da784aaea05e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_39d418fd46452fd3fea82469345849cbdb07720f0bcc5d6638da784aaea05e0d->leave($__internal_39d418fd46452fd3fea82469345849cbdb07720f0bcc5d6638da784aaea05e0d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2d1d5cce0111d69bfc622ef0bf761d5358dde9c7175d4af7a7ea4434bc62f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2d1d5cce0111d69bfc622ef0bf761d5358dde9c7175d4af7a7ea4434bc62f40->enter($__internal_f2d1d5cce0111d69bfc622ef0bf761d5358dde9c7175d4af7a7ea4434bc62f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f2d1d5cce0111d69bfc622ef0bf761d5358dde9c7175d4af7a7ea4434bc62f40->leave($__internal_f2d1d5cce0111d69bfc622ef0bf761d5358dde9c7175d4af7a7ea4434bc62f40_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
