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
        $__internal_1d5ac723aba0a4323a1d756e58413250d07deadf2e1a2ed8066ba2cd78b0c3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5ac723aba0a4323a1d756e58413250d07deadf2e1a2ed8066ba2cd78b0c3f9->enter($__internal_1d5ac723aba0a4323a1d756e58413250d07deadf2e1a2ed8066ba2cd78b0c3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5ac723aba0a4323a1d756e58413250d07deadf2e1a2ed8066ba2cd78b0c3f9->leave($__internal_1d5ac723aba0a4323a1d756e58413250d07deadf2e1a2ed8066ba2cd78b0c3f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33b2a3844f05a040cd3a12b17ea6ed3db6df30af86987cb22aa0077b9e424125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b2a3844f05a040cd3a12b17ea6ed3db6df30af86987cb22aa0077b9e424125->enter($__internal_33b2a3844f05a040cd3a12b17ea6ed3db6df30af86987cb22aa0077b9e424125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_33b2a3844f05a040cd3a12b17ea6ed3db6df30af86987cb22aa0077b9e424125->leave($__internal_33b2a3844f05a040cd3a12b17ea6ed3db6df30af86987cb22aa0077b9e424125_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4237991a2475b4752b665cc1267498dd2f12463991265063bc8e8f7c2e328917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4237991a2475b4752b665cc1267498dd2f12463991265063bc8e8f7c2e328917->enter($__internal_4237991a2475b4752b665cc1267498dd2f12463991265063bc8e8f7c2e328917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

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
        
        $__internal_4237991a2475b4752b665cc1267498dd2f12463991265063bc8e8f7c2e328917->leave($__internal_4237991a2475b4752b665cc1267498dd2f12463991265063bc8e8f7c2e328917_prof);

    }

    // line 12
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c6cbe264be3c270141f48467d4041ca7d0285eeadda24cf9978e9626e7e8734e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6cbe264be3c270141f48467d4041ca7d0285eeadda24cf9978e9626e7e8734e->enter($__internal_c6cbe264be3c270141f48467d4041ca7d0285eeadda24cf9978e9626e7e8734e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 13
        echo "  ";
        
        $__internal_c6cbe264be3c270141f48467d4041ca7d0285eeadda24cf9978e9626e7e8734e->leave($__internal_c6cbe264be3c270141f48467d4041ca7d0285eeadda24cf9978e9626e7e8734e_prof);

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
