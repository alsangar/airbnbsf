<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_46318b1f90d0ae99d9001596fb67dd3a113f0bd6718bd7594d2759b9c2034796 extends Twig_Template
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
        $__internal_0dddde01083c336fe58d1f3e767175486a68c8d7ddfa06e4066a2b41c27892fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dddde01083c336fe58d1f3e767175486a68c8d7ddfa06e4066a2b41c27892fc->enter($__internal_0dddde01083c336fe58d1f3e767175486a68c8d7ddfa06e4066a2b41c27892fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dddde01083c336fe58d1f3e767175486a68c8d7ddfa06e4066a2b41c27892fc->leave($__internal_0dddde01083c336fe58d1f3e767175486a68c8d7ddfa06e4066a2b41c27892fc_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_365d656f2c1631f80c77f2b14653fb2426548c7b7f9eaa71abeb3ee549914c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365d656f2c1631f80c77f2b14653fb2426548c7b7f9eaa71abeb3ee549914c9c->enter($__internal_365d656f2c1631f80c77f2b14653fb2426548c7b7f9eaa71abeb3ee549914c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_365d656f2c1631f80c77f2b14653fb2426548c7b7f9eaa71abeb3ee549914c9c->leave($__internal_365d656f2c1631f80c77f2b14653fb2426548c7b7f9eaa71abeb3ee549914c9c_prof);

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
