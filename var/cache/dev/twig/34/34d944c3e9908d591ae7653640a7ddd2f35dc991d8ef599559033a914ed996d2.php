<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_ad9657bbbe2cb1f7a88787c1618cbf3ca4dcec608b2c118ed763bc582e90769c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_20e391485a8c528abf6341f69f781f28d9360b3c864019a77ef06788cc7fa010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e391485a8c528abf6341f69f781f28d9360b3c864019a77ef06788cc7fa010->enter($__internal_20e391485a8c528abf6341f69f781f28d9360b3c864019a77ef06788cc7fa010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20e391485a8c528abf6341f69f781f28d9360b3c864019a77ef06788cc7fa010->leave($__internal_20e391485a8c528abf6341f69f781f28d9360b3c864019a77ef06788cc7fa010_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6fce4d06a12a29210afea87fd95dd51538514fdfca1463ce646dab9b86f6b769 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fce4d06a12a29210afea87fd95dd51538514fdfca1463ce646dab9b86f6b769->enter($__internal_6fce4d06a12a29210afea87fd95dd51538514fdfca1463ce646dab9b86f6b769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6fce4d06a12a29210afea87fd95dd51538514fdfca1463ce646dab9b86f6b769->leave($__internal_6fce4d06a12a29210afea87fd95dd51538514fdfca1463ce646dab9b86f6b769_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/edit.html.twig");
    }
}
