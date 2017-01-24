<?php

/* CoreBundle:Core:contact.html.twig */
class __TwigTemplate_73b74170062129af9dd49831c0af9241bfd1eb8071e74d0d50ebb49c9bcbfdf1 extends Twig_Template
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
        $__internal_a950c5318a412d93d80bea58fc1a9896eb2c6d1a51f78f79cf414274fb7466d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a950c5318a412d93d80bea58fc1a9896eb2c6d1a51f78f79cf414274fb7466d8->enter($__internal_a950c5318a412d93d80bea58fc1a9896eb2c6d1a51f78f79cf414274fb7466d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Core:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a950c5318a412d93d80bea58fc1a9896eb2c6d1a51f78f79cf414274fb7466d8->leave($__internal_a950c5318a412d93d80bea58fc1a9896eb2c6d1a51f78f79cf414274fb7466d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_945e2e1933491feec3646a05ca8ab93c906e342e933e94ce8e85cc5f87bfe313 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945e2e1933491feec3646a05ca8ab93c906e342e933e94ce8e85cc5f87bfe313->enter($__internal_945e2e1933491feec3646a05ca8ab93c906e342e933e94ce8e85cc5f87bfe313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Core:contact.html.twig"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_945e2e1933491feec3646a05ca8ab93c906e342e933e94ce8e85cc5f87bfe313->leave($__internal_945e2e1933491feec3646a05ca8ab93c906e342e933e94ce8e85cc5f87bfe313_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_b9c24e3fbb441f419735d21c2bfcd590fe3ce37ff0eb59c7acfd54ab703db391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c24e3fbb441f419735d21c2bfcd590fe3ce37ff0eb59c7acfd54ab703db391->enter($__internal_b9c24e3fbb441f419735d21c2bfcd590fe3ce37ff0eb59c7acfd54ab703db391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "CoreBundle:Core:contact.html.twig"));

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
        
        $__internal_b9c24e3fbb441f419735d21c2bfcd590fe3ce37ff0eb59c7acfd54ab703db391->leave($__internal_b9c24e3fbb441f419735d21c2bfcd590fe3ce37ff0eb59c7acfd54ab703db391_prof);

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
