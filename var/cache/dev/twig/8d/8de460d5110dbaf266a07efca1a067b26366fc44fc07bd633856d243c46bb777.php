<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_46a6db6a948cc20b16ad8977c81b708d5c13688c3c92fc1930f947b47da1f660 extends Twig_Template
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
        $__internal_0b0047904c8e425c4fe6b4590e6bc421276926c1e8d3838c6aa0a170f194aa3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b0047904c8e425c4fe6b4590e6bc421276926c1e8d3838c6aa0a170f194aa3f->enter($__internal_0b0047904c8e425c4fe6b4590e6bc421276926c1e8d3838c6aa0a170f194aa3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0b0047904c8e425c4fe6b4590e6bc421276926c1e8d3838c6aa0a170f194aa3f->leave($__internal_0b0047904c8e425c4fe6b4590e6bc421276926c1e8d3838c6aa0a170f194aa3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
