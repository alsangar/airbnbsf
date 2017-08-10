<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9c015a6f6140f9ac930ac4baeedc127b9576cbbdbbcb3c291c21968da9dcc2ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44786467b7762b4504495b8ee9bccd7631f0e0cbc859015904e261657a1654c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44786467b7762b4504495b8ee9bccd7631f0e0cbc859015904e261657a1654c0->enter($__internal_44786467b7762b4504495b8ee9bccd7631f0e0cbc859015904e261657a1654c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44786467b7762b4504495b8ee9bccd7631f0e0cbc859015904e261657a1654c0->leave($__internal_44786467b7762b4504495b8ee9bccd7631f0e0cbc859015904e261657a1654c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ab3bdd5af4886721e2eab0f01e5042ea08c08c7e335317a8ae068426d4a71e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab3bdd5af4886721e2eab0f01e5042ea08c08c7e335317a8ae068426d4a71e9->enter($__internal_3ab3bdd5af4886721e2eab0f01e5042ea08c08c7e335317a8ae068426d4a71e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3ab3bdd5af4886721e2eab0f01e5042ea08c08c7e335317a8ae068426d4a71e9->leave($__internal_3ab3bdd5af4886721e2eab0f01e5042ea08c08c7e335317a8ae068426d4a71e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_27f7ab840a11a957d9c1e9b9deb3f7d04839e9784ababf1034877918c7d7f18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f7ab840a11a957d9c1e9b9deb3f7d04839e9784ababf1034877918c7d7f18b->enter($__internal_27f7ab840a11a957d9c1e9b9deb3f7d04839e9784ababf1034877918c7d7f18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_27f7ab840a11a957d9c1e9b9deb3f7d04839e9784ababf1034877918c7d7f18b->leave($__internal_27f7ab840a11a957d9c1e9b9deb3f7d04839e9784ababf1034877918c7d7f18b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfd50a45bce5f51f62e29abf3d40422910865f7ef85e67def308b4ff71a40f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd50a45bce5f51f62e29abf3d40422910865f7ef85e67def308b4ff71a40f1b->enter($__internal_dfd50a45bce5f51f62e29abf3d40422910865f7ef85e67def308b4ff71a40f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_dfd50a45bce5f51f62e29abf3d40422910865f7ef85e67def308b4ff71a40f1b->leave($__internal_dfd50a45bce5f51f62e29abf3d40422910865f7ef85e67def308b4ff71a40f1b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
