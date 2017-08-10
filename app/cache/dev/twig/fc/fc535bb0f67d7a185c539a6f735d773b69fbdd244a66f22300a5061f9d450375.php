<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_1ad105cfa3884128404dc4e34b4a76bdf2503948e7952db3417ad6d60db6a61c extends Twig_Template
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
        $__internal_6173adda39afcda4ff47052a97550fffdd45da90358d5b184fd49178fd3c39ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6173adda39afcda4ff47052a97550fffdd45da90358d5b184fd49178fd3c39ba->enter($__internal_6173adda39afcda4ff47052a97550fffdd45da90358d5b184fd49178fd3c39ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6173adda39afcda4ff47052a97550fffdd45da90358d5b184fd49178fd3c39ba->leave($__internal_6173adda39afcda4ff47052a97550fffdd45da90358d5b184fd49178fd3c39ba_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_278ea2dc5675dc7c55e31715ea24c9af4ed31031b6f5fca8ddb705f4936fa0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278ea2dc5675dc7c55e31715ea24c9af4ed31031b6f5fca8ddb705f4936fa0e7->enter($__internal_278ea2dc5675dc7c55e31715ea24c9af4ed31031b6f5fca8ddb705f4936fa0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Perfil.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        ";
        // line 12
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 15
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
        
        $__internal_278ea2dc5675dc7c55e31715ea24c9af4ed31031b6f5fca8ddb705f4936fa0e7->leave($__internal_278ea2dc5675dc7c55e31715ea24c9af4ed31031b6f5fca8ddb705f4936fa0e7_prof);

    }

    // line 12
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93c72b2ab6aaff12886ca47288eb88fe337c51903b6eda5e68b1d5fe406a115d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c72b2ab6aaff12886ca47288eb88fe337c51903b6eda5e68b1d5fe406a115d->enter($__internal_93c72b2ab6aaff12886ca47288eb88fe337c51903b6eda5e68b1d5fe406a115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 13
        echo "            ";
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 13)->display($context);
        // line 14
        echo "        ";
        
        $__internal_93c72b2ab6aaff12886ca47288eb88fe337c51903b6eda5e68b1d5fe406a115d->leave($__internal_93c72b2ab6aaff12886ca47288eb88fe337c51903b6eda5e68b1d5fe406a115d_prof);

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
        return array (  72 => 14,  69 => 13,  63 => 12,  53 => 15,  51 => 12,  41 => 4,  35 => 3,  11 => 1,);
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

{% endblock %}
", "@FOSUser/Profile/edit.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
