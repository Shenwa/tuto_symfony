<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_944a393421e036e5b9c780c8bba07e050d4e655843306396806efe83a55006fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_22c7cc1cbf65e128d6b067ade51cd29288ad096a4940c1341b4edb707e6d6e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c7cc1cbf65e128d6b067ade51cd29288ad096a4940c1341b4edb707e6d6e40->enter($__internal_22c7cc1cbf65e128d6b067ade51cd29288ad096a4940c1341b4edb707e6d6e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_22c7cc1cbf65e128d6b067ade51cd29288ad096a4940c1341b4edb707e6d6e40->leave($__internal_22c7cc1cbf65e128d6b067ade51cd29288ad096a4940c1341b4edb707e6d6e40_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a3b53197d7a933f396ee1d5247606dd2fc6c9f314be78f4dd5de90bcfdba859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3b53197d7a933f396ee1d5247606dd2fc6c9f314be78f4dd5de90bcfdba859->enter($__internal_9a3b53197d7a933f396ee1d5247606dd2fc6c9f314be78f4dd5de90bcfdba859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9a3b53197d7a933f396ee1d5247606dd2fc6c9f314be78f4dd5de90bcfdba859->leave($__internal_9a3b53197d7a933f396ee1d5247606dd2fc6c9f314be78f4dd5de90bcfdba859_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79898f5c26ac793b8c4f36b147df756c81d4c0af99774d06b02469e77ac1714b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79898f5c26ac793b8c4f36b147df756c81d4c0af99774d06b02469e77ac1714b->enter($__internal_79898f5c26ac793b8c4f36b147df756c81d4c0af99774d06b02469e77ac1714b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_79898f5c26ac793b8c4f36b147df756c81d4c0af99774d06b02469e77ac1714b->leave($__internal_79898f5c26ac793b8c4f36b147df756c81d4c0af99774d06b02469e77ac1714b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1c83f53dbf4ec3a5860e7b6653e5ac4c4d55d2fb53b734e35ab93614fc6b94c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c83f53dbf4ec3a5860e7b6653e5ac4c4d55d2fb53b734e35ab93614fc6b94c->enter($__internal_c1c83f53dbf4ec3a5860e7b6653e5ac4c4d55d2fb53b734e35ab93614fc6b94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c1c83f53dbf4ec3a5860e7b6653e5ac4c4d55d2fb53b734e35ab93614fc6b94c->leave($__internal_c1c83f53dbf4ec3a5860e7b6653e5ac4c4d55d2fb53b734e35ab93614fc6b94c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
