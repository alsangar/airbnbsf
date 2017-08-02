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
        $__internal_b454c26af7a21bbd5ae28df4f4da32134bf8a4a5e3fcb4a3147567222548fe5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b454c26af7a21bbd5ae28df4f4da32134bf8a4a5e3fcb4a3147567222548fe5b->enter($__internal_b454c26af7a21bbd5ae28df4f4da32134bf8a4a5e3fcb4a3147567222548fe5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b454c26af7a21bbd5ae28df4f4da32134bf8a4a5e3fcb4a3147567222548fe5b->leave($__internal_b454c26af7a21bbd5ae28df4f4da32134bf8a4a5e3fcb4a3147567222548fe5b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36d97365f744c1779c0ffb1f6b321491bb944354818c7b41586c6d42ee093b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d97365f744c1779c0ffb1f6b321491bb944354818c7b41586c6d42ee093b5e->enter($__internal_36d97365f744c1779c0ffb1f6b321491bb944354818c7b41586c6d42ee093b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36d97365f744c1779c0ffb1f6b321491bb944354818c7b41586c6d42ee093b5e->leave($__internal_36d97365f744c1779c0ffb1f6b321491bb944354818c7b41586c6d42ee093b5e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_40ecb058ac3ebc768bf867b33e970db34b97205767628ebf322913ba1480209f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40ecb058ac3ebc768bf867b33e970db34b97205767628ebf322913ba1480209f->enter($__internal_40ecb058ac3ebc768bf867b33e970db34b97205767628ebf322913ba1480209f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_40ecb058ac3ebc768bf867b33e970db34b97205767628ebf322913ba1480209f->leave($__internal_40ecb058ac3ebc768bf867b33e970db34b97205767628ebf322913ba1480209f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50c712283ce3026ca48804e27447f09ad837b06a681bf1e196152ad9f0d7885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c50c712283ce3026ca48804e27447f09ad837b06a681bf1e196152ad9f0d7885->enter($__internal_c50c712283ce3026ca48804e27447f09ad837b06a681bf1e196152ad9f0d7885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c50c712283ce3026ca48804e27447f09ad837b06a681bf1e196152ad9f0d7885->leave($__internal_c50c712283ce3026ca48804e27447f09ad837b06a681bf1e196152ad9f0d7885_prof);

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
