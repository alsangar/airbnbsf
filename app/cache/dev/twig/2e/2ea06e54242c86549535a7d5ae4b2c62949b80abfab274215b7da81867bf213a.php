<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_7536b1031a62b89fb56bcccb869201d296948c999764ffc20d5ee30bda089a0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_4cd7b2430d2ed146c61f8565227f38bfcab00c8031888e1a8444ea9c541bf92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cd7b2430d2ed146c61f8565227f38bfcab00c8031888e1a8444ea9c541bf92e->enter($__internal_4cd7b2430d2ed146c61f8565227f38bfcab00c8031888e1a8444ea9c541bf92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd7b2430d2ed146c61f8565227f38bfcab00c8031888e1a8444ea9c541bf92e->leave($__internal_4cd7b2430d2ed146c61f8565227f38bfcab00c8031888e1a8444ea9c541bf92e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7a841f2bf989ff467a6622c3e583639ec86ef10fbc105f04a73b7256258efe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a841f2bf989ff467a6622c3e583639ec86ef10fbc105f04a73b7256258efe5->enter($__internal_d7a841f2bf989ff467a6622c3e583639ec86ef10fbc105f04a73b7256258efe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_d7a841f2bf989ff467a6622c3e583639ec86ef10fbc105f04a73b7256258efe5->leave($__internal_d7a841f2bf989ff467a6622c3e583639ec86ef10fbc105f04a73b7256258efe5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
