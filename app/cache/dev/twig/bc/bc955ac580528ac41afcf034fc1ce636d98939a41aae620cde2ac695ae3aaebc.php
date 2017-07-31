<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_5df4b2d387814973957f8c3c195a5eac7f2f23b5ebf5c25aee3785067c614ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_bebfcb2a806d48d65b714fd2e004d0dd39954aaf5bd28634f220f55222b97712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebfcb2a806d48d65b714fd2e004d0dd39954aaf5bd28634f220f55222b97712->enter($__internal_bebfcb2a806d48d65b714fd2e004d0dd39954aaf5bd28634f220f55222b97712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebfcb2a806d48d65b714fd2e004d0dd39954aaf5bd28634f220f55222b97712->leave($__internal_bebfcb2a806d48d65b714fd2e004d0dd39954aaf5bd28634f220f55222b97712_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_81329e26e971a88b9fe21fc1cf785ead7106dc87d13a235382fed7f246ea73f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81329e26e971a88b9fe21fc1cf785ead7106dc87d13a235382fed7f246ea73f5->enter($__internal_81329e26e971a88b9fe21fc1cf785ead7106dc87d13a235382fed7f246ea73f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Recuperar.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        ";
        // line 14
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 17
        echo "
        <div class=\"hline\"></div>

    </div> <!-- /container -->

";
        
        $__internal_81329e26e971a88b9fe21fc1cf785ead7106dc87d13a235382fed7f246ea73f5->leave($__internal_81329e26e971a88b9fe21fc1cf785ead7106dc87d13a235382fed7f246ea73f5_prof);

    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b94df646de9be1a602f7dc5d8326d2f2e47d6e659cf34921ba55e59ad553532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b94df646de9be1a602f7dc5d8326d2f2e47d6e659cf34921ba55e59ad553532->enter($__internal_9b94df646de9be1a602f7dc5d8326d2f2e47d6e659cf34921ba55e59ad553532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 15
        echo "            ";
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 15)->display($context);
        // line 16
        echo "        ";
        
        $__internal_9b94df646de9be1a602f7dc5d8326d2f2e47d6e659cf34921ba55e59ad553532->leave($__internal_9b94df646de9be1a602f7dc5d8326d2f2e47d6e659cf34921ba55e59ad553532_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  73 => 15,  67 => 14,  55 => 17,  53 => 14,  41 => 4,  35 => 3,  11 => 1,);
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
                <h3>Recuperar.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        {% block fos_user_content %}
            {% include \"@FOSUser/Resetting/request_content.html.twig\" %}
        {% endblock fos_user_content %}

        <div class=\"hline\"></div>

    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Resetting/request.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
