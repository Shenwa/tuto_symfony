<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_0c76875d95be2a78d0ee3060baad06defbbad5d68f2e21b23feff7af924ba50e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 2);
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
        $__internal_2ef82da46fb8cc718b3d7e08a589adbe36f3a17697ed8008fb9bcc4fff87a94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef82da46fb8cc718b3d7e08a589adbe36f3a17697ed8008fb9bcc4fff87a94b->enter($__internal_2ef82da46fb8cc718b3d7e08a589adbe36f3a17697ed8008fb9bcc4fff87a94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef82da46fb8cc718b3d7e08a589adbe36f3a17697ed8008fb9bcc4fff87a94b->leave($__internal_2ef82da46fb8cc718b3d7e08a589adbe36f3a17697ed8008fb9bcc4fff87a94b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_756c888cd28b853533c53e68861675ebb3f315e448f0afcc7cd02c2bc68098e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756c888cd28b853533c53e68861675ebb3f315e448f0afcc7cd02c2bc68098e3->enter($__internal_756c888cd28b853533c53e68861675ebb3f315e448f0afcc7cd02c2bc68098e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:delete.html.twig"));

        // line 5
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_756c888cd28b853533c53e68861675ebb3f315e448f0afcc7cd02c2bc68098e3->leave($__internal_756c888cd28b853533c53e68861675ebb3f315e448f0afcc7cd02c2bc68098e3_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3fbf8fbec3473f68e6cdfbc902341c27a0101aad6d60b04fba59595acfed32a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbf8fbec3473f68e6cdfbc902341c27a0101aad6d60b04fba59595acfed32a7->enter($__internal_3fbf8fbec3473f68e6cdfbc902341c27a0101aad6d60b04fba59595acfed32a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:delete.html.twig"));

        // line 9
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 17
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 23
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 25
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_3fbf8fbec3473f68e6cdfbc902341c27a0101aad6d60b04fba59595acfed32a7->leave($__internal_3fbf8fbec3473f68e6cdfbc902341c27a0101aad6d60b04fba59595acfed32a7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  81 => 23,  74 => 18,  69 => 17,  63 => 13,  57 => 9,  51 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}
{% extends \"CoreBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}", "OCPlatformBundle:Advert:delete.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
