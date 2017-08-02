<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_865a3ea02f1d4228953aa929b668f3db775280680a6cb0a0dc43f5d0cdbe8cf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72358c4c449e7f71b7f6efaa14cfda1e62a81f61ccfe5a53e84b16b9f5675cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72358c4c449e7f71b7f6efaa14cfda1e62a81f61ccfe5a53e84b16b9f5675cfc->enter($__internal_72358c4c449e7f71b7f6efaa14cfda1e62a81f61ccfe5a53e84b16b9f5675cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_72358c4c449e7f71b7f6efaa14cfda1e62a81f61ccfe5a53e84b16b9f5675cfc->leave($__internal_72358c4c449e7f71b7f6efaa14cfda1e62a81f61ccfe5a53e84b16b9f5675cfc_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetime.html.twig");
    }
}
