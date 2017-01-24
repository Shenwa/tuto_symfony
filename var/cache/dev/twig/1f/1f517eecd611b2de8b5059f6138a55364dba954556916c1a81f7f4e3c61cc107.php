<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_189f999283ca6a49968611b345063feda1fec08efe24a7e5d134198b7084b72e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_efad7fde8844fc674756d5b3e4370e58f5a28cd421c908db6acfe48b6c61caea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efad7fde8844fc674756d5b3e4370e58f5a28cd421c908db6acfe48b6c61caea->enter($__internal_efad7fde8844fc674756d5b3e4370e58f5a28cd421c908db6acfe48b6c61caea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efad7fde8844fc674756d5b3e4370e58f5a28cd421c908db6acfe48b6c61caea->leave($__internal_efad7fde8844fc674756d5b3e4370e58f5a28cd421c908db6acfe48b6c61caea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2efd57a64ee804e4ba1efa6163ed6f4ed7b71ea07be421932f840889136c54ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2efd57a64ee804e4ba1efa6163ed6f4ed7b71ea07be421932f840889136c54ed->enter($__internal_2efd57a64ee804e4ba1efa6163ed6f4ed7b71ea07be421932f840889136c54ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Security/login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_2efd57a64ee804e4ba1efa6163ed6f4ed7b71ea07be421932f840889136c54ed->leave($__internal_2efd57a64ee804e4ba1efa6163ed6f4ed7b71ea07be421932f840889136c54ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
