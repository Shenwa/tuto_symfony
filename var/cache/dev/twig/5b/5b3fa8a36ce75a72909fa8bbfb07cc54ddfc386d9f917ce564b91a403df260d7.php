<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3284adfda4cb2e3f1bd113c7050c5df5ec5b854528a99303ea45369439431dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_a7e169e2d31bf0a83ef6f8ae6c27306eb6145f30029ac16efa0877600dbc518d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e169e2d31bf0a83ef6f8ae6c27306eb6145f30029ac16efa0877600dbc518d->enter($__internal_a7e169e2d31bf0a83ef6f8ae6c27306eb6145f30029ac16efa0877600dbc518d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7e169e2d31bf0a83ef6f8ae6c27306eb6145f30029ac16efa0877600dbc518d->leave($__internal_a7e169e2d31bf0a83ef6f8ae6c27306eb6145f30029ac16efa0877600dbc518d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7cf9922c26a74097b89d24fdd37b13f81f12b2446975c64256bfa5b87714baaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf9922c26a74097b89d24fdd37b13f81f12b2446975c64256bfa5b87714baaf->enter($__internal_7cf9922c26a74097b89d24fdd37b13f81f12b2446975c64256bfa5b87714baaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7cf9922c26a74097b89d24fdd37b13f81f12b2446975c64256bfa5b87714baaf->leave($__internal_7cf9922c26a74097b89d24fdd37b13f81f12b2446975c64256bfa5b87714baaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
