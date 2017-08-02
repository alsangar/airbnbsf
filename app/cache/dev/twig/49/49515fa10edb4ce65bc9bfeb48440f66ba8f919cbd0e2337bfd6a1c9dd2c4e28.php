<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e6da6cba50c5107de06220a08de24c0a9df4837e0f128720138a995f051af5d5 extends Twig_Template
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
        $__internal_6bf13f655d99fba0a9d0f05b4ef66edefd915814d20229a03499aeec5371d8ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf13f655d99fba0a9d0f05b4ef66edefd915814d20229a03499aeec5371d8ec->enter($__internal_6bf13f655d99fba0a9d0f05b4ef66edefd915814d20229a03499aeec5371d8ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bf13f655d99fba0a9d0f05b4ef66edefd915814d20229a03499aeec5371d8ec->leave($__internal_6bf13f655d99fba0a9d0f05b4ef66edefd915814d20229a03499aeec5371d8ec_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_b4563f2e0882234f84a03986b295651005a95768966762db37e619682e8e3481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4563f2e0882234f84a03986b295651005a95768966762db37e619682e8e3481->enter($__internal_b4563f2e0882234f84a03986b295651005a95768966762db37e619682e8e3481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_b4563f2e0882234f84a03986b295651005a95768966762db37e619682e8e3481->leave($__internal_b4563f2e0882234f84a03986b295651005a95768966762db37e619682e8e3481_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10216b1996dab764e8c12f7fc754f5593dad4abcfd18d622de9f0e52bd99816f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10216b1996dab764e8c12f7fc754f5593dad4abcfd18d622de9f0e52bd99816f->enter($__internal_10216b1996dab764e8c12f7fc754f5593dad4abcfd18d622de9f0e52bd99816f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "            ";
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        
        $__internal_10216b1996dab764e8c12f7fc754f5593dad4abcfd18d622de9f0e52bd99816f->leave($__internal_10216b1996dab764e8c12f7fc754f5593dad4abcfd18d622de9f0e52bd99816f_prof);

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
