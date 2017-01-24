<?php

/* OCUserBundle::layout.html.twig */
class __TwigTemplate_6fc87cb1cc5a968b473cf84dea8833b31949b1950c3528aa70c63a4433c884a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "OCUserBundle::layout.html.twig", 4);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e58db537381f2e7a3047b463c316ea727d4a2938df05c990f58179f817e6b880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58db537381f2e7a3047b463c316ea727d4a2938df05c990f58179f817e6b880->enter($__internal_e58db537381f2e7a3047b463c316ea727d4a2938df05c990f58179f817e6b880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e58db537381f2e7a3047b463c316ea727d4a2938df05c990f58179f817e6b880->leave($__internal_e58db537381f2e7a3047b463c316ea727d4a2938df05c990f58179f817e6b880_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ede6a6266d11bc86489d0c8396585808b961a17da0a562132256dc67819da716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede6a6266d11bc86489d0c8396585808b961a17da0a562132256dc67819da716->enter($__internal_ede6a6266d11bc86489d0c8396585808b961a17da0a562132256dc67819da716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCUserBundle::layout.html.twig"));

        // line 8
        echo "
  ";
        // line 10
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 11
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
  ";
        // line 19
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "
";
        
        $__internal_ede6a6266d11bc86489d0c8396585808b961a17da0a562132256dc67819da716->leave($__internal_ede6a6266d11bc86489d0c8396585808b961a17da0a562132256dc67819da716_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2b8a3ec44499399842dfd2d72b8a34527e58b264191d7468556abf95a45ed48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b8a3ec44499399842dfd2d72b8a34527e58b264191d7468556abf95a45ed48->enter($__internal_c2b8a3ec44499399842dfd2d72b8a34527e58b264191d7468556abf95a45ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCUserBundle::layout.html.twig"));

        // line 20
        echo "  ";
        
        $__internal_c2b8a3ec44499399842dfd2d72b8a34527e58b264191d7468556abf95a45ed48->leave($__internal_c2b8a3ec44499399842dfd2d72b8a34527e58b264191d7468556abf95a45ed48_prof);

    }

    public function getTemplateName()
    {
        return "OCUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 20,  88 => 19,  80 => 21,  77 => 19,  74 => 17,  68 => 16,  59 => 13,  54 => 12,  49 => 11,  44 => 10,  41 => 8,  35 => 7,  11 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/layout.html.twig #}

{# On étend notre layout #}
{% extends \"CoreBundle::layout.html.twig\" %}

{# Dans notre layout, il faut définir le block body #}
{% block body %}

  {# On affiche les messages flash que définissent les contrôleurs du bundle #}
  {% for key, messages in app.session.flashbag.all() %}
    {% for message in messages %}
      <div class=\"alert alert-{{ key }}\">
        {{ message|trans({}, 'FOSUserBundle') }}
      </div>
    {% endfor %}
  {% endfor %}

  {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}
  {% block fos_user_content %}
  {% endblock fos_user_content %}

{% endblock %}", "OCUserBundle::layout.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\UserBundle/Resources/views/layout.html.twig");
    }
}
