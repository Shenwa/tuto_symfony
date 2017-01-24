<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9cb93987c93371369cb9e99f176ec80ee867d662d658b74ec1add8cf2d5f7721 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_9cbc2f366a83fda67b3cb7819ec8783ae1b24ecf5924e08c36c703cc4d6bd1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbc2f366a83fda67b3cb7819ec8783ae1b24ecf5924e08c36c703cc4d6bd1fe->enter($__internal_9cbc2f366a83fda67b3cb7819ec8783ae1b24ecf5924e08c36c703cc4d6bd1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cbc2f366a83fda67b3cb7819ec8783ae1b24ecf5924e08c36c703cc4d6bd1fe->leave($__internal_9cbc2f366a83fda67b3cb7819ec8783ae1b24ecf5924e08c36c703cc4d6bd1fe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e94cc472af6b71eb5286518d39874608c17f397ee0fcc543eddc5986dfc1daa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94cc472af6b71eb5286518d39874608c17f397ee0fcc543eddc5986dfc1daa8->enter($__internal_e94cc472af6b71eb5286518d39874608c17f397ee0fcc543eddc5986dfc1daa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_e94cc472af6b71eb5286518d39874608c17f397ee0fcc543eddc5986dfc1daa8->leave($__internal_e94cc472af6b71eb5286518d39874608c17f397ee0fcc543eddc5986dfc1daa8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login.html.twig");
    }
}
