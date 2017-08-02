<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_4d3c4b7477aa5cfce048b1ad946db5c2309ba25957c49bb5ff0d870c4e239449 extends Twig_Template
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
        $__internal_69d883e7bc4c331c81eed6359f69b5525ab7dc03d706440a71058c385ea48059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69d883e7bc4c331c81eed6359f69b5525ab7dc03d706440a71058c385ea48059->enter($__internal_69d883e7bc4c331c81eed6359f69b5525ab7dc03d706440a71058c385ea48059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69d883e7bc4c331c81eed6359f69b5525ab7dc03d706440a71058c385ea48059->leave($__internal_69d883e7bc4c331c81eed6359f69b5525ab7dc03d706440a71058c385ea48059_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_826d818fe4e473555e06a453818af23e77ae01e0cfb93bb8c2e362c878697e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826d818fe4e473555e06a453818af23e77ae01e0cfb93bb8c2e362c878697e26->enter($__internal_826d818fe4e473555e06a453818af23e77ae01e0cfb93bb8c2e362c878697e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_826d818fe4e473555e06a453818af23e77ae01e0cfb93bb8c2e362c878697e26->leave($__internal_826d818fe4e473555e06a453818af23e77ae01e0cfb93bb8c2e362c878697e26_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71c0fdc3971052b0beebe6d3b7a8072f28d518988a0b09fed7290ad9190ebe2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71c0fdc3971052b0beebe6d3b7a8072f28d518988a0b09fed7290ad9190ebe2b->enter($__internal_71c0fdc3971052b0beebe6d3b7a8072f28d518988a0b09fed7290ad9190ebe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "            ";
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 12)->display($context);
        // line 13
        echo "        ";
        
        $__internal_71c0fdc3971052b0beebe6d3b7a8072f28d518988a0b09fed7290ad9190ebe2b->leave($__internal_71c0fdc3971052b0beebe6d3b7a8072f28d518988a0b09fed7290ad9190ebe2b_prof);

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
