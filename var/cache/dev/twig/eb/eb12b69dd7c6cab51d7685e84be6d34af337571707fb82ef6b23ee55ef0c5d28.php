<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_a6a5a861d210d8ce07c0393cb1a70c0bf559be7d915e8c78659b281a29608c52 extends Twig_Template
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
        $__internal_64ee5768d3080f8880267ad195b4c5f93ea021e4686b407e147febfea021adec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ee5768d3080f8880267ad195b4c5f93ea021e4686b407e147febfea021adec->enter($__internal_64ee5768d3080f8880267ad195b4c5f93ea021e4686b407e147febfea021adec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

        // line 2
        echo "
<html>
  <body>
      <div style=\"margin-top: 20%;\">
            ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Hello"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
      </div>
  </body>
</html>";
        
        $__internal_64ee5768d3080f8880267ad195b4c5f93ea021e4686b407e147febfea021adec->leave($__internal_64ee5768d3080f8880267ad195b4c5f93ea021e4686b407e147febfea021adec_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 6,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/translation.html.twig #}

<html>
  <body>
      <div style=\"margin-top: 20%;\">
            {{ 'Hello'|trans }} {{ name }}!
      </div>
  </body>
</html>", "OCPlatformBundle:Advert:translation.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle/Resources/views/Advert/translation.html.twig");
    }
}
