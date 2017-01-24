<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_985f0a15f5f4da5732ec3970404e90abe09aeebae8311003178fe7b1e2415532 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef2a5cb8939e8b7b5a26d9a85b69083b2b0d8ed887b54ad7ae39cb503f4f20ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2a5cb8939e8b7b5a26d9a85b69083b2b0d8ed887b54ad7ae39cb503f4f20ce->enter($__internal_ef2a5cb8939e8b7b5a26d9a85b69083b2b0d8ed887b54ad7ae39cb503f4f20ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef2a5cb8939e8b7b5a26d9a85b69083b2b0d8ed887b54ad7ae39cb503f4f20ce->leave($__internal_ef2a5cb8939e8b7b5a26d9a85b69083b2b0d8ed887b54ad7ae39cb503f4f20ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e3a4b31ba4f553d73cbcbe5285cd6dd11491d08c3c5b875266c87cb8a6d3ec28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a4b31ba4f553d73cbcbe5285cd6dd11491d08c3c5b875266c87cb8a6d3ec28->enter($__internal_e3a4b31ba4f553d73cbcbe5285cd6dd11491d08c3c5b875266c87cb8a6d3ec28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e3a4b31ba4f553d73cbcbe5285cd6dd11491d08c3c5b875266c87cb8a6d3ec28->leave($__internal_e3a4b31ba4f553d73cbcbe5285cd6dd11491d08c3c5b875266c87cb8a6d3ec28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
