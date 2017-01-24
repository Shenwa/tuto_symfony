<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0ef5a86a0f2f0d81993cee4e64f4effb9ea68b11d6b79886e71333c632288b72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae9818411e0860f369f50fc94c243dc803734f5196002a53bfdec2a8b4c77633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9818411e0860f369f50fc94c243dc803734f5196002a53bfdec2a8b4c77633->enter($__internal_ae9818411e0860f369f50fc94c243dc803734f5196002a53bfdec2a8b4c77633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae9818411e0860f369f50fc94c243dc803734f5196002a53bfdec2a8b4c77633->leave($__internal_ae9818411e0860f369f50fc94c243dc803734f5196002a53bfdec2a8b4c77633_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c17c3ced47b54a63d7ebb3b29c47df34e0e856cdb3edd1dde079ad95cc11f91b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17c3ced47b54a63d7ebb3b29c47df34e0e856cdb3edd1dde079ad95cc11f91b->enter($__internal_c17c3ced47b54a63d7ebb3b29c47df34e0e856cdb3edd1dde079ad95cc11f91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_c17c3ced47b54a63d7ebb3b29c47df34e0e856cdb3edd1dde079ad95cc11f91b->leave($__internal_c17c3ced47b54a63d7ebb3b29c47df34e0e856cdb3edd1dde079ad95cc11f91b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
