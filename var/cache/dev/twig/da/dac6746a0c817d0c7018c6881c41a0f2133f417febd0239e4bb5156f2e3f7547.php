<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_9b68b849bc2db091a64121f83f9c832f7bd1b8b0685708132e9ee44c8cd7c377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
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
        $__internal_5973bddc3303841b5f3d41aa521996866ffd7ca7f6fde411a71cf990d01594bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5973bddc3303841b5f3d41aa521996866ffd7ca7f6fde411a71cf990d01594bf->enter($__internal_5973bddc3303841b5f3d41aa521996866ffd7ca7f6fde411a71cf990d01594bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5973bddc3303841b5f3d41aa521996866ffd7ca7f6fde411a71cf990d01594bf->leave($__internal_5973bddc3303841b5f3d41aa521996866ffd7ca7f6fde411a71cf990d01594bf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7061fae1c61bb7981fe5eedf8333ec66d10f32593c87ef599683da37bed29487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7061fae1c61bb7981fe5eedf8333ec66d10f32593c87ef599683da37bed29487->enter($__internal_7061fae1c61bb7981fe5eedf8333ec66d10f32593c87ef599683da37bed29487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7061fae1c61bb7981fe5eedf8333ec66d10f32593c87ef599683da37bed29487->leave($__internal_7061fae1c61bb7981fe5eedf8333ec66d10f32593c87ef599683da37bed29487_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_d095681dd2a9fd705b7b559455f00c5add3af5dc9c6c50a641444641865a9f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d095681dd2a9fd705b7b559455f00c5add3af5dc9c6c50a641444641865a9f03->enter($__internal_d095681dd2a9fd705b7b559455f00c5add3af5dc9c6c50a641444641865a9f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/add.html.twig"));

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
        
        $__internal_d095681dd2a9fd705b7b559455f00c5add3af5dc9c6c50a641444641865a9f03->leave($__internal_d095681dd2a9fd705b7b559455f00c5add3af5dc9c6c50a641444641865a9f03_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
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

{% endblock %}", "@OCPlatform/Advert/add.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\add.html.twig");
    }
}
