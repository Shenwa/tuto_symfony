<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_55a21eaeaa09deb6fe301842a5e965ea360fe2007e927000ec1cbd56b2b05741 extends Twig_Template
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
        $__internal_6545189934a63d5cba210586786aec86a1597dbc15815c27d7ad41d8f05c5839 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6545189934a63d5cba210586786aec86a1597dbc15815c27d7ad41d8f05c5839->enter($__internal_6545189934a63d5cba210586786aec86a1597dbc15815c27d7ad41d8f05c5839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6545189934a63d5cba210586786aec86a1597dbc15815c27d7ad41d8f05c5839->leave($__internal_6545189934a63d5cba210586786aec86a1597dbc15815c27d7ad41d8f05c5839_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a2c33b5e7653228d5bd5067c8336d3cfe3b86ce0fcbb1ec34d08e4cd9eb91062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c33b5e7653228d5bd5067c8336d3cfe3b86ce0fcbb1ec34d08e4cd9eb91062->enter($__internal_a2c33b5e7653228d5bd5067c8336d3cfe3b86ce0fcbb1ec34d08e4cd9eb91062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a2c33b5e7653228d5bd5067c8336d3cfe3b86ce0fcbb1ec34d08e4cd9eb91062->leave($__internal_a2c33b5e7653228d5bd5067c8336d3cfe3b86ce0fcbb1ec34d08e4cd9eb91062_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fda59d498c25164f06d7553a54b2d3db9b7ac1b59914f70a15bfa210f6a6ff50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda59d498c25164f06d7553a54b2d3db9b7ac1b59914f70a15bfa210f6a6ff50->enter($__internal_fda59d498c25164f06d7553a54b2d3db9b7ac1b59914f70a15bfa210f6a6ff50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fda59d498c25164f06d7553a54b2d3db9b7ac1b59914f70a15bfa210f6a6ff50->leave($__internal_fda59d498c25164f06d7553a54b2d3db9b7ac1b59914f70a15bfa210f6a6ff50_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_218b01906790251dd0830923406b1db6cc5f08a43fcbcada6f5078a59b009914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218b01906790251dd0830923406b1db6cc5f08a43fcbcada6f5078a59b009914->enter($__internal_218b01906790251dd0830923406b1db6cc5f08a43fcbcada6f5078a59b009914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Registration/email.txt.twig"));

        
        $__internal_218b01906790251dd0830923406b1db6cc5f08a43fcbcada6f5078a59b009914->leave($__internal_218b01906790251dd0830923406b1db6cc5f08a43fcbcada6f5078a59b009914_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
", "@FOSUser/Registration/email.txt.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
