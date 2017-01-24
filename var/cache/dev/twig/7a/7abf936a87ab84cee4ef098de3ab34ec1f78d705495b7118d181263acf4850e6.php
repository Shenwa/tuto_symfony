<?php

/* @OCPlatform/Advert/translation.html.twig */
class __TwigTemplate_1544fbde5ac94679e4721710ddc20750ea95e10af9654c10a08efe1854a9e8c4 extends Twig_Template
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
        $__internal_6fd08eab8bfa0540b7595d926b91ef678084cd62d742e7902aa34d108a478977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd08eab8bfa0540b7595d926b91ef678084cd62d742e7902aa34d108a478977->enter($__internal_6fd08eab8bfa0540b7595d926b91ef678084cd62d742e7902aa34d108a478977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/translation.html.twig"));

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
        
        $__internal_6fd08eab8bfa0540b7595d926b91ef678084cd62d742e7902aa34d108a478977->leave($__internal_6fd08eab8bfa0540b7595d926b91ef678084cd62d742e7902aa34d108a478977_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/translation.html.twig";
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
</html>", "@OCPlatform/Advert/translation.html.twig", "D:\\wamp\\www\\Symfony\\src\\OC\\PlatformBundle\\Resources\\views\\Advert\\translation.html.twig");
    }
}
