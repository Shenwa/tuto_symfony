<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_635d47cf75ea98fe741b7e06300a121cb129a148eaa69758b98fd7d072e1db07 extends Twig_Template
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
        $__internal_23280a1fb0611e3fa46b4f404b85f43dd9493c1e0c15c6253ca8752b2d7b6ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23280a1fb0611e3fa46b4f404b85f43dd9493c1e0c15c6253ca8752b2d7b6ff2->enter($__internal_23280a1fb0611e3fa46b4f404b85f43dd9493c1e0c15c6253ca8752b2d7b6ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23280a1fb0611e3fa46b4f404b85f43dd9493c1e0c15c6253ca8752b2d7b6ff2->leave($__internal_23280a1fb0611e3fa46b4f404b85f43dd9493c1e0c15c6253ca8752b2d7b6ff2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5abc04cdcce94d373d06b116e0b64dc2cc105f63a7f1d9c56d3648c5f9508cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abc04cdcce94d373d06b116e0b64dc2cc105f63a7f1d9c56d3648c5f9508cdb->enter($__internal_5abc04cdcce94d373d06b116e0b64dc2cc105f63a7f1d9c56d3648c5f9508cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5abc04cdcce94d373d06b116e0b64dc2cc105f63a7f1d9c56d3648c5f9508cdb->leave($__internal_5abc04cdcce94d373d06b116e0b64dc2cc105f63a7f1d9c56d3648c5f9508cdb_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a29f6652b9269f3b9f2a8f9e58625efa4ec0cfe8f1a0eac7e3892a0d974c9e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a29f6652b9269f3b9f2a8f9e58625efa4ec0cfe8f1a0eac7e3892a0d974c9e8->enter($__internal_4a29f6652b9269f3b9f2a8f9e58625efa4ec0cfe8f1a0eac7e3892a0d974c9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

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
        
        $__internal_4a29f6652b9269f3b9f2a8f9e58625efa4ec0cfe8f1a0eac7e3892a0d974c9e8->leave($__internal_4a29f6652b9269f3b9f2a8f9e58625efa4ec0cfe8f1a0eac7e3892a0d974c9e8_prof);

    }

    // line 12
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_3381448f29ad108a0b15cefbd82eb27aefc1e1ef89d5b8180fe26d4801d544f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3381448f29ad108a0b15cefbd82eb27aefc1e1ef89d5b8180fe26d4801d544f4->enter($__internal_3381448f29ad108a0b15cefbd82eb27aefc1e1ef89d5b8180fe26d4801d544f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle::layout.html.twig"));

        // line 13
        echo "  ";
        
        $__internal_3381448f29ad108a0b15cefbd82eb27aefc1e1ef89d5b8180fe26d4801d544f4->leave($__internal_3381448f29ad108a0b15cefbd82eb27aefc1e1ef89d5b8180fe26d4801d544f4_prof);

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
