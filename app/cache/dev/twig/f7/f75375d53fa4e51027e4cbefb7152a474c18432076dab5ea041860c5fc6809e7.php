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
        $__internal_1db8df96b467ebaa06bfce1b94c83c5e28d1ec1348fd830ddac4fccc7b92c423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1db8df96b467ebaa06bfce1b94c83c5e28d1ec1348fd830ddac4fccc7b92c423->enter($__internal_1db8df96b467ebaa06bfce1b94c83c5e28d1ec1348fd830ddac4fccc7b92c423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1db8df96b467ebaa06bfce1b94c83c5e28d1ec1348fd830ddac4fccc7b92c423->leave($__internal_1db8df96b467ebaa06bfce1b94c83c5e28d1ec1348fd830ddac4fccc7b92c423_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_2793b652224c15b5d89387e7b9cfb452aadb5c684d7158856498df2c070c08d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2793b652224c15b5d89387e7b9cfb452aadb5c684d7158856498df2c070c08d1->enter($__internal_2793b652224c15b5d89387e7b9cfb452aadb5c684d7158856498df2c070c08d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div class=\"container mtb\">
        <h1>You are in!</h1>
    </div> <!-- /container -->

";
        
        $__internal_2793b652224c15b5d89387e7b9cfb452aadb5c684d7158856498df2c070c08d1->leave($__internal_2793b652224c15b5d89387e7b9cfb452aadb5c684d7158856498df2c070c08d1_prof);

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
