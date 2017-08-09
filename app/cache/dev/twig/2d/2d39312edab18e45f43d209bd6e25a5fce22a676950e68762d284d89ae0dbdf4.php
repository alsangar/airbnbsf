<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3a15c6cb3e8602d8b56c551b318c81a94ef662129d9961a02bb0aa174370c56b extends Twig_Template
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
        $__internal_b18caaa070fff5fca2a606b5e083955cb5491b9f97348ecc21167277ea7c6688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18caaa070fff5fca2a606b5e083955cb5491b9f97348ecc21167277ea7c6688->enter($__internal_b18caaa070fff5fca2a606b5e083955cb5491b9f97348ecc21167277ea7c6688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b18caaa070fff5fca2a606b5e083955cb5491b9f97348ecc21167277ea7c6688->leave($__internal_b18caaa070fff5fca2a606b5e083955cb5491b9f97348ecc21167277ea7c6688_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4a59c41c6bcfa6b17297ef0e97890427744f4946e94c820b0c6c6e94521aa3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4a59c41c6bcfa6b17297ef0e97890427744f4946e94c820b0c6c6e94521aa3e->enter($__internal_a4a59c41c6bcfa6b17297ef0e97890427744f4946e94c820b0c6c6e94521aa3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a4a59c41c6bcfa6b17297ef0e97890427744f4946e94c820b0c6c6e94521aa3e->leave($__internal_a4a59c41c6bcfa6b17297ef0e97890427744f4946e94c820b0c6c6e94521aa3e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_75c38fd14843df4fdccdcdc9b1c83d4fdde571d9f11c302871700dfb4bd16dd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c38fd14843df4fdccdcdc9b1c83d4fdde571d9f11c302871700dfb4bd16dd4->enter($__internal_75c38fd14843df4fdccdcdc9b1c83d4fdde571d9f11c302871700dfb4bd16dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_75c38fd14843df4fdccdcdc9b1c83d4fdde571d9f11c302871700dfb4bd16dd4->leave($__internal_75c38fd14843df4fdccdcdc9b1c83d4fdde571d9f11c302871700dfb4bd16dd4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_858358cf3df5cc6a354815214a0c1fd531e3cd50654249f0cf498a486d923187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858358cf3df5cc6a354815214a0c1fd531e3cd50654249f0cf498a486d923187->enter($__internal_858358cf3df5cc6a354815214a0c1fd531e3cd50654249f0cf498a486d923187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_858358cf3df5cc6a354815214a0c1fd531e3cd50654249f0cf498a486d923187->leave($__internal_858358cf3df5cc6a354815214a0c1fd531e3cd50654249f0cf498a486d923187_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
