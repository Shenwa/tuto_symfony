<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2f2bdb6821dc6ba646a4d5c1d84b2760b6b61f9cdbbf3dd441aba7a603928a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_68d0199873041816a3da4c52a9933e70642b1a11fa96a3c705127daf1c780673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d0199873041816a3da4c52a9933e70642b1a11fa96a3c705127daf1c780673->enter($__internal_68d0199873041816a3da4c52a9933e70642b1a11fa96a3c705127daf1c780673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68d0199873041816a3da4c52a9933e70642b1a11fa96a3c705127daf1c780673->leave($__internal_68d0199873041816a3da4c52a9933e70642b1a11fa96a3c705127daf1c780673_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c6461e277631da93b5192ca9f5720b75c64ef1e0e143f9f8cf03039455ae27be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6461e277631da93b5192ca9f5720b75c64ef1e0e143f9f8cf03039455ae27be->enter($__internal_c6461e277631da93b5192ca9f5720b75c64ef1e0e143f9f8cf03039455ae27be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_c6461e277631da93b5192ca9f5720b75c64ef1e0e143f9f8cf03039455ae27be->leave($__internal_c6461e277631da93b5192ca9f5720b75c64ef1e0e143f9f8cf03039455ae27be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
