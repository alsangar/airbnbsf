<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4281827690c5a11734d99d3c27c8c2311175da0aadd7942aee61c51df108a331 extends Twig_Template
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
        $__internal_9a5761acf55e56a7b60e47afe838d91a97a84e4e35ded4f4f7690fc5bc368ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a5761acf55e56a7b60e47afe838d91a97a84e4e35ded4f4f7690fc5bc368ae1->enter($__internal_9a5761acf55e56a7b60e47afe838d91a97a84e4e35ded4f4f7690fc5bc368ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a5761acf55e56a7b60e47afe838d91a97a84e4e35ded4f4f7690fc5bc368ae1->leave($__internal_9a5761acf55e56a7b60e47afe838d91a97a84e4e35ded4f4f7690fc5bc368ae1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd204d70997c2c0152109ec977ab098663a4c7cc43925b79315069353bcb212d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd204d70997c2c0152109ec977ab098663a4c7cc43925b79315069353bcb212d->enter($__internal_dd204d70997c2c0152109ec977ab098663a4c7cc43925b79315069353bcb212d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd204d70997c2c0152109ec977ab098663a4c7cc43925b79315069353bcb212d->leave($__internal_dd204d70997c2c0152109ec977ab098663a4c7cc43925b79315069353bcb212d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30c417204e1940006e209b4667c8f7dfbee5132784bdb3c63986512897982a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c417204e1940006e209b4667c8f7dfbee5132784bdb3c63986512897982a96->enter($__internal_30c417204e1940006e209b4667c8f7dfbee5132784bdb3c63986512897982a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30c417204e1940006e209b4667c8f7dfbee5132784bdb3c63986512897982a96->leave($__internal_30c417204e1940006e209b4667c8f7dfbee5132784bdb3c63986512897982a96_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d45e562a3e867ab7422df7dc7b94fa00e1d752356ee951739b8c81590f8f44a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45e562a3e867ab7422df7dc7b94fa00e1d752356ee951739b8c81590f8f44a2->enter($__internal_d45e562a3e867ab7422df7dc7b94fa00e1d752356ee951739b8c81590f8f44a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d45e562a3e867ab7422df7dc7b94fa00e1d752356ee951739b8c81590f8f44a2->leave($__internal_d45e562a3e867ab7422df7dc7b94fa00e1d752356ee951739b8c81590f8f44a2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/airbnbsf/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
