<?php

/* SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_28d64cb24804c2cd46e867af686daf5244802ea19a84e73f80149abd9e6bf32e extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? null), "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataAdminBundle:CRUD:edit_sonata_type_immutable_array.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
