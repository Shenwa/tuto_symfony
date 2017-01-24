<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_510deb124bcf777b744b008d1cec521d818450f08a4f10cc2ab270ab43409968 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_0861fd102d7c9fc7c2fa749309ec67e7b19883cf5f9c39de4b47abae216f0793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0861fd102d7c9fc7c2fa749309ec67e7b19883cf5f9c39de4b47abae216f0793->enter($__internal_0861fd102d7c9fc7c2fa749309ec67e7b19883cf5f9c39de4b47abae216f0793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0861fd102d7c9fc7c2fa749309ec67e7b19883cf5f9c39de4b47abae216f0793->leave($__internal_0861fd102d7c9fc7c2fa749309ec67e7b19883cf5f9c39de4b47abae216f0793_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_072204f8941f5515709bb4782011a1501c4ceeeb617e512682efa9415fffea53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072204f8941f5515709bb4782011a1501c4ceeeb617e512682efa9415fffea53->enter($__internal_072204f8941f5515709bb4782011a1501c4ceeeb617e512682efa9415fffea53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Profile/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_072204f8941f5515709bb4782011a1501c4ceeeb617e512682efa9415fffea53->leave($__internal_072204f8941f5515709bb4782011a1501c4ceeeb617e512682efa9415fffea53_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
