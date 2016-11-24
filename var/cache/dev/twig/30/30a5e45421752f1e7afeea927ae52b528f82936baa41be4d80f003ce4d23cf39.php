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
        $__internal_420f18fa7104c837c805752781440e671bef2bf68da1f8a618f6eeac82ef4a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420f18fa7104c837c805752781440e671bef2bf68da1f8a618f6eeac82ef4a79->enter($__internal_420f18fa7104c837c805752781440e671bef2bf68da1f8a618f6eeac82ef4a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_420f18fa7104c837c805752781440e671bef2bf68da1f8a618f6eeac82ef4a79->leave($__internal_420f18fa7104c837c805752781440e671bef2bf68da1f8a618f6eeac82ef4a79_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8496d5373fafb8f921bc41fac954e52417a297c6ab6bb2dcfdfb01076c27c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd8496d5373fafb8f921bc41fac954e52417a297c6ab6bb2dcfdfb01076c27c7->enter($__internal_dd8496d5373fafb8f921bc41fac954e52417a297c6ab6bb2dcfdfb01076c27c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dd8496d5373fafb8f921bc41fac954e52417a297c6ab6bb2dcfdfb01076c27c7->leave($__internal_dd8496d5373fafb8f921bc41fac954e52417a297c6ab6bb2dcfdfb01076c27c7_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a5f45f74634b1d427a8e595dffb9c93e9f16a16ca67597e15e88d66b4764d2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a5f45f74634b1d427a8e595dffb9c93e9f16a16ca67597e15e88d66b4764d2a->enter($__internal_7a5f45f74634b1d427a8e595dffb9c93e9f16a16ca67597e15e88d66b4764d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

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
        
        $__internal_7a5f45f74634b1d427a8e595dffb9c93e9f16a16ca67597e15e88d66b4764d2a->leave($__internal_7a5f45f74634b1d427a8e595dffb9c93e9f16a16ca67597e15e88d66b4764d2a_prof);

    }

    // line 12
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ba5ad25e0e68c7ae8c6223510a91cd485f45a161f2f3d104314eb66d0afbb609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba5ad25e0e68c7ae8c6223510a91cd485f45a161f2f3d104314eb66d0afbb609->enter($__internal_ba5ad25e0e68c7ae8c6223510a91cd485f45a161f2f3d104314eb66d0afbb609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 13
        echo "  ";
        
        $__internal_ba5ad25e0e68c7ae8c6223510a91cd485f45a161f2f3d104314eb66d0afbb609->leave($__internal_ba5ad25e0e68c7ae8c6223510a91cd485f45a161f2f3d104314eb66d0afbb609_prof);

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
