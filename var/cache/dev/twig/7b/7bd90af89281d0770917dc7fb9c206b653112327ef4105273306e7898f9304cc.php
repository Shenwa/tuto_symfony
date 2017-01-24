<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6f030efcf8c6c23e145e4dc577fe8598437fee533b2eeeea186ba7f96eea63b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_7132ec4a3d35f8511957e6223f233ae84cb6f0be1ff8c1db1813afcae2fe23f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7132ec4a3d35f8511957e6223f233ae84cb6f0be1ff8c1db1813afcae2fe23f8->enter($__internal_7132ec4a3d35f8511957e6223f233ae84cb6f0be1ff8c1db1813afcae2fe23f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7132ec4a3d35f8511957e6223f233ae84cb6f0be1ff8c1db1813afcae2fe23f8->leave($__internal_7132ec4a3d35f8511957e6223f233ae84cb6f0be1ff8c1db1813afcae2fe23f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_558db79f984203e02f614130ec1555ee182e70730d09d9584420594bb2a8f9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_558db79f984203e02f614130ec1555ee182e70730d09d9584420594bb2a8f9a3->enter($__internal_558db79f984203e02f614130ec1555ee182e70730d09d9584420594bb2a8f9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Group/show.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_558db79f984203e02f614130ec1555ee182e70730d09d9584420594bb2a8f9a3->leave($__internal_558db79f984203e02f614130ec1555ee182e70730d09d9584420594bb2a8f9a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
