<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_27bf545e876d530e158be5fca6a863459b7244c8c85deb63a6c81bd612b15f1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_a67c8aa6b356586f0eae1f060e4d1b8b88d17289e089b003f5940c252c6d786f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a67c8aa6b356586f0eae1f060e4d1b8b88d17289e089b003f5940c252c6d786f->enter($__internal_a67c8aa6b356586f0eae1f060e4d1b8b88d17289e089b003f5940c252c6d786f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a67c8aa6b356586f0eae1f060e4d1b8b88d17289e089b003f5940c252c6d786f->leave($__internal_a67c8aa6b356586f0eae1f060e4d1b8b88d17289e089b003f5940c252c6d786f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e1bc9ff5d562782971325748cbc8f1824387a42ee9a278d6ceb117d87ef2168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1bc9ff5d562782971325748cbc8f1824387a42ee9a278d6ceb117d87ef2168->enter($__internal_1e1bc9ff5d562782971325748cbc8f1824387a42ee9a278d6ceb117d87ef2168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@FOSUser/Resetting/reset.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_1e1bc9ff5d562782971325748cbc8f1824387a42ee9a278d6ceb117d87ef2168->leave($__internal_1e1bc9ff5d562782971325748cbc8f1824387a42ee9a278d6ceb117d87ef2168_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
", "@FOSUser/Resetting/reset.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
