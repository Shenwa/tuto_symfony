<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_efe03b4a695ac01165e4650a9aa2e5b31fbca7c35909fdc8f5a585c4a2db4cb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5db7356f8cf8c8a63da47d230c0b7ac181f3dc67dce221aa423e6c140c5d7383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db7356f8cf8c8a63da47d230c0b7ac181f3dc67dce221aa423e6c140c5d7383->enter($__internal_5db7356f8cf8c8a63da47d230c0b7ac181f3dc67dce221aa423e6c140c5d7383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5db7356f8cf8c8a63da47d230c0b7ac181f3dc67dce221aa423e6c140c5d7383->leave($__internal_5db7356f8cf8c8a63da47d230c0b7ac181f3dc67dce221aa423e6c140c5d7383_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
