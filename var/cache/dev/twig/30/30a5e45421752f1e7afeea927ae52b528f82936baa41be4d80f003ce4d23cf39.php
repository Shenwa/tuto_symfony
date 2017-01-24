<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_afb304b112502eb935921f8e0da3073be2975e54bcbdb365a615bafa18607269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "CoreBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f08701cc9f98ee298dcd7f70c8c323addb91fd21bb26cc32f12e5a9e1eaec2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f08701cc9f98ee298dcd7f70c8c323addb91fd21bb26cc32f12e5a9e1eaec2b->enter($__internal_2f08701cc9f98ee298dcd7f70c8c323addb91fd21bb26cc32f12e5a9e1eaec2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f08701cc9f98ee298dcd7f70c8c323addb91fd21bb26cc32f12e5a9e1eaec2b->leave($__internal_2f08701cc9f98ee298dcd7f70c8c323addb91fd21bb26cc32f12e5a9e1eaec2b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_df4e22a8757a7bdef5352fefca3b50ec496b87a42ef0aa2e843d1cfdddd98ed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4e22a8757a7bdef5352fefca3b50ec496b87a42ef0aa2e843d1cfdddd98ed6->enter($__internal_df4e22a8757a7bdef5352fefca3b50ec496b87a42ef0aa2e843d1cfdddd98ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_df4e22a8757a7bdef5352fefca3b50ec496b87a42ef0aa2e843d1cfdddd98ed6->leave($__internal_df4e22a8757a7bdef5352fefca3b50ec496b87a42ef0aa2e843d1cfdddd98ed6_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5dcadec961c4c339c6f1408e10dcc932bd48546a111a4f4354ef55946a6b928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dcadec961c4c339c6f1408e10dcc932bd48546a111a4f4354ef55946a6b928->enter($__internal_d5dcadec961c4c339c6f1408e10dcc932bd48546a111a4f4354ef55946a6b928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 8
        echo "
  ";
        // line 10
        echo "
  ";
        // line 12
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 14
        echo "
";
        
        $__internal_d5dcadec961c4c339c6f1408e10dcc932bd48546a111a4f4354ef55946a6b928->leave($__internal_d5dcadec961c4c339c6f1408e10dcc932bd48546a111a4f4354ef55946a6b928_prof);

    }

    // line 12
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9c669ce919fd29db613abd8142e9a91e37ff6439b8a632688a55671ec22f2ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c669ce919fd29db613abd8142e9a91e37ff6439b8a632688a55671ec22f2ca5->enter($__internal_9c669ce919fd29db613abd8142e9a91e37ff6439b8a632688a55671ec22f2ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 13
        echo "  ";
        
        $__internal_9c669ce919fd29db613abd8142e9a91e37ff6439b8a632688a55671ec22f2ca5->leave($__internal_9c669ce919fd29db613abd8142e9a91e37ff6439b8a632688a55671ec22f2ca5_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 13,  75 => 12,  67 => 14,  64 => 12,  61 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "CoreBundle::layout.html.twig", "D:\\wamp\\www\\Symfony\\src\\CoreBundle/Resources/views/layout.html.twig");
    }
}
