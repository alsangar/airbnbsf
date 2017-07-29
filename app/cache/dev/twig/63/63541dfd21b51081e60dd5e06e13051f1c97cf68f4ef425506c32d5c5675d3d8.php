<?php

/* base.html.twig */
class __TwigTemplate_4189da49b74e55074ad71e71204f35398afdca4fbfdeb560beee4dae5fe40c12 extends Twig_Template
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
        $__internal_89fde69fcbefe9575264995a8139aa0fd125fd75a611623e49e93cb619639f96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89fde69fcbefe9575264995a8139aa0fd125fd75a611623e49e93cb619639f96->enter($__internal_89fde69fcbefe9575264995a8139aa0fd125fd75a611623e49e93cb619639f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_89fde69fcbefe9575264995a8139aa0fd125fd75a611623e49e93cb619639f96->leave($__internal_89fde69fcbefe9575264995a8139aa0fd125fd75a611623e49e93cb619639f96_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_785cd6835d99ac5f760a00a1601a2015c9993c8fa2e53a0a93364dd03f0405cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785cd6835d99ac5f760a00a1601a2015c9993c8fa2e53a0a93364dd03f0405cd->enter($__internal_785cd6835d99ac5f760a00a1601a2015c9993c8fa2e53a0a93364dd03f0405cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_785cd6835d99ac5f760a00a1601a2015c9993c8fa2e53a0a93364dd03f0405cd->leave($__internal_785cd6835d99ac5f760a00a1601a2015c9993c8fa2e53a0a93364dd03f0405cd_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd442cdd091a9824488f486a563c7ac8e4e9a5d566ed93620fac027218633199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd442cdd091a9824488f486a563c7ac8e4e9a5d566ed93620fac027218633199->enter($__internal_dd442cdd091a9824488f486a563c7ac8e4e9a5d566ed93620fac027218633199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_dd442cdd091a9824488f486a563c7ac8e4e9a5d566ed93620fac027218633199->leave($__internal_dd442cdd091a9824488f486a563c7ac8e4e9a5d566ed93620fac027218633199_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d57b7d03b4e0dda98e995009c7e48d74c59a251316d4968f7f62f5c0ac60391b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57b7d03b4e0dda98e995009c7e48d74c59a251316d4968f7f62f5c0ac60391b->enter($__internal_d57b7d03b4e0dda98e995009c7e48d74c59a251316d4968f7f62f5c0ac60391b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d57b7d03b4e0dda98e995009c7e48d74c59a251316d4968f7f62f5c0ac60391b->leave($__internal_d57b7d03b4e0dda98e995009c7e48d74c59a251316d4968f7f62f5c0ac60391b_prof);

    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_a3a7ff935e1c4c136df93be472074b4957705fc3d3f0950f977601acd9d2b987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a7ff935e1c4c136df93be472074b4957705fc3d3f0950f977601acd9d2b987->enter($__internal_a3a7ff935e1c4c136df93be472074b4957705fc3d3f0950f977601acd9d2b987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        
        $__internal_a3a7ff935e1c4c136df93be472074b4957705fc3d3f0950f977601acd9d2b987->leave($__internal_a3a7ff935e1c4c136df93be472074b4957705fc3d3f0950f977601acd9d2b987_prof);

    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_15eb299b6dec463af87d1b744b3b40f85bb758b9393199ebc51fcb31a4a33996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15eb299b6dec463af87d1b744b3b40f85bb758b9393199ebc51fcb31a4a33996->enter($__internal_15eb299b6dec463af87d1b744b3b40f85bb758b9393199ebc51fcb31a4a33996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        
        $__internal_15eb299b6dec463af87d1b744b3b40f85bb758b9393199ebc51fcb31a4a33996->leave($__internal_15eb299b6dec463af87d1b744b3b40f85bb758b9393199ebc51fcb31a4a33996_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc82045fbe68fd07e5453be953d38ade762fecb76ac1362a474b13a1be004e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc82045fbe68fd07e5453be953d38ade762fecb76ac1362a474b13a1be004e89->enter($__internal_bc82045fbe68fd07e5453be953d38ade762fecb76ac1362a474b13a1be004e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bc82045fbe68fd07e5453be953d38ade762fecb76ac1362a474b13a1be004e89->leave($__internal_bc82045fbe68fd07e5453be953d38ade762fecb76ac1362a474b13a1be004e89_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e60e1fb51ce9c0282bb45e6e301d160a6007b066eaff83651e9d47c9b6cc63c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60e1fb51ce9c0282bb45e6e301d160a6007b066eaff83651e9d47c9b6cc63c5->enter($__internal_e60e1fb51ce9c0282bb45e6e301d160a6007b066eaff83651e9d47c9b6cc63c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e60e1fb51ce9c0282bb45e6e301d160a6007b066eaff83651e9d47c9b6cc63c5->leave($__internal_e60e1fb51ce9c0282bb45e6e301d160a6007b066eaff83651e9d47c9b6cc63c5_prof);

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
        return array (  136 => 13,  125 => 12,  114 => 11,  103 => 8,  92 => 7,  80 => 6,  69 => 5,  60 => 14,  58 => 13,  56 => 12,  52 => 11,  46 => 9,  44 => 8,  42 => 7,  37 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    {% block metas %}{% endblock %}
    <title>{% block title %}¡Bienvenido!{% endblock %}</title>
{% block stylesheets %}{% endblock %}
{% block jsHead %}{% endblock %}
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body {% block bodyParam %}{% endblock %}>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\views\\base.html.twig");
    }
}
