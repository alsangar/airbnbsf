<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_063dd5bafde0dcbe91dbd722fe3e95d41f67e55b5feeb663b7538a5018cf800f extends Twig_Template
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
        $__internal_5eb1fa44785978a4973e6dac7d6c772539c7c2f486fbe829dfee90d0ed7dd084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eb1fa44785978a4973e6dac7d6c772539c7c2f486fbe829dfee90d0ed7dd084->enter($__internal_5eb1fa44785978a4973e6dac7d6c772539c7c2f486fbe829dfee90d0ed7dd084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb1fa44785978a4973e6dac7d6c772539c7c2f486fbe829dfee90d0ed7dd084->leave($__internal_5eb1fa44785978a4973e6dac7d6c772539c7c2f486fbe829dfee90d0ed7dd084_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f21ebf3e36f0e91efd51ae60df6e4ff40d7c9200be3738ac069b5f4552d2cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f21ebf3e36f0e91efd51ae60df6e4ff40d7c9200be3738ac069b5f4552d2cfb->enter($__internal_2f21ebf3e36f0e91efd51ae60df6e4ff40d7c9200be3738ac069b5f4552d2cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f21ebf3e36f0e91efd51ae60df6e4ff40d7c9200be3738ac069b5f4552d2cfb->leave($__internal_2f21ebf3e36f0e91efd51ae60df6e4ff40d7c9200be3738ac069b5f4552d2cfb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_89ad4e88d8c9107077d721d833adde70fa3cac9e27179a1cd0ecdd1dccfc22be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ad4e88d8c9107077d721d833adde70fa3cac9e27179a1cd0ecdd1dccfc22be->enter($__internal_89ad4e88d8c9107077d721d833adde70fa3cac9e27179a1cd0ecdd1dccfc22be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_89ad4e88d8c9107077d721d833adde70fa3cac9e27179a1cd0ecdd1dccfc22be->leave($__internal_89ad4e88d8c9107077d721d833adde70fa3cac9e27179a1cd0ecdd1dccfc22be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_92f9e9e5025d381395136dc2f1da31acfc95664cfd6718b0b77990f5d5dd2d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f9e9e5025d381395136dc2f1da31acfc95664cfd6718b0b77990f5d5dd2d04->enter($__internal_92f9e9e5025d381395136dc2f1da31acfc95664cfd6718b0b77990f5d5dd2d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_92f9e9e5025d381395136dc2f1da31acfc95664cfd6718b0b77990f5d5dd2d04->leave($__internal_92f9e9e5025d381395136dc2f1da31acfc95664cfd6718b0b77990f5d5dd2d04_prof);

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
