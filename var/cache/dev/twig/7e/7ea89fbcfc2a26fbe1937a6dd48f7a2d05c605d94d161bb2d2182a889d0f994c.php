<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_57fd42bcfefb225eebdb637839c96953cad155296f9fdc09367047feab63ffe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_08476c8724f2e59bfffb7c56040c4d65012f9a4f34d14d5683b719ba2009450d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08476c8724f2e59bfffb7c56040c4d65012f9a4f34d14d5683b719ba2009450d->enter($__internal_08476c8724f2e59bfffb7c56040c4d65012f9a4f34d14d5683b719ba2009450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08476c8724f2e59bfffb7c56040c4d65012f9a4f34d14d5683b719ba2009450d->leave($__internal_08476c8724f2e59bfffb7c56040c4d65012f9a4f34d14d5683b719ba2009450d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_abac27e7bd99102e1ce733465b7560bccec75bcdf4ec1b57573ff1fa3608bb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abac27e7bd99102e1ce733465b7560bccec75bcdf4ec1b57573ff1fa3608bb99->enter($__internal_abac27e7bd99102e1ce733465b7560bccec75bcdf4ec1b57573ff1fa3608bb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_abac27e7bd99102e1ce733465b7560bccec75bcdf4ec1b57573ff1fa3608bb99->leave($__internal_abac27e7bd99102e1ce733465b7560bccec75bcdf4ec1b57573ff1fa3608bb99_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
