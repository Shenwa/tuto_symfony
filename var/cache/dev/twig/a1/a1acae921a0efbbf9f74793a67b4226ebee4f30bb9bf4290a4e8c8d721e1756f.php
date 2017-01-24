<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_6523141e788a060ce6080a0aebf0e4dac2b20ab975e329da7a38d61b9747a72d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_5305c8adcf41cb68d73a901a23a60eb8fa920eb4f6df61a7185e6598f6a68d4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5305c8adcf41cb68d73a901a23a60eb8fa920eb4f6df61a7185e6598f6a68d4d->enter($__internal_5305c8adcf41cb68d73a901a23a60eb8fa920eb4f6df61a7185e6598f6a68d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5305c8adcf41cb68d73a901a23a60eb8fa920eb4f6df61a7185e6598f6a68d4d->leave($__internal_5305c8adcf41cb68d73a901a23a60eb8fa920eb4f6df61a7185e6598f6a68d4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_22809a323e178ced3e5704d29d907cf9450cd92c3936922ca6997ded780c03fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22809a323e178ced3e5704d29d907cf9450cd92c3936922ca6997ded780c03fe->enter($__internal_22809a323e178ced3e5704d29d907cf9450cd92c3936922ca6997ded780c03fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/ChangePassword/change_password.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_22809a323e178ced3e5704d29d907cf9450cd92c3936922ca6997ded780c03fe->leave($__internal_22809a323e178ced3e5704d29d907cf9450cd92c3936922ca6997ded780c03fe_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
