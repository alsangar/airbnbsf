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
        $__internal_bcac8bd33cc2d90fcd1c53bc0b32b4bd2c32465efe1855b4163a580de5d4cfaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcac8bd33cc2d90fcd1c53bc0b32b4bd2c32465efe1855b4163a580de5d4cfaf->enter($__internal_bcac8bd33cc2d90fcd1c53bc0b32b4bd2c32465efe1855b4163a580de5d4cfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcac8bd33cc2d90fcd1c53bc0b32b4bd2c32465efe1855b4163a580de5d4cfaf->leave($__internal_bcac8bd33cc2d90fcd1c53bc0b32b4bd2c32465efe1855b4163a580de5d4cfaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_044033864d0c663a6a8bff8687511f106e0d1e13b0d03bffe00c55df54e39082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_044033864d0c663a6a8bff8687511f106e0d1e13b0d03bffe00c55df54e39082->enter($__internal_044033864d0c663a6a8bff8687511f106e0d1e13b0d03bffe00c55df54e39082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_044033864d0c663a6a8bff8687511f106e0d1e13b0d03bffe00c55df54e39082->leave($__internal_044033864d0c663a6a8bff8687511f106e0d1e13b0d03bffe00c55df54e39082_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_03eea753454735568d26f61a14d410807fac18734770cdbd5040e9885fc25167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03eea753454735568d26f61a14d410807fac18734770cdbd5040e9885fc25167->enter($__internal_03eea753454735568d26f61a14d410807fac18734770cdbd5040e9885fc25167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_03eea753454735568d26f61a14d410807fac18734770cdbd5040e9885fc25167->leave($__internal_03eea753454735568d26f61a14d410807fac18734770cdbd5040e9885fc25167_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6aefdb3ae4a6e92af7f8cab3f2774b244181e05c1234aaaea297d58d34d8f9fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aefdb3ae4a6e92af7f8cab3f2774b244181e05c1234aaaea297d58d34d8f9fc->enter($__internal_6aefdb3ae4a6e92af7f8cab3f2774b244181e05c1234aaaea297d58d34d8f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6aefdb3ae4a6e92af7f8cab3f2774b244181e05c1234aaaea297d58d34d8f9fc->leave($__internal_6aefdb3ae4a6e92af7f8cab3f2774b244181e05c1234aaaea297d58d34d8f9fc_prof);

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
