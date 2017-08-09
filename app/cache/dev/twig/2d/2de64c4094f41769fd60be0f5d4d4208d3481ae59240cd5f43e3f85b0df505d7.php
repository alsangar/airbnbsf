<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_733e22e4f5c36d3429cb0477246556e3c95e2b1510c170602e7c1c809b362276 extends Twig_Template
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
        $__internal_24b7be55e8ff69e4e64c5d8bf7a431bd0b4c9fba75ab811df22271a89c5e0f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24b7be55e8ff69e4e64c5d8bf7a431bd0b4c9fba75ab811df22271a89c5e0f2f->enter($__internal_24b7be55e8ff69e4e64c5d8bf7a431bd0b4c9fba75ab811df22271a89c5e0f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24b7be55e8ff69e4e64c5d8bf7a431bd0b4c9fba75ab811df22271a89c5e0f2f->leave($__internal_24b7be55e8ff69e4e64c5d8bf7a431bd0b4c9fba75ab811df22271a89c5e0f2f_prof);

    }

    // line 2
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_4c1433ad4bba74a7f7a148ad4c2dfb21cd26cfde06b0a6b08c6f189fd301bd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c1433ad4bba74a7f7a148ad4c2dfb21cd26cfde06b0a6b08c6f189fd301bd13->enter($__internal_4c1433ad4bba74a7f7a148ad4c2dfb21cd26cfde06b0a6b08c6f189fd301bd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

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
        
        $__internal_4c1433ad4bba74a7f7a148ad4c2dfb21cd26cfde06b0a6b08c6f189fd301bd13->leave($__internal_4c1433ad4bba74a7f7a148ad4c2dfb21cd26cfde06b0a6b08c6f189fd301bd13_prof);

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
