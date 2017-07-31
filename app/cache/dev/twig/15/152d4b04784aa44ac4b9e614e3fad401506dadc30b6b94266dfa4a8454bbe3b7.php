<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_e2118d2f8c65e1fe04440aee880ad3aec5105b4dadbe56a98d738dc9eceb54a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("app/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_8d521b091ccea2b951abe5ea5654f424d383fa70514d00ba3ed3345ed138eecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d521b091ccea2b951abe5ea5654f424d383fa70514d00ba3ed3345ed138eecb->enter($__internal_8d521b091ccea2b951abe5ea5654f424d383fa70514d00ba3ed3345ed138eecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d521b091ccea2b951abe5ea5654f424d383fa70514d00ba3ed3345ed138eecb->leave($__internal_8d521b091ccea2b951abe5ea5654f424d383fa70514d00ba3ed3345ed138eecb_prof);

    }

    // line 5
    public function block_pageContent($context, array $blocks = array())
    {
        $__internal_d8cf809440685b404a4f5c48fab7c3b1c9ae1b169d979e573fe36a12a0acce98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cf809440685b404a4f5c48fab7c3b1c9ae1b169d979e573fe36a12a0acce98->enter($__internal_d8cf809440685b404a4f5c48fab7c3b1c9ae1b169d979e573fe36a12a0acce98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageContent"));

        // line 6
        echo "    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Recuperación.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <div class=\"hline\"></div>
        ";
        // line 15
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 20
        echo "        <div class=\"hline\"></div>
    </div> <!-- /container -->

";
        
        $__internal_d8cf809440685b404a4f5c48fab7c3b1c9ae1b169d979e573fe36a12a0acce98->leave($__internal_d8cf809440685b404a4f5c48fab7c3b1c9ae1b169d979e573fe36a12a0acce98_prof);

    }

    // line 15
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_033e8486a48522ebe58a086c1a2795614829d7754a68bf52ffb82b9b67248669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033e8486a48522ebe58a086c1a2795614829d7754a68bf52ffb82b9b67248669->enter($__internal_033e8486a48522ebe58a086c1a2795614829d7754a68bf52ffb82b9b67248669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 16
        echo "            <p>
                ";
        // line 17
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
            </p>
        ";
        
        $__internal_033e8486a48522ebe58a086c1a2795614829d7754a68bf52ffb82b9b67248669->leave($__internal_033e8486a48522ebe58a086c1a2795614829d7754a68bf52ffb82b9b67248669_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  70 => 16,  64 => 15,  54 => 20,  52 => 15,  41 => 6,  35 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block pageContent%}
    <div id=\"blue\">
        <div class=\"container\">
            <div class=\"row\">
                <h3>Recuperación.</h3>
            </div><!-- /row -->
        </div> <!-- /container -->
    </div><!-- /blue -->
    <div class=\"container mtb\">
        <div class=\"hline\"></div>
        {% block fos_user_content %}
            <p>
                {{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
            </p>
        {% endblock %}
        <div class=\"hline\"></div>
    </div> <!-- /container -->

{% endblock %}", "@FOSUser/Resetting/check_email.html.twig", "C:\\xampp\\htdocs\\airbnbsf\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
