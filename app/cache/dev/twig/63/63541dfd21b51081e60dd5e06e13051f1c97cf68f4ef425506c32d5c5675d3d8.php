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
        $__internal_5465cc77ba5471468dcdc0ea1edc9a12dbdb7c193003d7b144fb9c391592d55d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5465cc77ba5471468dcdc0ea1edc9a12dbdb7c193003d7b144fb9c391592d55d->enter($__internal_5465cc77ba5471468dcdc0ea1edc9a12dbdb7c193003d7b144fb9c391592d55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5465cc77ba5471468dcdc0ea1edc9a12dbdb7c193003d7b144fb9c391592d55d->leave($__internal_5465cc77ba5471468dcdc0ea1edc9a12dbdb7c193003d7b144fb9c391592d55d_prof);

    }

    // line 5
    public function block_metas($context, array $blocks = array())
    {
        $__internal_fc7b446d593b3e8ce6ba3b535ee2fd4d71ba4e42bc166893a00b2118a29afee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7b446d593b3e8ce6ba3b535ee2fd4d71ba4e42bc166893a00b2118a29afee7->enter($__internal_fc7b446d593b3e8ce6ba3b535ee2fd4d71ba4e42bc166893a00b2118a29afee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metas"));

        
        $__internal_fc7b446d593b3e8ce6ba3b535ee2fd4d71ba4e42bc166893a00b2118a29afee7->leave($__internal_fc7b446d593b3e8ce6ba3b535ee2fd4d71ba4e42bc166893a00b2118a29afee7_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbcffa2923c28cd95f8f491c4293f1882915b97fa6b2254b4ab43712138e85d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbcffa2923c28cd95f8f491c4293f1882915b97fa6b2254b4ab43712138e85d0->enter($__internal_dbcffa2923c28cd95f8f491c4293f1882915b97fa6b2254b4ab43712138e85d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "¡Bienvenido!";
        
        $__internal_dbcffa2923c28cd95f8f491c4293f1882915b97fa6b2254b4ab43712138e85d0->leave($__internal_dbcffa2923c28cd95f8f491c4293f1882915b97fa6b2254b4ab43712138e85d0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6795db6538a0de9eb6f8b0f80a4e7abbd1f767097596258ea46a9497bb435342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6795db6538a0de9eb6f8b0f80a4e7abbd1f767097596258ea46a9497bb435342->enter($__internal_6795db6538a0de9eb6f8b0f80a4e7abbd1f767097596258ea46a9497bb435342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6795db6538a0de9eb6f8b0f80a4e7abbd1f767097596258ea46a9497bb435342->leave($__internal_6795db6538a0de9eb6f8b0f80a4e7abbd1f767097596258ea46a9497bb435342_prof);

    }

    // line 8
    public function block_jsHead($context, array $blocks = array())
    {
        $__internal_25c4b72b12bfa5203481fa9ade38d70a2aeff1c16f0e553497275b43261b7312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c4b72b12bfa5203481fa9ade38d70a2aeff1c16f0e553497275b43261b7312->enter($__internal_25c4b72b12bfa5203481fa9ade38d70a2aeff1c16f0e553497275b43261b7312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jsHead"));

        
        $__internal_25c4b72b12bfa5203481fa9ade38d70a2aeff1c16f0e553497275b43261b7312->leave($__internal_25c4b72b12bfa5203481fa9ade38d70a2aeff1c16f0e553497275b43261b7312_prof);

    }

    // line 11
    public function block_bodyParam($context, array $blocks = array())
    {
        $__internal_68e894bc77fb9306914e6333b4dbb1e99147bdcc5c7a2a5f3dbe3d1fee4b913d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e894bc77fb9306914e6333b4dbb1e99147bdcc5c7a2a5f3dbe3d1fee4b913d->enter($__internal_68e894bc77fb9306914e6333b4dbb1e99147bdcc5c7a2a5f3dbe3d1fee4b913d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyParam"));

        
        $__internal_68e894bc77fb9306914e6333b4dbb1e99147bdcc5c7a2a5f3dbe3d1fee4b913d->leave($__internal_68e894bc77fb9306914e6333b4dbb1e99147bdcc5c7a2a5f3dbe3d1fee4b913d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_034f52d44c81e0551371f8954bd00207c70e15ba805aa2e603c6a411ab17e955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034f52d44c81e0551371f8954bd00207c70e15ba805aa2e603c6a411ab17e955->enter($__internal_034f52d44c81e0551371f8954bd00207c70e15ba805aa2e603c6a411ab17e955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_034f52d44c81e0551371f8954bd00207c70e15ba805aa2e603c6a411ab17e955->leave($__internal_034f52d44c81e0551371f8954bd00207c70e15ba805aa2e603c6a411ab17e955_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc8d255baccc17ddca8e9ea5e17d3d62ccd10c88bb3a501acbf33b35b86dead4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8d255baccc17ddca8e9ea5e17d3d62ccd10c88bb3a501acbf33b35b86dead4->enter($__internal_bc8d255baccc17ddca8e9ea5e17d3d62ccd10c88bb3a501acbf33b35b86dead4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc8d255baccc17ddca8e9ea5e17d3d62ccd10c88bb3a501acbf33b35b86dead4->leave($__internal_bc8d255baccc17ddca8e9ea5e17d3d62ccd10c88bb3a501acbf33b35b86dead4_prof);

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
