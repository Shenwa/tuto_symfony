<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_d0b847d8c6467f320cc291fbffc5e75ce0979e56b4fc9ce89559f50211fc1bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_067709f4959b92d09e9b81aeae2e274eeefed4a1b9ad64753a49a64d674d21ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067709f4959b92d09e9b81aeae2e274eeefed4a1b9ad64753a49a64d674d21ef->enter($__internal_067709f4959b92d09e9b81aeae2e274eeefed4a1b9ad64753a49a64d674d21ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_067709f4959b92d09e9b81aeae2e274eeefed4a1b9ad64753a49a64d674d21ef->leave($__internal_067709f4959b92d09e9b81aeae2e274eeefed4a1b9ad64753a49a64d674d21ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e5be4b768af0e9570f91849b61b7bbfffc14c2f8037ef055b76b65c28dddeaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5be4b768af0e9570f91849b61b7bbfffc14c2f8037ef055b76b65c28dddeaf->enter($__internal_7e5be4b768af0e9570f91849b61b7bbfffc14c2f8037ef055b76b65c28dddeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_7e5be4b768af0e9570f91849b61b7bbfffc14c2f8037ef055b76b65c28dddeaf->leave($__internal_7e5be4b768af0e9570f91849b61b7bbfffc14c2f8037ef055b76b65c28dddeaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/show.html.twig");
    }
}
