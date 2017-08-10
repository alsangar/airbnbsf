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
        $__internal_265029f79d591cbf511d57a4c85b8554f3ea670f1b55e57aafd73dd766e787d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265029f79d591cbf511d57a4c85b8554f3ea670f1b55e57aafd73dd766e787d4->enter($__internal_265029f79d591cbf511d57a4c85b8554f3ea670f1b55e57aafd73dd766e787d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_265029f79d591cbf511d57a4c85b8554f3ea670f1b55e57aafd73dd766e787d4->leave($__internal_265029f79d591cbf511d57a4c85b8554f3ea670f1b55e57aafd73dd766e787d4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec6606070ac722c6423693395e258ce7dc98adeeab8a9e27f5de48ba467d5a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6606070ac722c6423693395e258ce7dc98adeeab8a9e27f5de48ba467d5a42->enter($__internal_ec6606070ac722c6423693395e258ce7dc98adeeab8a9e27f5de48ba467d5a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec6606070ac722c6423693395e258ce7dc98adeeab8a9e27f5de48ba467d5a42->leave($__internal_ec6606070ac722c6423693395e258ce7dc98adeeab8a9e27f5de48ba467d5a42_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_91b87cbca40019c7b212ea9cf2cdd22ab1b64bfee3ec73b8490bbd733a0be77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b87cbca40019c7b212ea9cf2cdd22ab1b64bfee3ec73b8490bbd733a0be77c->enter($__internal_91b87cbca40019c7b212ea9cf2cdd22ab1b64bfee3ec73b8490bbd733a0be77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_91b87cbca40019c7b212ea9cf2cdd22ab1b64bfee3ec73b8490bbd733a0be77c->leave($__internal_91b87cbca40019c7b212ea9cf2cdd22ab1b64bfee3ec73b8490bbd733a0be77c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_581932d472f7ae7f0f54de075ddb863252117d8434b056970e64ae67e0f5f3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581932d472f7ae7f0f54de075ddb863252117d8434b056970e64ae67e0f5f3d0->enter($__internal_581932d472f7ae7f0f54de075ddb863252117d8434b056970e64ae67e0f5f3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_581932d472f7ae7f0f54de075ddb863252117d8434b056970e64ae67e0f5f3d0->leave($__internal_581932d472f7ae7f0f54de075ddb863252117d8434b056970e64ae67e0f5f3d0_prof);

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
