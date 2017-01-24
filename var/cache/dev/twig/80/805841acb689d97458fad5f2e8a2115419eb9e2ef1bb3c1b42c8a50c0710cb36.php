<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_a659b1394fe2548a6362324984ab10d47793554b886bbe25e6b7a394da9199c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d369f458a93cded9c0bfac9c8220028ef31118a6ec7e2d10b44e3b2fdd424b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d369f458a93cded9c0bfac9c8220028ef31118a6ec7e2d10b44e3b2fdd424b3->enter($__internal_2d369f458a93cded9c0bfac9c8220028ef31118a6ec7e2d10b44e3b2fdd424b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 9
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 12
        echo "  ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            // line 13
            echo "  ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row', array("attr" => array("class" => "datepicker")));
            echo "
  ";
        }
        // line 15
        echo "
  ";
        // line 17
        echo "  <div class=\"form-group\">
    ";
        // line 19
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 23
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 28
        echo "  <div class=\"form-group\">
    ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Author"));
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  ";
        // line 42
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "published", array(), "any", true, true)) {
            // line 43
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Published"));
            echo "
    ";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'widget', array("attr" => array("class" => "checkbox")));
            echo "
  ";
        }
        // line 46
        echo "  <div class=\"form-group\">
    ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Image"));
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), "file", array()), 'widget', array("attr" => array("class" => "")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
    ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
  </div>
  <br>
  ";
        // line 57
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 62
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 65
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
<script>\$('.datepicker').datepicker();</script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#advert_categories').multiselect();
    });
</script>
";
        
        $__internal_2d369f458a93cded9c0bfac9c8220028ef31118a6ec7e2d10b44e3b2fdd424b3->leave($__internal_2d369f458a93cded9c0bfac9c8220028ef31118a6ec7e2d10b44e3b2fdd424b3_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  142 => 62,  136 => 57,  130 => 53,  123 => 49,  118 => 47,  115 => 46,  110 => 44,  105 => 43,  103 => 42,  97 => 39,  92 => 37,  84 => 32,  79 => 30,  75 => 29,  72 => 28,  64 => 23,  59 => 20,  54 => 19,  51 => 17,  48 => 15,  42 => 13,  39 => 12,  33 => 9,  28 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération du label + error + widget pour un champ. #}
  {% if form.date is defined %}
  {{ form_row(form.date, {'attr': {'class': 'datepicker'}}) }}
  {% endif %}

  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.title, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.title) }}
    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Idem pour un autre champ. #}
  <div class=\"form-group\">
    {{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.content) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_label(form.author, \"Author\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
  {% if form.published is defined %}
    {{ form_label(form.published, \"Published\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_widget(form.published, {'attr': {'class': 'checkbox'}}) }}
  {% endif %}
  <div class=\"form-group\">
    {{ form_label(form.image.file, \"Image\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.image.file, {'attr': {'class': ''}}) }}
    </div>
  </div>
  <div class=\"form-group\">
    {{ form_row(form.categories) }}
  </div>
  <br>
  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

  {# Génération automatique des champs pas encore écrits.
     Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
     et tous les champs cachés (type « hidden »). #}
  {{ form_rest(form) }}

  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}
</div>
<script>\$('.datepicker').datepicker();</script>
<script type=\"text/javascript\">
    \$(document).ready(function() {
        \$('#advert_categories').multiselect();
    });
</script>
", "OCPlatformBundle:Advert:form.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}
