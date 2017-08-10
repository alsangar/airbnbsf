<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_5b81f51431178d7de01c735c018fc47b20e0f190d309df7e4880cb2003aa6a22 extends Twig_Template
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
        $__internal_fd5dc089922dc146e49285466da3de6b872715290e4fc5d6da278fc4dc86395a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5dc089922dc146e49285466da3de6b872715290e4fc5d6da278fc4dc86395a->enter($__internal_fd5dc089922dc146e49285466da3de6b872715290e4fc5d6da278fc4dc86395a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd5dc089922dc146e49285466da3de6b872715290e4fc5d6da278fc4dc86395a->leave($__internal_fd5dc089922dc146e49285466da3de6b872715290e4fc5d6da278fc4dc86395a_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_8609c2930fe8edcbe5a73b9137c113d25221fe33edbde989fbe9eedd6570c252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8609c2930fe8edcbe5a73b9137c113d25221fe33edbde989fbe9eedd6570c252->enter($__internal_8609c2930fe8edcbe5a73b9137c113d25221fe33edbde989fbe9eedd6570c252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_8609c2930fe8edcbe5a73b9137c113d25221fe33edbde989fbe9eedd6570c252->leave($__internal_8609c2930fe8edcbe5a73b9137c113d25221fe33edbde989fbe9eedd6570c252_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_532173da9b24c70bdcab7c440f2f959c8e00b8a9919b009433deb4b924757b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532173da9b24c70bdcab7c440f2f959c8e00b8a9919b009433deb4b924757b2c->enter($__internal_532173da9b24c70bdcab7c440f2f959c8e00b8a9919b009433deb4b924757b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "            ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        
        $__internal_532173da9b24c70bdcab7c440f2f959c8e00b8a9919b009433deb4b924757b2c->leave($__internal_532173da9b24c70bdcab7c440f2f959c8e00b8a9919b009433deb4b924757b2c_prof);

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
        return array (  71 => 13,  68 => 12,  62 => 11,  53 => 14,  51 => 11,  41 => 3,  35 => 2,  11 => 1,);
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
