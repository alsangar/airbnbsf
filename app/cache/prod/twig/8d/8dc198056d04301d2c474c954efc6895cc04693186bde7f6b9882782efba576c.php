<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_541fe5329aba7a041d06a765eee9694b0a9d4cb158b835a86c4f85db13962686 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? null))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 16,  30 => 15,  27 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/list_currency.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_currency.html.twig");
    }
}
