<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ac4e4228356105fc7b2da007d02c2f96bbebe6b0a31c0827e5f34811c5af04d5 extends Twig_Template
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
        $__internal_33ad0b7bbed01e542c6a9892e6a95fae8e8978153ff641845e11c194473b6868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33ad0b7bbed01e542c6a9892e6a95fae8e8978153ff641845e11c194473b6868->enter($__internal_33ad0b7bbed01e542c6a9892e6a95fae8e8978153ff641845e11c194473b6868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_33ad0b7bbed01e542c6a9892e6a95fae8e8978153ff641845e11c194473b6868->leave($__internal_33ad0b7bbed01e542c6a9892e6a95fae8e8978153ff641845e11c194473b6868_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "D:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
