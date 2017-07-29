<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6119c86b660cd42249ed18cd1b845566fa9a955bd5ed4ec7c4af2f1b4b54fe8e extends Twig_Template
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
        $__internal_cf5c9c5c938517ea259f49c6aebb8517d0e02d5475aef8b4a93a2dfb71aa7e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5c9c5c938517ea259f49c6aebb8517d0e02d5475aef8b4a93a2dfb71aa7e38->enter($__internal_cf5c9c5c938517ea259f49c6aebb8517d0e02d5475aef8b4a93a2dfb71aa7e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf5c9c5c938517ea259f49c6aebb8517d0e02d5475aef8b4a93a2dfb71aa7e38->leave($__internal_cf5c9c5c938517ea259f49c6aebb8517d0e02d5475aef8b4a93a2dfb71aa7e38_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b4141bb0145536d9520924fd8ba2e30bd0892cdb3e734a89cbdf622a116651b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4141bb0145536d9520924fd8ba2e30bd0892cdb3e734a89cbdf622a116651b->enter($__internal_3b4141bb0145536d9520924fd8ba2e30bd0892cdb3e734a89cbdf622a116651b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b4141bb0145536d9520924fd8ba2e30bd0892cdb3e734a89cbdf622a116651b->leave($__internal_3b4141bb0145536d9520924fd8ba2e30bd0892cdb3e734a89cbdf622a116651b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a85133b44f50cea78da3c80755517e305cd96dc52476209ef1e85e992092da1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a85133b44f50cea78da3c80755517e305cd96dc52476209ef1e85e992092da1f->enter($__internal_a85133b44f50cea78da3c80755517e305cd96dc52476209ef1e85e992092da1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a85133b44f50cea78da3c80755517e305cd96dc52476209ef1e85e992092da1f->leave($__internal_a85133b44f50cea78da3c80755517e305cd96dc52476209ef1e85e992092da1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_86fb524f1c02ead2221b88c882cd89430add958337d2461c638bb43c0f9776ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86fb524f1c02ead2221b88c882cd89430add958337d2461c638bb43c0f9776ef->enter($__internal_86fb524f1c02ead2221b88c882cd89430add958337d2461c638bb43c0f9776ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_86fb524f1c02ead2221b88c882cd89430add958337d2461c638bb43c0f9776ef->leave($__internal_86fb524f1c02ead2221b88c882cd89430add958337d2461c638bb43c0f9776ef_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
