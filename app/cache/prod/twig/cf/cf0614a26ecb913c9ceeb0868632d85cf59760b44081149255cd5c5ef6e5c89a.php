<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_851328b54902a71b79fa4ff03ac98b7dba44804d8dbb5fbc5e5a60e36603ab8c extends Twig_Template
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
        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), $this->getAttribute(($context["field_options"] ?? null), "format", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_datetime.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}
