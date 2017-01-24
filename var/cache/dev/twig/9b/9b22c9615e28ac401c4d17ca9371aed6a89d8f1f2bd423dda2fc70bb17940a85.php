<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_d5ebf0c7cfecb4ca2c4b4b11d3a5f9ce6e71f02b6c370ebd22090e319344bbb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
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
        $__internal_accfd434c29b4efe23d27a82ebdbada26271fc24d0310bd88dee472387c8f2b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_accfd434c29b4efe23d27a82ebdbada26271fc24d0310bd88dee472387c8f2b2->enter($__internal_accfd434c29b4efe23d27a82ebdbada26271fc24d0310bd88dee472387c8f2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_accfd434c29b4efe23d27a82ebdbada26271fc24d0310bd88dee472387c8f2b2->leave($__internal_accfd434c29b4efe23d27a82ebdbada26271fc24d0310bd88dee472387c8f2b2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1278365ab672ad4bf1d24d5060cc133f029823c0c54cb394877c6b5c9e693920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1278365ab672ad4bf1d24d5060cc133f029823c0c54cb394877c6b5c9e693920->enter($__internal_1278365ab672ad4bf1d24d5060cc133f029823c0c54cb394877c6b5c9e693920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/edit.html.twig"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1278365ab672ad4bf1d24d5060cc133f029823c0c54cb394877c6b5c9e693920->leave($__internal_1278365ab672ad4bf1d24d5060cc133f029823c0c54cb394877c6b5c9e693920_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_015770a10bd185784484fb257e38c4dd4589360abd691fea0afdc1626988ff44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_015770a10bd185784484fb257e38c4dd4589360abd691fea0afdc1626988ff44->enter($__internal_015770a10bd185784484fb257e38c4dd4589360abd691fea0afdc1626988ff44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/edit.html.twig"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>
  <hr>
  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_015770a10bd185784484fb257e38c4dd4589360abd691fea0afdc1626988ff44->leave($__internal_015770a10bd185784484fb257e38c4dd4589360abd691fea0afdc1626988ff44_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
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
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>
  <hr>
  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit général de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}", "@OCPlatform/Advert/edit.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\edit.html.twig");
    }
}
