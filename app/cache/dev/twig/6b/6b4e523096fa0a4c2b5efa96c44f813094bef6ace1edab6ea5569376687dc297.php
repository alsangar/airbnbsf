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
        $__internal_042e707150c73693d0ce814c855d1d4405ae4ca963f7ecf188c99280e972fd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_042e707150c73693d0ce814c855d1d4405ae4ca963f7ecf188c99280e972fd59->enter($__internal_042e707150c73693d0ce814c855d1d4405ae4ca963f7ecf188c99280e972fd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042e707150c73693d0ce814c855d1d4405ae4ca963f7ecf188c99280e972fd59->leave($__internal_042e707150c73693d0ce814c855d1d4405ae4ca963f7ecf188c99280e972fd59_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4998cbb0540aec823b69c66afb559debd8719e4e0e5de02b9026492936a05415 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4998cbb0540aec823b69c66afb559debd8719e4e0e5de02b9026492936a05415->enter($__internal_4998cbb0540aec823b69c66afb559debd8719e4e0e5de02b9026492936a05415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4998cbb0540aec823b69c66afb559debd8719e4e0e5de02b9026492936a05415->leave($__internal_4998cbb0540aec823b69c66afb559debd8719e4e0e5de02b9026492936a05415_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1555673f4d1ced58ac0f415e96f43ddd77d5f3344d5c9fbf9d9f0d611f71b5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1555673f4d1ced58ac0f415e96f43ddd77d5f3344d5c9fbf9d9f0d611f71b5b->enter($__internal_a1555673f4d1ced58ac0f415e96f43ddd77d5f3344d5c9fbf9d9f0d611f71b5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a1555673f4d1ced58ac0f415e96f43ddd77d5f3344d5c9fbf9d9f0d611f71b5b->leave($__internal_a1555673f4d1ced58ac0f415e96f43ddd77d5f3344d5c9fbf9d9f0d611f71b5b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_26a2e88ab28201acb7097eadca2f3c9fc71ed3ee3e9fe5dd28fdd6f2bb69ab56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a2e88ab28201acb7097eadca2f3c9fc71ed3ee3e9fe5dd28fdd6f2bb69ab56->enter($__internal_26a2e88ab28201acb7097eadca2f3c9fc71ed3ee3e9fe5dd28fdd6f2bb69ab56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_26a2e88ab28201acb7097eadca2f3c9fc71ed3ee3e9fe5dd28fdd6f2bb69ab56->leave($__internal_26a2e88ab28201acb7097eadca2f3c9fc71ed3ee3e9fe5dd28fdd6f2bb69ab56_prof);

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
