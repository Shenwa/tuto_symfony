<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e9587d3d105c9e4551e22f6e56314bddad291bfa53a4c53ce94ae7e284616b75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_6e4278a43c61a2f0169d9470eba815be7a5c6b048987a53bec6f72d002fbd7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4278a43c61a2f0169d9470eba815be7a5c6b048987a53bec6f72d002fbd7e2->enter($__internal_6e4278a43c61a2f0169d9470eba815be7a5c6b048987a53bec6f72d002fbd7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e4278a43c61a2f0169d9470eba815be7a5c6b048987a53bec6f72d002fbd7e2->leave($__internal_6e4278a43c61a2f0169d9470eba815be7a5c6b048987a53bec6f72d002fbd7e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2d8adc5743f84e2d7121d2e4677995d7595f62399388e25eed41df085625711b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8adc5743f84e2d7121d2e4677995d7595f62399388e25eed41df085625711b->enter($__internal_2d8adc5743f84e2d7121d2e4677995d7595f62399388e25eed41df085625711b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:list.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2d8adc5743f84e2d7121d2e4677995d7595f62399388e25eed41df085625711b->leave($__internal_2d8adc5743f84e2d7121d2e4677995d7595f62399388e25eed41df085625711b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
", "FOSUserBundle:Group:list.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/list.html.twig");
    }
}
