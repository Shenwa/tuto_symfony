<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_18e152f9a00ecb9ffb3693a48d1e7719ad49942820ba1283c4296284212b4ecd extends Twig_Template
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
        $__internal_cf7510dad7a5a9334545bb28528e99ec9cfd9f5ae646f4f011344436e7ff22ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7510dad7a5a9334545bb28528e99ec9cfd9f5ae646f4f011344436e7ff22ab->enter($__internal_cf7510dad7a5a9334545bb28528e99ec9cfd9f5ae646f4f011344436e7ff22ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf7510dad7a5a9334545bb28528e99ec9cfd9f5ae646f4f011344436e7ff22ab->leave($__internal_cf7510dad7a5a9334545bb28528e99ec9cfd9f5ae646f4f011344436e7ff22ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fdd0663bf9ca617e04ddf328f9cf19970aca213bdfcb1e8e01b16097ccbb0d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdd0663bf9ca617e04ddf328f9cf19970aca213bdfcb1e8e01b16097ccbb0d8->enter($__internal_0fdd0663bf9ca617e04ddf328f9cf19970aca213bdfcb1e8e01b16097ccbb0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_0fdd0663bf9ca617e04ddf328f9cf19970aca213bdfcb1e8e01b16097ccbb0d8->leave($__internal_0fdd0663bf9ca617e04ddf328f9cf19970aca213bdfcb1e8e01b16097ccbb0d8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_144682def91b4bad8a9e570d7e87c30d78ebd89ff6fdf0b45e6ac46e79859f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144682def91b4bad8a9e570d7e87c30d78ebd89ff6fdf0b45e6ac46e79859f57->enter($__internal_144682def91b4bad8a9e570d7e87c30d78ebd89ff6fdf0b45e6ac46e79859f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_144682def91b4bad8a9e570d7e87c30d78ebd89ff6fdf0b45e6ac46e79859f57->leave($__internal_144682def91b4bad8a9e570d7e87c30d78ebd89ff6fdf0b45e6ac46e79859f57_prof);

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
