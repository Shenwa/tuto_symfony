<?php

/* CoreBundle:Core:contact.html.twig */
class __TwigTemplate_c380626c336b5029ac02f64f1597f5110377c19e07162bed15e4c54e257624d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Core:contact.html.twig", 1);
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
        $__internal_df058af3ead18d0d859ba1af07ea6e28c318f66d7f174db50655d5e1fbf64bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df058af3ead18d0d859ba1af07ea6e28c318f66d7f174db50655d5e1fbf64bd0->enter($__internal_df058af3ead18d0d859ba1af07ea6e28c318f66d7f174db50655d5e1fbf64bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Core:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df058af3ead18d0d859ba1af07ea6e28c318f66d7f174db50655d5e1fbf64bd0->leave($__internal_df058af3ead18d0d859ba1af07ea6e28c318f66d7f174db50655d5e1fbf64bd0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_763e443b4f22e7d26cb3f6e608e3ea2b8162c3d3f2320ec7d6c443367de7f862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763e443b4f22e7d26cb3f6e608e3ea2b8162c3d3f2320ec7d6c443367de7f862->enter($__internal_763e443b4f22e7d26cb3f6e608e3ea2b8162c3d3f2320ec7d6c443367de7f862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Core:contact.html.twig"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_763e443b4f22e7d26cb3f6e608e3ea2b8162c3d3f2320ec7d6c443367de7f862->leave($__internal_763e443b4f22e7d26cb3f6e608e3ea2b8162c3d3f2320ec7d6c443367de7f862_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_15f67a2a4d8dc9ed33f251bd384f1a864c52b664f129c4dfb40c2008f77973fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f67a2a4d8dc9ed33f251bd384f1a864c52b664f129c4dfb40c2008f77973fa->enter($__internal_15f67a2a4d8dc9ed33f251bd384f1a864c52b664f129c4dfb40c2008f77973fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Core:contact.html.twig"));

        // line 8
        echo "
  <h2>Page de contact</h2>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "       ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  <hr>
  
";
        
        $__internal_15f67a2a4d8dc9ed33f251bd384f1a864c52b664f129c4dfb40c2008f77973fa->leave($__internal_15f67a2a4d8dc9ed33f251bd384f1a864c52b664f129c4dfb40c2008f77973fa_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Core:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 13,  65 => 11,  61 => 10,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

  <h2>Page de contact</h2>
  {% for message in app.session.flashbag.get('info') %}
       {{ message }}
  {% endfor %}
  <hr>
  
{% endblock %}
", "CoreBundle:Core:contact.html.twig", "D:\\wamp\\www\\Symfony\\src\\CoreBundle/Resources/views/Core/contact.html.twig");
    }
}
