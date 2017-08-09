<?php

/* base.html.twig */
class __TwigTemplate_a8206f6b9a5d28e8f20beec08f426dea7f4a76abac7852a828119262d1e32c72 extends Twig_Template
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
        $__internal_8c9e2aa9dea6ff85998c5694e3256070dec7295530be314fda85276f6cb346b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9e2aa9dea6ff85998c5694e3256070dec7295530be314fda85276f6cb346b9->enter($__internal_8c9e2aa9dea6ff85998c5694e3256070dec7295530be314fda85276f6cb346b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8c9e2aa9dea6ff85998c5694e3256070dec7295530be314fda85276f6cb346b9->leave($__internal_8c9e2aa9dea6ff85998c5694e3256070dec7295530be314fda85276f6cb346b9_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_bfdd24357206d1a171bfae5f94b734e769897100994a15a28fcf4627da030c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdd24357206d1a171bfae5f94b734e769897100994a15a28fcf4627da030c43->enter($__internal_bfdd24357206d1a171bfae5f94b734e769897100994a15a28fcf4627da030c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_bfdd24357206d1a171bfae5f94b734e769897100994a15a28fcf4627da030c43->leave($__internal_bfdd24357206d1a171bfae5f94b734e769897100994a15a28fcf4627da030c43_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_76cc1c6fc960904cf3e538a2710c4b350dd11d198a21305c09e6e143b6414952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76cc1c6fc960904cf3e538a2710c4b350dd11d198a21305c09e6e143b6414952->enter($__internal_76cc1c6fc960904cf3e538a2710c4b350dd11d198a21305c09e6e143b6414952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_76cc1c6fc960904cf3e538a2710c4b350dd11d198a21305c09e6e143b6414952->leave($__internal_76cc1c6fc960904cf3e538a2710c4b350dd11d198a21305c09e6e143b6414952_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3644a34e1b8daa66baa9633f672980e2f2c8019c457c8ff5494b61dbdea50f3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3644a34e1b8daa66baa9633f672980e2f2c8019c457c8ff5494b61dbdea50f3f->enter($__internal_3644a34e1b8daa66baa9633f672980e2f2c8019c457c8ff5494b61dbdea50f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3644a34e1b8daa66baa9633f672980e2f2c8019c457c8ff5494b61dbdea50f3f->leave($__internal_3644a34e1b8daa66baa9633f672980e2f2c8019c457c8ff5494b61dbdea50f3f_prof);

    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_366bdef9e60a137a58dd915dd7aa6bd227164bc446fb46841e8ce6e20e618590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366bdef9e60a137a58dd915dd7aa6bd227164bc446fb46841e8ce6e20e618590->enter($__internal_366bdef9e60a137a58dd915dd7aa6bd227164bc446fb46841e8ce6e20e618590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        
        $__internal_366bdef9e60a137a58dd915dd7aa6bd227164bc446fb46841e8ce6e20e618590->leave($__internal_366bdef9e60a137a58dd915dd7aa6bd227164bc446fb46841e8ce6e20e618590_prof);

    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_936fc54249a56f1eca52b6cf0d352e6af6537858d7ad7e75d8d1e3696e57905d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936fc54249a56f1eca52b6cf0d352e6af6537858d7ad7e75d8d1e3696e57905d->enter($__internal_936fc54249a56f1eca52b6cf0d352e6af6537858d7ad7e75d8d1e3696e57905d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        
        $__internal_936fc54249a56f1eca52b6cf0d352e6af6537858d7ad7e75d8d1e3696e57905d->leave($__internal_936fc54249a56f1eca52b6cf0d352e6af6537858d7ad7e75d8d1e3696e57905d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f300860b19736ca976302b31066ed7444cbc5323360465a895e18bc60cb3f223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f300860b19736ca976302b31066ed7444cbc5323360465a895e18bc60cb3f223->enter($__internal_f300860b19736ca976302b31066ed7444cbc5323360465a895e18bc60cb3f223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f300860b19736ca976302b31066ed7444cbc5323360465a895e18bc60cb3f223->leave($__internal_f300860b19736ca976302b31066ed7444cbc5323360465a895e18bc60cb3f223_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edde288625a459ccc4d8320348b3a6119c18eaa6656f7bd10b6cdd1b2229df31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edde288625a459ccc4d8320348b3a6119c18eaa6656f7bd10b6cdd1b2229df31->enter($__internal_edde288625a459ccc4d8320348b3a6119c18eaa6656f7bd10b6cdd1b2229df31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_edde288625a459ccc4d8320348b3a6119c18eaa6656f7bd10b6cdd1b2229df31->leave($__internal_edde288625a459ccc4d8320348b3a6119c18eaa6656f7bd10b6cdd1b2229df31_prof);

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
