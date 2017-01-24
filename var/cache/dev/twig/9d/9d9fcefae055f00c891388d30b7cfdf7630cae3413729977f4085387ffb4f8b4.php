<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3c616c96ae68479817919bc694c96766a5222ae369e888761b9f26d0c2a47572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 4);
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
        $__internal_26cc3df189e34d374ae57c71f002e4b059ab5e29a2898efb8a2e9475dda76537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26cc3df189e34d374ae57c71f002e4b059ab5e29a2898efb8a2e9475dda76537->enter($__internal_26cc3df189e34d374ae57c71f002e4b059ab5e29a2898efb8a2e9475dda76537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26cc3df189e34d374ae57c71f002e4b059ab5e29a2898efb8a2e9475dda76537->leave($__internal_26cc3df189e34d374ae57c71f002e4b059ab5e29a2898efb8a2e9475dda76537_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_016e5efd3fdca426699c78bbb40571fce6af8d51d62b6cbbc26227c257754422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016e5efd3fdca426699c78bbb40571fce6af8d51d62b6cbbc26227c257754422->enter($__internal_016e5efd3fdca426699c78bbb40571fce6af8d51d62b6cbbc26227c257754422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_016e5efd3fdca426699c78bbb40571fce6af8d51d62b6cbbc26227c257754422->leave($__internal_016e5efd3fdca426699c78bbb40571fce6af8d51d62b6cbbc26227c257754422_prof);

    }

    // line 19
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a9b94651cd39fd6fac70374b74d9907fbaa6ff1d4bccae76bb3aa93a4fd19d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a9b94651cd39fd6fac70374b74d9907fbaa6ff1d4bccae76bb3aa93a4fd19d6->enter($__internal_3a9b94651cd39fd6fac70374b74d9907fbaa6ff1d4bccae76bb3aa93a4fd19d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle::layout.html.twig"));

        // line 20
        echo "  ";
        
        $__internal_3a9b94651cd39fd6fac70374b74d9907fbaa6ff1d4bccae76bb3aa93a4fd19d6->leave($__internal_3a9b94651cd39fd6fac70374b74d9907fbaa6ff1d4bccae76bb3aa93a4fd19d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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

{% endblock %}", "FOSUserBundle::layout.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\UserBundle/Resources/views/layout.html.twig");
    }
}
