<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_fa1103b575616ceb2dab795f29a6d66ccc2fdbbe2351cd4b88817e341fe43c28 extends Twig_Template
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
        $__internal_68561a33d3a7f752cf75b277b36cad7fa5c77ef79dc87e6ba5e60fc946fbd398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68561a33d3a7f752cf75b277b36cad7fa5c77ef79dc87e6ba5e60fc946fbd398->enter($__internal_68561a33d3a7f752cf75b277b36cad7fa5c77ef79dc87e6ba5e60fc946fbd398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68561a33d3a7f752cf75b277b36cad7fa5c77ef79dc87e6ba5e60fc946fbd398->leave($__internal_68561a33d3a7f752cf75b277b36cad7fa5c77ef79dc87e6ba5e60fc946fbd398_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_083fd9da914d922b550591167348b4b83abb6b63c9dfff67da3a4c61464b39ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083fd9da914d922b550591167348b4b83abb6b63c9dfff67da3a4c61464b39ef->enter($__internal_083fd9da914d922b550591167348b4b83abb6b63c9dfff67da3a4c61464b39ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_083fd9da914d922b550591167348b4b83abb6b63c9dfff67da3a4c61464b39ef->leave($__internal_083fd9da914d922b550591167348b4b83abb6b63c9dfff67da3a4c61464b39ef_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78441f48680d1872013094bcce315e03189a98a55b1766a098bbe6d722fceb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78441f48680d1872013094bcce315e03189a98a55b1766a098bbe6d722fceb1f->enter($__internal_78441f48680d1872013094bcce315e03189a98a55b1766a098bbe6d722fceb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78441f48680d1872013094bcce315e03189a98a55b1766a098bbe6d722fceb1f->leave($__internal_78441f48680d1872013094bcce315e03189a98a55b1766a098bbe6d722fceb1f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c30bf36af856a829985eedd88c316e5dc3cde7775e3d3ecf3a9f018fcffd850d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30bf36af856a829985eedd88c316e5dc3cde7775e3d3ecf3a9f018fcffd850d->enter($__internal_c30bf36af856a829985eedd88c316e5dc3cde7775e3d3ecf3a9f018fcffd850d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c30bf36af856a829985eedd88c316e5dc3cde7775e3d3ecf3a9f018fcffd850d->leave($__internal_c30bf36af856a829985eedd88c316e5dc3cde7775e3d3ecf3a9f018fcffd850d_prof);

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
