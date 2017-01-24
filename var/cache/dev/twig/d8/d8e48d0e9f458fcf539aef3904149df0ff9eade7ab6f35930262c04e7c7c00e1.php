<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f803f171db3b4cfbc30f83856c0cc3ee2399c66bf183abf0371b44010433383b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_c14351cce0e72809e164b5f27d863c669234071d04e354e3dab22536d7d26075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14351cce0e72809e164b5f27d863c669234071d04e354e3dab22536d7d26075->enter($__internal_c14351cce0e72809e164b5f27d863c669234071d04e354e3dab22536d7d26075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14351cce0e72809e164b5f27d863c669234071d04e354e3dab22536d7d26075->leave($__internal_c14351cce0e72809e164b5f27d863c669234071d04e354e3dab22536d7d26075_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_262dad490f6b704b6dd046c3eda9008951d77125c0440e57824be6ad51fcf273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262dad490f6b704b6dd046c3eda9008951d77125c0440e57824be6ad51fcf273->enter($__internal_262dad490f6b704b6dd046c3eda9008951d77125c0440e57824be6ad51fcf273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Profile:edit.html.twig"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_262dad490f6b704b6dd046c3eda9008951d77125c0440e57824be6ad51fcf273->leave($__internal_262dad490f6b704b6dd046c3eda9008951d77125c0440e57824be6ad51fcf273_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "D:\\wamp\\www\\Symfony\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
