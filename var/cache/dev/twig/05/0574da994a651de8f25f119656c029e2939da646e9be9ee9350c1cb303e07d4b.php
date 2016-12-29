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
        $__internal_e87e572daf22766ebab88383cc2b45e4c8a8ce9d14d795feabcd841cf4146b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e87e572daf22766ebab88383cc2b45e4c8a8ce9d14d795feabcd841cf4146b1b->enter($__internal_e87e572daf22766ebab88383cc2b45e4c8a8ce9d14d795feabcd841cf4146b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e87e572daf22766ebab88383cc2b45e4c8a8ce9d14d795feabcd841cf4146b1b->leave($__internal_e87e572daf22766ebab88383cc2b45e4c8a8ce9d14d795feabcd841cf4146b1b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae47da1204547cd84cbfa0a825cf471e4c9b90245eab380d91a6bdda2b434a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae47da1204547cd84cbfa0a825cf471e4c9b90245eab380d91a6bdda2b434a40->enter($__internal_ae47da1204547cd84cbfa0a825cf471e4c9b90245eab380d91a6bdda2b434a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ae47da1204547cd84cbfa0a825cf471e4c9b90245eab380d91a6bdda2b434a40->leave($__internal_ae47da1204547cd84cbfa0a825cf471e4c9b90245eab380d91a6bdda2b434a40_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ec03fcce17e08b9eedd0de8b911106238c609b0ce02a5f7927d2d5b5d0a41046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec03fcce17e08b9eedd0de8b911106238c609b0ce02a5f7927d2d5b5d0a41046->enter($__internal_ec03fcce17e08b9eedd0de8b911106238c609b0ce02a5f7927d2d5b5d0a41046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

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
        
        $__internal_ec03fcce17e08b9eedd0de8b911106238c609b0ce02a5f7927d2d5b5d0a41046->leave($__internal_ec03fcce17e08b9eedd0de8b911106238c609b0ce02a5f7927d2d5b5d0a41046_prof);

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
