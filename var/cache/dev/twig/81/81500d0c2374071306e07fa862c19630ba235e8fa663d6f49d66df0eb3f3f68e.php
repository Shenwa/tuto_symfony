<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_8aa548cd80d01bb25bb42eb6565cd14a0c0f146a00e91ce6a4caeff2a49510e8 extends Twig_Template
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
        $__internal_f9aa30bfc9315a9b80abdbfe8591059d729c18c4ae94b056b14d5978ecfabeb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9aa30bfc9315a9b80abdbfe8591059d729c18c4ae94b056b14d5978ecfabeb4->enter($__internal_f9aa30bfc9315a9b80abdbfe8591059d729c18c4ae94b056b14d5978ecfabeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f9aa30bfc9315a9b80abdbfe8591059d729c18c4ae94b056b14d5978ecfabeb4->leave($__internal_f9aa30bfc9315a9b80abdbfe8591059d729c18c4ae94b056b14d5978ecfabeb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
