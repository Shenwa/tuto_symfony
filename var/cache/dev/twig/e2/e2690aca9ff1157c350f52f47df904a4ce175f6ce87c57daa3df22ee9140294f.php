<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_a1c70f51c80e56a0d53f687c2cfbd78947bc64fb9854aefe7bcb7fefe159c083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_a32d2b09b932284d2b27dc3ba07e8e32937baa0f642eaa7d8e4838a813a0fbb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32d2b09b932284d2b27dc3ba07e8e32937baa0f642eaa7d8e4838a813a0fbb9->enter($__internal_a32d2b09b932284d2b27dc3ba07e8e32937baa0f642eaa7d8e4838a813a0fbb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a32d2b09b932284d2b27dc3ba07e8e32937baa0f642eaa7d8e4838a813a0fbb9->leave($__internal_a32d2b09b932284d2b27dc3ba07e8e32937baa0f642eaa7d8e4838a813a0fbb9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7b6534bf15491a9ffc77144cbb103f2fbed1c747a8fcd4b14d16c0b85f880937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b6534bf15491a9ffc77144cbb103f2fbed1c747a8fcd4b14d16c0b85f880937->enter($__internal_7b6534bf15491a9ffc77144cbb103f2fbed1c747a8fcd4b14d16c0b85f880937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/request.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_7b6534bf15491a9ffc77144cbb103f2fbed1c747a8fcd4b14d16c0b85f880937->leave($__internal_7b6534bf15491a9ffc77144cbb103f2fbed1c747a8fcd4b14d16c0b85f880937_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
