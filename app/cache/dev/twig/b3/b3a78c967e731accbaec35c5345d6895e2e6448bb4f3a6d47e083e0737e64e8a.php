<?php

/* app\rooms\edit.html.twig */
class __TwigTemplate_2b317ee3fe8d175153253745fe247a2bfd3f16fcd4996bdddcba7760029701c1 extends Twig_Template
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
        $__internal_c72b5f39d52bc50631e1d1448f4bd51e0622e5db93bd5a6473f9801d3b5601f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c72b5f39d52bc50631e1d1448f4bd51e0622e5db93bd5a6473f9801d3b5601f2->enter($__internal_c72b5f39d52bc50631e1d1448f4bd51e0622e5db93bd5a6473f9801d3b5601f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app\\rooms\\edit.html.twig"));

        // line 1
        echo "Edit
<br> ";
        // line 2
        echo twig_escape_filter($this->env, ($context["room"] ?? $this->getContext($context, "room")), "html", null, true);
        
        $__internal_c72b5f39d52bc50631e1d1448f4bd51e0622e5db93bd5a6473f9801d3b5601f2->leave($__internal_c72b5f39d52bc50631e1d1448f4bd51e0622e5db93bd5a6473f9801d3b5601f2_prof);

    }

    public function getTemplateName()
    {
        return "app\\rooms\\edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Edit
<br> {{room}}", "app\\rooms\\edit.html.twig", "/var/www/html/airbnbsf/app/Resources/views/app/rooms/edit.html.twig");
    }
}
