<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_3ec795eca7257f570ba4534ea5168b0d710e573b1068a757169dd22a7fc6ebb2 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["revision"] ?? null), "timestamp", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\history_revision_timestamp.html.twig");
    }
}
