<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_5b34172922961c3c8c5adfd560019cd2330190c7bf47e4c0d7805a6329efe065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_fd0d528f608a885a0052945291b38bb9e34ac4c07b3715c96af2d644769b1575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0d528f608a885a0052945291b38bb9e34ac4c07b3715c96af2d644769b1575->enter($__internal_fd0d528f608a885a0052945291b38bb9e34ac4c07b3715c96af2d644769b1575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0d528f608a885a0052945291b38bb9e34ac4c07b3715c96af2d644769b1575->leave($__internal_fd0d528f608a885a0052945291b38bb9e34ac4c07b3715c96af2d644769b1575_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca584328dffc4885d87e6fc9f9ab657263832035e109a62c886152428c6c4694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca584328dffc4885d87e6fc9f9ab657263832035e109a62c886152428c6c4694->enter($__internal_ca584328dffc4885d87e6fc9f9ab657263832035e109a62c886152428c6c4694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:register.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_ca584328dffc4885d87e6fc9f9ab657263832035e109a62c886152428c6c4694->leave($__internal_ca584328dffc4885d87e6fc9f9ab657263832035e109a62c886152428c6c4694_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
", "FOSUserBundle:Registration:register.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/register.html.twig");
    }
}
