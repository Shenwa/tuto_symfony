<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_a47f52b0a0c6cb5eca71be64aaf85d519257ec5d0b58e0b1d47a3d0f8250a79f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d64cefd37ec6dd4eaf180f4f000e7bd950d9b15ae1fc7359e6210b74f8a20805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d64cefd37ec6dd4eaf180f4f000e7bd950d9b15ae1fc7359e6210b74f8a20805->enter($__internal_d64cefd37ec6dd4eaf180f4f000e7bd950d9b15ae1fc7359e6210b74f8a20805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d64cefd37ec6dd4eaf180f4f000e7bd950d9b15ae1fc7359e6210b74f8a20805->leave($__internal_d64cefd37ec6dd4eaf180f4f000e7bd950d9b15ae1fc7359e6210b74f8a20805_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04a7aa40c1e91028ffda304621b40fcaa9551e16dd01faed79738af514de3d25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a7aa40c1e91028ffda304621b40fcaa9551e16dd01faed79738af514de3d25->enter($__internal_04a7aa40c1e91028ffda304621b40fcaa9551e16dd01faed79738af514de3d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_04a7aa40c1e91028ffda304621b40fcaa9551e16dd01faed79738af514de3d25->leave($__internal_04a7aa40c1e91028ffda304621b40fcaa9551e16dd01faed79738af514de3d25_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_5e2830edc0ba5cbbdc9674c2a292a1bdcbbb18c2337605698f0b97aa780afd32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2830edc0ba5cbbdc9674c2a292a1bdcbbb18c2337605698f0b97aa780afd32->enter($__internal_5e2830edc0ba5cbbdc9674c2a292a1bdcbbb18c2337605698f0b97aa780afd32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

        // line 10
        echo "
  <h2>Ajouter une annonce</h2>
  <hr>
  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Ajouter une annonce de malade mental
  </p>

  <p>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_5e2830edc0ba5cbbdc9674c2a292a1bdcbbb18c2337605698f0b97aa780afd32->leave($__internal_5e2830edc0ba5cbbdc9674c2a292a1bdcbbb18c2337605698f0b97aa780afd32_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"CoreBundle::layout.html.twig\" %}

{% block title %}
  Ajouter une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Ajouter une annonce</h2>
  <hr>
  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Ajouter une annonce de malade mental
  </p>

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "OCPlatformBundle:Advert:add.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
