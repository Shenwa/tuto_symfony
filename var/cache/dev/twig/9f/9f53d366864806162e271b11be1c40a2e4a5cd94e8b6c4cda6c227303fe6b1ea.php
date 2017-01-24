<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_384eb1e2fde6cafed6f79fa318d018eb46f8eed38b3c049a55d30b7a09107e1e extends Twig_Template
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
        $__internal_61aaadb44544ecf41bbbe0446f67c4b947482f8496edcb4a999f18a02b47ed17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61aaadb44544ecf41bbbe0446f67c4b947482f8496edcb4a999f18a02b47ed17->enter($__internal_61aaadb44544ecf41bbbe0446f67c4b947482f8496edcb4a999f18a02b47ed17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_61aaadb44544ecf41bbbe0446f67c4b947482f8496edcb4a999f18a02b47ed17->leave($__internal_61aaadb44544ecf41bbbe0446f67c4b947482f8496edcb4a999f18a02b47ed17_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d3402748d2ec145f29aa846255a5ad2529c41b1bf17ffd8958ea19b90d265dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3402748d2ec145f29aa846255a5ad2529c41b1bf17ffd8958ea19b90d265dfe->enter($__internal_d3402748d2ec145f29aa846255a5ad2529c41b1bf17ffd8958ea19b90d265dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_d3402748d2ec145f29aa846255a5ad2529c41b1bf17ffd8958ea19b90d265dfe->leave($__internal_d3402748d2ec145f29aa846255a5ad2529c41b1bf17ffd8958ea19b90d265dfe_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8f830761184bdf3f5faccc87f42404589430cc1fc7a5587f60a198db8556db98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f830761184bdf3f5faccc87f42404589430cc1fc7a5587f60a198db8556db98->enter($__internal_8f830761184bdf3f5faccc87f42404589430cc1fc7a5587f60a198db8556db98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8f830761184bdf3f5faccc87f42404589430cc1fc7a5587f60a198db8556db98->leave($__internal_8f830761184bdf3f5faccc87f42404589430cc1fc7a5587f60a198db8556db98_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_782ecec0d6e72ae14a6b000cedd34824bef8cc886db1589430bbd3e042032ee6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_782ecec0d6e72ae14a6b000cedd34824bef8cc886db1589430bbd3e042032ee6->enter($__internal_782ecec0d6e72ae14a6b000cedd34824bef8cc886db1589430bbd3e042032ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:email.txt.twig"));

        
        $__internal_782ecec0d6e72ae14a6b000cedd34824bef8cc886db1589430bbd3e042032ee6->leave($__internal_782ecec0d6e72ae14a6b000cedd34824bef8cc886db1589430bbd3e042032ee6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
", "FOSUserBundle:Resetting:email.txt.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
