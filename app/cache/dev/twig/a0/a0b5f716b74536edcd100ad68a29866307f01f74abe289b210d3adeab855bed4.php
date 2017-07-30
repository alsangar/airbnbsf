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
        $__internal_cdf8d806c6ad88a4b4f351286dbf02e06e0d1d5bdccb2912be52a0583cc75e72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdf8d806c6ad88a4b4f351286dbf02e06e0d1d5bdccb2912be52a0583cc75e72->enter($__internal_cdf8d806c6ad88a4b4f351286dbf02e06e0d1d5bdccb2912be52a0583cc75e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf8d806c6ad88a4b4f351286dbf02e06e0d1d5bdccb2912be52a0583cc75e72->leave($__internal_cdf8d806c6ad88a4b4f351286dbf02e06e0d1d5bdccb2912be52a0583cc75e72_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_4bd1fbbe3426302670d98bf0fcd1b8cdd51a391e82e51c92bc9c95165f49e770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd1fbbe3426302670d98bf0fcd1b8cdd51a391e82e51c92bc9c95165f49e770->enter($__internal_4bd1fbbe3426302670d98bf0fcd1b8cdd51a391e82e51c92bc9c95165f49e770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div class=\"container mtb\">
        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        ";
        // line 6
        $this->loadTemplate("FOSUserBundle:Security:login_content.html.twig", "@FOSUser/Security/login.html.twig", 6)->display($context);
        // line 7
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
        
        $__internal_4bd1fbbe3426302670d98bf0fcd1b8cdd51a391e82e51c92bc9c95165f49e770->leave($__internal_4bd1fbbe3426302670d98bf0fcd1b8cdd51a391e82e51c92bc9c95165f49e770_prof);

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
        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        {% include \"FOSUserBundle:Security:login_content.html.twig\" %}
        <div class=\"hline\"></div>
    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Security/login.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
