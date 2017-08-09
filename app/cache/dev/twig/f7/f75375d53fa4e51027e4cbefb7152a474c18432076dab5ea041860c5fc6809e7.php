<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_0c5fc1f17045f80cfb8f91d3a5d1fcfbdf0895c74813dc9da100511ca3364c9d extends Twig_Template
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
        $__internal_9d1b303db99319fb1fc16974524524206e93a32526339a4d75c7a6c1cece3bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1b303db99319fb1fc16974524524206e93a32526339a4d75c7a6c1cece3bdc->enter($__internal_9d1b303db99319fb1fc16974524524206e93a32526339a4d75c7a6c1cece3bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1b303db99319fb1fc16974524524206e93a32526339a4d75c7a6c1cece3bdc->leave($__internal_9d1b303db99319fb1fc16974524524206e93a32526339a4d75c7a6c1cece3bdc_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_10201d305c829a9ad74c557e11b2d34a95eff7572938cee6f81d889628e10823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10201d305c829a9ad74c557e11b2d34a95eff7572938cee6f81d889628e10823->enter($__internal_10201d305c829a9ad74c557e11b2d34a95eff7572938cee6f81d889628e10823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div class=\"container mtb\">
        <h1>You are in!</h1>
    </div> <!-- /container -->

";
        
        $__internal_10201d305c829a9ad74c557e11b2d34a95eff7572938cee6f81d889628e10823->leave($__internal_10201d305c829a9ad74c557e11b2d34a95eff7572938cee6f81d889628e10823_prof);

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
