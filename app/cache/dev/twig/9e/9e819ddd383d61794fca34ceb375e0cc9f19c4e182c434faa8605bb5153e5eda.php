<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_92460762fddc5579748f84c1c3a86e62e6806bd5ae4df628c7c73a920d69e50b extends Twig_Template
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
        $__internal_82aab97b21b1b7553d39f329503a705bf3a12b97a92e864e3d4b9a6ce5b74ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82aab97b21b1b7553d39f329503a705bf3a12b97a92e864e3d4b9a6ce5b74ea3->enter($__internal_82aab97b21b1b7553d39f329503a705bf3a12b97a92e864e3d4b9a6ce5b74ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82aab97b21b1b7553d39f329503a705bf3a12b97a92e864e3d4b9a6ce5b74ea3->leave($__internal_82aab97b21b1b7553d39f329503a705bf3a12b97a92e864e3d4b9a6ce5b74ea3_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_2e59296d2cf960d56810c07ff91532c9a9098444f0509ee03c9f7d264b96e2e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e59296d2cf960d56810c07ff91532c9a9098444f0509ee03c9f7d264b96e2e8->enter($__internal_2e59296d2cf960d56810c07ff91532c9a9098444f0509ee03c9f7d264b96e2e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_2e59296d2cf960d56810c07ff91532c9a9098444f0509ee03c9f7d264b96e2e8->leave($__internal_2e59296d2cf960d56810c07ff91532c9a9098444f0509ee03c9f7d264b96e2e8_prof);

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
