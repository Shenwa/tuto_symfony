<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_cc73635a0ae9591ba3cbbfcea6e7350db9e1922b414eec3d0764e91e90d2dce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_69632040c795011f0b67889b38cbce04a691d5da4fde6d8149fac080602c94d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69632040c795011f0b67889b38cbce04a691d5da4fde6d8149fac080602c94d9->enter($__internal_69632040c795011f0b67889b38cbce04a691d5da4fde6d8149fac080602c94d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69632040c795011f0b67889b38cbce04a691d5da4fde6d8149fac080602c94d9->leave($__internal_69632040c795011f0b67889b38cbce04a691d5da4fde6d8149fac080602c94d9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d671bef337cc1a814afae1bdba4e2aa0ffde311f73043d627a99391af4876c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d671bef337cc1a814afae1bdba4e2aa0ffde311f73043d627a99391af4876c9->enter($__internal_3d671bef337cc1a814afae1bdba4e2aa0ffde311f73043d627a99391af4876c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Group:new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_3d671bef337cc1a814afae1bdba4e2aa0ffde311f73043d627a99391af4876c9->leave($__internal_3d671bef337cc1a814afae1bdba4e2aa0ffde311f73043d627a99391af4876c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Group/new.html.twig");
    }
}
