<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_72fc57862645e38109a239174a8e87c48a15ce0603adf11a170135c29658be66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_551d50f46b51fae0fd009d2d98f2103b7c581551e246912de4b65a006c025470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551d50f46b51fae0fd009d2d98f2103b7c581551e246912de4b65a006c025470->enter($__internal_551d50f46b51fae0fd009d2d98f2103b7c581551e246912de4b65a006c025470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_551d50f46b51fae0fd009d2d98f2103b7c581551e246912de4b65a006c025470->leave($__internal_551d50f46b51fae0fd009d2d98f2103b7c581551e246912de4b65a006c025470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fed22f531fc503a12684948e507ace1429d371de161326d88bf4f8c4b9924a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed22f531fc503a12684948e507ace1429d371de161326d88bf4f8c4b9924a61->enter($__internal_fed22f531fc503a12684948e507ace1429d371de161326d88bf4f8c4b9924a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_fed22f531fc503a12684948e507ace1429d371de161326d88bf4f8c4b9924a61->leave($__internal_fed22f531fc503a12684948e507ace1429d371de161326d88bf4f8c4b9924a61_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
