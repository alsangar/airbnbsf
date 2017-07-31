<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_85d2516a44d43ea890bb86c80f7d8df0f820d050478beaed3d2e17c1c1691989 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_ccb9a65106a848b37890b6987cf6402aa2167ea4200d9be914d15c8f3f244e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb9a65106a848b37890b6987cf6402aa2167ea4200d9be914d15c8f3f244e42->enter($__internal_ccb9a65106a848b37890b6987cf6402aa2167ea4200d9be914d15c8f3f244e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccb9a65106a848b37890b6987cf6402aa2167ea4200d9be914d15c8f3f244e42->leave($__internal_ccb9a65106a848b37890b6987cf6402aa2167ea4200d9be914d15c8f3f244e42_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_94c32750999d646f1f854b579f70743b767a69a063e6fb5ae4802133a9959eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94c32750999d646f1f854b579f70743b767a69a063e6fb5ae4802133a9959eeb->enter($__internal_94c32750999d646f1f854b579f70743b767a69a063e6fb5ae4802133a9959eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_94c32750999d646f1f854b579f70743b767a69a063e6fb5ae4802133a9959eeb->leave($__internal_94c32750999d646f1f854b579f70743b767a69a063e6fb5ae4802133a9959eeb_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b827f6fbeafa911c3efd814e2801651746c4ab6f36febfad362c006e1baa145a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b827f6fbeafa911c3efd814e2801651746c4ab6f36febfad362c006e1baa145a->enter($__internal_b827f6fbeafa911c3efd814e2801651746c4ab6f36febfad362c006e1baa145a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "            ";
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        
        $__internal_b827f6fbeafa911c3efd814e2801651746c4ab6f36febfad362c006e1baa145a->leave($__internal_b827f6fbeafa911c3efd814e2801651746c4ab6f36febfad362c006e1baa145a_prof);

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
            {% include \"@FOSUser/Profile/edit_content.html.twig\" %}
        {% endblock fos_user_content %}
        <div class=\"hline\"></div>
    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
