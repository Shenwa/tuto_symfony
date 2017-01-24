<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8942d5530b0702d81dbaccb78498c96cefd6e2fd3bfa129bb56311e8002de944 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_4b56cb3e0fa4e4fbeb9316576b8a48c1e5da559f1003daf76c179ec2e79b4600 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b56cb3e0fa4e4fbeb9316576b8a48c1e5da559f1003daf76c179ec2e79b4600->enter($__internal_4b56cb3e0fa4e4fbeb9316576b8a48c1e5da559f1003daf76c179ec2e79b4600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b56cb3e0fa4e4fbeb9316576b8a48c1e5da559f1003daf76c179ec2e79b4600->leave($__internal_4b56cb3e0fa4e4fbeb9316576b8a48c1e5da559f1003daf76c179ec2e79b4600_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7152b38aafa11015c7d0f8e30839c8392606ee1a351d66364956ee749fd0a773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7152b38aafa11015c7d0f8e30839c8392606ee1a351d66364956ee749fd0a773->enter($__internal_7152b38aafa11015c7d0f8e30839c8392606ee1a351d66364956ee749fd0a773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_7152b38aafa11015c7d0f8e30839c8392606ee1a351d66364956ee749fd0a773->leave($__internal_7152b38aafa11015c7d0f8e30839c8392606ee1a351d66364956ee749fd0a773_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
