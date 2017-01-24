<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_479049866df5a0cade7eb1eecc01e6c143e224456af3637d4aab4d0ecc8e3938 extends Twig_Template
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
        $__internal_e502eebccfeea633f9305e8a2785208154d72c594f3732bfcedb4e7581dbab06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e502eebccfeea633f9305e8a2785208154d72c594f3732bfcedb4e7581dbab06->enter($__internal_e502eebccfeea633f9305e8a2785208154d72c594f3732bfcedb4e7581dbab06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e502eebccfeea633f9305e8a2785208154d72c594f3732bfcedb4e7581dbab06->leave($__internal_e502eebccfeea633f9305e8a2785208154d72c594f3732bfcedb4e7581dbab06_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_82da99a2d26ef3570a9581d133934fb69634d101dc4e568f83f629593bda3044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82da99a2d26ef3570a9581d133934fb69634d101dc4e568f83f629593bda3044->enter($__internal_82da99a2d26ef3570a9581d133934fb69634d101dc4e568f83f629593bda3044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_82da99a2d26ef3570a9581d133934fb69634d101dc4e568f83f629593bda3044->leave($__internal_82da99a2d26ef3570a9581d133934fb69634d101dc4e568f83f629593bda3044_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bb55f2622a4df8f74597ef1bcb64ad56c992b62255130e5be0b672b3df33210e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb55f2622a4df8f74597ef1bcb64ad56c992b62255130e5be0b672b3df33210e->enter($__internal_bb55f2622a4df8f74597ef1bcb64ad56c992b62255130e5be0b672b3df33210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bb55f2622a4df8f74597ef1bcb64ad56c992b62255130e5be0b672b3df33210e->leave($__internal_bb55f2622a4df8f74597ef1bcb64ad56c992b62255130e5be0b672b3df33210e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_682a03bb19b8f557c367ccad2ab8cf3cdb7f754cf1c07d2a697a9280abecaba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682a03bb19b8f557c367ccad2ab8cf3cdb7f754cf1c07d2a697a9280abecaba8->enter($__internal_682a03bb19b8f557c367ccad2ab8cf3cdb7f754cf1c07d2a697a9280abecaba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:email.txt.twig"));

        
        $__internal_682a03bb19b8f557c367ccad2ab8cf3cdb7f754cf1c07d2a697a9280abecaba8->leave($__internal_682a03bb19b8f557c367ccad2ab8cf3cdb7f754cf1c07d2a697a9280abecaba8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
