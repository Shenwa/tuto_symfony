<?php

/* CoreBundle:Core:index.html.twig */
class __TwigTemplate_3520c9066f688acdfba3011182913713c8dcf232669cd39e808f0c5a8d537f09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Core:index.html.twig", 1);
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
        $__internal_a1c559356d7579adadc7a83607a38d3c0f2e566d176b64b4904ef31bc6807a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c559356d7579adadc7a83607a38d3c0f2e566d176b64b4904ef31bc6807a2b->enter($__internal_a1c559356d7579adadc7a83607a38d3c0f2e566d176b64b4904ef31bc6807a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1c559356d7579adadc7a83607a38d3c0f2e566d176b64b4904ef31bc6807a2b->leave($__internal_a1c559356d7579adadc7a83607a38d3c0f2e566d176b64b4904ef31bc6807a2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d31e7c9e117f8c27e0ce7501d77ca0ad89aa46a6229cc2952cad8b7c9f7c34b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31e7c9e117f8c27e0ce7501d77ca0ad89aa46a6229cc2952cad8b7c9f7c34b6->enter($__internal_d31e7c9e117f8c27e0ce7501d77ca0ad89aa46a6229cc2952cad8b7c9f7c34b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Core:index.html.twig"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d31e7c9e117f8c27e0ce7501d77ca0ad89aa46a6229cc2952cad8b7c9f7c34b6->leave($__internal_d31e7c9e117f8c27e0ce7501d77ca0ad89aa46a6229cc2952cad8b7c9f7c34b6_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ba128c3d12b9c74028141df380024fca2a66ac8011b9748eb38a66effee0f7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba128c3d12b9c74028141df380024fca2a66ac8011b9748eb38a66effee0f7c4->enter($__internal_ba128c3d12b9c74028141df380024fca2a66ac8011b9748eb38a66effee0f7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Core:index.html.twig"));

        // line 8
        echo "  <h1>Accueil</h1>
  <hr>
  <h2>Les 3 dernières annonces</h2>

  <ul>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 14
            echo "      <li>
        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 22
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "  </ul>

";
        
        $__internal_ba128c3d12b9c74028141df380024fca2a66ac8011b9748eb38a66effee0f7c4->leave($__internal_ba128c3d12b9c74028141df380024fca2a66ac8011b9748eb38a66effee0f7c4_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  93 => 22,  85 => 19,  81 => 18,  76 => 16,  72 => 15,  69 => 14,  64 => 13,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CoreBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}
  <h1>Accueil</h1>
  <hr>
  <h2>Les 3 dernières annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

{% endblock %}
", "CoreBundle:Core:index.html.twig", "D:\\wamp\\www\\Symfony\\src\\CoreBundle/Resources/views/Core/index.html.twig");
    }
}
