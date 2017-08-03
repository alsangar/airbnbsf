<?php

/* base.html.twig */
class __TwigTemplate_f74d592075ef6eea920e7f00dca3090046004638c3b049ce2b0a262afd2dffa3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'metas' => array($this, 'block_metas'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jsHead' => array($this, 'block_jsHead'),
            'bodyParam' => array($this, 'block_bodyParam'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    ";
        // line 5
        $this->displayBlock('metas', $context, $blocks);
        // line 6
        echo "    <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        $this->displayBlock('jsHead', $context, $blocks);
        // line 9
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body ";
        // line 11
        $this->displayBlock('bodyParam', $context, $blocks);
        echo ">
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "</body>
</html>
";
    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "¡Bienvenido!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  89 => 12,  84 => 11,  79 => 8,  74 => 7,  68 => 6,  63 => 5,  57 => 14,  55 => 13,  53 => 12,  49 => 11,  43 => 9,  41 => 8,  39 => 7,  34 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\base.html.twig");
    }
}
