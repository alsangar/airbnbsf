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
        $__internal_76f84080311a61305ab7a5cae0246537e318f30bf3ed33c541754b6c9a019a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f84080311a61305ab7a5cae0246537e318f30bf3ed33c541754b6c9a019a17->enter($__internal_76f84080311a61305ab7a5cae0246537e318f30bf3ed33c541754b6c9a019a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f84080311a61305ab7a5cae0246537e318f30bf3ed33c541754b6c9a019a17->leave($__internal_76f84080311a61305ab7a5cae0246537e318f30bf3ed33c541754b6c9a019a17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_675664c0e77bc921033e8eaa8c1c7812480de2d5b134d0cc8833357a3cbf4ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675664c0e77bc921033e8eaa8c1c7812480de2d5b134d0cc8833357a3cbf4ca3->enter($__internal_675664c0e77bc921033e8eaa8c1c7812480de2d5b134d0cc8833357a3cbf4ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_675664c0e77bc921033e8eaa8c1c7812480de2d5b134d0cc8833357a3cbf4ca3->leave($__internal_675664c0e77bc921033e8eaa8c1c7812480de2d5b134d0cc8833357a3cbf4ca3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a1298869967dada78dd8fb5f0533b14b4b11e5dda6322cd042a50d0a0eabfc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a1298869967dada78dd8fb5f0533b14b4b11e5dda6322cd042a50d0a0eabfc7->enter($__internal_2a1298869967dada78dd8fb5f0533b14b4b11e5dda6322cd042a50d0a0eabfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_2a1298869967dada78dd8fb5f0533b14b4b11e5dda6322cd042a50d0a0eabfc7->leave($__internal_2a1298869967dada78dd8fb5f0533b14b4b11e5dda6322cd042a50d0a0eabfc7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f5f0f46e81ab2522afa8e71c93fb933f7d6e2471fb1c70dd496f5f3cdb50c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5f0f46e81ab2522afa8e71c93fb933f7d6e2471fb1c70dd496f5f3cdb50c75->enter($__internal_1f5f0f46e81ab2522afa8e71c93fb933f7d6e2471fb1c70dd496f5f3cdb50c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1f5f0f46e81ab2522afa8e71c93fb933f7d6e2471fb1c70dd496f5f3cdb50c75->leave($__internal_1f5f0f46e81ab2522afa8e71c93fb933f7d6e2471fb1c70dd496f5f3cdb50c75_prof);

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
