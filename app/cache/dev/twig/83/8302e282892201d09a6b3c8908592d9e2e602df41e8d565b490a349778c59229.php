<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_961b665781a755ffaf1be1e9026ce97540454152b48b9703c3b0c222d0143e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d392eaf5da1f5ea5bdfc655451d397aba5316d20042f3de43aa5631148bb637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d392eaf5da1f5ea5bdfc655451d397aba5316d20042f3de43aa5631148bb637->enter($__internal_7d392eaf5da1f5ea5bdfc655451d397aba5316d20042f3de43aa5631148bb637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d392eaf5da1f5ea5bdfc655451d397aba5316d20042f3de43aa5631148bb637->leave($__internal_7d392eaf5da1f5ea5bdfc655451d397aba5316d20042f3de43aa5631148bb637_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_6647389985aa92a8c90f59aed4869c5ec4d44fbd98de326305e4f6a1c3ad3d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6647389985aa92a8c90f59aed4869c5ec4d44fbd98de326305e4f6a1c3ad3d9a->enter($__internal_6647389985aa92a8c90f59aed4869c5ec4d44fbd98de326305e4f6a1c3ad3d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div class=\"container mtb\">
        <h1>You are in!</h1>
    </div> <!-- /container -->

";
        
        $__internal_6647389985aa92a8c90f59aed4869c5ec4d44fbd98de326305e4f6a1c3ad3d9a->leave($__internal_6647389985aa92a8c90f59aed4869c5ec4d44fbd98de326305e4f6a1c3ad3d9a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"app/layout.html.twig\"%}
{% block pageContent%}
    <div class=\"container mtb\">
        <h1>You are in!</h1>
    </div> <!-- /container -->

{% endblock %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
