<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_3768b69a79429a6d12c14d3b12bc37e2f1ca8ed773684a7a5c17eadb88b9751c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_254d8f7889775b134440c3dd83124d7933f04609dd7ee2ac54c9e51e745f7d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_254d8f7889775b134440c3dd83124d7933f04609dd7ee2ac54c9e51e745f7d9d->enter($__internal_254d8f7889775b134440c3dd83124d7933f04609dd7ee2ac54c9e51e745f7d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254d8f7889775b134440c3dd83124d7933f04609dd7ee2ac54c9e51e745f7d9d->leave($__internal_254d8f7889775b134440c3dd83124d7933f04609dd7ee2ac54c9e51e745f7d9d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_04419bb9e8460f32a13b7a5e7d9b50c1ec899d75ced830d0172ecbd23a21c384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04419bb9e8460f32a13b7a5e7d9b50c1ec899d75ced830d0172ecbd23a21c384->enter($__internal_04419bb9e8460f32a13b7a5e7d9b50c1ec899d75ced830d0172ecbd23a21c384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_04419bb9e8460f32a13b7a5e7d9b50c1ec899d75ced830d0172ecbd23a21c384->leave($__internal_04419bb9e8460f32a13b7a5e7d9b50c1ec899d75ced830d0172ecbd23a21c384_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c3ce8f3beb72693717ee0d99f91625f37ccb46cb17d9b661d5b68b15d09ad57c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ce8f3beb72693717ee0d99f91625f37ccb46cb17d9b661d5b68b15d09ad57c->enter($__internal_c3ce8f3beb72693717ee0d99f91625f37ccb46cb17d9b661d5b68b15d09ad57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

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
        
        $__internal_c3ce8f3beb72693717ee0d99f91625f37ccb46cb17d9b661d5b68b15d09ad57c->leave($__internal_c3ce8f3beb72693717ee0d99f91625f37ccb46cb17d9b661d5b68b15d09ad57c_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
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

{% endblock %}", "OCPlatformBundle:Advert:edit.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
