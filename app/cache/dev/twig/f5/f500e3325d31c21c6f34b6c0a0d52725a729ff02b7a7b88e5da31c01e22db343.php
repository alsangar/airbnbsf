<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_038fbc8719fc73e88ca392356192135007d6ab9baf1eb5167471bc0b0c8f55ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd79b789c3f0d5ee5d50a243e1a3573a38a99ae0cfc0767ab5e0528852c3ad22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd79b789c3f0d5ee5d50a243e1a3573a38a99ae0cfc0767ab5e0528852c3ad22->enter($__internal_dd79b789c3f0d5ee5d50a243e1a3573a38a99ae0cfc0767ab5e0528852c3ad22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd79b789c3f0d5ee5d50a243e1a3573a38a99ae0cfc0767ab5e0528852c3ad22->leave($__internal_dd79b789c3f0d5ee5d50a243e1a3573a38a99ae0cfc0767ab5e0528852c3ad22_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_dde982b853327904e5dab9cf6fd93badb47d788ee94d8a5a404a635658386f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde982b853327904e5dab9cf6fd93badb47d788ee94d8a5a404a635658386f38->enter($__internal_dde982b853327904e5dab9cf6fd93badb47d788ee94d8a5a404a635658386f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div class=\"container mtb\">
        <h1>You are in!</h1>
    </div> <!-- /container -->

";
        
        $__internal_dde982b853327904e5dab9cf6fd93badb47d788ee94d8a5a404a635658386f38->leave($__internal_dde982b853327904e5dab9cf6fd93badb47d788ee94d8a5a404a635658386f38_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"app/layout.html.twig\"%}
{% block pageContent%}
    <div class=\"container mtb\">
        <h1>You are in!</h1>
    </div> <!-- /container -->

{% endblock %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
