<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_63b27d13577eb5e86703730b8a9d0877c753f699d7eade6e56790009c1e85b8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_fd72840b0abb7fe8d653ab7c6998fcc491fadbc5dbde80f9d10640741df8544e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd72840b0abb7fe8d653ab7c6998fcc491fadbc5dbde80f9d10640741df8544e->enter($__internal_fd72840b0abb7fe8d653ab7c6998fcc491fadbc5dbde80f9d10640741df8544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd72840b0abb7fe8d653ab7c6998fcc491fadbc5dbde80f9d10640741df8544e->leave($__internal_fd72840b0abb7fe8d653ab7c6998fcc491fadbc5dbde80f9d10640741df8544e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_735d3d0d69608cb853c630294f86c498782101ea07a9b095a7030ee41650e491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735d3d0d69608cb853c630294f86c498782101ea07a9b095a7030ee41650e491->enter($__internal_735d3d0d69608cb853c630294f86c498782101ea07a9b095a7030ee41650e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_735d3d0d69608cb853c630294f86c498782101ea07a9b095a7030ee41650e491->leave($__internal_735d3d0d69608cb853c630294f86c498782101ea07a9b095a7030ee41650e491_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
