<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_374a156268c345134782cf44553196c11c0d70a2f707137caae7c15b9a0697bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_158f8e629a91f0b56e834f5c47f468f19dfd7b4207baa40a9832bc5d876dea81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158f8e629a91f0b56e834f5c47f468f19dfd7b4207baa40a9832bc5d876dea81->enter($__internal_158f8e629a91f0b56e834f5c47f468f19dfd7b4207baa40a9832bc5d876dea81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158f8e629a91f0b56e834f5c47f468f19dfd7b4207baa40a9832bc5d876dea81->leave($__internal_158f8e629a91f0b56e834f5c47f468f19dfd7b4207baa40a9832bc5d876dea81_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_3edd58c613b8d076be50f04ea33a5c76d04def61cbfa1e6e4ef4dd8ea10ace26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edd58c613b8d076be50f04ea33a5c76d04def61cbfa1e6e4ef4dd8ea10ace26->enter($__internal_3edd58c613b8d076be50f04ea33a5c76d04def61cbfa1e6e4ef4dd8ea10ace26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 3
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Registro.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        ";
        // line 13
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 13)->display($context);
        // line 14
        echo "        <div class=\"hline\"></div>
        <p>Pulsando el botón \"Crear cuenta\" asumimos que estás de acuerdo con nuestros <a href=\"#\">términos y condiciones</a>.</p>

    </div> <!-- /container -->

";
        
        $__internal_3edd58c613b8d076be50f04ea33a5c76d04def61cbfa1e6e4ef4dd8ea10ace26->leave($__internal_3edd58c613b8d076be50f04ea33a5c76d04def61cbfa1e6e4ef4dd8ea10ace26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
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
                <h3>Registro.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <h3 class=\"\">Por favor, introduce tus datos</h3>
        <div class=\"hline\"></div>
        {% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
        <div class=\"hline\"></div>
        <p>Pulsando el botón \"Crear cuenta\" asumimos que estás de acuerdo con nuestros <a href=\"#\">términos y condiciones</a>.</p>

    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Registration/register.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
