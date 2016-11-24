<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_657775eff434e1cd2488a5ed262cc34376bfa34b4a8352129e231f9887af9fe4 extends Twig_Template
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
        $__internal_fe251b26fdd25e039d5616383ccaad824be6186ce3a21e537bc0c9a8cc2764f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe251b26fdd25e039d5616383ccaad824be6186ce3a21e537bc0c9a8cc2764f6->enter($__internal_fe251b26fdd25e039d5616383ccaad824be6186ce3a21e537bc0c9a8cc2764f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe251b26fdd25e039d5616383ccaad824be6186ce3a21e537bc0c9a8cc2764f6->leave($__internal_fe251b26fdd25e039d5616383ccaad824be6186ce3a21e537bc0c9a8cc2764f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f729782f311ac76c92742b5facb60d55db244e7e81a8867318dfadf01ac800c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f729782f311ac76c92742b5facb60d55db244e7e81a8867318dfadf01ac800c->enter($__internal_1f729782f311ac76c92742b5facb60d55db244e7e81a8867318dfadf01ac800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_1f729782f311ac76c92742b5facb60d55db244e7e81a8867318dfadf01ac800c->leave($__internal_1f729782f311ac76c92742b5facb60d55db244e7e81a8867318dfadf01ac800c_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_40502b778f288bfaa6d63269cf8ebdc3b6f89c66b961a15354689fd09e0f9a8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40502b778f288bfaa6d63269cf8ebdc3b6f89c66b961a15354689fd09e0f9a8e->enter($__internal_40502b778f288bfaa6d63269cf8ebdc3b6f89c66b961a15354689fd09e0f9a8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:edit.html.twig"));

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
        
        $__internal_40502b778f288bfaa6d63269cf8ebdc3b6f89c66b961a15354689fd09e0f9a8e->leave($__internal_40502b778f288bfaa6d63269cf8ebdc3b6f89c66b961a15354689fd09e0f9a8e_prof);

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
