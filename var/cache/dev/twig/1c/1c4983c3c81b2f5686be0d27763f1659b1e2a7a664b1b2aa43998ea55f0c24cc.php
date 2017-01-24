<?php

/* @OCPlatform/Advert/delete.html.twig */
class __TwigTemplate_3caab753011dfce3d58a0c7537d192b02c233c66fa11d88150a7aa098d3266c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "@OCPlatform/Advert/delete.html.twig", 2);
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
        $__internal_cad70c29e7591b53d3dffd92ad3d50ccac763d43a124ebe1fc4e632417658966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad70c29e7591b53d3dffd92ad3d50ccac763d43a124ebe1fc4e632417658966->enter($__internal_cad70c29e7591b53d3dffd92ad3d50ccac763d43a124ebe1fc4e632417658966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cad70c29e7591b53d3dffd92ad3d50ccac763d43a124ebe1fc4e632417658966->leave($__internal_cad70c29e7591b53d3dffd92ad3d50ccac763d43a124ebe1fc4e632417658966_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebfb39a7fb599366169f7fb215087ec405e696d9ab853eb497d49e19be260d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebfb39a7fb599366169f7fb215087ec405e696d9ab853eb497d49e19be260d39->enter($__internal_ebfb39a7fb599366169f7fb215087ec405e696d9ab853eb497d49e19be260d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/delete.html.twig"));

        // line 5
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ebfb39a7fb599366169f7fb215087ec405e696d9ab853eb497d49e19be260d39->leave($__internal_ebfb39a7fb599366169f7fb215087ec405e696d9ab853eb497d49e19be260d39_prof);

    }

    // line 8
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_37deb848aec155e8048cd90532e025b0db01498bb8af7bd478cefb20aa8addf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37deb848aec155e8048cd90532e025b0db01498bb8af7bd478cefb20aa8addf7->enter($__internal_37deb848aec155e8048cd90532e025b0db01498bb8af7bd478cefb20aa8addf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@OCPlatform/Advert/delete.html.twig"));

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
        
        $__internal_37deb848aec155e8048cd90532e025b0db01498bb8af7bd478cefb20aa8addf7->leave($__internal_37deb848aec155e8048cd90532e025b0db01498bb8af7bd478cefb20aa8addf7_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/delete.html.twig";
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

{% endblock %}", "@OCPlatform/Advert/delete.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\delete.html.twig");
    }
}
