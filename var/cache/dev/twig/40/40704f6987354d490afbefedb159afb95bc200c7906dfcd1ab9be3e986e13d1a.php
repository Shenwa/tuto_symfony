<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_28978c2a1c07c876f430e9be9ab9f3ad93e4050c31d972248110060b900c497f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
            'candidature' => array($this, 'block_candidature'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e921725525df4ac8dbabcec3b8d5855053974e39cc7a90b5c5e08ff92bca784a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e921725525df4ac8dbabcec3b8d5855053974e39cc7a90b5c5e08ff92bca784a->enter($__internal_e921725525df4ac8dbabcec3b8d5855053974e39cc7a90b5c5e08ff92bca784a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e921725525df4ac8dbabcec3b8d5855053974e39cc7a90b5c5e08ff92bca784a->leave($__internal_e921725525df4ac8dbabcec3b8d5855053974e39cc7a90b5c5e08ff92bca784a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_68ee3c882971f3a8ffa8235e995674207e1569ef1db8486fd6d79e6efd691680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68ee3c882971f3a8ffa8235e995674207e1569ef1db8486fd6d79e6efd691680->enter($__internal_68ee3c882971f3a8ffa8235e995674207e1569ef1db8486fd6d79e6efd691680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:view.html.twig"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_68ee3c882971f3a8ffa8235e995674207e1569ef1db8486fd6d79e6efd691680->leave($__internal_68ee3c882971f3a8ffa8235e995674207e1569ef1db8486fd6d79e6efd691680_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_cc58815acbfac5a82a161a8ea71a60ef26c86edb9acc191b5dc026b62f87ce31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc58815acbfac5a82a161a8ea71a60ef26c86edb9acc191b5dc026b62f87ce31->enter($__internal_cc58815acbfac5a82a161a8ea71a60ef26c86edb9acc191b5dc026b62f87ce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:view.html.twig"));

        // line 10
        echo "    <h1>Annonces</h1>
    <hr>
  ";
        // line 12
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 13
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\" />
  ";
        }
        // line 15
        echo "  <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>
  <h2>Candidatures</h2>
  <hr>
  ";
        // line 23
        $this->displayBlock('candidature', $context, $blocks);
        // line 41
        echo "  <p>
    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>
  ";
        // line 55
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 56
            echo "  <p>
    Cette annonce est parue dans les catégories suivantes :
    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 59
                echo "      ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 60
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "  </p>
";
        }
        
        $__internal_cc58815acbfac5a82a161a8ea71a60ef26c86edb9acc191b5dc026b62f87ce31->leave($__internal_cc58815acbfac5a82a161a8ea71a60ef26c86edb9acc191b5dc026b62f87ce31_prof);

    }

    // line 23
    public function block_candidature($context, array $blocks = array())
    {
        $__internal_01aef1d1268c4b5d25ef5dc11b2c4e5de77d5547dba06e08d069eb406757d3ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01aef1d1268c4b5d25ef5dc11b2c4e5de77d5547dba06e08d069eb406757d3ab->enter($__internal_01aef1d1268c4b5d25ef5dc11b2c4e5de77d5547dba06e08d069eb406757d3ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "OCPlatformBundle:Advert:view.html.twig"));

        // line 24
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) ? $context["listApplications"] : $this->getContext($context, "listApplications")));
        foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
            // line 25
            echo "          <div>
            <i>Par ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "author", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["application"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i>
          </div>
          <div class=\"well\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["application"], "content", array()), "html", null, true);
            echo "</div>
          ";
            // line 29
            if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
                // line 30
                echo "            <div>
              Cette annonce requiert les compétences suivantes :
              <ul>
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
                foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                    // line 34
                    echo "                  <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                    echo " : niveau ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "              </ul>
            </div>
          ";
            }
            // line 39
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  ";
        
        $__internal_01aef1d1268c4b5d25ef5dc11b2c4e5de77d5547dba06e08d069eb406757d3ab->leave($__internal_01aef1d1268c4b5d25ef5dc11b2c4e5de77d5547dba06e08d069eb406757d3ab_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 40,  223 => 39,  218 => 36,  207 => 34,  203 => 33,  198 => 30,  196 => 29,  192 => 28,  185 => 26,  182 => 25,  177 => 24,  171 => 23,  162 => 61,  148 => 60,  142 => 59,  125 => 58,  121 => 56,  119 => 55,  111 => 50,  104 => 46,  97 => 42,  94 => 41,  92 => 23,  85 => 19,  77 => 16,  72 => 15,  64 => 13,  62 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"CoreBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}
    <h1>Annonces</h1>
    <hr>
  {% if advert.image is not null %}
    <img src=\"{{ asset(advert.image.webPath) }}\" alt=\"{{ advert.image.alt }}\" />
  {% endif %}
  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>
  <h2>Candidatures</h2>
  <hr>
  {% block candidature %}
      {% for application in listApplications %}
          <div>
            <i>Par {{ application.author }}, le {{ application.date|date('d/m/Y') }}</i>
          </div>
          <div class=\"well\">{{application.content}}</div>
          {% if listAdvertSkills|length > 0 %}
            <div>
              Cette annonce requiert les compétences suivantes :
              <ul>
                {% for advertSkill in listAdvertSkills %}
                  <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
                {% endfor %}
              </ul>
            </div>
          {% endif %}
      {% endfor %}
  {% endblock %}
  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>
  {% if not advert.categories.empty %}
  <p>
    Cette annonce est parue dans les catégories suivantes :
    {% for category in advert.categories %}
      {{ category.name }}{% if not loop.last %}, {% endif %}
    {% endfor %}
  </p>
{% endif %}
{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
