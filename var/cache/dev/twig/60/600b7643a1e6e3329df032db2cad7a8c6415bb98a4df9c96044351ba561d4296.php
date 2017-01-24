<?php

/* OCPlatformBundle:Advert:translation.html.twig */
class __TwigTemplate_51d7bf5084a4860092428adec0d7ecd60ad7a87de2682ac5420b48094d963d84 extends Twig_Template
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
        $__internal_ab53ba5c8137633a11eaa10ccc7b991baf459e0934917e182b1c375998d770b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab53ba5c8137633a11eaa10ccc7b991baf459e0934917e182b1c375998d770b1->enter($__internal_ab53ba5c8137633a11eaa10ccc7b991baf459e0934917e182b1c375998d770b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:translation.html.twig"));

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
        
        $__internal_ab53ba5c8137633a11eaa10ccc7b991baf459e0934917e182b1c375998d770b1->leave($__internal_ab53ba5c8137633a11eaa10ccc7b991baf459e0934917e182b1c375998d770b1_prof);

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
