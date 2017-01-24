<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5bc2f7e7f0ec01dc6efa089ef56625a9f91f2700465c479949eaa9411cdfa298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_ba05b6f68eaaf096c9cba8e39bc3f36f1b2eb900f6fb9e240a7d738e0f0ed7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba05b6f68eaaf096c9cba8e39bc3f36f1b2eb900f6fb9e240a7d738e0f0ed7e9->enter($__internal_ba05b6f68eaaf096c9cba8e39bc3f36f1b2eb900f6fb9e240a7d738e0f0ed7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba05b6f68eaaf096c9cba8e39bc3f36f1b2eb900f6fb9e240a7d738e0f0ed7e9->leave($__internal_ba05b6f68eaaf096c9cba8e39bc3f36f1b2eb900f6fb9e240a7d738e0f0ed7e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a2457ae915b242e42bb604ac3a78e767603f9c098af3462f8202e1a36f424d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a2457ae915b242e42bb604ac3a78e767603f9c098af3462f8202e1a36f424d3->enter($__internal_0a2457ae915b242e42bb604ac3a78e767603f9c098af3462f8202e1a36f424d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/new.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_0a2457ae915b242e42bb604ac3a78e767603f9c098af3462f8202e1a36f424d3->leave($__internal_0a2457ae915b242e42bb604ac3a78e767603f9c098af3462f8202e1a36f424d3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
", "@FOSUser/Group/new.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
