<?php

/* @Core/Core/contact.html.twig */
class __TwigTemplate_8d6639ee5736f1f1b926c31df6a2a3086b107a3d8ac3fd563f8cdc5b5a162c15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "@Core/Core/contact.html.twig", 1);
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
        $__internal_2f02a577ce05fce3aa2e0b443925b56ad7c3795acf1b39c1e99ed3ac1a531f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f02a577ce05fce3aa2e0b443925b56ad7c3795acf1b39c1e99ed3ac1a531f44->enter($__internal_2f02a577ce05fce3aa2e0b443925b56ad7c3795acf1b39c1e99ed3ac1a531f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Core/Core/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f02a577ce05fce3aa2e0b443925b56ad7c3795acf1b39c1e99ed3ac1a531f44->leave($__internal_2f02a577ce05fce3aa2e0b443925b56ad7c3795acf1b39c1e99ed3ac1a531f44_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c666cca5b33fbfb644e13aeb2822b2f89fedc6466299fb78387bc73258b625e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c666cca5b33fbfb644e13aeb2822b2f89fedc6466299fb78387bc73258b625e->enter($__internal_0c666cca5b33fbfb644e13aeb2822b2f89fedc6466299fb78387bc73258b625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/Core/contact.html.twig"));

        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0c666cca5b33fbfb644e13aeb2822b2f89fedc6466299fb78387bc73258b625e->leave($__internal_0c666cca5b33fbfb644e13aeb2822b2f89fedc6466299fb78387bc73258b625e_prof);

    }

    // line 7
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_6d522f936c3d7c4e9d74abb4df4e0c6b31cbd5936987700f180a1840a3331291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d522f936c3d7c4e9d74abb4df4e0c6b31cbd5936987700f180a1840a3331291->enter($__internal_6d522f936c3d7c4e9d74abb4df4e0c6b31cbd5936987700f180a1840a3331291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/Core/contact.html.twig"));

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
        
        $__internal_6d522f936c3d7c4e9d74abb4df4e0c6b31cbd5936987700f180a1840a3331291->leave($__internal_6d522f936c3d7c4e9d74abb4df4e0c6b31cbd5936987700f180a1840a3331291_prof);

    }

    public function getTemplateName()
    {
        return "@Core/Core/contact.html.twig";
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
", "@Core/Core/contact.html.twig", "D:\\wamp\\www\\Symfony\\src\\CoreBundle\\Resources\\views\\Core\\contact.html.twig");
    }
}
