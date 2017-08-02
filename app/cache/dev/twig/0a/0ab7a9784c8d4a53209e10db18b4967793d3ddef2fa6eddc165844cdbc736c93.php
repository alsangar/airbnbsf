<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_944ea320fd515e3b7b2011aa1b0395a5bf8d4b1fef5c680e6040e811d42678df extends Twig_Template
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
        $__internal_45749930c76b3e35b77c562dbc1fbd19049d6cebe719488036f5d1fa1602c54b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45749930c76b3e35b77c562dbc1fbd19049d6cebe719488036f5d1fa1602c54b->enter($__internal_45749930c76b3e35b77c562dbc1fbd19049d6cebe719488036f5d1fa1602c54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_45749930c76b3e35b77c562dbc1fbd19049d6cebe719488036f5d1fa1602c54b->leave($__internal_45749930c76b3e35b77c562dbc1fbd19049d6cebe719488036f5d1fa1602c54b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_id.html.twig");
    }
}
