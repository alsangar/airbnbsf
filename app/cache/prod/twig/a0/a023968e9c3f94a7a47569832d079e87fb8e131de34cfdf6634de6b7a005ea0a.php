<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_6bade3f7cdb4ed2d75508990c25e5518adae51749550f68022324b576121b500 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? null), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "id", array(0 => ($context["object"] ?? null)), "method"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  27 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/CRUD/list__batch.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
