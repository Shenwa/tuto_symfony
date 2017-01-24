<?php

/* @Core/layout.html.twig */
class __TwigTemplate_2b3a4751a228fec3b8b3417f0c244db1529f2f4bd8a71a38ca8685035ff2dc45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Core/layout.html.twig", 1);
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
        $__internal_c80e3a53e9d178c383e873b5e277873337dbaba652923c7ce48f65536ba0870d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80e3a53e9d178c383e873b5e277873337dbaba652923c7ce48f65536ba0870d->enter($__internal_c80e3a53e9d178c383e873b5e277873337dbaba652923c7ce48f65536ba0870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Core/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c80e3a53e9d178c383e873b5e277873337dbaba652923c7ce48f65536ba0870d->leave($__internal_c80e3a53e9d178c383e873b5e277873337dbaba652923c7ce48f65536ba0870d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e9087024fc20b8e04b4aa48496c0a21edd5c86f1c41df81b937581af955fe5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e9087024fc20b8e04b4aa48496c0a21edd5c86f1c41df81b937581af955fe5c->enter($__internal_7e9087024fc20b8e04b4aa48496c0a21edd5c86f1c41df81b937581af955fe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/layout.html.twig"));

        // line 4
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e9087024fc20b8e04b4aa48496c0a21edd5c86f1c41df81b937581af955fe5c->leave($__internal_7e9087024fc20b8e04b4aa48496c0a21edd5c86f1c41df81b937581af955fe5c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_8eca2ab00341b78b773802d4c4a584450d4f6ef4f4783c14c5dc136e5b81e38e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eca2ab00341b78b773802d4c4a584450d4f6ef4f4783c14c5dc136e5b81e38e->enter($__internal_8eca2ab00341b78b773802d4c4a584450d4f6ef4f4783c14c5dc136e5b81e38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/layout.html.twig"));

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
        
        $__internal_8eca2ab00341b78b773802d4c4a584450d4f6ef4f4783c14c5dc136e5b81e38e->leave($__internal_8eca2ab00341b78b773802d4c4a584450d4f6ef4f4783c14c5dc136e5b81e38e_prof);

    }

    // line 12
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_0e7d57ec2cf5cc2e9bbe280f5c39877adb1fcdaa7eee7f18a32f9817ad7fb7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7d57ec2cf5cc2e9bbe280f5c39877adb1fcdaa7eee7f18a32f9817ad7fb7bf->enter($__internal_0e7d57ec2cf5cc2e9bbe280f5c39877adb1fcdaa7eee7f18a32f9817ad7fb7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Core/layout.html.twig"));

        // line 13
        echo "  ";
        
        $__internal_0e7d57ec2cf5cc2e9bbe280f5c39877adb1fcdaa7eee7f18a32f9817ad7fb7bf->leave($__internal_0e7d57ec2cf5cc2e9bbe280f5c39877adb1fcdaa7eee7f18a32f9817ad7fb7bf_prof);

    }

    public function getTemplateName()
    {
        return "@Core/layout.html.twig";
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
", "@Core/layout.html.twig", "D:\\wamp\\www\\Symfony\\src\\CoreBundle\\Resources\\views\\layout.html.twig");
    }
}
