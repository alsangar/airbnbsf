<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fc61387580080cf0f43e0d68b8757442413f5d3ed075ca277acebb0bb55ef329 extends Twig_Template
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
        $__internal_e4fdeb7946d486248f8d5876bab5e6c2d5166369c88bdc277eb4a7161b0a180e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4fdeb7946d486248f8d5876bab5e6c2d5166369c88bdc277eb4a7161b0a180e->enter($__internal_e4fdeb7946d486248f8d5876bab5e6c2d5166369c88bdc277eb4a7161b0a180e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4fdeb7946d486248f8d5876bab5e6c2d5166369c88bdc277eb4a7161b0a180e->leave($__internal_e4fdeb7946d486248f8d5876bab5e6c2d5166369c88bdc277eb4a7161b0a180e_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_c6dcbebd248649749df6580837f5288303dfb8bc95e1ecfc8e7ee8e7db5ef81f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6dcbebd248649749df6580837f5288303dfb8bc95e1ecfc8e7ee8e7db5ef81f->enter($__internal_c6dcbebd248649749df6580837f5288303dfb8bc95e1ecfc8e7ee8e7db5ef81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div class=\"container mtb\">
        <h3 class=\"\">Please login</h3>
        <div class=\"hline\"></div>
        ";
        // line 6
        $this->loadTemplate("FOSUserBundle:Security:login_content.html.twig", "@FOSUser/Security/login.html.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
        
        $__internal_c6dcbebd248649749df6580837f5288303dfb8bc95e1ecfc8e7ee8e7db5ef81f->leave($__internal_c6dcbebd248649749df6580837f5288303dfb8bc95e1ecfc8e7ee8e7db5ef81f_prof);

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
        return array (  47 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
        <h3 class=\"\">Please login</h3>
        <div class=\"hline\"></div>
        {% include \"FOSUserBundle:Security:login_content.html.twig\" %}
        <div class=\"hline\"></div>
    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
