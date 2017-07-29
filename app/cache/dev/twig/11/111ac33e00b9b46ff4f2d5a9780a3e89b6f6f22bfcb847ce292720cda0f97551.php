<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_c13b56464d8f55e29a1157ffc253b8b2cf451d8eee2164a167edd28eea75edb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8d91124b9dadcdda39ae3e66d8f237c2a3ec3071fe8e45cfba1731c3ef574e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d91124b9dadcdda39ae3e66d8f237c2a3ec3071fe8e45cfba1731c3ef574e0->enter($__internal_f8d91124b9dadcdda39ae3e66d8f237c2a3ec3071fe8e45cfba1731c3ef574e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8d91124b9dadcdda39ae3e66d8f237c2a3ec3071fe8e45cfba1731c3ef574e0->leave($__internal_f8d91124b9dadcdda39ae3e66d8f237c2a3ec3071fe8e45cfba1731c3ef574e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0c25afb3539a9af14519ff2cd17d008358f2b3a6fe5b559655dd76808a2179a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c25afb3539a9af14519ff2cd17d008358f2b3a6fe5b559655dd76808a2179a7->enter($__internal_0c25afb3539a9af14519ff2cd17d008358f2b3a6fe5b559655dd76808a2179a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0c25afb3539a9af14519ff2cd17d008358f2b3a6fe5b559655dd76808a2179a7->leave($__internal_0c25afb3539a9af14519ff2cd17d008358f2b3a6fe5b559655dd76808a2179a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
