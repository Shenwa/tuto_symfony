<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7a70b235dcdeec5a5079c49f1183a366bc75720a454502900a5bf9487bed416e extends Twig_Template
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
        $__internal_c4ca85652640362887160336d6d50e6506e35a22d4bb8fdf686b3af130485433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ca85652640362887160336d6d50e6506e35a22d4bb8fdf686b3af130485433->enter($__internal_c4ca85652640362887160336d6d50e6506e35a22d4bb8fdf686b3af130485433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ca85652640362887160336d6d50e6506e35a22d4bb8fdf686b3af130485433->leave($__internal_c4ca85652640362887160336d6d50e6506e35a22d4bb8fdf686b3af130485433_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b5dccb99d90bd9e4b364687535b00c388c48147cce79ad94d8caffb783207f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5dccb99d90bd9e4b364687535b00c388c48147cce79ad94d8caffb783207f5->enter($__internal_5b5dccb99d90bd9e4b364687535b00c388c48147cce79ad94d8caffb783207f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b5dccb99d90bd9e4b364687535b00c388c48147cce79ad94d8caffb783207f5->leave($__internal_5b5dccb99d90bd9e4b364687535b00c388c48147cce79ad94d8caffb783207f5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_371e992fe30319a6536dc0723113faebe0e102a6ab5d1124b583894170634457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371e992fe30319a6536dc0723113faebe0e102a6ab5d1124b583894170634457->enter($__internal_371e992fe30319a6536dc0723113faebe0e102a6ab5d1124b583894170634457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_371e992fe30319a6536dc0723113faebe0e102a6ab5d1124b583894170634457->leave($__internal_371e992fe30319a6536dc0723113faebe0e102a6ab5d1124b583894170634457_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4792735f6abd3176f2faf7236eaac79ebd8b400419e2474a5bc737f6bcb38052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4792735f6abd3176f2faf7236eaac79ebd8b400419e2474a5bc737f6bcb38052->enter($__internal_4792735f6abd3176f2faf7236eaac79ebd8b400419e2474a5bc737f6bcb38052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4792735f6abd3176f2faf7236eaac79ebd8b400419e2474a5bc737f6bcb38052->leave($__internal_4792735f6abd3176f2faf7236eaac79ebd8b400419e2474a5bc737f6bcb38052_prof);

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
