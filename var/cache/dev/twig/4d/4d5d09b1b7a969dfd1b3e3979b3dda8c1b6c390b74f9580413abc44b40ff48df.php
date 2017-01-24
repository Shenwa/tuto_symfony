<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_7383a18bd73ff6d2981df554f6af6b47d43027d7210ae1c578a302cee07d732b extends Twig_Template
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
        $__internal_95e96d0c63a2e326f34d09f7185f81d4943d8bebca67beaa05bc2d58ba0155a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e96d0c63a2e326f34d09f7185f81d4943d8bebca67beaa05bc2d58ba0155a6->enter($__internal_95e96d0c63a2e326f34d09f7185f81d4943d8bebca67beaa05bc2d58ba0155a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_95e96d0c63a2e326f34d09f7185f81d4943d8bebca67beaa05bc2d58ba0155a6->leave($__internal_95e96d0c63a2e326f34d09f7185f81d4943d8bebca67beaa05bc2d58ba0155a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
