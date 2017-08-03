<?php

/* SonataClassificationBundle:CategoryAdmin:list.html.twig */
class __TwigTemplate_117e213fd99d9afcb1ab615956a6d5ac149e0a8fc0a61f3032aa3364b6b231fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataClassificationBundle:CategoryAdmin:list.html.twig", 12);
        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->loadTemplate("SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig", "SonataClassificationBundle:CategoryAdmin:list.html.twig", 15)->display(array("mode" => "list", "action" =>         // line 17
($context["action"] ?? null), "admin" =>         // line 18
($context["admin"] ?? null)));
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 18,  33 => 17,  31 => 15,  28 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SonataClassificationBundle:CategoryAdmin:list.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\classification-bundle/Resources/views/CategoryAdmin/list.html.twig");
    }
}
