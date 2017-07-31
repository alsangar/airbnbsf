<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d666fd8e89e8d8bbc0da17fa9fa419e5262bc3f986519728830602b74370d6ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "app/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee94df06c8b538ebe2bf4806acc180f109a8c2626e30263d3b6dee49ef552248 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee94df06c8b538ebe2bf4806acc180f109a8c2626e30263d3b6dee49ef552248->enter($__internal_ee94df06c8b538ebe2bf4806acc180f109a8c2626e30263d3b6dee49ef552248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee94df06c8b538ebe2bf4806acc180f109a8c2626e30263d3b6dee49ef552248->leave($__internal_ee94df06c8b538ebe2bf4806acc180f109a8c2626e30263d3b6dee49ef552248_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_61def47e4729d628852e2515a1a5f4c06441a346add9b5a7f590374777770a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61def47e4729d628852e2515a1a5f4c06441a346add9b5a7f590374777770a70->enter($__internal_61def47e4729d628852e2515a1a5f4c06441a346add9b5a7f590374777770a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Perfil.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
        
        $__internal_61def47e4729d628852e2515a1a5f4c06441a346add9b5a7f590374777770a70->leave($__internal_61def47e4729d628852e2515a1a5f4c06441a346add9b5a7f590374777770a70_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f96920b265083eb29f20b4f3bcc0203474e337fc55d4643bd994875212fa31c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f96920b265083eb29f20b4f3bcc0203474e337fc55d4643bd994875212fa31c->enter($__internal_1f96920b265083eb29f20b4f3bcc0203474e337fc55d4643bd994875212fa31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "            ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        
        $__internal_1f96920b265083eb29f20b4f3bcc0203474e337fc55d4643bd994875212fa31c->leave($__internal_1f96920b265083eb29f20b4f3bcc0203474e337fc55d4643bd994875212fa31c_prof);

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
        return array (  72 => 13,  69 => 12,  63 => 11,  53 => 14,  51 => 11,  41 => 3,  35 => 2,  11 => 1,);
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
                <h3>Perfil.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        {% block fos_user_content %}
            {% include \"@FOSUser/Profile/show_content.html.twig\" %}
        {% endblock fos_user_content %}
        <div class=\"hline\"></div>
    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Profile/show.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
