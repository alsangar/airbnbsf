<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_fb5c14c6fa68cd7ed4001cff75c31f86ed750458dfac3017d3460a890d16ee82 extends Twig_Template
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
        $__internal_891165e08708bee68d17131121b7138fad6e7e9ac8bff50dd7dc9568295afd5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891165e08708bee68d17131121b7138fad6e7e9ac8bff50dd7dc9568295afd5a->enter($__internal_891165e08708bee68d17131121b7138fad6e7e9ac8bff50dd7dc9568295afd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891165e08708bee68d17131121b7138fad6e7e9ac8bff50dd7dc9568295afd5a->leave($__internal_891165e08708bee68d17131121b7138fad6e7e9ac8bff50dd7dc9568295afd5a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_db8e11e0fc01d39c72dd1350e98c627ea31c006f913f82173d4482fe96bcf412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8e11e0fc01d39c72dd1350e98c627ea31c006f913f82173d4482fe96bcf412->enter($__internal_db8e11e0fc01d39c72dd1350e98c627ea31c006f913f82173d4482fe96bcf412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_db8e11e0fc01d39c72dd1350e98c627ea31c006f913f82173d4482fe96bcf412->leave($__internal_db8e11e0fc01d39c72dd1350e98c627ea31c006f913f82173d4482fe96bcf412_prof);

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
