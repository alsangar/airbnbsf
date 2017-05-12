<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_45469312f185de679180ad5f3f822906615f430524ccea0284de8ad8afa8009e extends Twig_Template
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
        $__internal_5221eaaecd4ae4738945e4a4d771484b8125a4e93522a28836e567b2bf738115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5221eaaecd4ae4738945e4a4d771484b8125a4e93522a28836e567b2bf738115->enter($__internal_5221eaaecd4ae4738945e4a4d771484b8125a4e93522a28836e567b2bf738115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5221eaaecd4ae4738945e4a4d771484b8125a4e93522a28836e567b2bf738115->leave($__internal_5221eaaecd4ae4738945e4a4d771484b8125a4e93522a28836e567b2bf738115_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88c953e4169a9a00642979a751b53a50a5a0613c415a1d5bbb3748d7a1639476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c953e4169a9a00642979a751b53a50a5a0613c415a1d5bbb3748d7a1639476->enter($__internal_88c953e4169a9a00642979a751b53a50a5a0613c415a1d5bbb3748d7a1639476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_88c953e4169a9a00642979a751b53a50a5a0613c415a1d5bbb3748d7a1639476->leave($__internal_88c953e4169a9a00642979a751b53a50a5a0613c415a1d5bbb3748d7a1639476_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3997aa490c28d50b2da14e8ece735922fab5611ce082f318ffbd838da82ac09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3997aa490c28d50b2da14e8ece735922fab5611ce082f318ffbd838da82ac09->enter($__internal_f3997aa490c28d50b2da14e8ece735922fab5611ce082f318ffbd838da82ac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f3997aa490c28d50b2da14e8ece735922fab5611ce082f318ffbd838da82ac09->leave($__internal_f3997aa490c28d50b2da14e8ece735922fab5611ce082f318ffbd838da82ac09_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_41adae6a07ba84212ee1febadec8d2a876ea1b1396ff64dc94736a4bd4f4d859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41adae6a07ba84212ee1febadec8d2a876ea1b1396ff64dc94736a4bd4f4d859->enter($__internal_41adae6a07ba84212ee1febadec8d2a876ea1b1396ff64dc94736a4bd4f4d859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_41adae6a07ba84212ee1febadec8d2a876ea1b1396ff64dc94736a4bd4f4d859->leave($__internal_41adae6a07ba84212ee1febadec8d2a876ea1b1396ff64dc94736a4bd4f4d859_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/airbnbsf/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
