<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6d91e6a2cf7ba795e715409c735c0ea24f63b92cc0d591f21d9f6e0e2a1ade69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa22c89d92412486783a69234801eb2910841eb3d9e60ceae263644d73b83765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa22c89d92412486783a69234801eb2910841eb3d9e60ceae263644d73b83765->enter($__internal_fa22c89d92412486783a69234801eb2910841eb3d9e60ceae263644d73b83765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fa22c89d92412486783a69234801eb2910841eb3d9e60ceae263644d73b83765->leave($__internal_fa22c89d92412486783a69234801eb2910841eb3d9e60ceae263644d73b83765_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fdf17943086d23dcbc1de9e6423b1be33e7e680441fd2ed3ab5d42c9e18c5439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf17943086d23dcbc1de9e6423b1be33e7e680441fd2ed3ab5d42c9e18c5439->enter($__internal_fdf17943086d23dcbc1de9e6423b1be33e7e680441fd2ed3ab5d42c9e18c5439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fdf17943086d23dcbc1de9e6423b1be33e7e680441fd2ed3ab5d42c9e18c5439->leave($__internal_fdf17943086d23dcbc1de9e6423b1be33e7e680441fd2ed3ab5d42c9e18c5439_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_76d3a5a23ad848b8c1f8822252b47b9d6c63794b9ba50aac6dc14b35a9a3795b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d3a5a23ad848b8c1f8822252b47b9d6c63794b9ba50aac6dc14b35a9a3795b->enter($__internal_76d3a5a23ad848b8c1f8822252b47b9d6c63794b9ba50aac6dc14b35a9a3795b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_76d3a5a23ad848b8c1f8822252b47b9d6c63794b9ba50aac6dc14b35a9a3795b->leave($__internal_76d3a5a23ad848b8c1f8822252b47b9d6c63794b9ba50aac6dc14b35a9a3795b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e202602efd43b6b749c1f9fd23980f40fe8ae59a146ba651c77a981bd448cf08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e202602efd43b6b749c1f9fd23980f40fe8ae59a146ba651c77a981bd448cf08->enter($__internal_e202602efd43b6b749c1f9fd23980f40fe8ae59a146ba651c77a981bd448cf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/email.txt.twig"));

        
        $__internal_e202602efd43b6b749c1f9fd23980f40fe8ae59a146ba651c77a981bd448cf08->leave($__internal_e202602efd43b6b749c1f9fd23980f40fe8ae59a146ba651c77a981bd448cf08_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{% autoescape false %}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
