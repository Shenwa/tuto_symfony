<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_2674e9ab01d1ee9d5d8fa2e056ee4a955d2485c74a6b02eea05b8dbb11c2b7c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_c1876b4db8a064aa0b919cdb3ac3a9f518168cba6e55b061faa62566b522f844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1876b4db8a064aa0b919cdb3ac3a9f518168cba6e55b061faa62566b522f844->enter($__internal_c1876b4db8a064aa0b919cdb3ac3a9f518168cba6e55b061faa62566b522f844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1876b4db8a064aa0b919cdb3ac3a9f518168cba6e55b061faa62566b522f844->leave($__internal_c1876b4db8a064aa0b919cdb3ac3a9f518168cba6e55b061faa62566b522f844_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ba70a2573264073a1c1e05b6f4fe2df76db0bb7d677a8cb64d93e9aba92bb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba70a2573264073a1c1e05b6f4fe2df76db0bb7d677a8cb64d93e9aba92bb66->enter($__internal_8ba70a2573264073a1c1e05b6f4fe2df76db0bb7d677a8cb64d93e9aba92bb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8ba70a2573264073a1c1e05b6f4fe2df76db0bb7d677a8cb64d93e9aba92bb66->leave($__internal_8ba70a2573264073a1c1e05b6f4fe2df76db0bb7d677a8cb64d93e9aba92bb66_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
