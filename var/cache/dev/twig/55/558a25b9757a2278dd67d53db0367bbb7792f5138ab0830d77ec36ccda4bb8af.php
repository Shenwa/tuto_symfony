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
        $__internal_9de1ed31e92ebed542c41dc625bc1dd7464388132f6f9136fc4f17c09abe1531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de1ed31e92ebed542c41dc625bc1dd7464388132f6f9136fc4f17c09abe1531->enter($__internal_9de1ed31e92ebed542c41dc625bc1dd7464388132f6f9136fc4f17c09abe1531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de1ed31e92ebed542c41dc625bc1dd7464388132f6f9136fc4f17c09abe1531->leave($__internal_9de1ed31e92ebed542c41dc625bc1dd7464388132f6f9136fc4f17c09abe1531_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2474693303a5d6dfb62aac5e8795a13f5e7c71684f994332e3c43179334db029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2474693303a5d6dfb62aac5e8795a13f5e7c71684f994332e3c43179334db029->enter($__internal_2474693303a5d6dfb62aac5e8795a13f5e7c71684f994332e3c43179334db029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        echo "Redirection Intercepted";
        
        $__internal_2474693303a5d6dfb62aac5e8795a13f5e7c71684f994332e3c43179334db029->leave($__internal_2474693303a5d6dfb62aac5e8795a13f5e7c71684f994332e3c43179334db029_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_66b66971fbc503dd4ee17b7948496c0d0514999fe0d47ccd60719f4086db4cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b66971fbc503dd4ee17b7948496c0d0514999fe0d47ccd60719f4086db4cd4->enter($__internal_66b66971fbc503dd4ee17b7948496c0d0514999fe0d47ccd60719f4086db4cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

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
        
        $__internal_66b66971fbc503dd4ee17b7948496c0d0514999fe0d47ccd60719f4086db4cd4->leave($__internal_66b66971fbc503dd4ee17b7948496c0d0514999fe0d47ccd60719f4086db4cd4_prof);

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
