<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9af97f197cc3ec54ca8405d5615cfb85639c42153b6106ae485d31fa552c43ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31122e601ec34bc5b48dfecc01c609e6ef161edac5ea02c939cb09d48167c46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31122e601ec34bc5b48dfecc01c609e6ef161edac5ea02c939cb09d48167c46c->enter($__internal_31122e601ec34bc5b48dfecc01c609e6ef161edac5ea02c939cb09d48167c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31122e601ec34bc5b48dfecc01c609e6ef161edac5ea02c939cb09d48167c46c->leave($__internal_31122e601ec34bc5b48dfecc01c609e6ef161edac5ea02c939cb09d48167c46c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1ceaefd6260bc0e09b468e61d5120401e801d5eb69476830cee1ac5a10e5677a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceaefd6260bc0e09b468e61d5120401e801d5eb69476830cee1ac5a10e5677a->enter($__internal_1ceaefd6260bc0e09b468e61d5120401e801d5eb69476830cee1ac5a10e5677a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1ceaefd6260bc0e09b468e61d5120401e801d5eb69476830cee1ac5a10e5677a->leave($__internal_1ceaefd6260bc0e09b468e61d5120401e801d5eb69476830cee1ac5a10e5677a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbab7930905f90b26088669b9ba849e2e5f85ba072f3d9f61a00146bcc216b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbab7930905f90b26088669b9ba849e2e5f85ba072f3d9f61a00146bcc216b37->enter($__internal_bbab7930905f90b26088669b9ba849e2e5f85ba072f3d9f61a00146bcc216b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbab7930905f90b26088669b9ba849e2e5f85ba072f3d9f61a00146bcc216b37->leave($__internal_bbab7930905f90b26088669b9ba849e2e5f85ba072f3d9f61a00146bcc216b37_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a55381a0adf44b41a1eb29761728bf94f25e05f864007e10d91e35833ae12775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55381a0adf44b41a1eb29761728bf94f25e05f864007e10d91e35833ae12775->enter($__internal_a55381a0adf44b41a1eb29761728bf94f25e05f864007e10d91e35833ae12775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_a55381a0adf44b41a1eb29761728bf94f25e05f864007e10d91e35833ae12775->leave($__internal_a55381a0adf44b41a1eb29761728bf94f25e05f864007e10d91e35833ae12775_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
