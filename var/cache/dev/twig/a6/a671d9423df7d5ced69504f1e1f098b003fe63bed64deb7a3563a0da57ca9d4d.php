<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_19ee1ccbb51ee99c1a322fa3392dc26415b145a3abdc2d0635e46df1552fe784 extends Twig_Template
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
        $__internal_928b89705348303b4f1e1644550a2b2eb818ed48ba474f8bfa37d9ce4e8b36d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928b89705348303b4f1e1644550a2b2eb818ed48ba474f8bfa37d9ce4e8b36d4->enter($__internal_928b89705348303b4f1e1644550a2b2eb818ed48ba474f8bfa37d9ce4e8b36d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928b89705348303b4f1e1644550a2b2eb818ed48ba474f8bfa37d9ce4e8b36d4->leave($__internal_928b89705348303b4f1e1644550a2b2eb818ed48ba474f8bfa37d9ce4e8b36d4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7193ebbb0b43e51b0dff97830e007e1d088a4223555d86835d6b089003185c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7193ebbb0b43e51b0dff97830e007e1d088a4223555d86835d6b089003185c9c->enter($__internal_7193ebbb0b43e51b0dff97830e007e1d088a4223555d86835d6b089003185c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

        // line 6
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7193ebbb0b43e51b0dff97830e007e1d088a4223555d86835d6b089003185c9c->leave($__internal_7193ebbb0b43e51b0dff97830e007e1d088a4223555d86835d6b089003185c9c_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3db3ae3fb24e27aadac538aa89c20fed15bd35a94d73b1d187c08953ace0ef01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db3ae3fb24e27aadac538aa89c20fed15bd35a94d73b1d187c08953ace0ef01->enter($__internal_3db3ae3fb24e27aadac538aa89c20fed15bd35a94d73b1d187c08953ace0ef01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:add.html.twig"));

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
        
        $__internal_3db3ae3fb24e27aadac538aa89c20fed15bd35a94d73b1d187c08953ace0ef01->leave($__internal_3db3ae3fb24e27aadac538aa89c20fed15bd35a94d73b1d187c08953ace0ef01_prof);

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
