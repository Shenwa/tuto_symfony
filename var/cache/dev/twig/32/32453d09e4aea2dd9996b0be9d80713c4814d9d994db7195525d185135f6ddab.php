<?php

/* layout.html.twig */
class __TwigTemplate_169c2405a308c64d627a16d048e6b420f009241769bec29231f49abbbaff2960 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbd960d4d49a1c1d4a5b303e629278f519c36b1feeb9a28853e0077d0ad15d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbd960d4d49a1c1d4a5b303e629278f519c36b1feeb9a28853e0077d0ad15d85->enter($__internal_cbd960d4d49a1c1d4a5b303e629278f519c36b1feeb9a28853e0077d0ad15d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>
      <div class=\"row\">
          ";
        // line 37
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "            Connecté en tant que ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
            -
            <a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
        ";
        } else {
            // line 42
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a>
        ";
        }
        // line 44
        echo "      </div>
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
          <li><a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("core_contact");
        echo "\">Contact</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "
</body>
</html>";
        
        $__internal_cbd960d4d49a1c1d4a5b303e629278f519c36b1feeb9a28853e0077d0ad15d85->leave($__internal_cbd960d4d49a1c1d4a5b303e629278f519c36b1feeb9a28853e0077d0ad15d85_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cf4aa19af2537cba3dc3775aa83423e3858efcaecdeb01063e94bf42903b3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf4aa19af2537cba3dc3775aa83423e3858efcaecdeb01063e94bf42903b3a6->enter($__internal_8cf4aa19af2537cba3dc3775aa83423e3858efcaecdeb01063e94bf42903b3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "OC Plateforme";
        
        $__internal_8cf4aa19af2537cba3dc3775aa83423e3858efcaecdeb01063e94bf42903b3a6->leave($__internal_8cf4aa19af2537cba3dc3775aa83423e3858efcaecdeb01063e94bf42903b3a6_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a1fa146e7e8b99107920cb3dc570baf01ec7bc5da7651d58855ac4125f47614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1fa146e7e8b99107920cb3dc570baf01ec7bc5da7651d58855ac4125f47614->enter($__internal_7a1fa146e7e8b99107920cb3dc570baf01ec7bc5da7651d58855ac4125f47614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 12
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "b131801_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b131801_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b131801_bootstrap-datepicker_1.css");
            // line 15
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "b131801_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b131801_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b131801_bootstrap-multiselect_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "b131801"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_b131801") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/b131801.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "    ";
        // line 18
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  ";
        
        $__internal_7a1fa146e7e8b99107920cb3dc570baf01ec7bc5da7651d58855ac4125f47614->leave($__internal_7a1fa146e7e8b99107920cb3dc570baf01ec7bc5da7651d58855ac4125f47614_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_d452c870a8e00af116dcab8af1abdcf5dfa6241342a16f4253747984af5adc83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d452c870a8e00af116dcab8af1abdcf5dfa6241342a16f4253747984af5adc83->enter($__internal_d452c870a8e00af116dcab8af1abdcf5dfa6241342a16f4253747984af5adc83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 59
        echo "        ";
        
        $__internal_d452c870a8e00af116dcab8af1abdcf5dfa6241342a16f4253747984af5adc83->leave($__internal_d452c870a8e00af116dcab8af1abdcf5dfa6241342a16f4253747984af5adc83_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c95b01c7bdbebb89707649a7299b9669dcebd792f1ca3b58ee20dbd8728407f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c95b01c7bdbebb89707649a7299b9669dcebd792f1ca3b58ee20dbd8728407f3->enter($__internal_c95b01c7bdbebb89707649a7299b9669dcebd792f1ca3b58ee20dbd8728407f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 71
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "487a99c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_487a99c_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/487a99c_bootstrap-datepicker_1.js");
            // line 73
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "487a99c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_487a99c_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/487a99c_bootstrap-multiselect_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "487a99c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_487a99c") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/487a99c.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 75
        echo "    ";
        // line 76
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_c95b01c7bdbebb89707649a7299b9669dcebd792f1ca3b58ee20dbd8728407f3->leave($__internal_c95b01c7bdbebb89707649a7299b9669dcebd792f1ca3b58ee20dbd8728407f3_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 76,  233 => 75,  213 => 73,  208 => 71,  202 => 70,  195 => 59,  189 => 58,  181 => 18,  179 => 17,  159 => 15,  154 => 12,  148 => 11,  136 => 9,  127 => 78,  125 => 70,  118 => 66,  110 => 60,  108 => 58,  102 => 55,  95 => 51,  91 => 50,  87 => 49,  80 => 44,  74 => 42,  69 => 40,  63 => 38,  61 => 37,  42 => 20,  40 => 11,  35 => 9,  26 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}OC Plateforme{% endblock %}</title>
  <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
  {% block stylesheets %}
    {% stylesheets filter='cssrewrite' 
       'css/bootstrap-datepicker.css'
       'css/bootstrap-multiselect.css'%}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}
    {# On charge le CSS de bootstrap depuis le site directement #}
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  {% endblock %}
</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>
      <div class=\"row\">
          {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            Connecté en tant que {{ app.user.username }}
            -
            <a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
        {% else %}
            <a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
        {% endif %}
      </div>
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
          <li><a href=\"{{ path('core_contact') }}\">Contact</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {% javascripts 'js/bootstrap-datepicker.js'
                   'js/bootstrap-multiselect.js'%}
        <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  {% endblock %}

</body>
</html>", "layout.html.twig", "D:\\wamp\\www\\Symfony\\app\\Resources\\views\\layout.html.twig");
    }
}
