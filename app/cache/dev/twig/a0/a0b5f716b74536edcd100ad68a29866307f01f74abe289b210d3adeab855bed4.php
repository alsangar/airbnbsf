<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d7447361688f3caacb845c417fea1dec889aa6914b3a52ea240c3691d3c5c778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_85eb861964efad35d47936ac50950d16e3780c20ee17e02d58b6976f8ae8afdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85eb861964efad35d47936ac50950d16e3780c20ee17e02d58b6976f8ae8afdf->enter($__internal_85eb861964efad35d47936ac50950d16e3780c20ee17e02d58b6976f8ae8afdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85eb861964efad35d47936ac50950d16e3780c20ee17e02d58b6976f8ae8afdf->leave($__internal_85eb861964efad35d47936ac50950d16e3780c20ee17e02d58b6976f8ae8afdf_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_b0d957a843a3350bdca76fd99f30d391f855b6a83244a6fff589cd1067373fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d957a843a3350bdca76fd99f30d391f855b6a83244a6fff589cd1067373fab->enter($__internal_b0d957a843a3350bdca76fd99f30d391f855b6a83244a6fff589cd1067373fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Acceso.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">

        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        ";
        // line 14
        $this->loadTemplate("FOSUserBundle:Security:login_content.html.twig", "@FOSUser/Security/login.html.twig", 14)->display($context);
        // line 15
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
        
        $__internal_b0d957a843a3350bdca76fd99f30d391f855b6a83244a6fff589cd1067373fab->leave($__internal_b0d957a843a3350bdca76fd99f30d391f855b6a83244a6fff589cd1067373fab_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  53 => 14,  40 => 3,  34 => 2,  11 => 1,);
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
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Acceso.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">

        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        {% include \"FOSUserBundle:Security:login_content.html.twig\" %}
        <div class=\"hline\"></div>
    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
