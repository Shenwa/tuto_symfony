<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_26022b10b9d851b6a767306ac89f0b4f47a654d6d093215ed74fe477729a490e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_e37f7e2297098266ccd638d1244ac16ef60c3a75d43f952396c492834fc620b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37f7e2297098266ccd638d1244ac16ef60c3a75d43f952396c492834fc620b5->enter($__internal_e37f7e2297098266ccd638d1244ac16ef60c3a75d43f952396c492834fc620b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e37f7e2297098266ccd638d1244ac16ef60c3a75d43f952396c492834fc620b5->leave($__internal_e37f7e2297098266ccd638d1244ac16ef60c3a75d43f952396c492834fc620b5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1ecb1ea2676ecf3b01fa4ce11c3895a93e916a74c922ad1d908e7fbc4d14774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ecb1ea2676ecf3b01fa4ce11c3895a93e916a74c922ad1d908e7fbc4d14774->enter($__internal_b1ecb1ea2676ecf3b01fa4ce11c3895a93e916a74c922ad1d908e7fbc4d14774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Registration:check_email.html.twig"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b1ecb1ea2676ecf3b01fa4ce11c3895a93e916a74c922ad1d908e7fbc4d14774->leave($__internal_b1ecb1ea2676ecf3b01fa4ce11c3895a93e916a74c922ad1d908e7fbc4d14774_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
